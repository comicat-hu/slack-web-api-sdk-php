<?php

namespace Comicat\Slack\Api\Model;

class ChannelsInvitePostResponse200
{
    /**
     * 
     *
     * @var ObjsChannel
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
     * @return ObjsChannel
     */
    public function getChannel() : ObjsChannel
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param ObjsChannel $channel
     *
     * @return self
     */
    public function setChannel(ObjsChannel $channel) : self
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