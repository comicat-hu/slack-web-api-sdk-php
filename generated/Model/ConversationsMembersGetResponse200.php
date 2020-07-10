<?php

namespace Comicat\Slack\Api\Model;

class ConversationsMembersGetResponse200
{
    /**
     * 
     *
     * @var string[]
     */
    protected $members;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @var ConversationsMembersGetResponse200ResponseMetadata
     */
    protected $responseMetadata;
    /**
     * 
     *
     * @return string[]
     */
    public function getMembers() : array
    {
        return $this->members;
    }
    /**
     * 
     *
     * @param string[] $members
     *
     * @return self
     */
    public function setMembers(array $members) : self
    {
        $this->members = $members;
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
     * @return ConversationsMembersGetResponse200ResponseMetadata
     */
    public function getResponseMetadata() : ConversationsMembersGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param ConversationsMembersGetResponse200ResponseMetadata $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(ConversationsMembersGetResponse200ResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
}