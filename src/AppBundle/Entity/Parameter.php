<?php

namespace AppBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class Parameter
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name = "parameter")
 */
class Parameter extends AbstractEntity
{
    
    /**
     * @var string
     * @ORM\Column(name = "caption", type = "string")
     */
    protected $caption;

    /**
     * @var boolean
     * @ORM\Column(name = "for_dish", type = "boolean")
     */
    protected $fordish;
    

    /**
     * @var boolean
     * @ORM\Column(name = "for_ingridient", type = "boolean")
     */
    protected $foringridient;

    /**
     * @var ArrayCollection|ParameterValue[]
     * @ORM\OneToMany(targetEntity = "AppBundle\Entity\ParameterValue", mappedBy = "parameter", cascade = {"persist", "remove"})
     */
    protected $values;

    /**
     * @var integer
     * @ORM\Column(name = "priority", type = "integer", nullable=true)
     */
    protected $priority;

    /**
     * @var boolean
     * @ORM\Column(name = "active", type = "boolean")
     */
    protected $active;

    public function __construct()
    {
        parent::__construct();
        $this->fordish = true;
        $this->foringridient = true;
        $this->active=true;
    }

    /**
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param string $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    /**
     * @return boolean
     */
    public function isFordish()
    {
        return $this->fordish;
    }

    /**
     * @param boolean $fordish
     */
    public function setFordish($fordish)
    {
        $this->fordish = $fordish;
    }

    /**
     * @return boolean
     */
    public function isForingridient()
    {
        return $this->foringridient;
    }

    /**
     * @param boolean $foringridient
     */
    public function setForingridient($foringridient)
    {
        $this->foringridient = $foringridient;
    }

    /**
     * @return ParameterValue[]|ArrayCollection
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param ParameterValue[]|ArrayCollection $values
     */
    public function setValues($values)
    {
        $this->values = $values;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }


}
