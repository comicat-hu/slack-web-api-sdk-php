<?php

namespace Comicat\Slack\Api\Model;

class ChatUpdatePostResponse200Message
{
    /**
     * 
     *
     * @var mixed[]
     */
    protected $attachments;
    /**
     * 
     *
     * @var mixed
     */
    protected $blocks;
    /**
     * 
     *
     * @var string
     */
    protected $text;
    /**
     * 
     *
     * @return mixed[]
     */
    public function getAttachments() : array
    {
        return $this->attachments;
    }
    /**
     * 
     *
     * @param mixed[] $attachments
     *
     * @return self
     */
    public function setAttachments(array $attachments) : self
    {
        $this->attachments = $attachments;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getBlocks()
    {
        return $this->blocks;
    }
    /**
     * 
     *
     * @param mixed $blocks
     *
     * @return self
     */
    public function setBlocks($blocks) : self
    {
        $this->blocks = $blocks;
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
}