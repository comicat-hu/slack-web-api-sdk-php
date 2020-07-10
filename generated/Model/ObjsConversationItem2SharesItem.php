<?php

namespace Comicat\Slack\Api\Model;

class ObjsConversationItem2SharesItem
{
    /**
     * 
     *
     * @var int
     */
    protected $dateCreate;
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
    protected $isActive;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var ObjsTeam
     */
    protected $team;
    /**
     * 
     *
     * @return int
     */
    public function getDateCreate() : int
    {
        return $this->dateCreate;
    }
    /**
     * 
     *
     * @param int $dateCreate
     *
     * @return self
     */
    public function setDateCreate(int $dateCreate) : self
    {
        $this->dateCreate = $dateCreate;
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
    public function getIsActive() : bool
    {
        return $this->isActive;
    }
    /**
     * 
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive) : self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsTeam
     */
    public function getTeam() : ObjsTeam
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param ObjsTeam $team
     *
     * @return self
     */
    public function setTeam(ObjsTeam $team) : self
    {
        $this->team = $team;
        return $this;
    }
}