<?php

namespace Comicat\Slack\Api\Model;

class UsersIdentityGetResponse200Item2User
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
     * @var string
     */
    protected $image192;
    /**
     * 
     *
     * @var string
     */
    protected $image24;
    /**
     * 
     *
     * @var string
     */
    protected $image32;
    /**
     * 
     *
     * @var string
     */
    protected $image48;
    /**
     * 
     *
     * @var string
     */
    protected $image512;
    /**
     * 
     *
     * @var string
     */
    protected $image72;
    /**
     * 
     *
     * @var string
     */
    protected $name;
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
    /**
     * 
     *
     * @return string
     */
    public function getImage192() : string
    {
        return $this->image192;
    }
    /**
     * 
     *
     * @param string $image192
     *
     * @return self
     */
    public function setImage192(string $image192) : self
    {
        $this->image192 = $image192;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImage24() : string
    {
        return $this->image24;
    }
    /**
     * 
     *
     * @param string $image24
     *
     * @return self
     */
    public function setImage24(string $image24) : self
    {
        $this->image24 = $image24;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImage32() : string
    {
        return $this->image32;
    }
    /**
     * 
     *
     * @param string $image32
     *
     * @return self
     */
    public function setImage32(string $image32) : self
    {
        $this->image32 = $image32;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImage48() : string
    {
        return $this->image48;
    }
    /**
     * 
     *
     * @param string $image48
     *
     * @return self
     */
    public function setImage48(string $image48) : self
    {
        $this->image48 = $image48;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImage512() : string
    {
        return $this->image512;
    }
    /**
     * 
     *
     * @param string $image512
     *
     * @return self
     */
    public function setImage512(string $image512) : self
    {
        $this->image512 = $image512;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImage72() : string
    {
        return $this->image72;
    }
    /**
     * 
     *
     * @param string $image72
     *
     * @return self
     */
    public function setImage72(string $image72) : self
    {
        $this->image72 = $image72;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}