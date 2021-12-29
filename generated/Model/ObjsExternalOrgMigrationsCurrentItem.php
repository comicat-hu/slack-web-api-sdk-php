<?php

namespace Comicat\Slack\Api\Model;

class ObjsExternalOrgMigrationsCurrentItem
{
    /**
     * 
     *
     * @var int
     */
    protected $dateStarted;
    /**
     * 
     *
     * @var string
     */
    protected $teamId;
    /**
     * 
     *
     * @return int
     */
    public function getDateStarted() : int
    {
        return $this->dateStarted;
    }
    /**
     * 
     *
     * @param int $dateStarted
     *
     * @return self
     */
    public function setDateStarted(int $dateStarted) : self
    {
        $this->dateStarted = $dateStarted;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeamId() : string
    {
        return $this->teamId;
    }
    /**
     * 
     *
     * @param string $teamId
     *
     * @return self
     */
    public function setTeamId(string $teamId) : self
    {
        $this->teamId = $teamId;
        return $this;
    }
}