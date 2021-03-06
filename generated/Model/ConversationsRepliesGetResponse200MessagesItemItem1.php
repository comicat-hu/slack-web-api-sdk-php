<?php

namespace Comicat\Slack\Api\Model;

class ConversationsRepliesGetResponse200MessagesItemItem1
{
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
    protected $parentUserId;
    /**
     * 
     *
     * @var string
     */
    protected $sourceTeam;
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
}