<?php

namespace Comicat\Slack\Api\Model;

class AdminConversationsGetConversationPrefsGetResponse200
{
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @var AdminConversationsGetConversationPrefsGetResponse200Prefs
     */
    protected $prefs;
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
     * @return AdminConversationsGetConversationPrefsGetResponse200Prefs
     */
    public function getPrefs() : AdminConversationsGetConversationPrefsGetResponse200Prefs
    {
        return $this->prefs;
    }
    /**
     * 
     *
     * @param AdminConversationsGetConversationPrefsGetResponse200Prefs $prefs
     *
     * @return self
     */
    public function setPrefs(AdminConversationsGetConversationPrefsGetResponse200Prefs $prefs) : self
    {
        $this->prefs = $prefs;
        return $this;
    }
}