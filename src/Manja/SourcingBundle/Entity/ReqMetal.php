<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReqMetal
 *
 * @ORM\Table(name="REQ_METAL")
 * @ORM\Entity
 */
class ReqMetal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idREQ_METAL", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreqMetal;



    /**
     * Get idreqMetal
     *
     * @return integer 
     */
    public function getIdreqMetal()
    {
        return $this->idreqMetal;
    }
}