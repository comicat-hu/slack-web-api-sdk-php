<?php

namespace Comicat\Slack\Api\Model;

class ObjsReminder
{
    /**
     * 
     *
     * @var int
     */
    protected $completeTs;
    /**
     * 
     *
     * @var string
     */
    protected $creator;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var bool
     */
    protected $recurring;
    /**
     * 
     *
     * @var string
     */
    protected $text;
    /**
     * 
     *
     * @var int
     */
    protected $time;
    /**
     * 
     *
     * @var string
     */
    protected $user;
    /**
     * 
     *
     * @return int
     */
    public function getCompleteTs() : int
    {
        return $this->completeTs;
    }
    /**
     * 
     *
     * @param int $completeTs
     *
     * @return self
     */
    public function setCompleteTs(int $completeTs) : self
    {
        $this->completeTs = $completeTs;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreator() : string
    {
        return $this->creator;
    }
    /**
     * 
     *
     * @param string $creator
     *
     * @return self
     */
    public function setCreator(string $creator) : self
    {
        $this->creator = $creator;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRecurring() : bool
    {
        return $this->recurring;
    }
    /**
     * 
     *
     * @param bool $recurring
     *
     * @return self
     */
    public function setRecurring(bool $recurring) : self
    {
        $this->recurring = $recurring;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * 
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->text = $text;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTime() : int
    {
        return $this->time;
    }
    /**
     * 
     *
     * @param int $time
     *
     * @return self
     */
    public function setTime(int $time) : self
    {
        $this->time = $time;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUser() : string
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user) : self
    {
        $this->user = $user;
        return $this;
    }
}