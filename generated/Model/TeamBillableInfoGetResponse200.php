<?php

namespace Comicat\Slack\Api\Model;

class TeamBillableInfoGetResponse200
{
    /**
     * 
     *
     * @var mixed
     */
    protected $billableInfo;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @return mixed
     */
    public function getBillableInfo()
    {
        return $this->billableInfo;
    }
    /**
     * 
     *
     * @param mixed $billableInfo
     *
     * @return self
     */
    public function setBillableInfo($billableInfo) : self
    {
        $this->billableInfo = $billableInfo;
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