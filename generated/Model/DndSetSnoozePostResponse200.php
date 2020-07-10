<?php

namespace Comicat\Slack\Api\Model;

class DndSetSnoozePostResponse200
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
     * @var bool
     */
    protected $snoozeEnabled;
    /**
     * 
     *
     * @var int
     */
    protected $snoozeEndtime;
    /**
     * 
     *
     * @var int
     */
    protected $snoozeRemaining;
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
    public function getSnoozeEnabled() : bool
    {
        return $this->snoozeEnabled;
    }
    /**
     * 
     *
     * @param bool $snoozeEnabled
     *
     * @return self
     */
    public function setSnoozeEnabled(bool $snoozeEnabled) : self
    {
        $this->snoozeEnabled = $snoozeEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSnoozeEndtime() : int
    {
        return $this->snoozeEndtime;
    }
    /**
     * 
     *
     * @param int $snoozeEndtime
     *
     * @return self
     */
    public function setSnoozeEndtime(int $snoozeEndtime) : self
    {
        $this->snoozeEndtime = $snoozeEndtime;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSnoozeRemaining() : int
    {
        return $this->snoozeRemaining;
    }
    /**
     * 
     *
     * @param int $snoozeRemaining
     *
     * @return self
     */
    public function setSnoozeRemaining(int $snoozeRemaining) : self
    {
        $this->snoozeRemaining = $snoozeRemaining;
        return $this;
    }
}