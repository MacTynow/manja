<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StoneVariety
 *
 * @ORM\Table(name="STONE_VARIETY")
 * @ORM\Entity
 */
class StoneVariety
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSTONE_VARIETY", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstoneVariety;

    /**
     * @var string
     *
     * @ORM\Column(name="Variety", type="string", length=45, nullable=false)
     */
    private $variety;

    /**
     * @var string
     *
     * @ORM\Column(name="Family", type="string", length=45, nullable=false)
     */
    private $family;

    /**
     * @var float
     *
     * @ORM\Column(name="SG", type="float", nullable=false)
     */
    private $sg;



    /**
     * Get idstoneVariety
     *
     * @return integer 
     */
    public function getIdstoneVariety()
    {
        return $this->idstoneVariety;
    }

    /**
     * Set variety
     *
     * @param string $variety
     * @return StoneVariety
     */
    public function setVariety($variety)
    {
        $this->variety = $variety;
    
        return $this;
    }

    /**
     * Get variety
     *
     * @return string 
     */
    public function getVariety()
    {
        return $this->variety;
    }

    /**
     * Set family
     *
     * @param string $family
     * @return StoneVariety
     */
    public function setFamily($family)
    {
        $this->family = $family;
    
        return $this;
    }

    /**
     * Get family
     *
     * @return string 
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Set sg
     *
     * @param float $sg
     * @return StoneVariety
     */
    public function setSg($sg)
    {
        $this->sg = $sg;
    
        return $this;
    }

    /**
     * Get sg
     *
     * @return float 
     */
    public function getSg()
    {
        return $this->sg;
    }
}