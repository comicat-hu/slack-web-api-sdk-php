<?php

namespace Comicat\Slack\Api\Model;

class ChatScheduleMessagePostResponse200
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
     * @var ChatScheduleMessagePostResponse200Message
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
     * @var int
     */
    protected $postAt;
    /**
     * 
     *
     * @var string
     */
    protected $scheduledMessageId;
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
     * @return ChatScheduleMessagePostResponse200Message
     */
    public function getMessage() : ChatScheduleMessagePostResponse200Message
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param ChatScheduleMessagePostResponse200Message $message
     *
     * @return self
     */
    public function setMessage(ChatScheduleMessagePostResponse200Message $message) : self
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
     * @return int
     */
    public function getPostAt() : int
    {
        return $this->postAt;
    }
    /**
     * 
     *
     * @param int $postAt
     *
     * @return self
     */
    public function setPostAt(int $postAt) : self
    {
        $this->postAt = $postAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getScheduledMessageId() : string
    {
        return $this->scheduledMessageId;
    }
    /**
     * 
     *
     * @param string $scheduledMessageId
     *
     * @return self
     */
    public function setScheduledMessageId(string $scheduledMessageId) : self
    {
        $this->scheduledMessageId = $scheduledMessageId;
        return $this;
    }
}