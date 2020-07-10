<?php

namespace Comicat\Slack\Api\Model;

class UsersLookupByEmailGetResponse200 extends \ArrayObject
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
     * @var mixed
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
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param mixed $user
     *
     * @return self
     */
    public function setUser($user) : self
    {
        $this->user = $user;
        return $this;
    }
}