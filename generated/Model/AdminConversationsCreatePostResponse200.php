<?php

namespace Comicat\Slack\Api\Model;

class AdminConversationsCreatePostResponse200
{
    /**
     * 
     *
     * @var string
     */
    protected $channelId;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @return string
     */
    public function getChannelId() : string
    {
        return $this->channelId;
    }
    /**
     * 
     *
     * @param string $channelId
     *
     * @return self
     */
    public function setChannelId(string $channelId) : self
    {
        $this->channelId = $channelId;
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