<?php

namespace Comicat\Slack\Api\Model;

class MpimListGetResponse200
{
    /**
     * 
     *
     * @var ObjsGroup[]
     */
    protected $groups;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @var ObjsResponseMetadata
     */
    protected $responseMetadata;
    /**
     * 
     *
     * @return ObjsGroup[]
     */
    public function getGroups() : array
    {
        return $this->groups;
    }
    /**
     * 
     *
     * @param ObjsGroup[] $groups
     *
     * @return self
     */
    public function setGroups(array $groups) : self
    {
        $this->groups = $groups;
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
     * @return ObjsResponseMetadata
     */
    public function getResponseMetadata() : ObjsResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param ObjsResponseMetadata $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(ObjsResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
}