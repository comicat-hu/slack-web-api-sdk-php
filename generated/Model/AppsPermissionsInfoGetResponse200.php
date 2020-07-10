<?php

namespace Comicat\Slack\Api\Model;

class AppsPermissionsInfoGetResponse200
{
    /**
     * 
     *
     * @var AppsPermissionsInfoGetResponse200Info
     */
    protected $info;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @return AppsPermissionsInfoGetResponse200Info
     */
    public function getInfo() : AppsPermissionsInfoGetResponse200Info
    {
        return $this->info;
    }
    /**
     * 
     *
     * @param AppsPermissionsInfoGetResponse200Info $info
     *
     * @return self
     */
    public function setInfo(AppsPermissionsInfoGetResponse200Info $info) : self
    {
        $this->info = $info;
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