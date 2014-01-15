<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prices
 *
 * @ORM\Table(name="PRICES")
 * @ORM\Entity
 */
class Prices
{
    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_begin", type="date", nullable=false)
     */
    private $dateBegin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="date", nullable=true)
     */
    private $dateEnd;

    /**
     * @var boolean
     *
     * @ORM\Column(name="current", type="boolean", nullable=false)
     */
    private $current;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPRICES", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprices;



    /**
     * Set price
     *
     * @param integer $price
     * @return Prices
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set dateBegin
     *
     * @param \DateTime $dateBegin
     * @return Prices
     */
    public function setDateBegin($dateBegin)
    {
        $this->dateBegin = $dateBegin;
    
        return $this;
    }

    /**
     * Get dateBegin
     *
     * @return \DateTime 
     */
    public function getDateBegin()
    {
        return $this->dateBegin;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     * @return Prices
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    
        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set current
     *
     * @param boolean $current
     * @return Prices
     */
    public function setCurrent($current)
    {
        $this->current = $current;
    
        return $this;
    }

    /**
     * Get current
     *
     * @return boolean 
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * Get idprices
     *
     * @return integer 
     */
    public function getIdprices()
    {
        return $this->idprices;
    }
}