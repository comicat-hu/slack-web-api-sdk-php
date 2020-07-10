<?php

namespace Comicat\Slack\Api\Model;

class ObjsConversationItem0DisplayCounts
{
    /**
     * 
     *
     * @var int
     */
    protected $displayCounts;
    /**
     * 
     *
     * @var int
     */
    protected $guestCounts;
    /**
     * 
     *
     * @return int
     */
    public function getDisplayCounts() : int
    {
        return $this->displayCounts;
    }
    /**
     * 
     *
     * @param int $displayCounts
     *
     * @return self
     */
    public function setDisplayCounts(int $displayCounts) : self
    {
        $this->displayCounts = $displayCounts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGuestCounts() : int
    {
        return $this->guestCounts;
    }
    /**
     * 
     *
     * @param int $guestCounts
     *
     * @return self
     */
    public function setGuestCounts(int $guestCounts) : self
    {
        $this->guestCounts = $guestCounts;
        return $this;
    }
}