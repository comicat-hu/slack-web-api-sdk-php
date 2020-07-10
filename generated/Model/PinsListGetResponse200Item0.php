<?php

namespace Comicat\Slack\Api\Model;

class PinsListGetResponse200Item0
{
    /**
     * 
     *
     * @var PinsListGetResponse200Item0ItemsItem0[]|PinsListGetResponse200Item0ItemsItem1[]
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
     * @return PinsListGetResponse200Item0ItemsItem0[]|PinsListGetResponse200Item0ItemsItem1[]
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param PinsListGetResponse200Item0ItemsItem0[]|PinsListGetResponse200Item0ItemsItem1[] $items
     *
     * @return self
     */
    public function setItems($items) : self
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
}