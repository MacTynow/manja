<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FindingName
 *
 * @ORM\Table(name="FINDING_NAME")
 * @ORM\Entity
 */
class FindingName
{
    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="idFINDING_NAME", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfindingName;

    /**
     * @var \FindingType
     *
     * @ORM\ManyToOne(targetEntity="FindingType", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Type", referencedColumnName="idFINDING_TYPE")
     * })
     */
    private $type;



    /**
     * Set name
     *
     * @param string $name
     * @return FindingName
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get idfindingName
     *
     * @return integer 
     */
    public function getIdfindingName()
    {
        return $this->idfindingName;
    }

    /**
     * Set type
     *
     * @param FindingType $type
     * @return FindingName
     */
    public function setType(FindingType $type = null)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return FindingType 
     */
    public function getType()
    {
        return $this->type;
    }
}