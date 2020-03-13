<?php
/**
 *  File name & path
 *  Author
 *  Date
 *  Description
 */

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

// start session
session_start();

// initialize variables
$username = "";
$err = false;

// if the form has been submitted
if (!empty($_POST))
{
    // Get the username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    //echo $username . ", " . $password;

    // Dummy variables
    $user = 'admin';
    $pass = '@dm1n';

    if ($username == $user && $password == $pass)
    {
        // store username in the session array
        $_SESSION['username'] = $username;

        // redirect user to index.php
        $page = isset($_SESSION['page']) ? $_SESSION['page'] : "guestbook.php";
        header("location: " . $page);
    } else
    {
        // set error flag to true
        $err = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <!-- Custom fonts for this theme -->
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
<body>
<div class="container" id="main">
    <!-- Navigation header -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark text-uppercase fixed-top mb-5" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="https://lscott.greenriverdev.com/index.php">
                <img class="img rounded-circle" width="60" src="images/profile_photo.jpg" alt="logo">
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
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link rounded js-scroll-trigger" href="admin.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>
    <br>
    <br>


    <h1>Login Page</h1>

    <form action="#" method="post">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username"
                value="<?php echo $username; ?>">
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>


        <?php
        if ($err)
        {
            echo '<span class="err-login">Incorrect login</span><br>';
        }
        ?>
        <button type="submit" class="btn btn-secondary">Login</button>
    </form>

</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>