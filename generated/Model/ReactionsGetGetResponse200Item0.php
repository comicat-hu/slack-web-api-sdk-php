<?php

namespace Comicat\Slack\Api\Model;

class ReactionsGetGetResponse200Item0
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
    protected $type;
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
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}