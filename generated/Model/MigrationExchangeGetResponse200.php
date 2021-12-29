<?php

namespace Comicat\Slack\Api\Model;

class MigrationExchangeGetResponse200 extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $enterpriseId;
    /**
     * 
     *
     * @var string[]
     */
    protected $invalidUserIds;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @var string
     */
    protected $teamId;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $userIdMap;
    /**
     * 
     *
     * @return string
     */
    public function getEnterpriseId() : string
    {
        return $this->enterpriseId;
    }
    /**
     * 
     *
     * @param string $enterpriseId
     *
     * @return self
     */
    public function setEnterpriseId(string $enterpriseId) : self
    {
        $this->enterpriseId = $enterpriseId;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getInvalidUserIds() : array
    {
        return $this->invalidUserIds;
    }
    /**
     * 
     *
     * @param string[] $invalidUserIds
     *
     * @return self
     */
    public function setInvalidUserIds(array $invalidUserIds) : self
    {
        $this->invalidUserIds = $invalidUserIds;
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
     * @return string
     */
    public function getTeamId() : string
    {
        return $this->teamId;
    }
    /**
     * 
     *
     * @param string $teamId
     *
     * @return self
     */
    public function setTeamId(string $teamId) : self
    {
        $this->teamId = $teamId;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getUserIdMap() : iterable
    {
        return $this->userIdMap;
    }
    /**
     * 
     *
     * @param mixed[] $userIdMap
     *
     * @return self
     */
    public function setUserIdMap(iterable $userIdMap) : self
    {
        $this->userIdMap = $userIdMap;
        return $this;
    }
}