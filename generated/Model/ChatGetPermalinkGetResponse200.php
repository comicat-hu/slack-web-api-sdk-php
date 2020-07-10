<?php

namespace Comicat\Slack\Api\Model;

class ChatGetPermalinkGetResponse200
{
    /**
     * 
     *
     * @var string
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
     * @var string
     */
    protected $permalink;
    /**
     * 
     *
     * @return string
     */
    public function getChannel() : string
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param string $channel
     *
     * @return self
     */
    public function setChannel(string $channel) : self
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
    /**
     * 
     *
     * @return string
     */
    public function getPermalink() : string
    {
        return $this->permalink;
    }
    /**
     * 
     *
     * @param string $permalink
     *
     * @return self
     */
    public function setPermalink(string $permalink) : self
    {
        $this->permalink = $permalink;
        return $this;
    }
}