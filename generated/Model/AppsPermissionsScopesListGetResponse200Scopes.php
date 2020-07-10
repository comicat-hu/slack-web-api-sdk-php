<?php

namespace Comicat\Slack\Api\Model;

class AppsPermissionsScopesListGetResponse200Scopes extends \ArrayObject
{
    /**
     * 
     *
     * @var string[]
     */
    protected $appHome;
    /**
     * 
     *
     * @var string[]
     */
    protected $channel;
    /**
     * 
     *
     * @var string[]
     */
    protected $group;
    /**
     * 
     *
     * @var string[]
     */
    protected $im;
    /**
     * 
     *
     * @var string[]
     */
    protected $mpim;
    /**
     * 
     *
     * @var string[]
     */
    protected $team;
    /**
     * 
     *
     * @var string[]
     */
    protected $user;
    /**
     * 
     *
     * @return string[]
     */
    public function getAppHome() : array
    {
        return $this->appHome;
    }
    /**
     * 
     *
     * @param string[] $appHome
     *
     * @return self
     */
    public function setAppHome(array $appHome) : self
    {
        $this->appHome = $appHome;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getChannel() : array
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param string[] $channel
     *
     * @return self
     */
    public function setChannel(array $channel) : self
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getGroup() : array
    {
        return $this->group;
    }
    /**
     * 
     *
     * @param string[] $group
     *
     * @return self
     */
    public function setGroup(array $group) : self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getIm() : array
    {
        return $this->im;
    }
    /**
     * 
     *
     * @param string[] $im
     *
     * @return self
     */
    public function setIm(array $im) : self
    {
        $this->im = $im;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getMpim() : array
    {
        return $this->mpim;
    }
    /**
     * 
     *
     * @param string[] $mpim
     *
     * @return self
     */
    public function setMpim(array $mpim) : self
    {
        $this->mpim = $mpim;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getTeam() : array
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string[] $team
     *
     * @return self
     */
    public function setTeam(array $team) : self
    {
        $this->team = $team;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getUser() : array
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param string[] $user
     *
     * @return self
     */
    public function setUser(array $user) : self
    {
        $this->user = $user;
        return $this;
    }
}