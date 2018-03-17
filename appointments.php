<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="author" content="">
        <title></title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Font Awesome Icons -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        
        <!-- Custom CSS -->
        <link href="assets/css/style.css" rel="stylesheet">
        
        <!-- Google Fonts - Use: " font-family: 'Roboto', sans-serif; " to reference it-->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!-- Slick Slider CSS -->
        <link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>
        
        <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- Header Section -->
        <header>
            <nav class="navbar navbar-default navbar-expand-md navbar-toggleable-md navbar-dark nav-color fixed-top" id="change-color">
                <a class="pl-4 navbar-brand" href="index.php"><img src="assets/img/logo.png" class="img img-fluid"><h4 class="pl-2 d-inline">NEPTUA HEALTH</h4></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto small">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="departments.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Departments</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="general_practice.php">General Practice</a>
                                <a class="dropdown-item" href="cardiology.php">Cardiology</a>
                                <a class="dropdown-item" href="pediatrics.php">Pediatrics</a>
                                <a class="dropdown-item" href="diabetes.php">Diabetes Care</a>
                                <a class="dropdown-item" href="natal_care.php">Pre-natal Care</a>
                                <a class="dropdown-item" href="ultrasound.php">Ultrasound</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="articles.php">Articles</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" id="nav-bg" href="appointments.php">Make Appointment</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Articles Banner Section -->
        <section id="appointments-banner" class="global">
            <div class="banner-position">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="text-white display-3">Make An <span>Appointment</span></h1>
                            <p class="text-white lead">We’re here for you and can schedule an appointment 24 hours a day, 7 days a week. If the office is not open, we can refer you to one of our on call Doctors at your nearby hospital.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Appointment Booking Section -->
        <section id="book_appointments">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 py-5">
                        <h2 class="text-muted text-center">Same Day Appointments</h2>
                        <p class="text-muted py-3 text-center">We’re available 7 days a week and have specific office hours with all doctors on staff. Outside of normal office hours you can receive an on call Doctor or Nurse at your nearby hospital if needed.</p>
                        <div id="form-message1"></div>
                        <form action="appointment_mailer.php" method="POST" id="ajax-contact1">
                            <div class="form-group">
                                <input type="text" name="name1" id="name1" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email1" id="email1" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="phone" name="phone1" id="phone1" class="form-control" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="department" name="department">
                                    <option value="">Select Department</option>
                                    <option value="General_Practice">General Practice</option>
                                    <option value="Cardiology">Cardiology</option>
                                    <option value="Pediactrics">Pediactrics</option>
                                    <option value="Diabetes_Care">Diabetes Care</option>
                                    <option value="Pre-natel_Care">Pre-natel Care</option>
                                    <option value="Ultrasound">Ultrasound Echocardiogram</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message1" placeholder="How Can We Help You?" name="message1"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-info btn-block" name="submit1">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 bg-light px-5 text-muted">
                        <h5 class="pt-5 text-center"><i class="far fa-hand-point-down"></i>&nbsp;&nbsp;GENERAL ENQURIES</h5><hr>
                        <p><i class="fas fa-phone"></i>&nbsp;&nbsp;1800 - 222 - 111</p>
                        <p><i class="fas fa-envelope"></i>&nbsp;&nbsp;Contact@neptuahealth.com</p>
                        <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;121, Arlington Street, London, United Kingdom</p>
                        <div class="row text-center">
                            <div class="col-md-12">
                                <h5 class="pt-3"><i class="fa fa-clock"></i>&nbsp;&nbsp;OFFICE HOURS</h5><hr class="hr-color">
                            </div>
                            <div class="col-md-6">
                                <p>Monday – Friday</p>
                            </div>
                            <div class="col-md-6">
                                <p>8:00 – 5:00</p>
                            </div>
                            <div class="col-md-6">
                                <p>Saturday</p>
                            </div>
                            <div class="col-md-6">
                                <p>9:00 – 5:00</p>
                            </div>
                            <div class="col-md-6">
                                <p>Sunday</p>
                            </div>
                            <div class="col-md-6">
                                <p>11:00 – 4:00</p>
                            </div>
                            <div class="col-md-12">
                                <p class="border-top pt-4"><i class="fa fa-phone"></i>&nbsp;&nbsp;1800 - 111 - 2512</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Slider Section -->
        <section id="slider">
            <div class="container-fluid">
                <div class="row slick_slider">
                    <div>
                        <img src="assets/img/slider1.png" class="img img-fluid">
                    </div>
                    <div>
                        <img src="assets/img/slider2.png" class="img img-fluid">
                    </div>
                    <div>
                        <img src="assets/img/slider3.png" class="img img-fluid">
                    </div>
                    <div>
                        <img src="assets/img/slider4.png" class="img img-fluid">
                    </div>
                    <div>
                        <img src="assets/img/slider5.png" class="img img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- Secondary Footer -->
        <section id="secondary_footer">
            <div class="container-fluid no-gutters">
                <div class="row text-center py-5">
                    <div class="col-md-4 px-5 pb-4">
                        <a class="navbar-brand pb-4 text-info" href="index.php"><img src="assets/img/logo.png" class="img img-fluid"><h4 class="pl-2 d-inline">NEPTUA HEALTH</h4></a>
                        <p class="pb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolemue launti totam aperiam, eaque ipsa quae abillo. Invente veriatis et quasi architecto beatae luptatem accusantium, remaperiamsiat. Voluptatem accusest etsium doloremque laudaien. Lorem ipsum sits dolores ets unser.</p>
                        <h5 class="pb-3">Learn More About Us</h5>
                        <a href="#" title="Facebook"><i class="fab fa-facebook-square fa-2x"></i></a>
                        <a href="#" title="Twitter"><i class="fab fa-twitter-square fa-2x"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram fa-2x"></i></i></a>
                        <a href="#" title="Linkedin"><i class="fab fab fa-linkedin fa-2x"></i></i></a>
                        <a href="#" title="Pinterest"><i class="fab fa-pinterest-square fa-2x"></i></i></a>
                    </div>
                    <div class="col-md-4 px-5 pt-2 text-left pb-4">
                        <h4 class="text-info text-center">CONTACT INFORMATION</h4><hr>
                        <div class="row text-center">
                            <div class="col-sm-12">
                                <i class="fas fa-map-marker-alt icon-color"></i>
                            </div>
                            <div class="col-sm-12">
                                <address>
                                    121, Arlington Street<br>
                                    London, United Kingdom
                                </address>
                            </div>
                            <div class="col-sm-12">
                                <i class="fas fa-phone icon-color"></i>
                            </div>
                            <div class="col-sm-12">
                                <p>1800 - 222 - 111</p>
                            </div>
                            <div class="col-md-12 py-4">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.72810608297!2d-0.2416819529202793!3d51.528771841044325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sin!4v1519201903618" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 px-5 pt-2 text-left medical-departments">
                        <h4 class="text-center text-info">MEDICAL DEPARTMENTS</h4><hr>
                        <div>
                            <a href="cardiology.php"><i class="fas fa-chevron-circle-right"></i>&nbsp;&nbsp;Cardiology</a>
                        </div>
                        <div>
                            <a href="pediatrics.php"><i class="fas fa-chevron-circle-right"></i>&nbsp;&nbsp;Pediatrics</a>
                        </div>
                        <div>
                            <a href="diabetes.php"><i class="fas fa-chevron-circle-right"></i>&nbsp;&nbsp;Diabetes Care</a>
                        </div>
                        <div>
                            <a href="natal_care.php"><i class="fas fa-chevron-circle-right"></i>&nbsp;&nbsp;Pre-natal Care</a>
                        </div>
                        <div>
                            <a href="ultrasound.php"><i class="fas fa-chevron-circle-right"></i>&nbsp;&nbsp;Ultrasound</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Section -->
        <section id="footer">
            <div class="container-fluid no-gutters bg-info text-white py-3">
                <p class="text-center">&copy; Copyright 2018   |   Designed and Developed By Manohar   |   All Rights Reserved   </p>
            </div>
        </section>

        <!-- Facilities Video Modal -->
        <div class="modal fade" id="video_button" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">TOUR OUR FACILITIES</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe width="460" height="260" src="https://www.youtube.com/embed/NpiJguAQU5s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/appointment_app.js"></script>
        <script src="assets/js/jquery.paroller.js"></script>
        <script src="assets/slick/slick.js"></script>
    </body>
</html>