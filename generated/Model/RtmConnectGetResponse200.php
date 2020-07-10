<?php

namespace Comicat\Slack\Api\Model;

class RtmConnectGetResponse200
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
     * @var RtmConnectGetResponse200Self
     */
    protected $self;
    /**
     * 
     *
     * @var RtmConnectGetResponse200Team
     */
    protected $team;
    /**
     * 
     *
     * @var string
     */
    protected $url;
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
     * @return RtmConnectGetResponse200Self
     */
    public function getSelf() : RtmConnectGetResponse200Self
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param RtmConnectGetResponse200Self $self
     *
     * @return self
     */
    public function setSelf(RtmConnectGetResponse200Self $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return RtmConnectGetResponse200Team
     */
    public function getTeam() : RtmConnectGetResponse200Team
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param RtmConnectGetResponse200Team $team
     *
     * @return self
     */
    public function setTeam(RtmConnectGetResponse200Team $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
}