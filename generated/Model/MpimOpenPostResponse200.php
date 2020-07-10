<?php

namespace Comicat\Slack\Api\Model;

class MpimOpenPostResponse200
{
    /**
     * 
     *
     * @var ObjsGroup
     */
    protected $group;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @return ObjsGroup
     */
    public function getGroup() : ObjsGroup
    {
        return $this->group;
    }
    /**
     * 
     *
     * @param ObjsGroup $group
     *
     * @return self
     */
    public function setGroup(ObjsGroup $group) : self
    {
        $this->group = $group;
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
}