<?php

namespace Comicat\Slack\Api\Model;

class GroupsSetTopicPostResponse200
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
     * @var string
     */
    protected $topic;
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
    public function getTopic() : string
    {
        return $this->topic;
    }
    /**
     * 
     *
     * @param string $topic
     *
     * @return self
     */
    public function setTopic(string $topic) : self
    {
        $this->topic = $topic;
        return $this;
    }
}