<?php

namespace Comicat\Slack\Api\Model;

class ReactionsListGetResponse200ItemsItemItem2
{
    /**
     * 
     *
     * @var ObjsComment
     */
    protected $comment;
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
     * @return ObjsComment
     */
    public function getComment() : ObjsComment
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param ObjsComment $comment
     *
     * @return self
     */
    public function setComment(ObjsComment $comment) : self
    {
        $this->comment = $comment;
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