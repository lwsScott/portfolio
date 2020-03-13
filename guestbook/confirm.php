<?php
/*
 * Lewis Scott
 * 305/guestbook/confirm.php
 * validate submission
 * Feb 14, 2020
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);
// connect to db
require ('/home2/lscottgr/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you</title>
</head>
<body>
<div class="container">
<!--<h1>Thank you for your submission</h1>-->

<!--This is for later server side validation-->
    <?php
    //var_dump($_POST);

    /*
array(10) {
    ["firstName"]=> string(0) ""
    ["lastName"]=> string(0) ""
    ["jobTitle"]=> string(0) ""
    ["company"]=> string(0) ""
    ["linkedIn"]=> string(0) ""
    ["Email"]=> string(0) ""
    ["met"]=> string(17) "--Please Select--"
    ["other"]=> string(0) ""
    ["message"]=> string(0) ""
    ["format"]=> string(4) "html" }
    */

    require('validation-functions.php');
    $isValid = true;

    //var_dump($_POST);

    $errors = [];   //Initialize an errors array


    if(validName($_POST['firstName']))
    {
        $fname = $_POST['firstName'];
    }
    else
    {
        $errors[] = 'First name is required';
        //echo "<p>First name is required<br></p>";
        $isValid = false;
    }

    if(validName($_POST['lastName']))
    {
        $lname = $_POST['lastName'];
    }
    else
    {
        $errors[] = 'Last name is required';
        //echo "<p>Last name is required</p>";
        $isValid = false;
    }


    // check Email if Mailing List is checked
    if (isset($_POST['mailList']))
    {
        if (validEMail($_POST['Email']))
        {
            $Email = $_POST['Email'];
        } else
        {
            $errors[] = 'A valid Email is required to be put on the Mailing List';
            //echo "<p>A valid Email is required to be put on the Mailing List.</p>";
        $isValid = false;
        }
    }
    else
    {
        $Email = $_POST['Email'];
        if($Email != "")
        {
            if (!validEMail($Email))
            {
                $errors[] = 'Email is not a valid address';
                //echo "<p>Email is not a valid address</p>";
                $isValid = false;
            }
        }
    }

    if ($_POST['linkedIn'] != "")
    {
        if (validLinkedIn($_POST['linkedIn']))
        {
            $linkedIn = $_POST['linkedIn'];
        } else
        {
            $errors[] = 'LinkedIn is invalid address';
            //echo "<p>LinkedIn is invalid address</p>";
            $isValid = false;
        }
    }
    else
    {
        $linkedIn = "";
    }


    if (isset($_POST['met']) && validMet($_POST['met']))
    {
        $met = $_POST['met'];
    }
    else
    {
        $errors[] = 'Please tell me how we met.  It\'s required';
        //echo "<p>Please tell me how we met.  It's required</p>";
        $isValid = false;

    }

    if (validFormat($_POST['format']))
    {
        $format = $_POST['format'];
    }
    else
    {
        $errors[] = 'Valid formats are HTML and Text';
        //echo "<p>Valid formats are HTML and Text</p>";
        $isValid = false;

    }

    $jobTitle = $_POST['jobTitle'];
    $company = $_POST['company'];
    //$format = $_POST['format'];
    $other = $_POST['other'];
    $message = $_POST['message'];
    $mail = "no";
    if (isset($_POST['mailList']))
    {
        $mailingList = true;
        $mail = "yes";
    }
    else
    {
        $mailingList = false;
    }


    if ($isValid)
    {
        // print out summary of submitted information
        echo "<h1>Thanks for your submission, $fname</h1>";
        echo "<h2>Summary</h2>";
        echo "<p>First Name:  $fname</p>";
        echo "<p>Last Name:  $lname</p>";
        echo "<p>Job Title:  $jobTitle</p>";
        echo "<p>Company:  $company</p>";
        echo "<p>Linked In:  $linkedIn</p>";
        echo "<p>E-mail:  $Email</p>";
        echo "<p>How we met:  $met</p>";
        echo "<p>&emsp;Description:  $other</p>";
        echo "<p>Your message:  $message</p>";
        echo "<p>Mailing List:  $mail</p>";
        echo "<p>Preferred e-mail format:  $format</p>";

        // connect to database
        require ('/home2/lscottgr/db.php');

        //Get the form data and "escape" it
        $fname = mysqli_real_escape_string($cnxn, $fname);
        $lname = mysqli_real_escape_string($cnxn, $lname);
        $jobTitle = mysqli_real_escape_string($cnxn, $jobTitle);
        $company = mysqli_real_escape_string($cnxn, $company);
        $linkedIn = mysqli_real_escape_string($cnxn, $linkedIn);
        $Email = mysqli_real_escape_string($cnxn, $Email);
        $met = mysqli_real_escape_string($cnxn, $met);
        $other = mysqli_real_escape_string($cnxn, $other);
        $message = mysqli_real_escape_string($cnxn, $message);
        $mailingList = mysqli_real_escape_string($cnxn, $mailingList);
        $format = mysqli_real_escape_string($cnxn, $format);
        $datestamp = date("Y-m-d");


        // write a SQL statement
        $sql = "INSERT INTO `contacts` (`first_name`, `last_name`, `job_title`, `company`, 
            `linked_in`, `e_mail`, `how_met`, `how_met_descr`, `message`, `mailing_list`, `format`) 
            VALUES
            ('$fname', '$lname', '$jobTitle', '$company', '$linkedIn', '$Email', '$met', '$other', 
            '$message', '$mailingList', '$format')";

        //echo $sql;

        // send query to database
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);
        // print a confirmation
        if ($result)
        {
            echo "Contact inserted successfully";
        }

    }// end of successful insert
    else
    {
        //Report the errors
        echo '<h1>Error!</h1>
        <p class="error">The following error(s) occurred:<br>';
        foreach ($errors as $msg)
        {
            echo " - $msg<br>\n";
        }
        echo '</p><p>Please try again.</p><p><br></p>';
    }

        ?>



</div>
</body>
</html>

