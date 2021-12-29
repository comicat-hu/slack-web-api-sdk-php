<?php

namespace Comicat\Slack\Api\Model;

class ObjsResponseMetadataItem2
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
     * @var string
     */
    protected $nextCursor;
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
     * @return string
     */
    public function getNextCursor() : string
    {
        return $this->nextCursor;
    }
    /**
     * 
     *
     * @param string $nextCursor
     *
     * @return self
     */
    public function setNextCursor(string $nextCursor) : self
    {
        $this->nextCursor = $nextCursor;
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