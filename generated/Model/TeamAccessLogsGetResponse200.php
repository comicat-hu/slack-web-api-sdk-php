<?php

namespace Comicat\Slack\Api\Model;

class TeamAccessLogsGetResponse200
{
    /**
     * 
     *
     * @var TeamAccessLogsGetResponse200LoginsItem[]
     */
    protected $logins;
    /**
     * 
     *
     * @var bool
     */
    protected $ok;
    /**
     * 
     *
     * @var ObjsPaging
     */
    protected $paging;
    /**
     * 
     *
     * @return TeamAccessLogsGetResponse200LoginsItem[]
     */
    public function getLogins() : array
    {
        return $this->logins;
    }
    /**
     * 
     *
     * @param TeamAccessLogsGetResponse200LoginsItem[] $logins
     *
     * @return self
     */
    public function setLogins(array $logins) : self
    {
        $this->logins = $logins;
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
    /**
     * 
     *
     * @return ObjsPaging
     */
    public function getPaging() : ObjsPaging
    {
        return $this->paging;
    }
    /**
     * 
     *
     * @param ObjsPaging $paging
     *
     * @return self
     */
    public function setPaging(ObjsPaging $paging) : self
    {
        $this->paging = $paging;
        return $this;
    }
}