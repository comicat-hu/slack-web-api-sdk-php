<?php

namespace Comicat\Slack\Api\Model;

class ObjsExternalOrgMigrations
{
    /**
     * 
     *
     * @var ObjsExternalOrgMigrationsCurrentItem[]
     */
    protected $current;
    /**
     * 
     *
     * @var int
     */
    protected $dateUpdated;
    /**
     * 
     *
     * @return ObjsExternalOrgMigrationsCurrentItem[]
     */
    public function getCurrent() : array
    {
        return $this->current;
    }
    /**
     * 
     *
     * @param ObjsExternalOrgMigrationsCurrentItem[] $current
     *
     * @return self
     */
    public function setCurrent(array $current) : self
    {
        $this->current = $current;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDateUpdated() : int
    {
        return $this->dateUpdated;
    }
    /**
     * 
     *
     * @param int $dateUpdated
     *
     * @return self
     */
    public function setDateUpdated(int $dateUpdated) : self
    {
        $this->dateUpdated = $dateUpdated;
        return $this;
    }
}