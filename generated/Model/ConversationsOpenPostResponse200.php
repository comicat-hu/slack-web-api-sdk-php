<?php

namespace Comicat\Slack\Api\Model;

class ConversationsOpenPostResponse200
{
    /**
     * 
     *
     * @var bool
     */
    protected $alreadyOpen;
    /**
     * 
     *
     * @var mixed
     */
    protected $channel;
    /**
     * 
     *
     * @var bool
     */
    protected $noOp;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @return bool
     */
    public function getAlreadyOpen() : bool
    {
        return $this->alreadyOpen;
    }
    /**
     * 
     *
     * @param bool $alreadyOpen
     *
     * @return self
     */
    public function setAlreadyOpen(bool $alreadyOpen) : self
    {
        $this->alreadyOpen = $alreadyOpen;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getChannel()
    {
        return $this->channel;
    }
    /**
     * 
     *
     * @param mixed $channel
     *
     * @return self
     */
    public function setChannel($channel) : self
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getNoOp() : bool
    {
        return $this->noOp;
    }
    /**
     * 
     *
     * @param bool $noOp
     *
     * @return self
     */
    public function setNoOp(bool $noOp) : self
    {
        $this->noOp = $noOp;
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