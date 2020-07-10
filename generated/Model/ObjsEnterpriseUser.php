<?php

namespace Comicat\Slack\Api\Model;

class ObjsEnterpriseUser
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
     * @var string
     */
    protected $enterpriseName;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var bool
     */
    protected $isAdmin;
    /**
     * 
     *
     * @var bool
     */
    protected $isOwner;
    /**
     * 
     *
     * @var string[]
     */
    protected $teams;
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
     * @return string
     */
    public function getEnterpriseName() : string
    {
        return $this->enterpriseName;
    }
    /**
     * 
     *
     * @param string $enterpriseName
     *
     * @return self
     */
    public function setEnterpriseName(string $enterpriseName) : self
    {
        $this->enterpriseName = $enterpriseName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsAdmin() : bool
    {
        return $this->isAdmin;
    }
    /**
     * 
     *
     * @param bool $isAdmin
     *
     * @return self
     */
    public function setIsAdmin(bool $isAdmin) : self
    {
        $this->isAdmin = $isAdmin;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsOwner() : bool
    {
        return $this->isOwner;
    }
    /**
     * 
     *
     * @param bool $isOwner
     *
     * @return self
     */
    public function setIsOwner(bool $isOwner) : self
    {
        $this->isOwner = $isOwner;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getTeams() : array
    {
        return $this->teams;
    }
    /**
     * 
     *
     * @param string[] $teams
     *
     * @return self
     */
    public function setTeams(array $teams) : self
    {
        $this->teams = $teams;
        return $this;
    }
}