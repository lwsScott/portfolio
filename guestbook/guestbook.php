<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guestbook</title>

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

<body id="page-top">
<div class="container" id="main">
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
                        <a class="nav-link rounded js-scroll-trigger" href="../resume/index.html">Resume</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link rounded js-scroll-trigger" href="admin.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Please sign my Guestbook</h1>
            <p class="lead"></p>
        </div>
    </div>

    <form id="account-form" action="confirm.php" method="post">
            <fieldset class="form-group">
                <h1>Contact Info</h1>

                <div class="form-group">
                    <label for="firstName">First name:</label>
                    <input type="text" class="form-control" id="firstName"
                           name="firstName" placeholder="First Name">
                    <span class="err" id="errFName">First Name is Required</span>
                </div>

                <div class="form-group ml-auto">
                    <label for="lastName">Last name:</label>
                    <input type="text" class="form-control" id="lastName"
                           name="lastName" placeholder="Last Name">
                    <span class="err" id="errLName">Last Name is Required</span>
                </div>

                <div class="form-group">
                    <label for="jobTitle">Job Title:</label>
                    <input type="text" class="form-control" id="jobTitle" name="jobTitle">
                    <!--<span class="err" id="errJobTitle">Required</span>-->
                </div>

                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" name="company">
                    <!--<span class="err" id="errCompany">Required</span>-->
                </div>

                <div class="form-group">
                    <label for="linkedIn">LinkedIn:</label>
                    <input type="text" class="form-control" id="linkedIn"
                           name="linkedIn" placeholder="https://www.linkedin.com/in/first-last-profile/">
                    <span class="err" id="errLinkedIn">Must be a valid URL address</span>
                </div>

                <div class="form-group">
                    <label for="Email">Email:</label>
                    <input type="text" class="form-control" id="Email"
                           name="Email" placeholder="you@example.com">
                    <span class="err" id="errEmail">Invalid E-mail address.  Must contain '@' and '.'</span>
                </div>

            </fieldset>

            <fieldset class="form-group">
                <h1>How we Met</h1>
                <div class="form-group">
                    <label for="met">How did we meet</label>
                    <select id="met" name="met">
                        <option value="--Please Select--">--Please Select--</option>
                        <option value="Meetup">Meetup</option>
                        <option value="Job Fair">Job Fair</option>
                        <option value="Haven't met yet">Haven't met yet</option>
                        <option value="Other (please specify)">Other (please specify)</option>
                    </select>
                    <span class="err" id="errMet">Required</span>
                    <div class="form-group">
                        <label class = "otherHidden" for="other">Other (please specify)</label>
                        <input class="form-control otherHidden" id="other" name="other">
                        <!--<span class="err" id="errOther">Field is required</span>-->
                    </div>
                    <div class="form-group">
                        <label for="message">Leave me a message</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                        <!--<span class="err" id="errOther">Field is required</span>-->
                    </div>
                </div>
            </fieldset>

            <fieldset class="form-group">

                <h1>Mailing list</h1>

                <div class="form-group form-check">
                    <label class="form-check-label ml-auto" for="mailList">Please add me to your mailing list</label>
                    <input type="checkbox" class="form-check-input ml-auto" id="mailList" name="mailList">
                </div>
                <div class="form-check">
                    <div class="form-check">
                        <label class="form-check-label formatHidden" for="html">
                        HTML
                        </label>
                        <input class="form-check-input formatHidden ml-auto" type="radio" name="format"
                               id="html" value="html" checked>
                    </div>
                    <div class="form-check">

                        <label class="form-check-label formatHidden" for="text">
                        Text
                        </label>
                        <input class="form-check-input formatHidden ml-auto" type="radio" name="format"
                               id="text" value="text">
                    </div>
                </div>
            </fieldset>
            <button id="submit"  type="submit" class="btn btn-secondary">Submit Contact Info</button>
            <a href="admin.php" id="admin" class="btn btn-secondary">Admin</a>
    </form>
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


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!--<script src="js/clientSideValidation.js"></script>-->
<script src="js/miniFormValidation.js"></script>

</body>
</html>