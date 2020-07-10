<?php

namespace Comicat\Slack\Api\Model;

class ObjsIm
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
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var bool
     */
    protected $isAppHome;
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
    protected $isUserDeleted;
    /**
     * 
     *
     * @var float
     */
    protected $priority;
    /**
     * 
     *
     * @var string
     */
    protected $user;
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
    public function getIsAppHome() : bool
    {
        return $this->isAppHome;
    }
    /**
     * 
     *
     * @param bool $isAppHome
     *
     * @return self
     */
    public function setIsAppHome(bool $isAppHome) : self
    {
        $this->isAppHome = $isAppHome;
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