<?php

namespace Comicat\Slack\Api\Model;

class AdminConversationsGetConversationPrefsGetResponse200Prefs
{
    /**
     * 
     *
     * @var AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread
     */
    protected $canThread;
    /**
     * 
     *
     * @var AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPost
     */
    protected $whoCanPost;
    /**
     * 
     *
     * @return AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread
     */
    public function getCanThread() : AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread
    {
        return $this->canThread;
    }
    /**
     * 
     *
     * @param AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread $canThread
     *
     * @return self
     */
    public function setCanThread(AdminConversationsGetConversationPrefsGetResponse200PrefsCanThread $canThread) : self
    {
        $this->canThread = $canThread;
        return $this;
    }
    /**
     * 
     *
     * @return AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPost
     */
    public function getWhoCanPost() : AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPost
    {
        return $this->whoCanPost;
    }
    /**
     * 
     *
     * @param AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPost $whoCanPost
     *
     * @return self
     */
    public function setWhoCanPost(AdminConversationsGetConversationPrefsGetResponse200PrefsWhoCanPost $whoCanPost) : self
    {
        $this->whoCanPost = $whoCanPost;
        return $this;
    }
}