<?php

namespace Comicat\Slack\Api\Model;

class RemindersAddPostResponse200
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
     * @var ObjsReminder
     */
    protected $reminder;
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
     * @return ObjsReminder
     */
    public function getReminder() : ObjsReminder
    {
        return $this->reminder;
    }
    /**
     * 
     *
     * @param ObjsReminder $reminder
     *
     * @return self
     */
    public function setReminder(ObjsReminder $reminder) : self
    {
        $this->reminder = $reminder;
        return $this;
    }
}