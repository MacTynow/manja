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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPRODUCT", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproduct;

    /**
     * @var \SrcFinding
     *
     * @ORM\ManyToOne(targetEntity="SrcFinding", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="src_finding", referencedColumnName="idSRC_FINDING")
     * })
     */
    private $srcFinding;

    /**
     * @var \SrcMetal
     *
     * @ORM\ManyToOne(targetEntity="SrcMetal", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="src_metal", referencedColumnName="idSRC_METAL")
     * })
     */
    private $srcMetal;

    /**
     * @var \SrcPearls
     *
     * @ORM\ManyToOne(targetEntity="SrcPearls", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="src_pearls", referencedColumnName="idSRC_PEARLS")
     * })
     */
    private $srcPearls;

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
     * @var \SrcChains
     *
     * @ORM\ManyToOne(targetEntity="SrcChains")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="src_chains", referencedColumnName="idSRC_CHAINS")
     * })
     */
    private $srcChains;

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
     * @var \ReqMetal
     *
     * @ORM\ManyToOne(targetEntity="ReqMetal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="req_metal", referencedColumnName="idREQ_METAL")
     * })
     */
    private $reqMetal;



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
     * Get idproduct
     *
     * @return integer 
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }

    /**
     * Set srcFinding
     *
     * @param SrcFinding $srcFinding
     * @return Product
     */
    public function setSrcFinding(SrcFinding $srcFinding = null)
    {
        $this->srcFinding = $srcFinding;
    
        return $this;
    }

    /**
     * Get srcFinding
     *
     * @return SrcFinding 
     */
    public function getSrcFinding()
    {
        return $this->srcFinding;
    }

    /**
     * Set srcMetal
     *
     * @param SrcMetal $srcMetal
     * @return Product
     */
    public function setSrcMetal(SrcMetal $srcMetal = null)
    {
        $this->srcMetal = $srcMetal;
    
        return $this;
    }

    /**
     * Get srcMetal
     *
     * @return SrcMetal 
     */
    public function getSrcMetal()
    {
        return $this->srcMetal;
    }

    /**
     * Set srcPearls
     *
     * @param SrcPearls $srcPearls
     * @return Product
     */
    public function setSrcPearls(SrcPearls $srcPearls = null)
    {
        $this->srcPearls = $srcPearls;
    
        return $this;
    }

    /**
     * Get srcPearls
     *
     * @return SrcPearls 
     */
    public function getSrcPearls()
    {
        return $this->srcPearls;
    }

    /**
     * Set srcStone
     *
     * @param SrcStone $srcStone
     * @return Product
     */
    public function setSrcStone(SrcStone $srcStone = null)
    {
        $this->srcStone = $srcStone;
    
        return $this;
    }

    /**
     * Get srcStone
     *
     * @return SrcStone 
     */
    public function getSrcStone()
    {
        return $this->srcStone;
    }

    /**
     * Set srcDiams
     *
     * @param SrcDiams $srcDiams
     * @return Product
     */
    public function setSrcDiams(SrcDiams $srcDiams = null)
    {
        $this->srcDiams = $srcDiams;
    
        return $this;
    }

    /**
     * Get srcDiams
     *
     * @return SrcDiams 
     */
    public function getSrcDiams()
    {
        return $this->srcDiams;
    }

    /**
     * Set srcChains
     *
     * @param SrcChains $srcChains
     * @return Product
     */
    public function setSrcChains(SrcChains $srcChains = null)
    {
        $this->srcChains = $srcChains;
    
        return $this;
    }

    /**
     * Get srcChains
     *
     * @return SrcChains 
     */
    public function getSrcChains()
    {
        return $this->srcChains;
    }

    /**
     * Set reqStone
     *
     * @param ReqStone $reqStone
     * @return Product
     */
    public function setReqStone(ReqStone $reqStone = null)
    {
        $this->reqStone = $reqStone;
    
        return $this;
    }

    /**
     * Get reqStone
     *
     * @return ReqStone 
     */
    public function getReqStone()
    {
        return $this->reqStone;
    }

    /**
     * Set srcAccLength
     *
     * @param SrcAccLength $srcAccLength
     * @return Product
     */
    public function setSrcAccLength(SrcAccLength $srcAccLength = null)
    {
        $this->srcAccLength = $srcAccLength;
    
        return $this;
    }

    /**
     * Get srcAccLength
     *
     * @return SrcAccLength 
     */
    public function getSrcAccLength()
    {
        return $this->srcAccLength;
    }

    /**
     * Set srcAccPiece
     *
     * @param SrcAccPiece $srcAccPiece
     * @return Product
     */
    public function setSrcAccPiece(SrcAccPiece $srcAccPiece = null)
    {
        $this->srcAccPiece = $srcAccPiece;
    
        return $this;
    }

    /**
     * Get srcAccPiece
     *
     * @return SrcAccPiece 
     */
    public function getSrcAccPiece()
    {
        return $this->srcAccPiece;
    }

    /**
     * Set reqMetal
     *
     * @param ReqMetal $reqMetal
     * @return Product
     */
    public function setReqMetal(ReqMetal $reqMetal = null)
    {
        $this->reqMetal = $reqMetal;
    
        return $this;
    }

    /**
     * Get reqMetal
     *
     * @return ReqMetal 
     */
    public function getReqMetal()
    {
        return $this->reqMetal;
    }
}