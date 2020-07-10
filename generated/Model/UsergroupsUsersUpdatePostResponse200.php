<?php

namespace Comicat\Slack\Api\Model;

class UsergroupsUsersUpdatePostResponse200
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
     * @var ObjsSubteam
     */
    protected $usergroup;
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
     * @return ObjsSubteam
     */
    public function getUsergroup() : ObjsSubteam
    {
        return $this->usergroup;
    }
    /**
     * 
     *
     * @param ObjsSubteam $usergroup
     *
     * @return self
     */
    public function setUsergroup(ObjsSubteam $usergroup) : self
    {
        $this->usergroup = $usergroup;
        return $this;
    }
}