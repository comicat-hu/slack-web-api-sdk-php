<?php

namespace Comicat\Slack\Api\Model;

class ChatScheduledMessagesListGetResponse200ScheduledMessagesItem
{
    /**
     * 
     *
     * @var string
     */
    protected $channelId;
    /**
     * 
     *
     * @var int
     */
    protected $dateCreated;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $postAt;
    /**
     * 
     *
     * @var string
     */
    protected $text;
    /**
     * 
     *
     * @return string
     */
    public function getChannelId() : string
    {
        return $this->channelId;
    }
    /**
     * 
     *
     * @param string $channelId
     *
     * @return self
     */
    public function setChannelId(string $channelId) : self
    {
        $this->channelId = $channelId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDateCreated() : int
    {
        return $this->dateCreated;
    }
    /**
     * 
     *
     * @param int $dateCreated
     *
     * @return self
     */
    public function setDateCreated(int $dateCreated) : self
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPostAt() : int
    {
        return $this->postAt;
    }
    /**
     * 
     *
     * @param int $postAt
     *
     * @return self
     */
    public function setPostAt(int $postAt) : self
    {
        $this->postAt = $postAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * 
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->text = $text;
        return $this;
    }
}