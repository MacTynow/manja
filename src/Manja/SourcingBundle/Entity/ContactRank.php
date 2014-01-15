<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactRank
 *
 * @ORM\Table(name="CONTACT_RANK")
 * @ORM\Entity
 */
class ContactRank
{
    /**
     * @var string
     *
     * @ORM\Column(name="Rank", type="string", length=45, nullable=false)
     */
    private $rank;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCONTACT_RANK", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontactRank;



    /**
     * Set rank
     *
     * @param string $rank
     * @return ContactRank
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    
        return $this;
    }

    /**
     * Get rank
     *
     * @return string 
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Get idcontactRank
     *
     * @return integer 
     */
    public function getIdcontactRank()
    {
        return $this->idcontactRank;
    }
}