<?php

namespace Comicat\Slack\Api\Model;

class AdminConversationsSearchGetResponse200
{
    /**
     * 
     *
     * @var ObjsChannel[]
     */
    protected $channels;
    /**
     * 
     *
     * @var string
     */
    protected $nextCursor;
    /**
     * 
     *
     * @return ObjsChannel[]
     */
    public function getChannels() : array
    {
        return $this->channels;
    }
    /**
     * 
     *
     * @param ObjsChannel[] $channels
     *
     * @return self
     */
    public function setChannels(array $channels) : self
    {
        $this->channels = $channels;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNextCursor() : string
    {
        return $this->nextCursor;
    }
    /**
     * 
     *
     * @param string $nextCursor
     *
     * @return self
     */
    public function setNextCursor(string $nextCursor) : self
    {
        $this->nextCursor = $nextCursor;
        return $this;
    }
}