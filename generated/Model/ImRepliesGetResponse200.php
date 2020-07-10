<?php

namespace Comicat\Slack\Api\Model;

class ImRepliesGetResponse200
{
    /**
     * 
     *
     * @var bool
     */
    protected $hasMore;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $messages;
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
    public function getHasMore() : bool
    {
        return $this->hasMore;
    }
    /**
     * 
     *
     * @param bool $hasMore
     *
     * @return self
     */
    public function setHasMore(bool $hasMore) : self
    {
        $this->hasMore = $hasMore;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getMessages() : array
    {
        return $this->messages;
    }
    /**
     * 
     *
     * @param mixed[] $messages
     *
     * @return self
     */
    public function setMessages(array $messages) : self
    {
        $this->messages = $messages;
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