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
     * @var string
     */
    protected $image64;
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
    /**
     * 
     *
     * @return string
     */
    public function getImage64() : string
    {
        return $this->image64;
    }
    /**
     * 
     *
     * @param string $image64
     *
     * @return self
     */
    public function setImage64(string $image64) : self
    {
        $this->image64 = $image64;
        return $this;
    }
}