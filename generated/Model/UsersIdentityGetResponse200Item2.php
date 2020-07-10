<?php

namespace Comicat\Slack\Api\Model;

class UsersIdentityGetResponse200Item2
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
     * @var UsersIdentityGetResponse200Item2Team
     */
    protected $team;
    /**
     * 
     *
     * @var UsersIdentityGetResponse200Item2User
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
     * @return UsersIdentityGetResponse200Item2Team
     */
    public function getTeam() : UsersIdentityGetResponse200Item2Team
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param UsersIdentityGetResponse200Item2Team $team
     *
     * @return self
     */
    public function setTeam(UsersIdentityGetResponse200Item2Team $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return UsersIdentityGetResponse200Item2User
     */
    public function getUser() : UsersIdentityGetResponse200Item2User
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param UsersIdentityGetResponse200Item2User $user
     *
     * @return self
     */
    public function setUser(UsersIdentityGetResponse200Item2User $user) : self
    {
        $this->user = $user;
        return $this;
    }
}