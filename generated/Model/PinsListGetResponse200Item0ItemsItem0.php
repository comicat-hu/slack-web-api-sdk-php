<?php

namespace Comicat\Slack\Api\Model;

class PinsListGetResponse200Item0ItemsItem0
{
    /**
     * 
     *
     * @var int
     */
    protected $created;
    /**
     * 
     *
     * @var string
     */
    protected $createdBy;
    /**
     * 
     *
     * @var ObjsFile
     */
    protected $file;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return int
     */
    public function getCreated() : int
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param int $created
     *
     * @return self
     */
    public function setCreated(int $created) : self
    {
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreatedBy() : string
    {
        return $this->createdBy;
    }
    /**
     * 
     *
     * @param string $createdBy
     *
     * @return self
     */
    public function setCreatedBy(string $createdBy) : self
    {
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * 
     *
     * @return ObjsFile
     */
    public function getFile() : ObjsFile
    {
        return $this->file;
    }
    /**
     * 
     *
     * @param ObjsFile $file
     *
     * @return self
     */
    public function setFile(ObjsFile $file) : self
    {
        $this->file = $file;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}