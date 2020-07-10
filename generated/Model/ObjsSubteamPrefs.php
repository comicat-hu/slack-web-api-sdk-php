<?php

namespace Comicat\Slack\Api\Model;

class ObjsSubteamPrefs
{
    /**
     * 
     *
     * @var string[]
     */
    protected $channels;
    /**
     * 
     *
     * @var string[]
     */
    protected $groups;
    /**
     * 
     *
     * @return string[]
     */
    public function getChannels() : array
    {
        return $this->channels;
    }
    /**
     * 
     *
     * @param string[] $channels
     *
     * @return self
     */
    public function setChannels(array $channels) : self
    {
        $this->channels = $channels;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getGroups() : array
    {
        return $this->groups;
    }
    /**
     * 
     *
     * @param string[] $groups
     *
     * @return self
     */
    public function setGroups(array $groups) : self
    {
        $this->groups = $groups;
        return $this;
    }
}