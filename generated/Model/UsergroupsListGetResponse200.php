<?php

namespace Comicat\Slack\Api\Model;

class UsergroupsListGetResponse200
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
     * @var ObjsSubteam[]
     */
    protected $usergroups;
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
     * @return ObjsSubteam[]
     */
    public function getUsergroups() : array
    {
        return $this->usergroups;
    }
    /**
     * 
     *
     * @param ObjsSubteam[] $usergroups
     *
     * @return self
     */
    public function setUsergroups(array $usergroups) : self
    {
        $this->usergroups = $usergroups;
        return $this;
    }
}