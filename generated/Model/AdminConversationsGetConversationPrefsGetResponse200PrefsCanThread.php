<?php

namespace Comicat\Slack\Api\Model;

class AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread
{
    /**
     * 
     *
     * @var string[]
     */
    protected $type;
    /**
     * 
     *
     * @var string[]
     */
    protected $user;
    /**
     * 
     *
     * @return string[]
     */
    public function getType() : array
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string[] $type
     *
     * @return self
     */
    public function setType(array $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getUser() : array
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param string[] $user
     *
     * @return self
     */
    public function setUser(array $user) : self
    {
        $this->user = $user;
        return $this;
    }
}