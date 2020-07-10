<?php

namespace Comicat\Slack\Api\Model;

class RemindersListGetResponse200
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
     * @var ObjsReminder[]
     */
    protected $reminders;
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
     * @return ObjsReminder[]
     */
    public function getReminders() : array
    {
        return $this->reminders;
    }
    /**
     * 
     *
     * @param ObjsReminder[] $reminders
     *
     * @return self
     */
    public function setReminders(array $reminders) : self
    {
        $this->reminders = $reminders;
        return $this;
    }
}