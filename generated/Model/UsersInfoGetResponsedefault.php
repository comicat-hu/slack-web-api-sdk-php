<?php

namespace Comicat\Slack\Api\Model;

class UsersInfoGetResponsedefault
{
    /**
     * 
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
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @return string
     */
    public function getCallstack() : string
    {
        return $this->callstack;
    }
    /**
     * 
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
}