<?php

namespace Comicat\Slack\Api\Model;

class FilesInfoGetResponse200
{
    /**
     * 
     *
     * @var 
     */
    protected $comments;
    /**
     * 
     *
     * @var mixed
     */
    protected $contentHtml;
    /**
     * 
     *
     * @var string
     */
    protected $editor;
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
     * @var ObjsPaging
     */
    protected $paging;
    /**
     * 
     *
     * @var ObjsResponseMetadata
     */
    protected $responseMetadata;
    /**
     * 
     *
     * @return 
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * 
     *
     * @param  $comments
     *
     * @return self
     */
    public function setComments($comments) : self
    {
        $this->comments = $comments;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getContentHtml()
    {
        return $this->contentHtml;
    }
    /**
     * 
     *
     * @param mixed $contentHtml
     *
     * @return self
     */
    public function setContentHtml($contentHtml) : self
    {
        $this->contentHtml = $contentHtml;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEditor() : string
    {
        return $this->editor;
    }
    /**
     * 
     *
     * @param string $editor
     *
     * @return self
     */
    public function setEditor(string $editor) : self
    {
        $this->editor = $editor;
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
    /**
     * 
     *
     * @return ObjsResponseMetadata
     */
    public function getResponseMetadata() : ObjsResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param ObjsResponseMetadata $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(ObjsResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
}