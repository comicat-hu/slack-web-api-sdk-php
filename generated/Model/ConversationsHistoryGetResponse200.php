<?php

namespace Comicat\Slack\Api\Model;

class ConversationsHistoryGetResponse200
{
    /**
     * 
     *
     * @var int
     */
    protected $channelActionsCount;
    /**
     * 
     *
     * @var mixed
     */
    protected $channelActionsTs;
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
     * @var int
     */
    protected $pinCount;
    /**
     * 
     *
     * @return int
     */
    public function getChannelActionsCount() : int
    {
        return $this->channelActionsCount;
    }
    /**
     * 
     *
     * @param int $channelActionsCount
     *
     * @return self
     */
    public function setChannelActionsCount(int $channelActionsCount) : self
    {
        $this->channelActionsCount = $channelActionsCount;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getChannelActionsTs()
    {
        return $this->channelActionsTs;
    }
    /**
     * 
     *
     * @param mixed $channelActionsTs
     *
     * @return self
     */
    public function setChannelActionsTs($channelActionsTs) : self
    {
        $this->channelActionsTs = $channelActionsTs;
        return $this;
    }
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
    /**
     * 
     *
     * @return int
     */
    public function getPinCount() : int
    {
        return $this->pinCount;
    }
    /**
     * 
     *
     * @param int $pinCount
     *
     * @return self
     */
    public function setPinCount(int $pinCount) : self
    {
        $this->pinCount = $pinCount;
        return $this;
    }
}