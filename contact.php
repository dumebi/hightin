<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Page title -->
    <title></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- Style -->
    <link rel="stylesheet" href="css/theme.css">

</head>
<body>

<!-- PRELOADER 
<div id="preloader">
    <div class="loader">
        <img src="img/loader.svg">
        <span>Please wait, loading...</span>
    </div>
</div>
<!-- /PRELOADER -->
<?php include_once('header.php'); ?>

<!-- MAIN -->
<main class="main-container">
    <!-- /SECTION: Testimonials -->
    <!-- SECTION: Contact -->
    <section id="contact" class="section">
        <div class="container">

            <!-- Section header -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <header>
                        <h2 class="section-title">Contact</h2>
                        <p class="section-subtitle">We would love to hear from you.</p>
                    </header>
                </div>
            </div><!-- /Section header -->

            <!-- Section content -->
            <div class="row section-content">

                <!-- Contact form -->
                <div class="col-md-6 mt">
                    <form method="post" action="sendmail.php">
                        <input type="hidden" name="form" value="Contact form">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="text" name="name" class="form-control" placeholder="Your name... *" required>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" name="email" class="form-control" placeholder="Your e-mail... *" required>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" class="form-control" placeholder="Your message..."></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-big btn-danger">Send message</button>
                            </div>
                        </div>
                    </form>
                </div><!-- /Contact form -->

                <!-- Contact information -->
                <div class="col-md-6 mt">

                    <div class="row">
                        <div class="col-md-12 text-justify">
                            We are committed to transforming your imagination into reality.
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-4 text-center contact-block mt">
                            <i class="fa fa-4x fa-mobile-phone"></i>
                            <span>+2347051906860</span>
							<span>+2348182426007</span>
                        </div>

                        <div class="col-md-4 text-center contact-block mt">
                            <i class="fa fa-4x fa-envelope"></i>
                            <span>info@hightinglobal.com</span>
                        </div>

                        <div class="col-md-4 text-center contact-block mt">
                            <i class="fa fa-4x fa-home"></i>
                            <span>www.hightinglobal.com</span>
                        </div>

                    </div>


                </div><!-- /Contact information -->

            </div><!-- /Section content -->

        </div>
    </section>
    <!-- /SECTION: Contact -->
<?php include_once('footer.php'); ?>

<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->
<script src="js/wow.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/general.js"></script>

</body>
</html>