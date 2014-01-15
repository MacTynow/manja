<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReqStone
 *
 * @ORM\Table(name="REQ_STONE")
 * @ORM\Entity
 */
class ReqStone
{
    /**
     * @var string
     *
     * @ORM\Column(name="Quantity", type="string", length=45, nullable=false)
     */
    private $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="idREQ_STONE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreqStone;



    /**
     * Set quantity
     *
     * @param string $quantity
     * @return ReqStone
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return string 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Get idreqStone
     *
     * @return integer 
     */
    public function getIdreqStone()
    {
        return $this->idreqStone;
    }
}