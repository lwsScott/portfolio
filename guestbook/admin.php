<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// connect to db
require ('/home2/lscottgr/db.php');
require('includes/check_login.php');
//var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guestbook Summary</title>
    <!-- Bootstrap CSS -->
    <!-- Custom fonts for this theme -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/profile_photo.jpg">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body id="page-top" class="mb-3">

<div class="container mb-3" id="main">
    <!-- Navigation header -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="https://lscott.greenriverdev.com/index.php">
                <img class="img rounded-circle" src="images/profile_photo.jpg" width="60" alt="logo">
            </a>
            <div class="navbar-text navbar-dark " id="logo-title">Lewis Scott</div>

            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold
            bg-intro text-white rounded" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">Menu<i class="fas fa-bars"></i>
            </button>
            <!-- button with toggler classes see bootstrap 04_08
                 can put button on other side of <a></a> and it will be on other side-->
            <!-- div with collapse classes for nav items see bootstrap 04_08-->
            <!-- <div class="navbar-nav> check if we should add>-->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1" id="contactUs">
                        <a class="nav-link rounded js-scroll-trigger" href="https://lscott.greenriverdev.com/index.php">Home</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a target="_blank" class="nav-link rounded js-scroll-trigger" href="../resume/index.html">Resume</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<section class="page-section portfolio mb-3" id="contactHdr">
    <div class="container">
        <h3>Contacts</h3>

        <table id="contacts" class="table table-striped table-bordered dt-responsive nowrap"
                style="width: 100%">
            <thead>
            <tr>
                <th>Name</th>
                <th>E-Mail</th>
                <th>LinkedIn</th>
                <th>Job Title</th>
                <th>Company</th>
                <th>How we Met</th>
                <th>Description(Met)</th>
                <th>Message</th>
                <th>Mailing List</th>
                <th>Mail List Format</th>
                <th>Date Added</th>
            </tr>
            </thead>
            <?php
            // define a query
            $sql = "SELECT * FROM contacts";
            //var_dump($sql);
            //var_dump($cnxn);
            // send the query to the db
            $result = mysqli_query($cnxn, $sql);
            //echo mysqli_errno($cnxn);

            //var_dump($results);

            // process the result
            foreach ($result as $row)
            {
                //var_dump($row);
                $first = $row['first_name'];
                $last = $row['last_name'];
                $email = $row['e_mail'];
                $linkedIn = $row['linked_in'];
                $title = $row['job_title'];
                $company = $row['company'];
                $how_met = $row['how_met'];
                $other = $row['how_met_descr'];
                $message = $row['message'];
                $mailingList = $row['mailing_list'];
                $format = $row['format'];
                $datestamp = $row['datestamp'];

                if ($mailingList == 1)
                {
                    $mailingList = "yes";
                }
                else
                {
                    $mailingList = "no";
                }

                echo "<tr>
                        <td>$first $last</td>
                        <td>$email</td>
                        <td>$linkedIn</td>
                        <td>$title</td>
                        <td>$company</td>
                        <td>$how_met</td>
                        <td>$other</td>
                        <td>$message</td>
                        <td>$mailingList</td>
                        <td>$format</td>
                        <td>$datestamp</td>
                    </tr>";
            }
            ?>
        </table>
    </div>
</section>
    <a href="guestbook.php" id="guestbook" class="btn btn-secondary">Guestbook</a>
    <a href="logout.php" class="btn btn-secondary">Logout</a>

</div>
<!-- Footer -->
<footer class="footer text-center bg-dark mt-5">
    <div class="container">
        <div class="row">
            <!-- Footer Social Icons -->
            <div class="col-lg-12">
                <h4 class="text-uppercase mb-3">Around the Web</h4>
                <a target="_blank" class="btn btn-outline-light btn-social mx-1"
                   href="https://www.linkedin.com/in/lewis-scott-profile/">
                    <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
                <a target="_blank" class="btn btn-outline-light btn-social mx-1"
                   href="https://github.com/lwsScott">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript-->
<!--<script src="js/jqBootstrapValidation.js"></script>-->
<!--<script src="js/contact_me.js"></script>-->

<!-- datatables -->
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $('#contacts').DataTable({
        scrollX: true
    });
</script>

<!-- bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>




</body>
</html>
