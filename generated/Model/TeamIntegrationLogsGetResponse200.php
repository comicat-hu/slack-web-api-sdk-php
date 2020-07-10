<?php

namespace Comicat\Slack\Api\Model;

class TeamIntegrationLogsGetResponse200
{
    /**
     * 
     *
     * @var TeamIntegrationLogsGetResponse200LogsItem[]
     */
    protected $logs;
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
     * @return TeamIntegrationLogsGetResponse200LogsItem[]
     */
    public function getLogs() : array
    {
        return $this->logs;
    }
    /**
     * 
     *
     * @param TeamIntegrationLogsGetResponse200LogsItem[] $logs
     *
     * @return self
     */
    public function setLogs(array $logs) : self
    {
        $this->logs = $logs;
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