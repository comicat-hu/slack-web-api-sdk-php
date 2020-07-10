<?php

namespace Comicat\Slack\Api\Model;

class ObjsMessageIcons
{
    /**
     * 
     *
     * @var string
     */
    protected $emoji;
    /**
     * 
     *
     * @return string
     */
    public function getEmoji() : string
    {
        return $this->emoji;
    }
    /**
     * 
     *
     * @param string $emoji
     *
     * @return self
     */
    public function setEmoji(string $emoji) : self
    {
        $this->emoji = $emoji;
        return $this;
    }
}