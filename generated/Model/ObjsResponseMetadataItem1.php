<?php

namespace Comicat\Slack\Api\Model;

class ObjsResponseMetadataItem1
{
    /**
     * 
     *
     * @var string[]
     */
    protected $messages;
    /**
     * 
     *
     * @var string[]
     */
    protected $warnings;
    /**
     * 
     *
     * @return string[]
     */
    public function getMessages() : array
    {
        return $this->messages;
    }
    /**
     * 
     *
     * @param string[] $messages
     *
     * @return self
     */
    public function setMessages(array $messages) : self
    {
        $this->messages = $messages;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getWarnings() : array
    {
        return $this->warnings;
    }
    /**
     * 
     *
     * @param string[] $warnings
     *
     * @return self
     */
    public function setWarnings(array $warnings) : self
    {
        $this->warnings = $warnings;
        return $this;
    }
}