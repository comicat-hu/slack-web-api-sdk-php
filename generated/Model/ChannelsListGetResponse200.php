<?php

namespace Comicat\Slack\Api\Model;

class ChannelsListGetResponse200
{
    /**
     * 
     *
     * @var ObjsChannel[]
     */
    protected $channels;
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
     * @return ObjsChannel[]
     */
    public function getChannels() : array
    {
        return $this->channels;
    }
    /**
     * 
     *
     * @param ObjsChannel[] $channels
     *
     * @return self
     */
    public function setChannels(array $channels) : self
    {
        $this->channels = $channels;
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