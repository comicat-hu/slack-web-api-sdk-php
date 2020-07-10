<?php

namespace Comicat\Slack\Api\Model;

class DndTeamInfoGetResponse200
{
    /**
     * 
     *
     * @var bool
     */
    protected $cached;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @var mixed
     */
    protected $users;
    /**
     * 
     *
     * @return bool
     */
    public function getCached() : bool
    {
        return $this->cached;
    }
    /**
     * 
     *
     * @param bool $cached
     *
     * @return self
     */
    public function setCached(bool $cached) : self
    {
        $this->cached = $cached;
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
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }
    /**
     * 
     *
     * @param mixed $users
     *
     * @return self
     */
    public function setUsers($users) : self
    {
        $this->users = $users;
        return $this;
    }
}