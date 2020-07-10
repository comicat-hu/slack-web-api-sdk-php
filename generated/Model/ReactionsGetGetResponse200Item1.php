<?php

namespace Comicat\Slack\Api\Model;

class ReactionsGetGetResponse200Item1
{
    /**
     * 
     *
     * @var ObjsFile
     */
    protected $file;
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
    protected $type;
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