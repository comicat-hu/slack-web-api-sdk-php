<?php

namespace Comicat\Slack\Api\Model;

class ObjsUserProfileShort
{
    /**
     * 
     *
     * @var string
     */
    protected $avatarHash;
    /**
     * 
     *
     * @var string
     */
    protected $displayName;
    /**
     * 
     *
     * @var string
     */
    protected $displayNameNormalized;
    /**
     * 
     *
     * @var string
     */
    protected $firstName;
    /**
     * 
     *
     * @var string
     */
    protected $image72;
    /**
     * 
     *
     * @var bool
     */
    protected $isRestricted;
    /**
     * 
     *
     * @var bool
     */
    protected $isUltraRestricted;
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
    protected $realName;
    /**
     * 
     *
     * @var string
     */
    protected $realNameNormalized;
    /**
     * 
     *
     * @var string
     */
    protected $team;
    /**
     * 
     *
     * @return string
     */
    public function getAvatarHash() : string
    {
        return $this->avatarHash;
    }
    /**
     * 
     *
     * @param string $avatarHash
     *
     * @return self
     */
    public function setAvatarHash(string $avatarHash) : self
    {
        $this->avatarHash = $avatarHash;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDisplayName() : string
    {
        return $this->displayName;
    }
    /**
     * 
     *
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(string $displayName) : self
    {
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDisplayNameNormalized() : string
    {
        return $this->displayNameNormalized;
    }
    /**
     * 
     *
     * @param string $displayNameNormalized
     *
     * @return self
     */
    public function setDisplayNameNormalized(string $displayNameNormalized) : self
    {
        $this->displayNameNormalized = $displayNameNormalized;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImage72() : string
    {
        return $this->image72;
    }
    /**
     * 
     *
     * @param string $image72
     *
     * @return self
     */
    public function setImage72(string $image72) : self
    {
        $this->image72 = $image72;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsRestricted() : bool
    {
        return $this->isRestricted;
    }
    /**
     * 
     *
     * @param bool $isRestricted
     *
     * @return self
     */
    public function setIsRestricted(bool $isRestricted) : self
    {
        $this->isRestricted = $isRestricted;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsUltraRestricted() : bool
    {
        return $this->isUltraRestricted;
    }
    /**
     * 
     *
     * @param bool $isUltraRestricted
     *
     * @return self
     */
    public function setIsUltraRestricted(bool $isUltraRestricted) : self
    {
        $this->isUltraRestricted = $isUltraRestricted;
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
    public function getRealName() : string
    {
        return $this->realName;
    }
    /**
     * 
     *
     * @param string $realName
     *
     * @return self
     */
    public function setRealName(string $realName) : self
    {
        $this->realName = $realName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRealNameNormalized() : string
    {
        return $this->realNameNormalized;
    }
    /**
     * 
     *
     * @param string $realNameNormalized
     *
     * @return self
     */
    public function setRealNameNormalized(string $realNameNormalized) : self
    {
        $this->realNameNormalized = $realNameNormalized;
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
}