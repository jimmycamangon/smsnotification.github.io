<?php

require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

$sid = 'ACac71a535f3d2c54b09ae14e68d2a1eea';
$token = 'b99e3bcea23e00a52bc278dd4cb3080a';
$client = new Client($sid, $token);

$message = $client->message->create(
    // the number you'd like to send the message to
    '+63 93 6 522 0532',
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+19804492848',
        // the body of the text message you'd like to send
        'body' => 'Oy Jims Tang inamo'
    ]
);

if($message) {
    echo 'Message Sent!';
} else {
    echo 'Something Wrong with Process';
}

?>