<?php

namespace Comicat\Slack\Api\Model;

class TeamProfileGetGetResponse200
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
     * @var TeamProfileGetGetResponse200Profile
     */
    protected $profile;
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
     * @return TeamProfileGetGetResponse200Profile
     */
    public function getProfile() : TeamProfileGetGetResponse200Profile
    {
        return $this->profile;
    }
    /**
     * 
     *
     * @param TeamProfileGetGetResponse200Profile $profile
     *
     * @return self
     */
    public function setProfile(TeamProfileGetGetResponse200Profile $profile) : self
    {
        $this->profile = $profile;
        return $this;
    }
}