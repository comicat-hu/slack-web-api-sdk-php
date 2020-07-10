<?php

namespace Comicat\Slack\Api\Model;

class ChatPostMessagePostResponse200
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
     * @var ObjsMessage
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
     * @return ObjsMessage
     */
    public function getMessage() : ObjsMessage
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param ObjsMessage $message
     *
     * @return self
     */
    public function setMessage(ObjsMessage $message) : self
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