<?php

namespace Comicat\Slack\Api\Model;

class ConversationsOpenPostResponse200ChannelItem1
{
    /**
     * 
     *
     * @var string
     */
    protected $created;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var bool
     */
    protected $isIm;
    /**
     * 
     *
     * @var bool
     */
    protected $isOpen;
    /**
     * 
     *
     * @var string
     */
    protected $lastRead;
    /**
     * 
     *
     * @var ObjsMessage
     */
    protected $latest;
    /**
     * 
     *
     * @var float
     */
    protected $unreadCount;
    /**
     * 
     *
     * @var float
     */
    protected $unreadCountDisplay;
    /**
     * 
     *
     * @var string
     */
    protected $user;
    /**
     * 
     *
     * @return string
     */
    public function getCreated() : string
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param string $created
     *
     * @return self
     */
    public function setCreated(string $created) : self
    {
        $this->created = $created;
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
     * @return bool
     */
    public function getIsIm() : bool
    {
        return $this->isIm;
    }
    /**
     * 
     *
     * @param bool $isIm
     *
     * @return self
     */
    public function setIsIm(bool $isIm) : self
    {
        $this->isIm = $isIm;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsOpen() : bool
    {
        return $this->isOpen;
    }
    /**
     * 
     *
     * @param bool $isOpen
     *
     * @return self
     */
    public function setIsOpen(bool $isOpen) : self
    {
        $this->isOpen = $isOpen;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastRead() : string
    {
        return $this->lastRead;
    }
    /**
     * 
     *
     * @param string $lastRead
     *
     * @return self
     */
    public function setLastRead(string $lastRead) : self
    {
        $this->lastRead = $lastRead;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsMessage
     */
    public function getLatest() : ObjsMessage
    {
        return $this->latest;
    }
    /**
     * 
     *
     * @param ObjsMessage $latest
     *
     * @return self
     */
    public function setLatest(ObjsMessage $latest) : self
    {
        $this->latest = $latest;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getUnreadCount() : float
    {
        return $this->unreadCount;
    }
    /**
     * 
     *
     * @param float $unreadCount
     *
     * @return self
     */
    public function setUnreadCount(float $unreadCount) : self
    {
        $this->unreadCount = $unreadCount;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getUnreadCountDisplay() : float
    {
        return $this->unreadCountDisplay;
    }
    /**
     * 
     *
     * @param float $unreadCountDisplay
     *
     * @return self
     */
    public function setUnreadCountDisplay(float $unreadCountDisplay) : self
    {
        $this->unreadCountDisplay = $unreadCountDisplay;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUser() : string
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user) : self
    {
        $this->user = $user;
        return $this;
    }
}