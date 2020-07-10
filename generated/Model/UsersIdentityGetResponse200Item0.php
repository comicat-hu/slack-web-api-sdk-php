<?php

namespace Comicat\Slack\Api\Model;

class UsersIdentityGetResponse200Item0
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
     * @var UsersIdentityGetResponse200Item0Team
     */
    protected $team;
    /**
     * 
     *
     * @var UsersIdentityGetResponse200Item0User
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
     * @return UsersIdentityGetResponse200Item0Team
     */
    public function getTeam() : UsersIdentityGetResponse200Item0Team
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param UsersIdentityGetResponse200Item0Team $team
     *
     * @return self
     */
    public function setTeam(UsersIdentityGetResponse200Item0Team $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return UsersIdentityGetResponse200Item0User
     */
    public function getUser() : UsersIdentityGetResponse200Item0User
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param UsersIdentityGetResponse200Item0User $user
     *
     * @return self
     */
    public function setUser(UsersIdentityGetResponse200Item0User $user) : self
    {
        $this->user = $user;
        return $this;
    }
}