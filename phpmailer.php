<?php
function apg_formSendEmail($data)
{
    if (
        isset($_POST['email']) && is_string($_POST['email']) && $_POST['email'] != '' &&
        isset($_POST['message']) && is_string($_POST['message']) && $_POST['message'] != '' &&
        isset($_POST['form_id']) && is_string($_POST['form_id']) && $_POST['form_id'] != '' &&
        isset($_POST['language']) && is_string($_POST['language']) && $_POST['language'] != '' &&
        filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
    ) {
        $footer = get_field('apg_footer', get_option('page_on_front'));
        $mailto = "artiskerpe@gmail.com";
//getting customer data
        $name = htmlspecialchars($_POST['name']);
        $fromEmail = htmlspecialchars($_POST['email']);
        $user_message = htmlspecialchars($_POST['message']);
        $form_id = htmlspecialchars($_POST['form_id']);
        $lang = htmlspecialchars($_POST['language']);

        $subject2 = pll_translate_string('apg_email_client_subject', $lang);

//Email body I will receive
        $message = apg_getMessage($form_id, $lang, $name, $fromEmail, $user_message);

//Message for client confirmation
        $message_client = sprintf(
            pll_translate_string('apg_email_client_message', $lang),
            $name,
            "<blockquote>" . htmlspecialchars($user_message) . "</blockquote>"
        );

//Email headers
        $headers = "From: $mailto" . "\r\n" .
            "Reply-To: $fromEmail" . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $headers_client = [];
        $headers_client[] = 'MIME-Version: 1.0';
        $headers_client[] = 'Content-type: text/html; charset=utf-8';
        $headers_client[] = "From: $mailto";
        $headers_client[] = "Reply-To: $mailto";
        $headers_client[] = 'X-Mailer: PHP/' . phpversion();

//PHP mailer function
        $result1 = mail($mailto, $name, wordwrap($message, 70, "\r\n"), $headers);
        $result2 = mail($fromEmail, $subject2, nl2br(wordwrap($message_client, 70, "<br>")), implode("\r\n", $headers_client));

        return ['success' => ($result1 && $result2), 'server' => $result1, 'client' => $result2, 'recieved_data' => $_POST];
    }

    return new WP_Error(
        'wrong_data',
        'Invalid post data supplied',
        [
            'status' => 400, 'post_data' => $_POST
        ]
    );
}

/**
 * Returns message for email to administrator
 */
function apg_getMessage($form_id, $lang, $name, $fromEmail, $user_message) {
    if (
        $form_id === 'attraction'

    ) {
        if (
            isset($_POST['custom_post_name']) && is_string($_POST['custom_post_name']) && $_POST['custom_post_name'] != '' &&
            isset($_POST['phone']) && is_string($_POST['phone']) && $_POST['phone'] != ''
        ) {
            $form_id .= PHP_EOL . 'post_name: ' . $_POST['custom_post_name'];
            $name .= PHP_EOL . 'Phone: ' . $_POST['phone'];
        }
    }

    return sprintf(
        pll_translate_string("apg_email_message", $lang), $name, $fromEmail, $user_message, $form_id
    );
}

/**
 * This is our callback function that embeds our resource in a WP_REST_Response
 */
function apg_get_private_data_permissions_check() {
    return true;
}