<?php

namespace Comicat\Slack\Api\Model;

class ObjsTeamProfileField
{
    /**
     * 
     *
     * @var string
     */
    protected $fieldName;
    /**
     * 
     *
     * @var string
     */
    protected $hint;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var bool
     */
    protected $isHidden;
    /**
     * 
     *
     * @var string
     */
    protected $label;
    /**
     * 
     *
     * @var mixed
     */
    protected $options;
    /**
     * 
     *
     * @var float
     */
    protected $ordering;
    /**
     * 
     *
     * @var string[]
     */
    protected $possibleValues;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return string
     */
    public function getFieldName() : string
    {
        return $this->fieldName;
    }
    /**
     * 
     *
     * @param string $fieldName
     *
     * @return self
     */
    public function setFieldName(string $fieldName) : self
    {
        $this->fieldName = $fieldName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHint() : string
    {
        return $this->hint;
    }
    /**
     * 
     *
     * @param string $hint
     *
     * @return self
     */
    public function setHint(string $hint) : self
    {
        $this->hint = $hint;
        return $this;
    }
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
     * @return bool
     */
    public function getIsHidden() : bool
    {
        return $this->isHidden;
    }
    /**
     * 
     *
     * @param bool $isHidden
     *
     * @return self
     */
    public function setIsHidden(bool $isHidden) : self
    {
        $this->isHidden = $isHidden;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }
    /**
     * 
     *
     * @param mixed $options
     *
     * @return self
     */
    public function setOptions($options) : self
    {
        $this->options = $options;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getOrdering() : float
    {
        return $this->ordering;
    }
    /**
     * 
     *
     * @param float $ordering
     *
     * @return self
     */
    public function setOrdering(float $ordering) : self
    {
        $this->ordering = $ordering;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getPossibleValues() : array
    {
        return $this->possibleValues;
    }
    /**
     * 
     *
     * @param string[] $possibleValues
     *
     * @return self
     */
    public function setPossibleValues(array $possibleValues) : self
    {
        $this->possibleValues = $possibleValues;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}