<?php

namespace Comicat\Slack\Api\Model;

class ObjsMessageAttachmentsItem
{
    /**
     * 
     *
     * @var string
     */
    protected $fallback;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $imageBytes;
    /**
     * 
     *
     * @var int
     */
    protected $imageHeight;
    /**
     * 
     *
     * @var string
     */
    protected $imageUrl;
    /**
     * 
     *
     * @var int
     */
    protected $imageWidth;
    /**
     * 
     *
     * @return string
     */
    public function getFallback() : string
    {
        return $this->fallback;
    }
    /**
     * 
     *
     * @param string $fallback
     *
     * @return self
     */
    public function setFallback(string $fallback) : self
    {
        $this->fallback = $fallback;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getImageBytes() : int
    {
        return $this->imageBytes;
    }
    /**
     * 
     *
     * @param int $imageBytes
     *
     * @return self
     */
    public function setImageBytes(int $imageBytes) : self
    {
        $this->imageBytes = $imageBytes;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getImageHeight() : int
    {
        return $this->imageHeight;
    }
    /**
     * 
     *
     * @param int $imageHeight
     *
     * @return self
     */
    public function setImageHeight(int $imageHeight) : self
    {
        $this->imageHeight = $imageHeight;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImageUrl() : string
    {
        return $this->imageUrl;
    }
    /**
     * 
     *
     * @param string $imageUrl
     *
     * @return self
     */
    public function setImageUrl(string $imageUrl) : self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getImageWidth() : int
    {
        return $this->imageWidth;
    }
    /**
     * 
     *
     * @param int $imageWidth
     *
     * @return self
     */
    public function setImageWidth(int $imageWidth) : self
    {
        $this->imageWidth = $imageWidth;
        return $this;
    }
}