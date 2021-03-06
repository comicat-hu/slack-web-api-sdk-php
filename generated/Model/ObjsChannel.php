<?php

namespace Comicat\Slack\Api\Model;

class ObjsChannel
{
    /**
     * 
     *
     * @var string
     */
    protected $acceptedUser;
    /**
     * 
     *
     * @var int
     */
    protected $created;
    /**
     * 
     *
     * @var string
     */
    protected $creator;
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
    protected $isChannel;
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
    protected $isGeneral;
    /**
     * 
     *
     * @var bool
     */
    protected $isMember;
    /**
     * 
     *
     * @var int
     */
    protected $isMoved;
    /**
     * 
     *
     * @var bool
     */
    protected $isMpim;
    /**
     * 
     *
     * @var bool
     */
    protected $isNonThreadable;
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
    protected $isPendingExtShared;
    /**
     * 
     *
     * @var bool
     */
    protected $isPrivate;
    /**
     * 
     *
     * @var bool
     */
    protected $isReadOnly;
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
    protected $isThreadOnly;
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
     * @var string[]
     */
    protected $members;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $nameNormalized;
    /**
     * 
     *
     * @var int
     */
    protected $numMembers;
    /**
     * 
     *
     * @var string[]
     */
    protected $pendingShared;
    /**
     * 
     *
     * @var string[]
     */
    protected $previousNames;
    /**
     * 
     *
     * @var float
     */
    protected $priority;
    /**
     * 
     *
     * @var ObjsChannelPurpose
     */
    protected $purpose;
    /**
     * 
     *
     * @var ObjsChannelTopic
     */
    protected $topic;
    /**
     * 
     *
     * @var int
     */
    protected $unlinked;
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
     * @return string
     */
    public function getAcceptedUser() : string
    {
        return $this->acceptedUser;
    }
    /**
     * 
     *
     * @param string $acceptedUser
     *
     * @return self
     */
    public function setAcceptedUser(string $acceptedUser) : self
    {
        $this->acceptedUser = $acceptedUser;
        return $this;
    }
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
     * @return string
     */
    public function getCreator() : string
    {
        return $this->creator;
    }
    /**
     * 
     *
     * @param string $creator
     *
     * @return self
     */
    public function setCreator(string $creator) : self
    {
        $this->creator = $creator;
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
    public function getIsChannel() : bool
    {
        return $this->isChannel;
    }
    /**
     * 
     *
     * @param bool $isChannel
     *
     * @return self
     */
    public function setIsChannel(bool $isChannel) : self
    {
        $this->isChannel = $isChannel;
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
    public function getIsGeneral() : bool
    {
        return $this->isGeneral;
    }
    /**
     * 
     *
     * @param bool $isGeneral
     *
     * @return self
     */
    public function setIsGeneral(bool $isGeneral) : self
    {
        $this->isGeneral = $isGeneral;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsMember() : bool
    {
        return $this->isMember;
    }
    /**
     * 
     *
     * @param bool $isMember
     *
     * @return self
     */
    public function setIsMember(bool $isMember) : self
    {
        $this->isMember = $isMember;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getIsMoved() : int
    {
        return $this->isMoved;
    }
    /**
     * 
     *
     * @param int $isMoved
     *
     * @return self
     */
    public function setIsMoved(int $isMoved) : self
    {
        $this->isMoved = $isMoved;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsMpim() : bool
    {
        return $this->isMpim;
    }
    /**
     * 
     *
     * @param bool $isMpim
     *
     * @return self
     */
    public function setIsMpim(bool $isMpim) : self
    {
        $this->isMpim = $isMpim;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsNonThreadable() : bool
    {
        return $this->isNonThreadable;
    }
    /**
     * 
     *
     * @param bool $isNonThreadable
     *
     * @return self
     */
    public function setIsNonThreadable(bool $isNonThreadable) : self
    {
        $this->isNonThreadable = $isNonThreadable;
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
    public function getIsPendingExtShared() : bool
    {
        return $this->isPendingExtShared;
    }
    /**
     * 
     *
     * @param bool $isPendingExtShared
     *
     * @return self
     */
    public function setIsPendingExtShared(bool $isPendingExtShared) : self
    {
        $this->isPendingExtShared = $isPendingExtShared;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsPrivate() : bool
    {
        return $this->isPrivate;
    }
    /**
     * 
     *
     * @param bool $isPrivate
     *
     * @return self
     */
    public function setIsPrivate(bool $isPrivate) : self
    {
        $this->isPrivate = $isPrivate;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsReadOnly() : bool
    {
        return $this->isReadOnly;
    }
    /**
     * 
     *
     * @param bool $isReadOnly
     *
     * @return self
     */
    public function setIsReadOnly(bool $isReadOnly) : self
    {
        $this->isReadOnly = $isReadOnly;
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
    public function getIsThreadOnly() : bool
    {
        return $this->isThreadOnly;
    }
    /**
     * 
     *
     * @param bool $isThreadOnly
     *
     * @return self
     */
    public function setIsThreadOnly(bool $isThreadOnly) : self
    {
        $this->isThreadOnly = $isThreadOnly;
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
     * @return string[]
     */
    public function getMembers() : array
    {
        return $this->members;
    }
    /**
     * 
     *
     * @param string[] $members
     *
     * @return self
     */
    public function setMembers(array $members) : self
    {
        $this->members = $members;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNameNormalized() : string
    {
        return $this->nameNormalized;
    }
    /**
     * 
     *
     * @param string $nameNormalized
     *
     * @return self
     */
    public function setNameNormalized(string $nameNormalized) : self
    {
        $this->nameNormalized = $nameNormalized;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNumMembers() : int
    {
        return $this->numMembers;
    }
    /**
     * 
     *
     * @param int $numMembers
     *
     * @return self
     */
    public function setNumMembers(int $numMembers) : self
    {
        $this->numMembers = $numMembers;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getPendingShared() : array
    {
        return $this->pendingShared;
    }
    /**
     * 
     *
     * @param string[] $pendingShared
     *
     * @return self
     */
    public function setPendingShared(array $pendingShared) : self
    {
        $this->pendingShared = $pendingShared;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getPreviousNames() : array
    {
        return $this->previousNames;
    }
    /**
     * 
     *
     * @param string[] $previousNames
     *
     * @return self
     */
    public function setPreviousNames(array $previousNames) : self
    {
        $this->previousNames = $previousNames;
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
     * @return ObjsChannelPurpose
     */
    public function getPurpose() : ObjsChannelPurpose
    {
        return $this->purpose;
    }
    /**
     * 
     *
     * @param ObjsChannelPurpose $purpose
     *
     * @return self
     */
    public function setPurpose(ObjsChannelPurpose $purpose) : self
    {
        $this->purpose = $purpose;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsChannelTopic
     */
    public function getTopic() : ObjsChannelTopic
    {
        return $this->topic;
    }
    /**
     * 
     *
     * @param ObjsChannelTopic $topic
     *
     * @return self
     */
    public function setTopic(ObjsChannelTopic $topic) : self
    {
        $this->topic = $topic;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUnlinked() : int
    {
        return $this->unlinked;
    }
    /**
     * 
     *
     * @param int $unlinked
     *
     * @return self
     */
    public function setUnlinked(int $unlinked) : self
    {
        $this->unlinked = $unlinked;
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
}