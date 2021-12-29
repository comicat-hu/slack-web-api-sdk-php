<?php

namespace Comicat\Slack\Api\Model;

class AuthTestGetResponse200
{
    /**
     * 
     *
     * @var string
     */
    protected $botId;
    /**
     * 
     *
     * @var bool
     */
    protected $isEnterpriseInstall;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
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
    protected $teamId;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $user;
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
    public function getBotId() : string
    {
        return $this->botId;
    }
    /**
     * 
     *
     * @param string $botId
     *
     * @return self
     */
    public function setBotId(string $botId) : self
    {
        $this->botId = $botId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsEnterpriseInstall() : bool
    {
        return $this->isEnterpriseInstall;
    }
    /**
     * 
     *
     * @param bool $isEnterpriseInstall
     *
     * @return self
     */
    public function setIsEnterpriseInstall(bool $isEnterpriseInstall) : self
    {
        $this->isEnterpriseInstall = $isEnterpriseInstall;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOk() : bool
    {
        return $this->ok;
    }
    /**
     * 
     *
     * @param bool $ok
     *
     * @return self
     */
    public function setOk(bool $ok) : self
    {
        $this->ok = $ok;
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
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
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