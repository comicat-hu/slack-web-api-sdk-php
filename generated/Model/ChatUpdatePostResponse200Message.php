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
     * This is a very loose definition, in the future, we'll populate this with deeper schema in this definition namespace.
     *
     * @var BlocksItem[]
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
     * This is a very loose definition, in the future, we'll populate this with deeper schema in this definition namespace.
     *
     * @return BlocksItem[]
     */
    public function getBlocks() : array
    {
        return $this->blocks;
    }
    /**
     * This is a very loose definition, in the future, we'll populate this with deeper schema in this definition namespace.
     *
     * @param BlocksItem[] $blocks
     *
     * @return self
     */
    public function setBlocks(array $blocks) : self
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