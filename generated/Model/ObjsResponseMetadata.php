<?php

namespace Comicat\Slack\Api\Model;

class ObjsResponseMetadata
{
    /**
     * 
     *
     * @var string
     */
    protected $nextCursor;
    /**
     * 
     *
     * @return string
     */
    public function getNextCursor() : string
    {
        return $this->nextCursor;
    }
    /**
     * 
     *
     * @param string $nextCursor
     *
     * @return self
     */
    public function setNextCursor(string $nextCursor) : self
    {
        $this->nextCursor = $nextCursor;
        return $this;
    }
}