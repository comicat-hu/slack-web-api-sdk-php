<?php

namespace Comicat\Slack\Api\Model;

class ConversationsClosePostResponse200
{
    /**
     * 
     *
     * @var bool
     */
    protected $alreadyClosed;
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
    public function getAlreadyClosed() : bool
    {
        return $this->alreadyClosed;
    }
    /**
     * 
     *
     * @param bool $alreadyClosed
     *
     * @return self
     */
    public function setAlreadyClosed(bool $alreadyClosed) : self
    {
        $this->alreadyClosed = $alreadyClosed;
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