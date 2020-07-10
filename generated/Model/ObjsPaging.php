<?php

namespace Comicat\Slack\Api\Model;

class ObjsPaging
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
     * @var int
     */
    protected $page;
    /**
     * 
     *
     * @var int
     */
    protected $pages;
    /**
     * 
     *
     * @var int
     */
    protected $perPage;
    /**
     * 
     *
     * @var int
     */
    protected $spill;
    /**
     * 
     *
     * @var int
     */
    protected $total;
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
     * @return int
     */
    public function getPage() : int
    {
        return $this->page;
    }
    /**
     * 
     *
     * @param int $page
     *
     * @return self
     */
    public function setPage(int $page) : self
    {
        $this->page = $page;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPages() : int
    {
        return $this->pages;
    }
    /**
     * 
     *
     * @param int $pages
     *
     * @return self
     */
    public function setPages(int $pages) : self
    {
        $this->pages = $pages;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPerPage() : int
    {
        return $this->perPage;
    }
    /**
     * 
     *
     * @param int $perPage
     *
     * @return self
     */
    public function setPerPage(int $perPage) : self
    {
        $this->perPage = $perPage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSpill() : int
    {
        return $this->spill;
    }
    /**
     * 
     *
     * @param int $spill
     *
     * @return self
     */
    public function setSpill(int $spill) : self
    {
        $this->spill = $spill;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total) : self
    {
        $this->total = $total;
        return $this;
    }
}