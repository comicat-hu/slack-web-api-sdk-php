<?php

require __DIR__ . '/../vendor/autoload.php';

use Comicat\Slack\SlackClient;

$messageContent = [
    'username' => 'tester',
    'channel' => 'your channel id',
    'text' => 'test message',
];

$client = new SlackClient('your token');
$response = $client->chatPostMessage($messageContent);
echo $response->getOk();
