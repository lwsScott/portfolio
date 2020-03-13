<?php


/* Define functions to validate contact data */

function validName($name)
{
    return !empty($name);
}

function validEMail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        return false;
    }
    return true;
}


function validLinkedIn($linkedIn)
{
    if (!filter_var($linkedIn, FILTER_VALIDATE_URL))
    {
        return false;
    }
    return true;
}

/*
function validLinkedIn($linkedIn)
{
    $website = test_input($linkedIn);

    if (!preg_match("/\b(?:(?:http?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
        return false;
    }
}
*/

function validMet($validMet)
{
    if ($validMet == "--Please Select--")
    {
        return false;
    }
    elseif ($validMet != "Meetup" && $validMet != "Job Fair" &&
        $validMet != "Haven't met yet" && $validMet != "Other (please specify)")
    {
        return false;
    }
    return true;
}

function validFormat($validFormat)
{
    if ($validFormat != "html" && $validFormat != "text")
    {
        return false;
    }
    return true;
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
