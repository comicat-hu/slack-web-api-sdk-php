<?php

namespace Comicat\Slack\Api\Model;

class UsersIdentityGetResponse200Item1
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
     * @var UsersIdentityGetResponse200Item1Team
     */
    protected $team;
    /**
     * 
     *
     * @var UsersIdentityGetResponse200Item1User
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
     * @return UsersIdentityGetResponse200Item1Team
     */
    public function getTeam() : UsersIdentityGetResponse200Item1Team
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param UsersIdentityGetResponse200Item1Team $team
     *
     * @return self
     */
    public function setTeam(UsersIdentityGetResponse200Item1Team $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return UsersIdentityGetResponse200Item1User
     */
    public function getUser() : UsersIdentityGetResponse200Item1User
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param UsersIdentityGetResponse200Item1User $user
     *
     * @return self
     */
    public function setUser(UsersIdentityGetResponse200Item1User $user) : self
    {
        $this->user = $user;
        return $this;
    }
}