<?php

namespace Comicat\Slack\Api\Model;

class StarsListGetResponse200ItemsItemItem1
{
    /**
     * 
     *
     * @var int
     */
    protected $dateCreate;
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
    public function getDateCreate() : int
    {
        return $this->dateCreate;
    }
    /**
     * 
     *
     * @param int $dateCreate
     *
     * @return self
     */
    public function setDateCreate(int $dateCreate) : self
    {
        $this->dateCreate = $dateCreate;
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