<?php

namespace Comicat\Slack\Api\Model;

class ReactionsListGetResponse200
{
    /**
     * 
     *
     * @var mixed[]
     */
    protected $items;
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
     * @return mixed[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param mixed[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
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