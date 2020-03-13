<?php
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

// see if user is logged in
session_start();
if (!isset($_SESSION['username']))
{
$_SESSION["page"] = $_SERVER["SCRIPT_URI"];

// redirect to login page
header("location:  login.php");
}