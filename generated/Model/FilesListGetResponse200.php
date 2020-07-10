<?php

namespace Comicat\Slack\Api\Model;

class FilesListGetResponse200
{
    /**
     * 
     *
     * @var ObjsFile[]
     */
    protected $files;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @var ObjsPaging
     */
    protected $paging;
    /**
     * 
     *
     * @return ObjsFile[]
     */
    public function getFiles() : array
    {
        return $this->files;
    }
    /**
     * 
     *
     * @param ObjsFile[] $files
     *
     * @return self
     */
    public function setFiles(array $files) : self
    {
        $this->files = $files;
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
     * @return ObjsPaging
     */
    public function getPaging() : ObjsPaging
    {
        return $this->paging;
    }
    /**
     * 
     *
     * @param ObjsPaging $paging
     *
     * @return self
     */
    public function setPaging(ObjsPaging $paging) : self
    {
        $this->paging = $paging;
        return $this;
    }
}