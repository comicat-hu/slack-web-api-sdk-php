<?php

namespace Comicat\Slack\Api\Model;

class ImListGetResponse200
{
    /**
     * 
     *
     * @var ObjsIm[]
     */
    protected $ims;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @var ObjsResponseMetadata
     */
    protected $responseMetadata;
    /**
     * 
     *
     * @return ObjsIm[]
     */
    public function getIms() : array
    {
        return $this->ims;
    }
    /**
     * 
     *
     * @param ObjsIm[] $ims
     *
     * @return self
     */
    public function setIms(array $ims) : self
    {
        $this->ims = $ims;
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