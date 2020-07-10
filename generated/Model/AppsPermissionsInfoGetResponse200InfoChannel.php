<?php

namespace Comicat\Slack\Api\Model;

class AppsPermissionsInfoGetResponse200InfoChannel
{
    /**
     * 
     *
     * @var ObjsResources
     */
    protected $resources;
    /**
     * 
     *
     * @var string[]
     */
    protected $scopes;
    /**
     * 
     *
     * @return ObjsResources
     */
    public function getResources() : ObjsResources
    {
        return $this->resources;
    }
    /**
     * 
     *
     * @param ObjsResources $resources
     *
     * @return self
     */
    public function setResources(ObjsResources $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getScopes() : array
    {
        return $this->scopes;
    }
    /**
     * 
     *
     * @param string[] $scopes
     *
     * @return self
     */
    public function setScopes(array $scopes) : self
    {
        $this->scopes = $scopes;
        return $this;
    }
}