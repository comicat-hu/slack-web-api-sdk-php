# slack-web-api-sdk-php

## composer
```json
"require": {
    "comi/slack-web-api-sdk-php": "dev-master"
},
"repositories": [
    {
        "type": "vcs",
        "url": "git@github.com:comicat-hu/slack-web-api-sdk-php.git"
    }
]
```

## example

```php
require __DIR__ . '/vendor/autoload.php';

use Comicat\Slack\SlackClient;

$messageContent = [
    'username' => 'tester',
    'channel' => 'your channel id',
    'text' => 'test message',
];

$client = new SlackClient('your token');
$response = $client->chatPostMessage($messageContent);
echo $response->getOk();
```

## endpoints

[Endpoint](./generated/Endpoint)

## generate api

`php bin/jane-open-api-generate generate`

## reference

* https://jane.readthedocs.io/en/latest/index.html
* https://github.com/jolicode/slack-php-api


## license

This library is licensed under the MIT License
