<?php

namespace Comicat\Slack\Api\Model;

class ChatScheduleMessagePostResponse200Message
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
     * @var ObjsBotProfile
     */
    protected $botProfile;
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
     * @var string
     */
    protected $username;
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