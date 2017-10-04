# TwilioSend
A PHP application which is used to send SMS to Mobile using twilio

What is Twilio?

Twilio (/ˈtwɪliːoʊ/) is a cloud communications platform as a service (PaaS) company based in San Francisco, California. Twilio allows software developers to programmatically make and receive phone calls and send and receive text messages using its web service APIs. Twilio's services are accessed over HTTP and are billed based on usage.
The Twilio PHP SDK makes it easy to interact with the Twilio API from your PHP application. The most recent version of the Twilio PHP SDK can be found on Packagist. The Twilio SDK requires PHP version 5.3 or higher. If you are interested in migrating to the newer 5.x version of the Twilio PHP SDK from the 4.x version, check out this guide.

Using with Composer

The recommended method for installing the SDK is via Composer. You can add the PHP SDK to your composer.json file with the require command.

composer require twilio/sdk
If you are using a framework like Laravel, the Twilio SDK may be automatically loaded for you and ready to use in your application. If you're using Composer in an environment that doesn't handle autoloading, you can require the autoload file from the "vendor" directory created by Composer
 
