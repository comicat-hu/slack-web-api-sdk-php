<?php

namespace Comicat\Slack\Api\Model;

class ObjsConversationItem0
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
     * @var string[]
     */
    protected $connectedTeamIds;
    /**
     * 
     *
     * @var string
     */
    protected $conversationHostId;
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
     * @var ObjsConversationItem0DisplayCounts
     */
    protected $displayCounts;
    /**
     * 
     *
     * @var string
     */
    protected $enterpriseId;
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
     * @var string[]
     */
    protected $internalTeamIds;
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
    protected $isGeneral;
    /**
     * 
     *
     * @var bool
     */
    protected $isGlobalShared;
    /**
     * 
     *
     * @var bool
     */
    protected $isGroup;
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
    protected $isOpen;
    /**
     * 
     *
     * @var bool
     */
    protected $isOrgDefault;
    /**
     * 
     *
     * @var bool
     */
    protected $isOrgMandatory;
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
    protected $isStarred;
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
     * @var mixed
     */
    protected $parentConversation;
    /**
     * 
     *
     * @var string[]
     */
    protected $pendingConnectedTeamIds;
    /**
     * 
     *
     * @var string[]
     */
    protected $pendingShared;
    /**
     * 
     *
     * @var int
     */
    protected $pinCount;
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
     * @var ObjsConversationItem0Purpose
     */
    protected $purpose;
    /**
     * 
     *
     * @var string[]
     */
    protected $sharedTeamIds;
    /**
     * 
     *
     * @var ObjsConversationItem0SharesItem[]
     */
    protected $shares;
    /**
     * 
     *
     * @var int
     */
    protected $timezoneCount;
    /**
     * 
     *
     * @var ObjsConversationItem0Topic
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
     * @var string
     */
    protected $useCase;
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
     * @return string[]
     */
    public function getConnectedTeamIds() : array
    {
        return $this->connectedTeamIds;
    }
    /**
     * 
     *
     * @param string[] $connectedTeamIds
     *
     * @return self
     */
    public function setConnectedTeamIds(array $connectedTeamIds) : self
    {
        $this->connectedTeamIds = $connectedTeamIds;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConversationHostId() : string
    {
        return $this->conversationHostId;
    }
    /**
     * 
     *
     * @param string $conversationHostId
     *
     * @return self
     */
    public function setConversationHostId(string $conversationHostId) : self
    {
        $this->conversationHostId = $conversationHostId;
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
     * @return ObjsConversationItem0DisplayCounts
     */
    public function getDisplayCounts() : ObjsConversationItem0DisplayCounts
    {
        return $this->displayCounts;
    }
    /**
     * 
     *
     * @param ObjsConversationItem0DisplayCounts $displayCounts
     *
     * @return self
     */
    public function setDisplayCounts(ObjsConversationItem0DisplayCounts $displayCounts) : self
    {
        $this->displayCounts = $displayCounts;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEnterpriseId() : string
    {
        return $this->enterpriseId;
    }
    /**
     * 
     *
     * @param string $enterpriseId
     *
     * @return self
     */
    public function setEnterpriseId(string $enterpriseId) : self
    {
        $this->enterpriseId = $enterpriseId;
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
     * @return string[]
     */
    public function getInternalTeamIds() : array
    {
        return $this->internalTeamIds;
    }
    /**
     * 
     *
     * @param string[] $internalTeamIds
     *
     * @return self
     */
    public function setInternalTeamIds(array $internalTeamIds) : self
    {
        $this->internalTeamIds = $internalTeamIds;
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
    public function getIsGlobalShared() : bool
    {
        return $this->isGlobalShared;
    }
    /**
     * 
     *
     * @param bool $isGlobalShared
     *
     * @return self
     */
    public function setIsGlobalShared(bool $isGlobalShared) : self
    {
        $this->isGlobalShared = $isGlobalShared;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsGroup() : bool
    {
        return $this->isGroup;
    }
    /**
     * 
     *
     * @param bool $isGroup
     *
     * @return self
     */
    public function setIsGroup(bool $isGroup) : self
    {
        $this->isGroup = $isGroup;
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
    public function getIsOrgDefault() : bool
    {
        return $this->isOrgDefault;
    }
    /**
     * 
     *
     * @param bool $isOrgDefault
     *
     * @return self
     */
    public function setIsOrgDefault(bool $isOrgDefault) : self
    {
        $this->isOrgDefault = $isOrgDefault;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsOrgMandatory() : bool
    {
        return $this->isOrgMandatory;
    }
    /**
     * 
     *
     * @param bool $isOrgMandatory
     *
     * @return self
     */
    public function setIsOrgMandatory(bool $isOrgMandatory) : self
    {
        $this->isOrgMandatory = $isOrgMandatory;
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
     * @return string[]
     */
    public function getPendingConnectedTeamIds() : array
    {
        return $this->pendingConnectedTeamIds;
    }
    /**
     * 
     *
     * @param string[] $pendingConnectedTeamIds
     *
     * @return self
     */
    public function setPendingConnectedTeamIds(array $pendingConnectedTeamIds) : self
    {
        $this->pendingConnectedTeamIds = $pendingConnectedTeamIds;
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
     * @return ObjsConversationItem0Purpose
     */
    public function getPurpose() : ObjsConversationItem0Purpose
    {
        return $this->purpose;
    }
    /**
     * 
     *
     * @param ObjsConversationItem0Purpose $purpose
     *
     * @return self
     */
    public function setPurpose(ObjsConversationItem0Purpose $purpose) : self
    {
        $this->purpose = $purpose;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getSharedTeamIds() : array
    {
        return $this->sharedTeamIds;
    }
    /**
     * 
     *
     * @param string[] $sharedTeamIds
     *
     * @return self
     */
    public function setSharedTeamIds(array $sharedTeamIds) : self
    {
        $this->sharedTeamIds = $sharedTeamIds;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsConversationItem0SharesItem[]
     */
    public function getShares() : array
    {
        return $this->shares;
    }
    /**
     * 
     *
     * @param ObjsConversationItem0SharesItem[] $shares
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
    public function getTimezoneCount() : int
    {
        return $this->timezoneCount;
    }
    /**
     * 
     *
     * @param int $timezoneCount
     *
     * @return self
     */
    public function setTimezoneCount(int $timezoneCount) : self
    {
        $this->timezoneCount = $timezoneCount;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsConversationItem0Topic
     */
    public function getTopic() : ObjsConversationItem0Topic
    {
        return $this->topic;
    }
    /**
     * 
     *
     * @param ObjsConversationItem0Topic $topic
     *
     * @return self
     */
    public function setTopic(ObjsConversationItem0Topic $topic) : self
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
    /**
     * 
     *
     * @return string
     */
    public function getUseCase() : string
    {
        return $this->useCase;
    }
    /**
     * 
     *
     * @param string $useCase
     *
     * @return self
     */
    public function setUseCase(string $useCase) : self
    {
        $this->useCase = $useCase;
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