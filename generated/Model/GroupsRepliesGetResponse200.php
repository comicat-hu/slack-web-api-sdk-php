<?php

namespace Comicat\Slack\Api\Model;

class GroupsRepliesGetResponse200
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
     * @var ObjsMessage[]
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
     * @return ObjsMessage[]
     */
    public function getMessages() : array
    {
        return $this->messages;
    }
    /**
     * 
     *
     * @param ObjsMessage[] $messages
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