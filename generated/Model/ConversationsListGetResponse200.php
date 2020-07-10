<?php

namespace Comicat\Slack\Api\Model;

class ConversationsListGetResponse200
{
    /**
     * 
     *
     * @var mixed[]
     */
    protected $channels;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @var ConversationsListGetResponse200ResponseMetadata
     */
    protected $responseMetadata;
    /**
     * 
     *
     * @return mixed[]
     */
    public function getChannels() : array
    {
        return $this->channels;
    }
    /**
     * 
     *
     * @param mixed[] $channels
     *
     * @return self
     */
    public function setChannels(array $channels) : self
    {
        $this->channels = $channels;
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
     * @return ConversationsListGetResponse200ResponseMetadata
     */
    public function getResponseMetadata() : ConversationsListGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param ConversationsListGetResponse200ResponseMetadata $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(ConversationsListGetResponse200ResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
}