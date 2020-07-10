<?php

namespace Comicat\Slack\Api\Model;

class TeamAccessLogsGetResponse200LoginsItem
{
    /**
     * 
     *
     * @var int
     */
    protected $count;
    /**
     * 
     *
     * @var string
     */
    protected $country;
    /**
     * 
     *
     * @var int
     */
    protected $dateFirst;
    /**
     * 
     *
     * @var int
     */
    protected $dateLast;
    /**
     * 
     *
     * @var string
     */
    protected $ip;
    /**
     * 
     *
     * @var string
     */
    protected $isp;
    /**
     * 
     *
     * @var string
     */
    protected $region;
    /**
     * 
     *
     * @var string
     */
    protected $userAgent;
    /**
     * 
     *
     * @var string
     */
    protected $userId;
    /**
     * 
     *
     * @var string
     */
    protected $username;
    /**
     * 
     *
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * 
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count) : self
    {
        $this->count = $count;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country) : self
    {
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDateFirst() : int
    {
        return $this->dateFirst;
    }
    /**
     * 
     *
     * @param int $dateFirst
     *
     * @return self
     */
    public function setDateFirst(int $dateFirst) : self
    {
        $this->dateFirst = $dateFirst;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDateLast() : int
    {
        return $this->dateLast;
    }
    /**
     * 
     *
     * @param int $dateLast
     *
     * @return self
     */
    public function setDateLast(int $dateLast) : self
    {
        $this->dateLast = $dateLast;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIp() : string
    {
        return $this->ip;
    }
    /**
     * 
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip) : self
    {
        $this->ip = $ip;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIsp() : string
    {
        return $this->isp;
    }
    /**
     * 
     *
     * @param string $isp
     *
     * @return self
     */
    public function setIsp(string $isp) : self
    {
        $this->isp = $isp;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRegion() : string
    {
        return $this->region;
    }
    /**
     * 
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region) : self
    {
        $this->region = $region;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserAgent() : string
    {
        return $this->userAgent;
    }
    /**
     * 
     *
     * @param string $userAgent
     *
     * @return self
     */
    public function setUserAgent(string $userAgent) : self
    {
        $this->userAgent = $userAgent;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserId() : string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(string $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username) : self
    {
        $this->username = $username;
        return $this;
    }
}