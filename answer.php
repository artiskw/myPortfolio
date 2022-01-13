<!doctype html>

<?php
if (isset($_POST['email']) && is_string($_POST['email'])) {
    $to      = $_POST['email'];
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: artiisk65@gmail.com' . "\r\n" .
        'Reply-To: artiisk65@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    $status = mail($to, $subject, $message, $headers);
    
    if($status) {
        echo "email send";
    }
    else {
        echo "email failed to send";
    }
}

else {
    header('Location: /index.php')
}

?>

<pre>
    <?= print_r($_POST, true) ?>
</pre>
