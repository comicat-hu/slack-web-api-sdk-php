<?php

namespace Comicat\Slack\Api\Model;

class ObjsMessage
{
    /**
     * 
     *
     * @var ObjsMessageAttachmentsItem[]
     */
    protected $attachments;
    /**
     * This is a very loose definition, in the future, we'll populate this with deeper schema in this definition namespace.
     *
     * @var BlocksItem[]
     */
    protected $blocks;
    /**
     * 
     *
     * @var mixed
     */
    protected $botId;
    /**
     * 
     *
     * @var ObjsBotProfile
     */
    protected $botProfile;
    /**
     * 
     *
     * @var string
     */
    protected $clientMsgId;
    /**
     * 
     *
     * @var ObjsComment
     */
    protected $comment;
    /**
     * 
     *
     * @var bool
     */
    protected $displayAsBot;
    /**
     * 
     *
     * @var ObjsFile
     */
    protected $file;
    /**
     * 
     *
     * @var ObjsFile[]
     */
    protected $files;
    /**
     * 
     *
     * @var ObjsMessageIcons
     */
    protected $icons;
    /**
     * 
     *
     * @var string
     */
    protected $inviter;
    /**
     * 
     *
     * @var bool
     */
    protected $isDelayedMessage;
    /**
     * 
     *
     * @var bool
     */
    protected $isIntro;
    /**
     * 
     *
     * @var bool
     */
    protected $isStarred;
    /**
     * 
     *
     * @var string
     */
    protected $lastRead;
    /**
     * 
     *
     * @var string
     */
    protected $latestReply;
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
    protected $oldName;
    /**
     * 
     *
     * @var string
     */
    protected $parentUserId;
    /**
     * 
     *
     * @var string
     */
    protected $permalink;
    /**
     * 
     *
     * @var string[]
     */
    protected $pinnedTo;
    /**
     * 
     *
     * @var string
     */
    protected $purpose;
    /**
     * 
     *
     * @var ObjsReaction[]
     */
    protected $reactions;
    /**
     * 
     *
     * @var int
     */
    protected $replyCount;
    /**
     * 
     *
     * @var string[]
     */
    protected $replyUsers;
    /**
     * 
     *
     * @var int
     */
    protected $replyUsersCount;
    /**
     * 
     *
     * @var string
     */
    protected $sourceTeam;
    /**
     * 
     *
     * @var bool
     */
    protected $subscribed;
    /**
     * 
     *
     * @var string
     */
    protected $subtype;
    /**
     * 
     *
     * @var string
     */
    protected $team;
    /**
     * 
     *
     * @var string
     */
    protected $text;
    /**
     * 
     *
     * @var string
     */
    protected $threadTs;
    /**
     * 
     *
     * @var string
     */
    protected $topic;
    /**
     * 
     *
     * @var string
     */
    protected $ts;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var int
     */
    protected $unreadCount;
    /**
     * 
     *
     * @var bool
     */
    protected $upload;
    /**
     * 
     *
     * @var string
     */
    protected $user;
    /**
     * 
     *
     * @var ObjsUserProfileShort
     */
    protected $userProfile;
    /**
     * 
     *
     * @var string
     */
    protected $userTeam;
    /**
     * 
     *
     * @var string
     */
    protected $username;
    /**
     * 
     *
     * @return ObjsMessageAttachmentsItem[]
     */
    public function getAttachments() : array
    {
        return $this->attachments;
    }
    /**
     * 
     *
     * @param ObjsMessageAttachmentsItem[] $attachments
     *
     * @return self
     */
    public function setAttachments(array $attachments) : self
    {
        $this->attachments = $attachments;
        return $this;
    }
    /**
     * This is a very loose definition, in the future, we'll populate this with deeper schema in this definition namespace.
     *
     * @return BlocksItem[]
     */
    public function getBlocks() : array
    {
        return $this->blocks;
    }
    /**
     * This is a very loose definition, in the future, we'll populate this with deeper schema in this definition namespace.
     *
     * @param BlocksItem[] $blocks
     *
     * @return self
     */
    public function setBlocks(array $blocks) : self
    {
        $this->blocks = $blocks;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getBotId()
    {
        return $this->botId;
    }
    /**
     * 
     *
     * @param mixed $botId
     *
     * @return self
     */
    public function setBotId($botId) : self
    {
        $this->botId = $botId;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsBotProfile
     */
    public function getBotProfile() : ObjsBotProfile
    {
        return $this->botProfile;
    }
    /**
     * 
     *
     * @param ObjsBotProfile $botProfile
     *
     * @return self
     */
    public function setBotProfile(ObjsBotProfile $botProfile) : self
    {
        $this->botProfile = $botProfile;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getClientMsgId() : string
    {
        return $this->clientMsgId;
    }
    /**
     * 
     *
     * @param string $clientMsgId
     *
     * @return self
     */
    public function setClientMsgId(string $clientMsgId) : self
    {
        $this->clientMsgId = $clientMsgId;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsComment
     */
    public function getComment() : ObjsComment
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param ObjsComment $comment
     *
     * @return self
     */
    public function setComment(ObjsComment $comment) : self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDisplayAsBot() : bool
    {
        return $this->displayAsBot;
    }
    /**
     * 
     *
     * @param bool $displayAsBot
     *
     * @return self
     */
    public function setDisplayAsBot(bool $displayAsBot) : self
    {
        $this->displayAsBot = $displayAsBot;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsFile
     */
    public function getFile() : ObjsFile
    {
        return $this->file;
    }
    /**
     * 
     *
     * @param ObjsFile $file
     *
     * @return self
     */
    public function setFile(ObjsFile $file) : self
    {
        $this->file = $file;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsFile[]
     */
    public function getFiles() : array
    {
        return $this->files;
    }
    /**
     * 
     *
     * @param ObjsFile[] $files
     *
     * @return self
     */
    public function setFiles(array $files) : self
    {
        $this->files = $files;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsMessageIcons
     */
    public function getIcons() : ObjsMessageIcons
    {
        return $this->icons;
    }
    /**
     * 
     *
     * @param ObjsMessageIcons $icons
     *
     * @return self
     */
    public function setIcons(ObjsMessageIcons $icons) : self
    {
        $this->icons = $icons;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInviter() : string
    {
        return $this->inviter;
    }
    /**
     * 
     *
     * @param string $inviter
     *
     * @return self
     */
    public function setInviter(string $inviter) : self
    {
        $this->inviter = $inviter;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsDelayedMessage() : bool
    {
        return $this->isDelayedMessage;
    }
    /**
     * 
     *
     * @param bool $isDelayedMessage
     *
     * @return self
     */
    public function setIsDelayedMessage(bool $isDelayedMessage) : self
    {
        $this->isDelayedMessage = $isDelayedMessage;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsIntro() : bool
    {
        return $this->isIntro;
    }
    /**
     * 
     *
     * @param bool $isIntro
     *
     * @return self
     */
    public function setIsIntro(bool $isIntro) : self
    {
        $this->isIntro = $isIntro;
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
     * @return string
     */
    public function getLatestReply() : string
    {
        return $this->latestReply;
    }
    /**
     * 
     *
     * @param string $latestReply
     *
     * @return self
     */
    public function setLatestReply(string $latestReply) : self
    {
        $this->latestReply = $latestReply;
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
    public function getOldName() : string
    {
        return $this->oldName;
    }
    /**
     * 
     *
     * @param string $oldName
     *
     * @return self
     */
    public function setOldName(string $oldName) : self
    {
        $this->oldName = $oldName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getParentUserId() : string
    {
        return $this->parentUserId;
    }
    /**
     * 
     *
     * @param string $parentUserId
     *
     * @return self
     */
    public function setParentUserId(string $parentUserId) : self
    {
        $this->parentUserId = $parentUserId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPermalink() : string
    {
        return $this->permalink;
    }
    /**
     * 
     *
     * @param string $permalink
     *
     * @return self
     */
    public function setPermalink(string $permalink) : self
    {
        $this->permalink = $permalink;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getPinnedTo() : array
    {
        return $this->pinnedTo;
    }
    /**
     * 
     *
     * @param string[] $pinnedTo
     *
     * @return self
     */
    public function setPinnedTo(array $pinnedTo) : self
    {
        $this->pinnedTo = $pinnedTo;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPurpose() : string
    {
        return $this->purpose;
    }
    /**
     * 
     *
     * @param string $purpose
     *
     * @return self
     */
    public function setPurpose(string $purpose) : self
    {
        $this->purpose = $purpose;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsReaction[]
     */
    public function getReactions() : array
    {
        return $this->reactions;
    }
    /**
     * 
     *
     * @param ObjsReaction[] $reactions
     *
     * @return self
     */
    public function setReactions(array $reactions) : self
    {
        $this->reactions = $reactions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReplyCount() : int
    {
        return $this->replyCount;
    }
    /**
     * 
     *
     * @param int $replyCount
     *
     * @return self
     */
    public function setReplyCount(int $replyCount) : self
    {
        $this->replyCount = $replyCount;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getReplyUsers() : array
    {
        return $this->replyUsers;
    }
    /**
     * 
     *
     * @param string[] $replyUsers
     *
     * @return self
     */
    public function setReplyUsers(array $replyUsers) : self
    {
        $this->replyUsers = $replyUsers;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReplyUsersCount() : int
    {
        return $this->replyUsersCount;
    }
    /**
     * 
     *
     * @param int $replyUsersCount
     *
     * @return self
     */
    public function setReplyUsersCount(int $replyUsersCount) : self
    {
        $this->replyUsersCount = $replyUsersCount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSourceTeam() : string
    {
        return $this->sourceTeam;
    }
    /**
     * 
     *
     * @param string $sourceTeam
     *
     * @return self
     */
    public function setSourceTeam(string $sourceTeam) : self
    {
        $this->sourceTeam = $sourceTeam;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSubscribed() : bool
    {
        return $this->subscribed;
    }
    /**
     * 
     *
     * @param bool $subscribed
     *
     * @return self
     */
    public function setSubscribed(bool $subscribed) : self
    {
        $this->subscribed = $subscribed;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSubtype() : string
    {
        return $this->subtype;
    }
    /**
     * 
     *
     * @param string $subtype
     *
     * @return self
     */
    public function setSubtype(string $subtype) : self
    {
        $this->subtype = $subtype;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeam() : string
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param string $team
     *
     * @return self
     */
    public function setTeam(string $team) : self
    {
        $this->team = $team;
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
    /**
     * 
     *
     * @return string
     */
    public function getThreadTs() : string
    {
        return $this->threadTs;
    }
    /**
     * 
     *
     * @param string $threadTs
     *
     * @return self
     */
    public function setThreadTs(string $threadTs) : self
    {
        $this->threadTs = $threadTs;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTopic() : string
    {
        return $this->topic;
    }
    /**
     * 
     *
     * @param string $topic
     *
     * @return self
     */
    public function setTopic(string $topic) : self
    {
        $this->topic = $topic;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTs() : string
    {
        return $this->ts;
    }
    /**
     * 
     *
     * @param string $ts
     *
     * @return self
     */
    public function setTs(string $ts) : self
    {
        $this->ts = $ts;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
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
     * @return bool
     */
    public function getUpload() : bool
    {
        return $this->upload;
    }
    /**
     * 
     *
     * @param bool $upload
     *
     * @return self
     */
    public function setUpload(bool $upload) : self
    {
        $this->upload = $upload;
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
     * @return ObjsUserProfileShort
     */
    public function getUserProfile() : ObjsUserProfileShort
    {
        return $this->userProfile;
    }
    /**
     * 
     *
     * @param ObjsUserProfileShort $userProfile
     *
     * @return self
     */
    public function setUserProfile(ObjsUserProfileShort $userProfile) : self
    {
        $this->userProfile = $userProfile;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserTeam() : string
    {
        return $this->userTeam;
    }
    /**
     * 
     *
     * @param string $userTeam
     *
     * @return self
     */
    public function setUserTeam(string $userTeam) : self
    {
        $this->userTeam = $userTeam;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username) : self
    {
        $this->username = $username;
        return $this;
    }
}