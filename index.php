<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;
echo "<h1> A message is sent </h1>";
// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC5041ae87c764d597ecb632db5a55391c';
$token = 'c5424fb9a0b4fe03136edf197593246d';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+19173490168',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+14242303252',
        // the body of the text message you'd like to send
        'body' => "Hello from Harshita Kudaravalli CS643 Fall 2017"
    )
);
echo "<p> To know more about this service <a href='1.html'>Click Here</a></p>";
?>
