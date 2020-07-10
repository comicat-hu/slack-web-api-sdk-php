<?php

namespace Comicat\Slack\Api\Model;

class BotsInfoGetResponse200
{
    /**
     * 
     *
     * @var BotsInfoGetResponse200Bot
     */
    protected $bot;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @return BotsInfoGetResponse200Bot
     */
    public function getBot() : BotsInfoGetResponse200Bot
    {
        return $this->bot;
    }
    /**
     * 
     *
     * @param BotsInfoGetResponse200Bot $bot
     *
     * @return self
     */
    public function setBot(BotsInfoGetResponse200Bot $bot) : self
    {
        $this->bot = $bot;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOk() : bool
    {
        return $this->ok;
    }
    /**
     * 
     *
     * @param bool $ok
     *
     * @return self
     */
    public function setOk(bool $ok) : self
    {
        $this->ok = $ok;
        return $this;
    }
}