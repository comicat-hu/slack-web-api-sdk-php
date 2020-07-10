<?php

namespace Comicat\Slack\Api\Model;

class AppsPermissionsInfoGetResponse200Info
{
    /**
     * 
     *
     * @var AppsPermissionsInfoGetResponse200InfoAppHome
     */
    protected $appHome;
    /**
     * 
     *
     * @var AppsPermissionsInfoGetResponse200InfoChannel
     */
    protected $channel;
    /**
     * 
     *
     * @var AppsPermissionsInfoGetResponse200InfoGroup
     */
    protected $group;
    /**
     * 
     *
     * @var AppsPermissionsInfoGetResponse200InfoIm
     */
    protected $im;
    /**
     * 
     *
     * @var AppsPermissionsInfoGetResponse200InfoMpim
     */
    protected $mpim;
    /**
     * 
     *
     * @var AppsPermissionsInfoGetResponse200InfoTeam
     */
    protected $team;
    /**
     * 
     *
     * @return AppsPermissionsInfoGetResponse200InfoAppHome
     */
    public function getAppHome() : AppsPermissionsInfoGetResponse200InfoAppHome
    {
        return $this->appHome;
    }
    /**
     * 
     *
     * @param AppsPermissionsInfoGetResponse200InfoAppHome $appHome
     *
     * @return self
     */
    public function setAppHome(AppsPermissionsInfoGetResponse200InfoAppHome $appHome) : self
    {
        $this->appHome = $appHome;
        return $this;
    }
    /**
     * 
     *
     * @return AppsPermissionsInfoGetResponse200InfoChannel
     */
    public function getChannel() : AppsPermissionsInfoGetResponse200InfoChannel
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param AppsPermissionsInfoGetResponse200InfoChannel $channel
     *
     * @return self
     */
    public function setChannel(AppsPermissionsInfoGetResponse200InfoChannel $channel) : self
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * 
     *
     * @return AppsPermissionsInfoGetResponse200InfoGroup
     */
    public function getGroup() : AppsPermissionsInfoGetResponse200InfoGroup
    {
        return $this->group;
    }
    /**
     * 
     *
     * @param AppsPermissionsInfoGetResponse200InfoGroup $group
     *
     * @return self
     */
    public function setGroup(AppsPermissionsInfoGetResponse200InfoGroup $group) : self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * 
     *
     * @return AppsPermissionsInfoGetResponse200InfoIm
     */
    public function getIm() : AppsPermissionsInfoGetResponse200InfoIm
    {
        return $this->im;
    }
    /**
     * 
     *
     * @param AppsPermissionsInfoGetResponse200InfoIm $im
     *
     * @return self
     */
    public function setIm(AppsPermissionsInfoGetResponse200InfoIm $im) : self
    {
        $this->im = $im;
        return $this;
    }
    /**
     * 
     *
     * @return AppsPermissionsInfoGetResponse200InfoMpim
     */
    public function getMpim() : AppsPermissionsInfoGetResponse200InfoMpim
    {
        return $this->mpim;
    }
    /**
     * 
     *
     * @param AppsPermissionsInfoGetResponse200InfoMpim $mpim
     *
     * @return self
     */
    public function setMpim(AppsPermissionsInfoGetResponse200InfoMpim $mpim) : self
    {
        $this->mpim = $mpim;
        return $this;
    }
    /**
     * 
     *
     * @return AppsPermissionsInfoGetResponse200InfoTeam
     */
    public function getTeam() : AppsPermissionsInfoGetResponse200InfoTeam
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param AppsPermissionsInfoGetResponse200InfoTeam $team
     *
     * @return self
     */
    public function setTeam(AppsPermissionsInfoGetResponse200InfoTeam $team) : self
    {
        $this->team = $team;
        return $this;
    }
}