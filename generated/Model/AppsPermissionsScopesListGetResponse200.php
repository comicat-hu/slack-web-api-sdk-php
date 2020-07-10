<?php

namespace Comicat\Slack\Api\Model;

class AppsPermissionsScopesListGetResponse200 extends \ArrayObject
{
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @var AppsPermissionsScopesListGetResponse200Scopes
     */
    protected $scopes;
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
     * @return AppsPermissionsScopesListGetResponse200Scopes
     */
    public function getScopes() : AppsPermissionsScopesListGetResponse200Scopes
    {
        return $this->scopes;
    }
    /**
     * 
     *
     * @param AppsPermissionsScopesListGetResponse200Scopes $scopes
     *
     * @return self
     */
    public function setScopes(AppsPermissionsScopesListGetResponse200Scopes $scopes) : self
    {
        $this->scopes = $scopes;
        return $this;
    }
}