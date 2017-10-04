# TwilioSend
What is Twilio?
Twilio (/ˈtwɪliːoʊ/) is a cloud communications platform as a service (PaaS) company based in San Francisco, California. Twilio allows software developers to programmatically make and receive phone calls and send and receive text messages using its web service APIs. Twilio's services are accessed over HTTP and are billed based on usage.
The Twilio PHP SDK makes it easy to interact with the Twilio API from your PHP application. The most recent version of the Twilio PHP SDK can be found on Packagist. The Twilio SDK requires PHP version 5.3 or higher. If you are interested in migrating to the newer 5.x version of the Twilio PHP SDK from the 4.x version, check out this guide.

Using with Composer

The recommended method for installing the SDK is via Composer. You can add the PHP SDK to your composer.json file with the require command.

composer require twilio/sdk
If you are using a framework like Laravel, the Twilio SDK may be automatically loaded for you and ready to use in your application. If you're using Composer in an environment that doesn't handle autoloading, you can require the autoload file from the "vendor" directory created by Composer if you used the install command above. Here is a basic example of using the SDK to send a text message.

<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
$token = 'your_auth_token';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+15558675309',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+15017250604',
        // the body of the text message you'd like to send
        'body' => 'Hey Jenny! Good luck on the bar exam!'
    )
);
