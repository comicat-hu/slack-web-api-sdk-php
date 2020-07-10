<?php

namespace Comicat\Slack\Api\Model;

class UsersListGetResponse200
{
    /**
     * 
     *
     * @var int
     */
    protected $cacheTs;
    /**
     * 
     *
     * @var mixed[]
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
     * @var ObjsResponseMetadata
     */
    protected $responseMetadata;
    /**
     * 
     *
     * @return int
     */
    public function getCacheTs() : int
    {
        return $this->cacheTs;
    }
    /**
     * 
     *
     * @param int $cacheTs
     *
     * @return self
     */
    public function setCacheTs(int $cacheTs) : self
    {
        $this->cacheTs = $cacheTs;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getMembers() : array
    {
        return $this->members;
    }
    /**
     * 
     *
     * @param mixed[] $members
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