<?php

namespace Comicat\Slack\Api\Model;

class BotsInfoGetResponse200Bot
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
     * @var BotsInfoGetResponse200BotIcons
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
     * @var int
     */
    protected $updated;
    /**
     * 
     *
     * @var string
     */
    protected $userId;
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
     * @return BotsInfoGetResponse200BotIcons
     */
    public function getIcons() : BotsInfoGetResponse200BotIcons
    {
        return $this->icons;
    }
    /**
     * 
     *
     * @param BotsInfoGetResponse200BotIcons $icons
     *
     * @return self
     */
    public function setIcons(BotsInfoGetResponse200BotIcons $icons) : self
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
    /**
     * 
     *
     * @return string
     */
    public function getUserId() : string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(string $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
}