<?php

namespace Comicat\Slack\Api\Model;

class AuthRevokeGetResponse200
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
     * @var bool
     */
    protected $revoked;
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
     * @return bool
     */
    public function getRevoked() : bool
    {
        return $this->revoked;
    }
    /**
     * 
     *
     * @param bool $revoked
     *
     * @return self
     */
    public function setRevoked(bool $revoked) : self
    {
        $this->revoked = $revoked;
        return $this;
    }
}