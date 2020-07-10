<?php

namespace Comicat\Slack\Api\Model;

class ChatUpdatePostResponse200
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
     * @var ChatUpdatePostResponse200Message
     */
    protected $message;
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
    protected $text;
    /**
     * 
     *
     * @var string
     */
    protected $ts;
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
     * @return ChatUpdatePostResponse200Message
     */
    public function getMessage() : ChatUpdatePostResponse200Message
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param ChatUpdatePostResponse200Message $message
     *
     * @return self
     */
    public function setMessage(ChatUpdatePostResponse200Message $message) : self
    {
        $this->message = $message;
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
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * 
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->text = $text;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTs() : string
    {
        return $this->ts;
    }
    /**
     * 
     *
     * @param string $ts
     *
     * @return self
     */
    public function setTs(string $ts) : self
    {
        $this->ts = $ts;
        return $this;
    }
}