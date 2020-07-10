<?php

namespace Comicat\Slack\Api\Model;

class UsersIdentityGetResponse200Item1Team
{
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
}