<?php

namespace Comicat\Slack\Api\Model;

class UsersSetPhotoPostResponse200
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
     * @var UsersSetPhotoPostResponse200Profile
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
     * @return UsersSetPhotoPostResponse200Profile
     */
    public function getProfile() : UsersSetPhotoPostResponse200Profile
    {
        return $this->profile;
    }
    /**
     * 
     *
     * @param UsersSetPhotoPostResponse200Profile $profile
     *
     * @return self
     */
    public function setProfile(UsersSetPhotoPostResponse200Profile $profile) : self
    {
        $this->profile = $profile;
        return $this;
    }
}