<?php

namespace Comicat\Slack\Api\Model;

class ChatScheduledMessagesListGetResponse200
{
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @var ChatScheduledMessagesListGetResponse200ResponseMetadata
     */
    protected $responseMetadata;
    /**
     * 
     *
     * @var ChatScheduledMessagesListGetResponse200ScheduledMessagesItem[]
     */
    protected $scheduledMessages;
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
     * @return ChatScheduledMessagesListGetResponse200ResponseMetadata
     */
    public function getResponseMetadata() : ChatScheduledMessagesListGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param ChatScheduledMessagesListGetResponse200ResponseMetadata $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(ChatScheduledMessagesListGetResponse200ResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
    /**
     * 
     *
     * @return ChatScheduledMessagesListGetResponse200ScheduledMessagesItem[]
     */
    public function getScheduledMessages() : array
    {
        return $this->scheduledMessages;
    }
    /**
     * 
     *
     * @param ChatScheduledMessagesListGetResponse200ScheduledMessagesItem[] $scheduledMessages
     *
     * @return self
     */
    public function setScheduledMessages(array $scheduledMessages) : self
    {
        $this->scheduledMessages = $scheduledMessages;
        return $this;
    }
}