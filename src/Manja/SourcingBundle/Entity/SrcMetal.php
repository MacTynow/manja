<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrcMetal
 *
 * @ORM\Table(name="SRC_METAL")
 * @ORM\Entity
 */
class SrcMetal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSRC_METAL", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsrcMetal;

    /**
     * @var string
     *
     * @ORM\Column(name="Metal_color", type="string", length=45, nullable=false)
     */
    private $metalColor;

    /**
     * @var string
     *
     * @ORM\Column(name="Metal", type="string", length=45, nullable=false)
     */
    private $metal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Purity_percent", type="integer", nullable=false)
     */
    private $purityPercent;

    /**
     * @var string
     *
     * @ORM\Column(name="Purity_name", type="string", length=45, nullable=false)
     */
    private $purityName;

    /**
     * @var string
     *
     * @ORM\Column(name="Volumic_mass", type="string", length=45, nullable=false)
     */
    private $volumicMass;

    /**
     * @var \Supplier
     *
     * @ORM\ManyToOne(targetEntity="Supplier", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Furnisher", referencedColumnName="idSUPPLIER")
     * })
     */
    private $furnisher;

    /**
     * @var \Prices
     *
     * @ORM\ManyToOne(targetEntity="Prices", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Price_gram", referencedColumnName="idPRICES")
     * })
     */
    private $priceGram;



    /**
     * Get idsrcMetal
     *
     * @return integer 
     */
    public function getIdsrcMetal()
    {
        return $this->idsrcMetal;
    }

    /**
     * Set metalColor
     *
     * @param string $metalColor
     * @return SrcMetal
     */
    public function setMetalColor($metalColor)
    {
        $this->metalColor = $metalColor;
    
        return $this;
    }

    /**
     * Get metalColor
     *
     * @return string 
     */
    public function getMetalColor()
    {
        return $this->metalColor;
    }

    /**
     * Set metal
     *
     * @param string $metal
     * @return SrcMetal
     */
    public function setMetal($metal)
    {
        $this->metal = $metal;
    
        return $this;
    }

    /**
     * Get metal
     *
     * @return string 
     */
    public function getMetal()
    {
        return $this->metal;
    }

    /**
     * Set purityPercent
     *
     * @param integer $purityPercent
     * @return SrcMetal
     */
    public function setPurityPercent($purityPercent)
    {
        $this->purityPercent = $purityPercent;
    
        return $this;
    }

    /**
     * Get purityPercent
     *
     * @return integer 
     */
    public function getPurityPercent()
    {
        return $this->purityPercent;
    }

    /**
     * Set purityName
     *
     * @param string $purityName
     * @return SrcMetal
     */
    public function setPurityName($purityName)
    {
        $this->purityName = $purityName;
    
        return $this;
    }

    /**
     * Get purityName
     *
     * @return string 
     */
    public function getPurityName()
    {
        return $this->purityName;
    }

    /**
     * Set volumicMass
     *
     * @param string $volumicMass
     * @return SrcMetal
     */
    public function setVolumicMass($volumicMass)
    {
        $this->volumicMass = $volumicMass;
    
        return $this;
    }

    /**
     * Get volumicMass
     *
     * @return string 
     */
    public function getVolumicMass()
    {
        return $this->volumicMass;
    }

    /**
     * Set furnisher
     *
     * @param \Manja\SourcingBundle\Entity\Supplier $furnisher
     * @return SrcMetal
     */
    public function setFurnisher(\Manja\SourcingBundle\Entity\Supplier $furnisher = null)
    {
        $this->furnisher = $furnisher;
    
        return $this;
    }

    /**
     * Get furnisher
     *
     * @return \Manja\SourcingBundle\Entity\Supplier 
     */
    public function getFurnisher()
    {
        return $this->furnisher;
    }

    /**
     * Set priceGram
     *
     * @param \Manja\SourcingBundle\Entity\Prices $priceGram
     * @return SrcMetal
     */
    public function setPriceGram(\Manja\SourcingBundle\Entity\Prices $priceGram = null)
    {
        $this->priceGram = $priceGram;
    
        return $this;
    }

    /**
     * Get priceGram
     *
     * @return \Manja\SourcingBundle\Entity\Prices 
     */
    public function getPriceGram()
    {
        return $this->priceGram;
    }
}
