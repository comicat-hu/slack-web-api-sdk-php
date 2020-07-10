<?php

namespace Comicat\Slack\Api\Model;

class TeamProfileGetGetResponse200Profile
{
    /**
     * 
     *
     * @var ObjsTeamProfileField[]
     */
    protected $fields;
    /**
     * 
     *
     * @return ObjsTeamProfileField[]
     */
    public function getFields() : array
    {
        return $this->fields;
    }
    /**
     * 
     *
     * @param ObjsTeamProfileField[] $fields
     *
     * @return self
     */
    public function setFields(array $fields) : self
    {
        $this->fields = $fields;
        return $this;
    }
}