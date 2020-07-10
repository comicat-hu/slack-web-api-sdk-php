<?php

namespace Comicat\Slack\Api\Model;

class ConversationsInvitePostResponse200
{
    /**
     * 
     *
     * @var mixed
     */
    protected $channel;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @return mixed
     */
    public function getChannel()
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param mixed $channel
     *
     * @return self
     */
    public function setChannel($channel) : self
    {
        $this->channel = $channel;
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