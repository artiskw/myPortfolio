<?php /* Template name: Home */ ?>
<?php include('header.php');?>
<?php $about_me = get_field('about'); ?>
<section class="section_about" id="about">
    <div class="about">
        <div class="title">
            <h3><?php echo $about_me['title']; ?></h3>
        </div>
        <div class="img_script">
            <img src="<?php echo $about_me['image']; ?>" alt="" width="400px" height="400">
            <div class="script_paragraph">
                <h3><?php echo $about_me['text_title']; ?>
                    <span><?php echo $about_me['text_title_profession']; ?></span></h3>
                <p><?php echo $about_me['text']; ?></p>
                <div class="btn">
                    <a href="#" target="blank"><?php echo $about_me['button_cv']['label_name']; ?></a>
                    <a href="<?php echo $about_me['button_github']['link']; ?>"
                        target="blank"><?php echo $about_me['button_github']['label_name']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $projects = get_field('projects'); ?>
<section class="section_projects" id="projects">
    <div class="section_projects_container">
        <div class="title">
            <h2><?php echo $projects['title']; ?></h2>
            <p><?php echo $projects['subtitle']; ?></p>
        </div>
        <div class="projects_img_nav">
            <div class="gallery_grid">
                <?php foreach ($projects ['projects'] as $key => $projects): ?>
                    <div class="card">
                        <a href="<?php echo get_field('project_link_address', $projects->ID); ?>" target="blank">
                            <img src="<?php echo get_field('image', $projects->ID); ?>" alt="">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<section class="section_contact" id="contact">
    <div class="section_contact_container">
        <div class="title">
            <h2>Contact Me</h2>
        </div>
        <div class="contact_content">
            <div class="my_contact">
                <div class="my_contact_title">
                    <h3>Contact me</h3>
                    <p>Please contact me and i will let you know soon</p>
                </div>
                <div class="name_container">
                    <i class="fa fa-user"></i>
                    <div class="info">
                        <h6>Name</h6>
                        <p>Artis Ķerpe</p>
                    </div>
                </div>
                <div class="address_container">
                    <i class="fa fa-map-marker-alt"></i>
                    <div class="info">
                        <h6>Address</h6>
                        <p>Latvia, Riga</p>
                    </div>
                </div>
                <div class="email_container">
                    <i class="fa fa-envelope"></i>
                    <div class="info">
                        <h6>Email</h6>
                        <a href="">artiskerpe@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="contact_us_container">
                <h6>Message me</h6>
                <form action="answer.php" method="post">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="field email">
                            <input name="email" type="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="field subject">
                        <input type="text" placeholder="Subject">
                    </div>
                    <div class="field textarea">
                        <textarea name="text" cols="30" rows="10" placeholder="Message"></textarea>
                    </div>
                    <div class="btn_area">
                        <button type="submit" class="approve-email-btn">Send message</button>
                    </div>
                    <div class="notifications"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php');?>