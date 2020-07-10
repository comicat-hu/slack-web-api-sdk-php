<?php

namespace Comicat\Slack\Api\Model;

class UsersIdentityGetResponse200Item3
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
     * @var UsersIdentityGetResponse200Item3Team
     */
    protected $team;
    /**
     * 
     *
     * @var UsersIdentityGetResponse200Item3User
     */
    protected $user;
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
     * @return UsersIdentityGetResponse200Item3Team
     */
    public function getTeam() : UsersIdentityGetResponse200Item3Team
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param UsersIdentityGetResponse200Item3Team $team
     *
     * @return self
     */
    public function setTeam(UsersIdentityGetResponse200Item3Team $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return UsersIdentityGetResponse200Item3User
     */
    public function getUser() : UsersIdentityGetResponse200Item3User
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param UsersIdentityGetResponse200Item3User $user
     *
     * @return self
     */
    public function setUser(UsersIdentityGetResponse200Item3User $user) : self
    {
        $this->user = $user;
        return $this;
    }
}