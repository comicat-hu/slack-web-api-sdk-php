<?php

namespace Comicat\Slack\Api\Model;

class AdminConversationsGetTeamsGetResponse200
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
     * @var AdminConversationsGetTeamsGetResponse200ResponseMetadata
     */
    protected $responseMetadata;
    /**
     * 
     *
     * @var string[]
     */
    protected $teamIds;
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
     * @return AdminConversationsGetTeamsGetResponse200ResponseMetadata
     */
    public function getResponseMetadata() : AdminConversationsGetTeamsGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param AdminConversationsGetTeamsGetResponse200ResponseMetadata $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(AdminConversationsGetTeamsGetResponse200ResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getTeamIds() : array
    {
        return $this->teamIds;
    }
    /**
     * 
     *
     * @param string[] $teamIds
     *
     * @return self
     */
    public function setTeamIds(array $teamIds) : self
    {
        $this->teamIds = $teamIds;
        return $this;
    }
}