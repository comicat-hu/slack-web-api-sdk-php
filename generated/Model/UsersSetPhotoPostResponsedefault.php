<?php

namespace Comicat\Slack\Api\Model;

class UsersSetPhotoPostResponsedefault
{
    /**
     * possibly DEV/QA only
     *
     * @var string
     */
    protected $debugStep;
    /**
     * possibly DEV/QA only
     *
     * @var string
     */
    protected $dims;
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
     * possibly DEV/QA only
     *
     * @var int
     */
    protected $timeIdent;
    /**
     * possibly DEV/QA only
     *
     * @return string
     */
    public function getDebugStep() : string
    {
        return $this->debugStep;
    }
    /**
     * possibly DEV/QA only
     *
     * @param string $debugStep
     *
     * @return self
     */
    public function setDebugStep(string $debugStep) : self
    {
        $this->debugStep = $debugStep;
        return $this;
    }
    /**
     * possibly DEV/QA only
     *
     * @return string
     */
    public function getDims() : string
    {
        return $this->dims;
    }
    /**
     * possibly DEV/QA only
     *
     * @param string $dims
     *
     * @return self
     */
    public function setDims(string $dims) : self
    {
        $this->dims = $dims;
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
    /**
     * possibly DEV/QA only
     *
     * @return int
     */
    public function getTimeIdent() : int
    {
        return $this->timeIdent;
    }
    /**
     * possibly DEV/QA only
     *
     * @param int $timeIdent
     *
     * @return self
     */
    public function setTimeIdent(int $timeIdent) : self
    {
        $this->timeIdent = $timeIdent;
        return $this;
    }
}