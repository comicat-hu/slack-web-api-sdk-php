<?php

namespace Comicat\Slack\Api\Model;

class UsersGetPresenceGetResponse200 extends \ArrayObject
{
    /**
     * 
     *
     * @var bool
     */
    protected $autoAway;
    /**
     * 
     *
     * @var int
     */
    protected $connectionCount;
    /**
     * 
     *
     * @var int
     */
    protected $lastActivity;
    /**
     * 
     *
     * @var bool
     */
    protected $manualAway;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @var bool
     */
    protected $online;
    /**
     * 
     *
     * @var string
     */
    protected $presence;
    /**
     * 
     *
     * @return bool
     */
    public function getAutoAway() : bool
    {
        return $this->autoAway;
    }
    /**
     * 
     *
     * @param bool $autoAway
     *
     * @return self
     */
    public function setAutoAway(bool $autoAway) : self
    {
        $this->autoAway = $autoAway;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConnectionCount() : int
    {
        return $this->connectionCount;
    }
    /**
     * 
     *
     * @param int $connectionCount
     *
     * @return self
     */
    public function setConnectionCount(int $connectionCount) : self
    {
        $this->connectionCount = $connectionCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLastActivity() : int
    {
        return $this->lastActivity;
    }
    /**
     * 
     *
     * @param int $lastActivity
     *
     * @return self
     */
    public function setLastActivity(int $lastActivity) : self
    {
        $this->lastActivity = $lastActivity;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getManualAway() : bool
    {
        return $this->manualAway;
    }
    /**
     * 
     *
     * @param bool $manualAway
     *
     * @return self
     */
    public function setManualAway(bool $manualAway) : self
    {
        $this->manualAway = $manualAway;
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
     * @return bool
     */
    public function getOnline() : bool
    {
        return $this->online;
    }
    /**
     * 
     *
     * @param bool $online
     *
     * @return self
     */
    public function setOnline(bool $online) : self
    {
        $this->online = $online;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPresence() : string
    {
        return $this->presence;
    }
    /**
     * 
     *
     * @param string $presence
     *
     * @return self
     */
    public function setPresence(string $presence) : self
    {
        $this->presence = $presence;
        return $this;
    }
}