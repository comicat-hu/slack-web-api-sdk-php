<?php

namespace Comicat\Slack\Api\Model;

class ObjsTeamProfileFieldOption
{
    /**
     * 
     *
     * @var bool
     */
    protected $isCustom;
    /**
     * 
     *
     * @var bool
     */
    protected $isMultipleEntry;
    /**
     * 
     *
     * @var bool
     */
    protected $isProtected;
    /**
     * 
     *
     * @var bool
     */
    protected $isScim;
    /**
     * 
     *
     * @return bool
     */
    public function getIsCustom() : bool
    {
        return $this->isCustom;
    }
    /**
     * 
     *
     * @param bool $isCustom
     *
     * @return self
     */
    public function setIsCustom(bool $isCustom) : self
    {
        $this->isCustom = $isCustom;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsMultipleEntry() : bool
    {
        return $this->isMultipleEntry;
    }
    /**
     * 
     *
     * @param bool $isMultipleEntry
     *
     * @return self
     */
    public function setIsMultipleEntry(bool $isMultipleEntry) : self
    {
        $this->isMultipleEntry = $isMultipleEntry;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsProtected() : bool
    {
        return $this->isProtected;
    }
    /**
     * 
     *
     * @param bool $isProtected
     *
     * @return self
     */
    public function setIsProtected(bool $isProtected) : self
    {
        $this->isProtected = $isProtected;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsScim() : bool
    {
        return $this->isScim;
    }
    /**
     * 
     *
     * @param bool $isScim
     *
     * @return self
     */
    public function setIsScim(bool $isScim) : self
    {
        $this->isScim = $isScim;
        return $this;
    }
}