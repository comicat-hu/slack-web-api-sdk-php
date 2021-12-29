<?php

namespace Comicat\Slack\Api\Model;

class ConversationsJoinPostResponsedefault
{
    /**
     * Note: PHP callstack is only visible in dev/qa
     *
     * @var string
     */
    protected $callstack;
    /**
     * 
     *
     * @var string
     */
    protected $error;
    /**
     * 
     *
     * @var string
     */
    protected $needed;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @var string
     */
    protected $provided;
    /**
     * Note: PHP callstack is only visible in dev/qa
     *
     * @return string
     */
    public function getCallstack() : string
    {
        return $this->callstack;
    }
    /**
     * Note: PHP callstack is only visible in dev/qa
     *
     * @param string $callstack
     *
     * @return self
     */
    public function setCallstack(string $callstack) : self
    {
        $this->callstack = $callstack;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getError() : string
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(string $error) : self
    {
        $this->error = $error;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNeeded() : string
    {
        return $this->needed;
    }
    /**
     * 
     *
     * @param string $needed
     *
     * @return self
     */
    public function setNeeded(string $needed) : self
    {
        $this->needed = $needed;
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
     * @return string
     */
    public function getProvided() : string
    {
        return $this->provided;
    }
    /**
     * 
     *
     * @param string $provided
     *
     * @return self
     */
    public function setProvided(string $provided) : self
    {
        $this->provided = $provided;
        return $this;
    }
}