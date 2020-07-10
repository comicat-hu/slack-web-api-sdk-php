<?php

namespace Comicat\Slack\Api\Model;

class ObjsConversationItem2
{
    /**
     * 
     *
     * @var int
     */
    protected $created;
    /**
     * 
     *
     * @var bool
     */
    protected $hasPins;
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
    protected $isArchived;
    /**
     * 
     *
     * @var bool
     */
    protected $isExtShared;
    /**
     * 
     *
     * @var bool
     */
    protected $isFrozen;
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
     * @var bool
     */
    protected $isOrgShared;
    /**
     * 
     *
     * @var bool
     */
    protected $isShared;
    /**
     * 
     *
     * @var bool
     */
    protected $isStarred;
    /**
     * 
     *
     * @var bool
     */
    protected $isUserDeleted;
    /**
     * 
     *
     * @var string
     */
    protected $lastRead;
    /**
     * 
     *
     * @var mixed
     */
    protected $latest;
    /**
     * 
     *
     * @var mixed
     */
    protected $parentConversation;
    /**
     * 
     *
     * @var int
     */
    protected $pinCount;
    /**
     * 
     *
     * @var float
     */
    protected $priority;
    /**
     * 
     *
     * @var ObjsConversationItem2SharesItem[]
     */
    protected $shares;
    /**
     * 
     *
     * @var int
     */
    protected $unreadCount;
    /**
     * 
     *
     * @var int
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
     * @var int
     */
    protected $version;
    /**
     * 
     *
     * @return int
     */
    public function getCreated() : int
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param int $created
     *
     * @return self
     */
    public function setCreated(int $created) : self
    {
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasPins() : bool
    {
        return $this->hasPins;
    }
    /**
     * 
     *
     * @param bool $hasPins
     *
     * @return self
     */
    public function setHasPins(bool $hasPins) : self
    {
        $this->hasPins = $hasPins;
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
    public function getIsArchived() : bool
    {
        return $this->isArchived;
    }
    /**
     * 
     *
     * @param bool $isArchived
     *
     * @return self
     */
    public function setIsArchived(bool $isArchived) : self
    {
        $this->isArchived = $isArchived;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsExtShared() : bool
    {
        return $this->isExtShared;
    }
    /**
     * 
     *
     * @param bool $isExtShared
     *
     * @return self
     */
    public function setIsExtShared(bool $isExtShared) : self
    {
        $this->isExtShared = $isExtShared;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsFrozen() : bool
    {
        return $this->isFrozen;
    }
    /**
     * 
     *
     * @param bool $isFrozen
     *
     * @return self
     */
    public function setIsFrozen(bool $isFrozen) : self
    {
        $this->isFrozen = $isFrozen;
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
     * @return bool
     */
    public function getIsOrgShared() : bool
    {
        return $this->isOrgShared;
    }
    /**
     * 
     *
     * @param bool $isOrgShared
     *
     * @return self
     */
    public function setIsOrgShared(bool $isOrgShared) : self
    {
        $this->isOrgShared = $isOrgShared;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsShared() : bool
    {
        return $this->isShared;
    }
    /**
     * 
     *
     * @param bool $isShared
     *
     * @return self
     */
    public function setIsShared(bool $isShared) : self
    {
        $this->isShared = $isShared;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsStarred() : bool
    {
        return $this->isStarred;
    }
    /**
     * 
     *
     * @param bool $isStarred
     *
     * @return self
     */
    public function setIsStarred(bool $isStarred) : self
    {
        $this->isStarred = $isStarred;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsUserDeleted() : bool
    {
        return $this->isUserDeleted;
    }
    /**
     * 
     *
     * @param bool $isUserDeleted
     *
     * @return self
     */
    public function setIsUserDeleted(bool $isUserDeleted) : self
    {
        $this->isUserDeleted = $isUserDeleted;
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
     * @return mixed
     */
    public function getLatest()
    {
        return $this->latest;
    }
    /**
     * 
     *
     * @param mixed $latest
     *
     * @return self
     */
    public function setLatest($latest) : self
    {
        $this->latest = $latest;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getParentConversation()
    {
        return $this->parentConversation;
    }
    /**
     * 
     *
     * @param mixed $parentConversation
     *
     * @return self
     */
    public function setParentConversation($parentConversation) : self
    {
        $this->parentConversation = $parentConversation;
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
    /**
     * 
     *
     * @return float
     */
    public function getPriority() : float
    {
        return $this->priority;
    }
    /**
     * 
     *
     * @param float $priority
     *
     * @return self
     */
    public function setPriority(float $priority) : self
    {
        $this->priority = $priority;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsConversationItem2SharesItem[]
     */
    public function getShares() : array
    {
        return $this->shares;
    }
    /**
     * 
     *
     * @param ObjsConversationItem2SharesItem[] $shares
     *
     * @return self
     */
    public function setShares(array $shares) : self
    {
        $this->shares = $shares;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUnreadCount() : int
    {
        return $this->unreadCount;
    }
    /**
     * 
     *
     * @param int $unreadCount
     *
     * @return self
     */
    public function setUnreadCount(int $unreadCount) : self
    {
        $this->unreadCount = $unreadCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUnreadCountDisplay() : int
    {
        return $this->unreadCountDisplay;
    }
    /**
     * 
     *
     * @param int $unreadCountDisplay
     *
     * @return self
     */
    public function setUnreadCountDisplay(int $unreadCountDisplay) : self
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
    /**
     * 
     *
     * @return int
     */
    public function getVersion() : int
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param int $version
     *
     * @return self
     */
    public function setVersion(int $version) : self
    {
        $this->version = $version;
        return $this;
    }
}