<?php

namespace Comicat\Slack\Api\Model;

class ObjsSubteam
{
    /**
     * 
     *
     * @var bool
     */
    protected $autoProvision;
    /**
     * 
     *
     * @var mixed
     */
    protected $autoType;
    /**
     * 
     *
     * @var int
     */
    protected $channelCount;
    /**
     * 
     *
     * @var string
     */
    protected $createdBy;
    /**
     * 
     *
     * @var int
     */
    protected $dateCreate;
    /**
     * 
     *
     * @var int
     */
    protected $dateDelete;
    /**
     * 
     *
     * @var int
     */
    protected $dateUpdate;
    /**
     * 
     *
     * @var mixed
     */
    protected $deletedBy;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $enterpriseSubteamId;
    /**
     * 
     *
     * @var string
     */
    protected $handle;
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
    protected $isExternal;
    /**
     * 
     *
     * @var bool
     */
    protected $isSubteam;
    /**
     * 
     *
     * @var bool
     */
    protected $isUsergroup;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var ObjsSubteamPrefs
     */
    protected $prefs;
    /**
     * 
     *
     * @var string
     */
    protected $teamId;
    /**
     * 
     *
     * @var string
     */
    protected $updatedBy;
    /**
     * 
     *
     * @var int
     */
    protected $userCount;
    /**
     * 
     *
     * @var string[]
     */
    protected $users;
    /**
     * 
     *
     * @return bool
     */
    public function getAutoProvision() : bool
    {
        return $this->autoProvision;
    }
    /**
     * 
     *
     * @param bool $autoProvision
     *
     * @return self
     */
    public function setAutoProvision(bool $autoProvision) : self
    {
        $this->autoProvision = $autoProvision;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getAutoType()
    {
        return $this->autoType;
    }
    /**
     * 
     *
     * @param mixed $autoType
     *
     * @return self
     */
    public function setAutoType($autoType) : self
    {
        $this->autoType = $autoType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getChannelCount() : int
    {
        return $this->channelCount;
    }
    /**
     * 
     *
     * @param int $channelCount
     *
     * @return self
     */
    public function setChannelCount(int $channelCount) : self
    {
        $this->channelCount = $channelCount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreatedBy() : string
    {
        return $this->createdBy;
    }
    /**
     * 
     *
     * @param string $createdBy
     *
     * @return self
     */
    public function setCreatedBy(string $createdBy) : self
    {
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDateCreate() : int
    {
        return $this->dateCreate;
    }
    /**
     * 
     *
     * @param int $dateCreate
     *
     * @return self
     */
    public function setDateCreate(int $dateCreate) : self
    {
        $this->dateCreate = $dateCreate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDateDelete() : int
    {
        return $this->dateDelete;
    }
    /**
     * 
     *
     * @param int $dateDelete
     *
     * @return self
     */
    public function setDateDelete(int $dateDelete) : self
    {
        $this->dateDelete = $dateDelete;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDateUpdate() : int
    {
        return $this->dateUpdate;
    }
    /**
     * 
     *
     * @param int $dateUpdate
     *
     * @return self
     */
    public function setDateUpdate(int $dateUpdate) : self
    {
        $this->dateUpdate = $dateUpdate;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getDeletedBy()
    {
        return $this->deletedBy;
    }
    /**
     * 
     *
     * @param mixed $deletedBy
     *
     * @return self
     */
    public function setDeletedBy($deletedBy) : self
    {
        $this->deletedBy = $deletedBy;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEnterpriseSubteamId() : string
    {
        return $this->enterpriseSubteamId;
    }
    /**
     * 
     *
     * @param string $enterpriseSubteamId
     *
     * @return self
     */
    public function setEnterpriseSubteamId(string $enterpriseSubteamId) : self
    {
        $this->enterpriseSubteamId = $enterpriseSubteamId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHandle() : string
    {
        return $this->handle;
    }
    /**
     * 
     *
     * @param string $handle
     *
     * @return self
     */
    public function setHandle(string $handle) : self
    {
        $this->handle = $handle;
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
    public function getIsExternal() : bool
    {
        return $this->isExternal;
    }
    /**
     * 
     *
     * @param bool $isExternal
     *
     * @return self
     */
    public function setIsExternal(bool $isExternal) : self
    {
        $this->isExternal = $isExternal;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsSubteam() : bool
    {
        return $this->isSubteam;
    }
    /**
     * 
     *
     * @param bool $isSubteam
     *
     * @return self
     */
    public function setIsSubteam(bool $isSubteam) : self
    {
        $this->isSubteam = $isSubteam;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsUsergroup() : bool
    {
        return $this->isUsergroup;
    }
    /**
     * 
     *
     * @param bool $isUsergroup
     *
     * @return self
     */
    public function setIsUsergroup(bool $isUsergroup) : self
    {
        $this->isUsergroup = $isUsergroup;
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
     * @return ObjsSubteamPrefs
     */
    public function getPrefs() : ObjsSubteamPrefs
    {
        return $this->prefs;
    }
    /**
     * 
     *
     * @param ObjsSubteamPrefs $prefs
     *
     * @return self
     */
    public function setPrefs(ObjsSubteamPrefs $prefs) : self
    {
        $this->prefs = $prefs;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeamId() : string
    {
        return $this->teamId;
    }
    /**
     * 
     *
     * @param string $teamId
     *
     * @return self
     */
    public function setTeamId(string $teamId) : self
    {
        $this->teamId = $teamId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUpdatedBy() : string
    {
        return $this->updatedBy;
    }
    /**
     * 
     *
     * @param string $updatedBy
     *
     * @return self
     */
    public function setUpdatedBy(string $updatedBy) : self
    {
        $this->updatedBy = $updatedBy;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUserCount() : int
    {
        return $this->userCount;
    }
    /**
     * 
     *
     * @param int $userCount
     *
     * @return self
     */
    public function setUserCount(int $userCount) : self
    {
        $this->userCount = $userCount;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getUsers() : array
    {
        return $this->users;
    }
    /**
     * 
     *
     * @param string[] $users
     *
     * @return self
     */
    public function setUsers(array $users) : self
    {
        $this->users = $users;
        return $this;
    }
}