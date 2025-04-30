<?php
    session_start();
    include "language.php";


?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="color.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Portfolio</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <div>
                <p>Język</p>
                <a href="?lang=pl">PL</a>
                <a href="?lang=en">EN</a>
            </div>
            <ul>
                <li><a href="#home"><?php echo translate('Home')?></a></li>
                <li><a href="#about"><?php echo translate('About')?></a></li>
                <li><a href="#skills"><?php echo translate('Skills')?></a></li>
                <li><a href="#projects"><?php echo translate('Projects')?></a></li>
                <li><a href="#contact"><?php echo translate('Contact')?></a></li>
            </ul>
        </nav>
    </header>
        <section id="welcome">
            <div class="mess"><p><?php echo translate('Hi!')?> <br><?php echo translate("My name is Igor and I'm Frontend Developer")?></p></div>
            <div class="mess">
                <img src="https://invoice.ng/blog/wp-content/uploads/2020/08/Tips-For-Creating-The-Perfect-Website-For-Your-Business.jpg" alt="">
            </div>
        </section>
        <section id="about">
        <h1 class="section-head"><?php echo translate('About')?></h1>
        <div class="about-container">
            <div class="mess my-img">
                <img src="https://t3.ftcdn.net/jpg/02/43/12/34/360_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.jpg" alt="">
            </div>
            <div class="mess my-information">
                <p><?php echo translate("I'm Igor")?></p>
                <p>Frontend Developer</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis numquam adipisci tempore debitis quibusdam culpa maxime facere? Iusto, labore eos.</p>
            </div>
        </div>
        </section>
        <section id="skills">
            <h1 class="section-head"><?php echo translate('My skills')?></h1>
            <div class="skills-container">
                <div class="skill-info">
                    <p><i class="fab fa-html5 fa-3x"></i></p>
                    <p class="skill-name">HTML5</p>
                    <p><progress value="95" max="100"></progress></p>
                </div>
                <div class="skill-info">
                    <p><i class="fab fa-css3 fa-3x"></i></p>
                    <p class="skill-name">CSS3</p>
                    <p><progress value="95" max="100"></progress></p>
                </div>
                <div class="skill-info">
                    <p><i class="fab fa-js fa-3x"></i></p>
                    <p class="skill-name">JavaScript</p>
                    <p><progress value="55" max="100"></progress></p>
                </div>
                <!--<div class="skill-info">
                    <p><i class="fab fa-react fa-3x"></i></p>
                    <p class="skill-name">React</p>
                    <p><progress value="70" max="100"></progress></p>
                </div>
                <div class="skill-info">
                    <p><i class="fab fa-angular fa-3x"></i></p>
                    <p class="skill-name">Angular</p>
                    <p><progress value="40" max="100"></progress></p>
                </div>
                <div class="skill-info">
                    <p><i class="fab fa-bootstrap fa-3x"></i></p>
                    <p class="skill-name">Bootstrap</p>
                    <p><progress value="70" max="100"></progress></p>
                </div>-->
                <div class="skill-info">
                    <p><i class="fab fa-wordpress fa-3x"></i></p>
                    <p class="skill-name">WordPress</p>
                    <p><progress value="80" max="100"></progress></p>
                </div>
            </div>
        </section>
        <section id="projects">
            <h1 class="section-head"><?php echo translate('My projects')?></h1>
            <div class="projects-container">
                <div class="image-box">
                    <a href="http://martadomanska.pl">
                        <img src="martadomanska.pl" alt="">
                        <div class="skill-name">Test</div>
                    </a>
                </div>
                <div class="image-box">
                    <a href="http://wmko.pl">
                        <img src="https://s3-ap-south-1.amazonaws.com/static.awfis.com/wp-content/uploads/2017/07/07184649/ProjectManagement.jpg" alt="">
                        <div class="skill-name">Test</div>
                    </a>
                </div>
                <div class="image-box">
                    <a href="#">
                        <img src="https://s3-ap-south-1.amazonaws.com/static.awfis.com/wp-content/uploads/2017/07/07184649/ProjectManagement.jpg" alt="">
                        <div class="skill-name">Test</div>
                    </a>
                </div>
                <div class="image-box">
                    <a href="#">
                        <img src="https://s3-ap-south-1.amazonaws.com/static.awfis.com/wp-content/uploads/2017/07/07184649/ProjectManagement.jpg" alt="">
                        <div class="skill-name">Test</div>
                    </a>
                </div>
                <div class="image-box">
                    <a href="#">
                        <img src="https://s3-ap-south-1.amazonaws.com/static.awfis.com/wp-content/uploads/2017/07/07184649/ProjectManagement.jpg" alt="">
                        <div class="skill-name">Test</div>
                    </a>
                </div>
            </div>
        </section>
        <section id="contact">
            <h1 class="section-head"><?php echo translate('Contact')?></h1>
            <p><?php echo translate('Find me on:')?></p>
            <p>
                <!--<a href="#"><i class="fab fa-linkedin fa-2x"> Linkedin</i></a>-->
                <a href="#"><i class="fab fa-github-square fa-2x"> Github</i></a>
                <a href="#"><i class="fas fa-envelope-square fa-2x"> E-mail</i></a>
            </p>
        </section>
    
</body>
</html>