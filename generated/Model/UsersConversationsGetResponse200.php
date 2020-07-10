<?php

namespace Comicat\Slack\Api\Model;

class UsersConversationsGetResponse200 extends \ArrayObject
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
     * @var UsersConversationsGetResponse200ResponseMetadata
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
     * @return UsersConversationsGetResponse200ResponseMetadata
     */
    public function getResponseMetadata() : UsersConversationsGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param UsersConversationsGetResponse200ResponseMetadata $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(UsersConversationsGetResponse200ResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
}