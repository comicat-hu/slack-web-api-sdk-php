<?php

namespace Comicat\Slack\Api\Model;

class ConversationsJoinPostResponse200
{
    /**
     * 
     *
     * @var mixed
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
     * @var ConversationsJoinPostResponse200ResponseMetadata
     */
    protected $responseMetadata;
    /**
     * 
     *
     * @var string
     */
    protected $warning;
    /**
     * 
     *
     * @return mixed
     */
    public function getChannel()
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param mixed $channel
     *
     * @return self
     */
    public function setChannel($channel) : self
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
     * @return ConversationsJoinPostResponse200ResponseMetadata
     */
    public function getResponseMetadata() : ConversationsJoinPostResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param ConversationsJoinPostResponse200ResponseMetadata $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(ConversationsJoinPostResponse200ResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWarning() : string
    {
        return $this->warning;
    }
    /**
     * 
     *
     * @param string $warning
     *
     * @return self
     */
    public function setWarning(string $warning) : self
    {
        $this->warning = $warning;
        return $this;
    }
}