<?php

// Blank message to start with so we can append to it.
$message = '';

// Check that name & email aren't empty.
if(empty($_POST['name']) || empty($_POST['email'])){
    die('Please ensure name and email are provided.');
}

// Check the checkbox
$checkString = 'I have not been checked.';
if(isset($_POST['checkme'])){
    $checkString = 'I have been checked.';
}

// Construct the message
$message .= <<<TEXT
    Name: {$_POST['name']}
    Email: {$_POST['name']}
    Gender: {$_POST['gender']}
    Bacon: {$_POST['bacon']}    
    {$checkString}
TEXT;

// Email to send to
$to = 'test@testdomain.com';

// Email Subject
$subject = 'You have been contacted!';

// Name to show email from
$from = 'Your Site';

// Domain to show the email from
$fromEmail = 'YourSite@domain.com';

// Construct a header to send who the email is from
$header = 'From: ' . $from . '<' . $fromEmail . '>';

// Try sending the email
if(!mail($to, $subject, $message, $header)){
    die('Error sending email.');
}else{
    die('Email sent!');
}