<?php

namespace Comicat\Slack;

use Comicat\Slack\ClientFactory;

class SlackClient
{
    protected $token;

    protected $client;

    public function __construct(string $token)
    {
        $this->token = $token;
        $this->client = ClientFactory::create($token);
        return $this->client;
    }

    /**
     * handle issue https://github.com/janephp/janephp/issues/278#issuecomment-607745381
     */
    public function __call($function, $args)
    {
        $numberOfMethodParameters = (new \ReflectionObject($this->client))->getMethod($function)->getNumberOfParameters();
        if ($numberOfMethodParameters == 3 && !isset($args[1]['token'])) {
            $args[1]['token'] = $this->token;
        }
        return $this->client->$function(...$args);
    }
}
