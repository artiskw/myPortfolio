<?php include('header.php');?>
<section class="section_about" id="about">
    <div class="about">
        <div class="title">
            <h3>About Me</h3>
        </div>
        <div class="img_script">
            <img src="img/es.jpg" alt="" width="400px" height="400">
            <div class="script_paragraph">
                <h3>I'm Artis and   <span>Web Programmer</span></h3>
                <p>Hey there! I'm a Web Developer. I can help you using the following technologies: HTML5, CSS, JavaScript,  PHP, jQuery, MySQL, WordPress, API. I am looking forward to working for you and building a long-term relationship! FAST Service!</p>
                <div class="btn">
                    <a href="#" target="blank">Download CV</a>
                    <a href="https://github.com/artiskw/myPortfolio.git" target="blank">Go to my GitHub</a>
                </div>  
            </div>
        </div>
    </div>
</section>
<section class="section_projects" id="projects">
    <div class="section_projects_container">
        <div class="title">
            <h2>Projects</h2>
            <p>Here will be an insight into my projects</p>
        </div>
        <div class="projects_img_nav">
            <div class="gallery_grid">
                    <div class="card">
                        <a href="https://theroyalcasinos.com/" target="blank">
                            <img src="img/projects/TheRoyalCasino.png" alt="">
                        </a>
                    </div>
                    <div class="card">
                        <a href="https://bonusattack.com/" target="blank">
                            <img src="img/projects/bonusatttack.png" alt="">
                        </a>
                    </div>
                    <div class="card">
                        <a href="https://casinomegarush.com/" target="blank">
                            <img src="img/projects/casinomegarush.png" alt="">
                        </a>
                    </div>
                    <div class="card">
                        <a href="https://crazybonuses.club/" target="blank">
                            <img src="img/projects/cbcasino.png" alt="">
                        </a>
                    </div>
                    <div class="card">
                        <a href="https://casinosondemand.com/" target="blank">
                            <img src="img/projects/cod-logo.png" alt="">
                        </a>
                    </div>
                    <div class="card">
                        <a href="https://doubledownoffers.com/" target="blank">
                            <img src="img/projects/doubledownoffers.png" alt="">
                        </a>
                    </div>
                    <div class="card">
                        <a href="https://onlinecasinobeast.com/" target="blank">
                            <img src="img/projects/OnlineCasinoBeast.png" alt="">
                        </a>
                    </div>
                    <div class="card">
                        <a href="https://slickbonuses.com/" target="blank">
                            <img src="img/projects/sb.png" alt="">
                        </a>
                    </div>
                    <div class="card">
                        <a href="https://topcasinoratings.com/" target="blank">
                            <img src="img/projects/topcasinoratings_logo.png" alt="">
                        </a>
                    </div>
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


