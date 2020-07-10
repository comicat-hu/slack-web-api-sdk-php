<?php

namespace Comicat\Slack\Api\Model;

class ConversationsLeavePostResponse200
{
    /**
     * 
     *
     * @var bool
     */
    protected $notInChannel;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @return bool
     */
    public function getNotInChannel() : bool
    {
        return $this->notInChannel;
    }
    /**
     * 
     *
     * @param bool $notInChannel
     *
     * @return self
     */
    public function setNotInChannel(bool $notInChannel) : self
    {
        $this->notInChannel = $notInChannel;
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