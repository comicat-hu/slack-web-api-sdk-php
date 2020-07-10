<?php

namespace Comicat\Slack;

use Comicat\Slack\ClientFactory;

class SlackClient
{
    protected $client;

    public function __construct(string $token)
    {
        $this->client = ClientFactory::create($token);
        return $this->client;
    }

    public function __call($function, $args)
    {
        // https://github.com/janephp/janephp/issues/278#issuecomment-607745381
        return $this->client->$function($args[0], ['token' => '']);
    }
}
