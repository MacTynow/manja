<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="PRODUCT")
 * @ORM\Entity
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPRODUCT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproduct;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var \ReqMetal
     *
     * @ORM\ManyToOne(targetEntity="ReqMetal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="req_metal", referencedColumnName="idREQ_METAL")
     * })
     */
    private $reqMetal;

    /**
     * @var \SrcMetal
     *
     * @ORM\ManyToOne(targetEntity="SrcMetal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="src_metal", referencedColumnName="idSRC_METAL")
     * })
     */
    private $srcMetal;

    /**
     * @var \ReqStone
     *
     * @ORM\ManyToOne(targetEntity="ReqStone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="req_stone", referencedColumnName="idREQ_STONE")
     * })
     */
    private $reqStone;

    /**
     * @var \SrcStone
     *
     * @ORM\ManyToOne(targetEntity="SrcStone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="src_stone", referencedColumnName="idSTONE")
     * })
     */
    private $srcStone;

    /**
     * @var \SrcDiams
     *
     * @ORM\ManyToOne(targetEntity="SrcDiams")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="src_diams", referencedColumnName="idSRC_DIAMS")
     * })
     */
    private $srcDiams;

    /**
     * @var \SrcPearls
     *
     * @ORM\ManyToOne(targetEntity="SrcPearls")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="src_pearls", referencedColumnName="idSRC_PEARLS")
     * })
     */
    private $srcPearls;

    /**
     * @var \SrcChains
     *
     * @ORM\ManyToOne(targetEntity="SrcChains")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="src_chains", referencedColumnName="idSRC_CHAINS")
     * })
     */
    private $srcChains;

    /**
     * @var \SrcFinding
     *
     * @ORM\ManyToOne(targetEntity="SrcFinding")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="src_finding", referencedColumnName="idSRC_FINDING")
     * })
     */
    private $srcFinding;

    /**
     * @var \SrcAccLength
     *
     * @ORM\ManyToOne(targetEntity="SrcAccLength")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="src_acc_length", referencedColumnName="idSRC_ACC_LENGTH")
     * })
     */
    private $srcAccLength;

    /**
     * @var \SrcAccPiece
     *
     * @ORM\ManyToOne(targetEntity="SrcAccPiece")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="src_acc_piece", referencedColumnName="idSRC_ACC_PIECE")
     * })
     */
    private $srcAccPiece;



    /**
     * Get idproduct
     *
     * @return integer 
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Product
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
     * Set reqMetal
     *
     * @param \Manja\SourcingBundle\Entity\ReqMetal $reqMetal
     * @return Product
     */
    public function setReqMetal(\Manja\SourcingBundle\Entity\ReqMetal $reqMetal = null)
    {
        $this->reqMetal = $reqMetal;
    
        return $this;
    }

    /**
     * Get reqMetal
     *
     * @return \Manja\SourcingBundle\Entity\ReqMetal 
     */
    public function getReqMetal()
    {
        return $this->reqMetal;
    }

    /**
     * Set srcMetal
     *
     * @param \Manja\SourcingBundle\Entity\SrcMetal $srcMetal
     * @return Product
     */
    public function setSrcMetal(\Manja\SourcingBundle\Entity\SrcMetal $srcMetal = null)
    {
        $this->srcMetal = $srcMetal;
    
        return $this;
    }

    /**
     * Get srcMetal
     *
     * @return \Manja\SourcingBundle\Entity\SrcMetal 
     */
    public function getSrcMetal()
    {
        return $this->srcMetal;
    }

    /**
     * Set reqStone
     *
     * @param \Manja\SourcingBundle\Entity\ReqStone $reqStone
     * @return Product
     */
    public function setReqStone(\Manja\SourcingBundle\Entity\ReqStone $reqStone = null)
    {
        $this->reqStone = $reqStone;
    
        return $this;
    }

    /**
     * Get reqStone
     *
     * @return \Manja\SourcingBundle\Entity\ReqStone 
     */
    public function getReqStone()
    {
        return $this->reqStone;
    }

    /**
     * Set srcStone
     *
     * @param \Manja\SourcingBundle\Entity\SrcStone $srcStone
     * @return Product
     */
    public function setSrcStone(\Manja\SourcingBundle\Entity\SrcStone $srcStone = null)
    {
        $this->srcStone = $srcStone;
    
        return $this;
    }

    /**
     * Get srcStone
     *
     * @return \Manja\SourcingBundle\Entity\SrcStone 
     */
    public function getSrcStone()
    {
        return $this->srcStone;
    }

    /**
     * Set srcDiams
     *
     * @param \Manja\SourcingBundle\Entity\SrcDiams $srcDiams
     * @return Product
     */
    public function setSrcDiams(\Manja\SourcingBundle\Entity\SrcDiams $srcDiams = null)
    {
        $this->srcDiams = $srcDiams;
    
        return $this;
    }

    /**
     * Get srcDiams
     *
     * @return \Manja\SourcingBundle\Entity\SrcDiams 
     */
    public function getSrcDiams()
    {
        return $this->srcDiams;
    }

    /**
     * Set srcPearls
     *
     * @param \Manja\SourcingBundle\Entity\SrcPearls $srcPearls
     * @return Product
     */
    public function setSrcPearls(\Manja\SourcingBundle\Entity\SrcPearls $srcPearls = null)
    {
        $this->srcPearls = $srcPearls;
    
        return $this;
    }

    /**
     * Get srcPearls
     *
     * @return \Manja\SourcingBundle\Entity\SrcPearls 
     */
    public function getSrcPearls()
    {
        return $this->srcPearls;
    }

    /**
     * Set srcChains
     *
     * @param \Manja\SourcingBundle\Entity\SrcChains $srcChains
     * @return Product
     */
    public function setSrcChains(\Manja\SourcingBundle\Entity\SrcChains $srcChains = null)
    {
        $this->srcChains = $srcChains;
    
        return $this;
    }

    /**
     * Get srcChains
     *
     * @return \Manja\SourcingBundle\Entity\SrcChains 
     */
    public function getSrcChains()
    {
        return $this->srcChains;
    }

    /**
     * Set srcFinding
     *
     * @param \Manja\SourcingBundle\Entity\SrcFinding $srcFinding
     * @return Product
     */
    public function setSrcFinding(\Manja\SourcingBundle\Entity\SrcFinding $srcFinding = null)
    {
        $this->srcFinding = $srcFinding;
    
        return $this;
    }

    /**
     * Get srcFinding
     *
     * @return \Manja\SourcingBundle\Entity\SrcFinding 
     */
    public function getSrcFinding()
    {
        return $this->srcFinding;
    }

    /**
     * Set srcAccLength
     *
     * @param \Manja\SourcingBundle\Entity\SrcAccLength $srcAccLength
     * @return Product
     */
    public function setSrcAccLength(\Manja\SourcingBundle\Entity\SrcAccLength $srcAccLength = null)
    {
        $this->srcAccLength = $srcAccLength;
    
        return $this;
    }

    /**
     * Get srcAccLength
     *
     * @return \Manja\SourcingBundle\Entity\SrcAccLength 
     */
    public function getSrcAccLength()
    {
        return $this->srcAccLength;
    }

    /**
     * Set srcAccPiece
     *
     * @param \Manja\SourcingBundle\Entity\SrcAccPiece $srcAccPiece
     * @return Product
     */
    public function setSrcAccPiece(\Manja\SourcingBundle\Entity\SrcAccPiece $srcAccPiece = null)
    {
        $this->srcAccPiece = $srcAccPiece;
    
        return $this;
    }

    /**
     * Get srcAccPiece
     *
     * @return \Manja\SourcingBundle\Entity\SrcAccPiece 
     */
    public function getSrcAccPiece()
    {
        return $this->srcAccPiece;
    }
}