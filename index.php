<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- Custom fonts for this theme -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/profile_photo.jpg">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lewis Scott</title>
</head>

<body id="page-top">
<div class="container">
    <?php
    include("includes/header.php");
    ?>
<!-- Portfolio Section -->
<section class="page-section portfolio" id="about">
    <div class="container">

        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">About</h2>

        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-asterisk"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Portfolio Items -->
        <div class="row">
            <!-- Portfolio Item 1 -->
                <p> Hi! I’m Lewis. Retired Navy Officer, Retired Boeing Engineer, Aspiring Software Developer.
                </p>
                <p>I spent almost 22 years in the USN. Retired and went to work in aerospace with Boeing –
                    designing airplanes.</p>
                <p>I'm taking the time to reinvest in myself. I retired from Boeing and am going to school full time.</p>
                <p>My plan is to get my degree in software development, maybe do some part time teaching or consulting
                    and enjoy my retirement.</p>
                <a href="305/guestbook/guestbook.php" class="btn btn-secondary float-right js-scroll-trigger">Contact Me</a>
            </div>
        </div>
</section>

<!-- Portfolio Section -->
<section class="page-section portfolio" id="portfolio">
    <div class="container">

        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>

        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-asterisk"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Portfolio Grid Items -->
        <div class="row">
            <!-- Portfolio Item 1 -->
            <div class="container">
                <?php
                include("portfolio.php");
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Footer  -->
<?php
include("includes/footer.php");
?>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</div>
</body>
</html>