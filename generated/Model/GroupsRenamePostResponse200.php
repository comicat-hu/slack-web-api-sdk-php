<?php

namespace Comicat\Slack\Api\Model;

class GroupsRenamePostResponse200
{
    /**
     * 
     *
     * @var ObjsGroup
     */
    protected $channel;
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
    public function getChannel() : ObjsGroup
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param ObjsGroup $channel
     *
     * @return self
     */
    public function setChannel(ObjsGroup $channel) : self
    {
        $this->channel = $channel;
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