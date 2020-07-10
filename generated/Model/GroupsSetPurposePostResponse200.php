<?php

namespace Comicat\Slack\Api\Model;

class GroupsSetPurposePostResponse200
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
     * @var string
     */
    protected $purpose;
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
    public function getPurpose() : string
    {
        return $this->purpose;
    }
    /**
     * 
     *
     * @param string $purpose
     *
     * @return self
     */
    public function setPurpose(string $purpose) : self
    {
        $this->purpose = $purpose;
        return $this;
    }
}