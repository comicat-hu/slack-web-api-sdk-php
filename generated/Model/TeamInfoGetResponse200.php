<?php

namespace Comicat\Slack\Api\Model;

class TeamInfoGetResponse200
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
     * @var ObjsTeam
     */
    protected $team;
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
     * @return ObjsTeam
     */
    public function getTeam() : ObjsTeam
    {
        return $this->team;
    }
    /**
     * 
     *
     * @param ObjsTeam $team
     *
     * @return self
     */
    public function setTeam(ObjsTeam $team) : self
    {
        $this->team = $team;
        return $this;
    }
}