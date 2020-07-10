<?php

namespace Comicat\Slack\Api\Model;

class DndEndSnoozePostResponse200
{
    /**
     * 
     *
     * @var bool
     */
    protected $dndEnabled;
    /**
     * 
     *
     * @var int
     */
    protected $nextDndEndTs;
    /**
     * 
     *
     * @var int
     */
    protected $nextDndStartTs;
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
     * @return bool
     */
    public function getDndEnabled() : bool
    {
        return $this->dndEnabled;
    }
    /**
     * 
     *
     * @param bool $dndEnabled
     *
     * @return self
     */
    public function setDndEnabled(bool $dndEnabled) : self
    {
        $this->dndEnabled = $dndEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNextDndEndTs() : int
    {
        return $this->nextDndEndTs;
    }
    /**
     * 
     *
     * @param int $nextDndEndTs
     *
     * @return self
     */
    public function setNextDndEndTs(int $nextDndEndTs) : self
    {
        $this->nextDndEndTs = $nextDndEndTs;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNextDndStartTs() : int
    {
        return $this->nextDndStartTs;
    }
    /**
     * 
     *
     * @param int $nextDndStartTs
     *
     * @return self
     */
    public function setNextDndStartTs(int $nextDndStartTs) : self
    {
        $this->nextDndStartTs = $nextDndStartTs;
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
}