<?php

namespace Comicat\Slack\Api\Model;

class ObjsBotProfile
{
    /**
     * 
     *
     * @var string
     */
    protected $appId;
    /**
     * 
     *
     * @var bool
     */
    protected $deleted;
    /**
     * 
     *
     * @var ObjsBotProfileIcons
     */
    protected $icons;
    /**
     * 
     *
     * @var string
     */
    protected $id;
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
    protected $teamId;
    /**
     * 
     *
     * @var int
     */
    protected $updated;
    /**
     * 
     *
     * @return string
     */
    public function getAppId() : string
    {
        return $this->appId;
    }
    /**
     * 
     *
     * @param string $appId
     *
     * @return self
     */
    public function setAppId(string $appId) : self
    {
        $this->appId = $appId;
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
     * @return ObjsBotProfileIcons
     */
    public function getIcons() : ObjsBotProfileIcons
    {
        return $this->icons;
    }
    /**
     * 
     *
     * @param ObjsBotProfileIcons $icons
     *
     * @return self
     */
    public function setIcons(ObjsBotProfileIcons $icons) : self
    {
        $this->icons = $icons;
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
     * @return int
     */
    public function getUpdated() : int
    {
        return $this->updated;
    }
    /**
     * 
     *
     * @param int $updated
     *
     * @return self
     */
    public function setUpdated(int $updated) : self
    {
        $this->updated = $updated;
        return $this;
    }
}