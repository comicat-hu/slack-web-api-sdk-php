<?php

namespace Comicat\Slack\Api\Model;

class ObjsResources
{
    /**
     * 
     *
     * @var mixed[]
     */
    protected $excludedIds;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $ids;
    /**
     * 
     *
     * @var bool
     */
    protected $wildcard;
    /**
     * 
     *
     * @return mixed[]
     */
    public function getExcludedIds() : array
    {
        return $this->excludedIds;
    }
    /**
     * 
     *
     * @param mixed[] $excludedIds
     *
     * @return self
     */
    public function setExcludedIds(array $excludedIds) : self
    {
        $this->excludedIds = $excludedIds;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getIds() : array
    {
        return $this->ids;
    }
    /**
     * 
     *
     * @param mixed[] $ids
     *
     * @return self
     */
    public function setIds(array $ids) : self
    {
        $this->ids = $ids;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getWildcard() : bool
    {
        return $this->wildcard;
    }
    /**
     * 
     *
     * @param bool $wildcard
     *
     * @return self
     */
    public function setWildcard(bool $wildcard) : self
    {
        $this->wildcard = $wildcard;
        return $this;
    }
}