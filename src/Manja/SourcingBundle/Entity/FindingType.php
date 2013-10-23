<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FindingType
 *
 * @ORM\Table(name="FINDING_TYPE")
 * @ORM\Entity
 */
class FindingType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idFINDING_TYPE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfindingType;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=45, nullable=false)
     */
    private $type;



    /**
     * Get idfindingType
     *
     * @return integer 
     */
    public function getIdfindingType()
    {
        return $this->idfindingType;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return FindingType
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}