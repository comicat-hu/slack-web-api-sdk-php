<?php

namespace Comicat\Slack\Api\Model;

class ObjsComment
{
    /**
     * 
     *
     * @var string
     */
    protected $comment;
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
    protected $id;
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
     * @var int
     */
    protected $numStars;
    /**
     * 
     *
     * @var mixed
     */
    protected $pinnedInfo;
    /**
     * 
     *
     * @var string[]
     */
    protected $pinnedTo;
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
    protected $timestamp;
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
    public function getComment() : string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment) : self
    {
        $this->comment = $comment;
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
     * @return int
     */
    public function getNumStars() : int
    {
        return $this->numStars;
    }
    /**
     * 
     *
     * @param int $numStars
     *
     * @return self
     */
    public function setNumStars(int $numStars) : self
    {
        $this->numStars = $numStars;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getPinnedInfo()
    {
        return $this->pinnedInfo;
    }
    /**
     * 
     *
     * @param mixed $pinnedInfo
     *
     * @return self
     */
    public function setPinnedInfo($pinnedInfo) : self
    {
        $this->pinnedInfo = $pinnedInfo;
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
    public function getTimestamp() : int
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param int $timestamp
     *
     * @return self
     */
    public function setTimestamp(int $timestamp) : self
    {
        $this->timestamp = $timestamp;
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