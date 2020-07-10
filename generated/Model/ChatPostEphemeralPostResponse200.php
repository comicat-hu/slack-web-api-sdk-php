<?php

namespace Comicat\Slack\Api\Model;

class ChatPostEphemeralPostResponse200
{
    /**
     * 
     *
     * @var string
     */
    protected $messageTs;
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
    public function getMessageTs() : string
    {
        return $this->messageTs;
    }
    /**
     * 
     *
     * @param string $messageTs
     *
     * @return self
     */
    public function setMessageTs(string $messageTs) : self
    {
        $this->messageTs = $messageTs;
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