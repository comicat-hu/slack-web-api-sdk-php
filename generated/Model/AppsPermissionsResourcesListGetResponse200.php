<?php

namespace Comicat\Slack\Api\Model;

class AppsPermissionsResourcesListGetResponse200 extends \ArrayObject
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
     * @var AppsPermissionsResourcesListGetResponse200ResourcesItem[]
     */
    protected $resources;
    /**
     * 
     *
     * @var AppsPermissionsResourcesListGetResponse200ResponseMetadata
     */
    protected $responseMetadata;
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
     * @return AppsPermissionsResourcesListGetResponse200ResourcesItem[]
     */
    public function getResources() : array
    {
        return $this->resources;
    }
    /**
     * 
     *
     * @param AppsPermissionsResourcesListGetResponse200ResourcesItem[] $resources
     *
     * @return self
     */
    public function setResources(array $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * 
     *
     * @return AppsPermissionsResourcesListGetResponse200ResponseMetadata
     */
    public function getResponseMetadata() : AppsPermissionsResourcesListGetResponse200ResponseMetadata
    {
        return $this->responseMetadata;
    }
    /**
     * 
     *
     * @param AppsPermissionsResourcesListGetResponse200ResponseMetadata $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(AppsPermissionsResourcesListGetResponse200ResponseMetadata $responseMetadata) : self
    {
        $this->responseMetadata = $responseMetadata;
        return $this;
    }
}