<?php

namespace Comicat\Slack\Api\Model;

class ObjsConversationItem0SharesItem
{
    /**
     * 
     *
     * @var string
     */
    protected $acceptedUser;
    /**
     * 
     *
     * @var bool
     */
    protected $isActive;
    /**
     * 
     *
     * @var ObjsTeam
     */
    protected $team;
    /**
     * 
     *
     * @var string
     */
    protected $user;
    /**
     * 
     *
     * @return string
     */
    public function getAcceptedUser() : string
    {
        return $this->acceptedUser;
    }
    /**
     * 
     *
     * @param string $acceptedUser
     *
     * @return self
     */
    public function setAcceptedUser(string $acceptedUser) : self
    {
        $this->acceptedUser = $acceptedUser;
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
    /**
     * 
     *
     * @return string
     */
    public function getUser() : string
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user) : self
    {
        $this->user = $user;
        return $this;
    }
}