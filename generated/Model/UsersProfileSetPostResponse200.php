<?php

namespace Comicat\Slack\Api\Model;

class UsersProfileSetPostResponse200
{
    /**
     * 
     *
     * @var string
     */
    protected $emailPending;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @var ObjsUserProfile
     */
    protected $profile;
    /**
     * 
     *
     * @var string
     */
    protected $username;
    /**
     * 
     *
     * @return string
     */
    public function getEmailPending() : string
    {
        return $this->emailPending;
    }
    /**
     * 
     *
     * @param string $emailPending
     *
     * @return self
     */
    public function setEmailPending(string $emailPending) : self
    {
        $this->emailPending = $emailPending;
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
     * @return ObjsUserProfile
     */
    public function getProfile() : ObjsUserProfile
    {
        return $this->profile;
    }
    /**
     * 
     *
     * @param ObjsUserProfile $profile
     *
     * @return self
     */
    public function setProfile(ObjsUserProfile $profile) : self
    {
        $this->profile = $profile;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username) : self
    {
        $this->username = $username;
        return $this;
    }
}