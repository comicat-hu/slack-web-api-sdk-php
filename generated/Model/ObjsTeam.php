<?php

namespace Comicat\Slack\Api\Model;

class ObjsTeam
{
    /**
     * 
     *
     * @var bool
     */
    protected $archived;
    /**
     * 
     *
     * @var string
     */
    protected $avatarBaseUrl;
    /**
     * 
     *
     * @var int
     */
    protected $created;
    /**
     * 
     *
     * @var int
     */
    protected $dateCreate;
    /**
     * 
     *
     * @var bool
     */
    protected $deleted;
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
    protected $discoverable;
    /**
     * 
     *
     * @var string
     */
    protected $domain;
    /**
     * 
     *
     * @var string
     */
    protected $emailDomain;
    /**
     * 
     *
     * @var string
     */
    protected $enterpriseId;
    /**
     * 
     *
     * @var string
     */
    protected $enterpriseName;
    /**
     * 
     *
     * @var bool
     */
    protected $hasComplianceExport;
    /**
     * 
     *
     * @var ObjsIcon
     */
    protected $icon;
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
    protected $isAssigned;
    /**
     * 
     *
     * @var int
     */
    protected $isEnterprise;
    /**
     * 
     *
     * @var int
     */
    protected $limitTs;
    /**
     * 
     *
     * @var int
     */
    protected $messagesCount;
    /**
     * 
     *
     * @var int
     */
    protected $msgEditWindowMins;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var bool
     */
    protected $overIntegrationsLimit;
    /**
     * 
     *
     * @var bool
     */
    protected $overStorageLimit;
    /**
     * 
     *
     * @var string
     */
    protected $plan;
    /**
     * 
     *
     * @return bool
     */
    public function getArchived() : bool
    {
        return $this->archived;
    }
    /**
     * 
     *
     * @param bool $archived
     *
     * @return self
     */
    public function setArchived(bool $archived) : self
    {
        $this->archived = $archived;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAvatarBaseUrl() : string
    {
        return $this->avatarBaseUrl;
    }
    /**
     * 
     *
     * @param string $avatarBaseUrl
     *
     * @return self
     */
    public function setAvatarBaseUrl(string $avatarBaseUrl) : self
    {
        $this->avatarBaseUrl = $avatarBaseUrl;
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
     * @return bool
     */
    public function getDeleted() : bool
    {
        return $this->deleted;
    }
    /**
     * 
     *
     * @param bool $deleted
     *
     * @return self
     */
    public function setDeleted(bool $deleted) : self
    {
        $this->deleted = $deleted;
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
    public function getDiscoverable() : string
    {
        return $this->discoverable;
    }
    /**
     * 
     *
     * @param string $discoverable
     *
     * @return self
     */
    public function setDiscoverable(string $discoverable) : self
    {
        $this->discoverable = $discoverable;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDomain() : string
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param string $domain
     *
     * @return self
     */
    public function setDomain(string $domain) : self
    {
        $this->domain = $domain;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmailDomain() : string
    {
        return $this->emailDomain;
    }
    /**
     * 
     *
     * @param string $emailDomain
     *
     * @return self
     */
    public function setEmailDomain(string $emailDomain) : self
    {
        $this->emailDomain = $emailDomain;
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
     * @return string
     */
    public function getEnterpriseName() : string
    {
        return $this->enterpriseName;
    }
    /**
     * 
     *
     * @param string $enterpriseName
     *
     * @return self
     */
    public function setEnterpriseName(string $enterpriseName) : self
    {
        $this->enterpriseName = $enterpriseName;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasComplianceExport() : bool
    {
        return $this->hasComplianceExport;
    }
    /**
     * 
     *
     * @param bool $hasComplianceExport
     *
     * @return self
     */
    public function setHasComplianceExport(bool $hasComplianceExport) : self
    {
        $this->hasComplianceExport = $hasComplianceExport;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsIcon
     */
    public function getIcon() : ObjsIcon
    {
        return $this->icon;
    }
    /**
     * 
     *
     * @param ObjsIcon $icon
     *
     * @return self
     */
    public function setIcon(ObjsIcon $icon) : self
    {
        $this->icon = $icon;
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
    public function getIsAssigned() : bool
    {
        return $this->isAssigned;
    }
    /**
     * 
     *
     * @param bool $isAssigned
     *
     * @return self
     */
    public function setIsAssigned(bool $isAssigned) : self
    {
        $this->isAssigned = $isAssigned;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getIsEnterprise() : int
    {
        return $this->isEnterprise;
    }
    /**
     * 
     *
     * @param int $isEnterprise
     *
     * @return self
     */
    public function setIsEnterprise(int $isEnterprise) : self
    {
        $this->isEnterprise = $isEnterprise;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLimitTs() : int
    {
        return $this->limitTs;
    }
    /**
     * 
     *
     * @param int $limitTs
     *
     * @return self
     */
    public function setLimitTs(int $limitTs) : self
    {
        $this->limitTs = $limitTs;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMessagesCount() : int
    {
        return $this->messagesCount;
    }
    /**
     * 
     *
     * @param int $messagesCount
     *
     * @return self
     */
    public function setMessagesCount(int $messagesCount) : self
    {
        $this->messagesCount = $messagesCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMsgEditWindowMins() : int
    {
        return $this->msgEditWindowMins;
    }
    /**
     * 
     *
     * @param int $msgEditWindowMins
     *
     * @return self
     */
    public function setMsgEditWindowMins(int $msgEditWindowMins) : self
    {
        $this->msgEditWindowMins = $msgEditWindowMins;
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
     * @return bool
     */
    public function getOverIntegrationsLimit() : bool
    {
        return $this->overIntegrationsLimit;
    }
    /**
     * 
     *
     * @param bool $overIntegrationsLimit
     *
     * @return self
     */
    public function setOverIntegrationsLimit(bool $overIntegrationsLimit) : self
    {
        $this->overIntegrationsLimit = $overIntegrationsLimit;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOverStorageLimit() : bool
    {
        return $this->overStorageLimit;
    }
    /**
     * 
     *
     * @param bool $overStorageLimit
     *
     * @return self
     */
    public function setOverStorageLimit(bool $overStorageLimit) : self
    {
        $this->overStorageLimit = $overStorageLimit;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPlan() : string
    {
        return $this->plan;
    }
    /**
     * 
     *
     * @param string $plan
     *
     * @return self
     */
    public function setPlan(string $plan) : self
    {
        $this->plan = $plan;
        return $this;
    }
}