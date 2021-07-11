<?php

session_start();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
        integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href=".\CSS\style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header" id="topheader">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container text-uppercase p-2">
                <a class="navbar-brand font-weight-bold text-white" href="#">
                    <img src=".\IMAGES\spectrumlogo-1.png" height="40px" width="40px">Spectrum
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation" position="relative">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-uppercase">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-two">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Log Out</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="header-section">
            <div class="center-div">
                <h1 class="font-weight-bold">SPECTRUM ,Technical society of CET,
                    BHUBANESWAR</h1>
                <p>It is a place for all technical enthusiasts to learn, discover and innovate new things in the field
                    of
                    Technology and Design. </p>
                <div class="header-buttons">
                    <a href="#section-two">About Us</a>
                    <a href="#contact">Contact Us</a>
                </div>
            </div>
        </section>
    </div>
    <!----------------------------------------- About Us Section  -------------------------------------->
    <section class="section-two" id="section-two">

        <h2>About Us</h2>
        <p>Our club SPECTRUM is so named as it provides us with different wings emitted by the hardwork from our
            members, showing homologous transitions between Hardware, Software and Designing</p>
        <div class="section-two-task d-flex justify-content-around align-items-center">
            
                <div class="task-1">
                    <img src=".\IMAGES\Hardware.jpg" alt="icon1" height="150px" width="150px">
                    <h3>HARDWARE</h3>
                    <p>The HARDWARE team of the Club mainly focuses on VLSI, Embedded Systems and PCB Design</p>
                </div>
                <div class="task-2">
                    <img src=".\IMAGES\Software.jpg" alt="icon2" height="150px" width="150px">
                    <h3>SOFTWARE</h3>
                    <p>The SOFTWARE team focuses on domains of Web Development, App
                        Development, Competitive Programming, Machine Learning and Data Science.</p>
                </div>
                <div class="task-3">
                    <img src=".\IMAGES\Design.jpg" alt="icon3" height="150px" width="150px">
                    <h3>DESIGN</h3>
                    <p>The DESIGN Wing of our Club has proven their creativity in UI/UX Poster Designing</p>
                </div>
            

        </div>
        
    </section>
    <!----------------------------------------- projects section  ------------------------------------------------>

    <main>
        <section class="Projects" id="Projects">
            <div class="container">
                <h3>Welcome to Projects</h3>
                <h1>DO visit the Github Link To see The Project<span class="change_content"></span></h1>
                <div class="card-container">
                    <div class="card-container">
                        <div class="row">

                            <div class="card1" style="width:400px">
                                <img class="card-img-top" src=".\IMAGES\bhavana.jpg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">BHAAVANA</h4>
                                    <p class="card-text">Device helps physically imapired people to understand the
                                        emotions of the person they are
                                        talking
                                        to.</p>
                                    <a href="https://github.com/Spectrum-CETB" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                            <div class="card2" style="width:400px">
                                <img class="card-img-top" src=".\IMAGES\toilet.jpg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">SMART TOILET FOR SENIOR CITIZENS AND PATIENTS</h4>
                                    <p class="card-text">A semi automated toilet that is designed for the elderly
                                        people
                                        and the patients. This toilet
                                        helps them defecate and urinate with ease and reduces the filthy labour for
                                        the
                                        hospital
                                        authorities. The use of embedded microcontroller Arduino Mega 2560 makes the
                                        system smart.</p>
                                    <a href="https://github.com/Spectrum-CETB" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                            <div class="card3" style="width:400px">
                                <img class="card-img-top" src=".\IMAGES\supplybot.jpg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">SUPPLY BOT</h4>
                                    <p class="card-text">Robots help to deliver food and medicine aid in flood
                                        scenarios
                                        to the affected people in
                                        remote
                                        areas. Semi finalist at IIT bombay, Eyantra competition 2019-20.</p>
                                    <a href="https://github.com/Spectrum-CETB" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                            <div class="card4" style="width:400px">
                                <img class="card-img-top" src=".\IMAGES\UltraSonic.jpg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Ultrasonic Radar Based Horn System</h4>
                                    <p class="card-text">It is a noiseless horn system for the vehicles to
                                        communicate
                                        with each other using
                                        ultrasonic
                                        waves.</p>
                                    <a href="https://github.com/Spectrum-CETB" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                            <div class="card5" style="width:400px">
                                <img class="card-img-top" src=".\IMAGES\Medico.jpg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">FRIENDLY-MEDICO</h4>
                                    <p class="card-text">In this pandemic not everyone of us have the courage to go
                                        to
                                        hospitals and check our own
                                        reports.this app will take some short details and keep it in a database. In
                                        future it can be
                                        used by medicals to get the health data of a person and if any issue is
                                        found by
                                        the doctor
                                        they
                                        can directly contact them and problems can be solved over phones.</p>
                                    <a href="https://github.com/Spectrum-CETB" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                            <div class="card6" style="width:400px">
                                <img class="card-img-top" src=".\IMAGES\Textsumarisation.jpg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Extractive-Text-Summarization</h4>
                                    <p class="card-text">A simple python program which can find the most important
                                        sentences in a paragraph and can
                                        give
                                        them as the output. Quite useful for the tasks of reading short summaries of
                                        news articles
                                        and
                                        such. Unlike machine learning models, this doesn't train but rather uses a
                                        graph
                                        based
                                        approach
                                        to rank the sentences based on their cosine similarities and give the
                                        desired
                                        output as a
                                        result..</p>
                                    <a href="https://github.com/Spectrum-CETB" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
        </section>
    </main>

<!---------------------------------------- footer section  -------------------------------->

    <footer class="contact" id="contact">
        <div class="logo-div">
            <img src=".\IMAGES\spectrumlogo-1.png" alt="logo">
            <p>SPECTRUM a place for all technical enthusiasts to learn, discover and innovate new things in the field of
                Technology and Design.</p>
        </div>
        <div class="footer-menu">
            <div class="footer-div-2">
                <h4>WINGS</h4>
                <a href="#">
                    <li>HARDWARE</li>
                </a>
                <a href="#">
                    <li>SOFTWARE</li>
                </a>
                <a href="#">
                    <li>DESIGN</li>
                </a>
            </div>
            <div class="footer-div-3">
                <h4>USEFUL LINKS</h4>
                <a href="#">
                    <li>HOME</li>
                </a>
                <a href="#">
                    <li>ABOUT US</li>
                </a>
                <a href="#">
                    <li>PROJECTS</li>
                </a>
                <a href="#">
                    <li>CONTACT US</li>
                </a>
            </div>
            <div class="footer-div-4">
                <h4>CONTACTS</h4>
                <a href="#">
                    <li>College Of Engineering And Technology, Ghatikia,<br> Bhubaneswar - 751003</li>
                </a>
                <a href="#">
                    <li>spectrumclub.cetb@gmail.com</li>
                </a>
                <a href="#">
                    <li> +91-8249063374</li>
                </a>
            </div>
        </div>
    </footer>
<!------------------------------------------- icon-bar --------------------------------------------->
    <div class="icon-bar">
        <a href="https://www.facebook.com/spCETrum" class="facebook" target="_aatish">
            Click here to visit <i class="fab fa-facebook-square"></i>
        </a>
        <a href="https://github.com/Spectrum-CETB" class="github" target="_aatish">
            Click here to visit <i class="fab fa-github-square"></i>
        </a>
        <a href="https://www.instagram.com/spectrum.cetb/?h1=en" class="instagram" target="_aatish">
            Click here to visit <i class="fab fa-instagram-square"></i>
        </a>
        <a href="https://www.linkedin.com/in/spectrum-cet-3b71431b1/" class="linkedin" target="_aatish">
            Click here to visit <i class="fab fa-linkedin"></i>
        </a>
    </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>