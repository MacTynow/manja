<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrcFinding
 *
 * @ORM\Table(name="SRC_FINDING")
 * @ORM\Entity
 */
class SrcFinding
{
    /**
     * @var \itemId
     *
     * @ORM\ManyToOne(targetEntity="Items", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="itemId", referencedColumnName="id")
     * })
     */
    private $itemId;

    /**
     * @var string
     *
     * @ORM\Column(name="Version", type="string", length=45, nullable=true)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="Base_metal", type="string", length=45, nullable=false)
     */
    private $baseMetal;

    /**
     * @var string
     *
     * @ORM\Column(name="Finish", type="string", length=45, nullable=true)
     */
    private $finish;

    /**
     * @var string
     *
     * @ORM\Column(name="Shape", type="string", length=45, nullable=false)
     */
    private $shape;

    /**
     * @var integer
     *
     * @ORM\Column(name="Size1", type="integer", nullable=false)
     */
    private $size1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Size2", type="integer", nullable=false)
     */
    private $size2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Size3", type="integer", nullable=false)
     */
    private $size3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Size_section", type="integer", nullable=false)
     */
    private $sizeSection;

    /**
     * @var integer
     *
     * @ORM\Column(name="Weight_piece", type="integer", nullable=false)
     */
    private $weightPiece;

    /**
     * @var string
     *
     * @ORM\Column(name="Min_qty_buy", type="string", length=45, nullable=true)
     */
    private $minQtyBuy;

    /**
     * @var string
     *
     * @ORM\Column(name="Picture_path", type="string", length=45, nullable=true)
     */
    private $picturePath;

    /**
     * @var integer
     *
     * @ORM\Column(name="idSRC_FINDING", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsrcFinding;

    /**
     * @var \Prices
     *
     * @ORM\ManyToOne(targetEntity="Prices", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Price_piece", referencedColumnName="idPRICES")
     * })
     */
    private $pricePiece;

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
     * @var \FindingName
     *
     * @ORM\ManyToOne(targetEntity="FindingName", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Finding_name", referencedColumnName="idFINDING_NAME")
     * })
     */
    private $findingName;

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
     * Set version
     *
     * @param string $version
     * @return SrcFinding
     */
    public function setVersion($version)
    {
        $this->version = $version;
    
        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set baseMetal
     *
     * @param string $baseMetal
     * @return SrcFinding
     */
    public function setBaseMetal($baseMetal)
    {
        $this->baseMetal = $baseMetal;
    
        return $this;
    }

    /**
     * Get baseMetal
     *
     * @return string 
     */
    public function getBaseMetal()
    {
        return $this->baseMetal;
    }

    /**
     * Set finish
     *
     * @param string $finish
     * @return SrcFinding
     */
    public function setFinish($finish)
    {
        $this->finish = $finish;
    
        return $this;
    }

    /**
     * Get finish
     *
     * @return string 
     */
    public function getFinish()
    {
        return $this->finish;
    }

    /**
     * Set shape
     *
     * @param string $shape
     * @return SrcFinding
     */
    public function setShape($shape)
    {
        $this->shape = $shape;
    
        return $this;
    }

    /**
     * Get shape
     *
     * @return string 
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * Set size1
     *
     * @param integer $size1
     * @return SrcFinding
     */
    public function setSize1($size1)
    {
        $this->size1 = $size1;
    
        return $this;
    }

    /**
     * Get size1
     *
     * @return integer 
     */
    public function getSize1()
    {
        return $this->size1;
    }

    /**
     * Set size2
     *
     * @param integer $size2
     * @return SrcFinding
     */
    public function setSize2($size2)
    {
        $this->size2 = $size2;
    
        return $this;
    }

    /**
     * Get size2
     *
     * @return integer 
     */
    public function getSize2()
    {
        return $this->size2;
    }

    /**
     * Set size3
     *
     * @param integer $size3
     * @return SrcFinding
     */
    public function setSize3($size3)
    {
        $this->size3 = $size3;
    
        return $this;
    }

    /**
     * Get size3
     *
     * @return integer 
     */
    public function getSize3()
    {
        return $this->size3;
    }

    /**
     * Set sizeSection
     *
     * @param integer $sizeSection
     * @return SrcFinding
     */
    public function setSizeSection($sizeSection)
    {
        $this->sizeSection = $sizeSection;
    
        return $this;
    }

    /**
     * Get sizeSection
     *
     * @return integer 
     */
    public function getSizeSection()
    {
        return $this->sizeSection;
    }

    /**
     * Set weightPiece
     *
     * @param integer $weightPiece
     * @return SrcFinding
     */
    public function setWeightPiece($weightPiece)
    {
        $this->weightPiece = $weightPiece;
    
        return $this;
    }

    /**
     * Get weightPiece
     *
     * @return integer 
     */
    public function getWeightPiece()
    {
        return $this->weightPiece;
    }

    /**
     * Set minQtyBuy
     *
     * @param string $minQtyBuy
     * @return SrcFinding
     */
    public function setMinQtyBuy($minQtyBuy)
    {
        $this->minQtyBuy = $minQtyBuy;
    
        return $this;
    }

    /**
     * Get minQtyBuy
     *
     * @return string 
     */
    public function getMinQtyBuy()
    {
        return $this->minQtyBuy;
    }

    /**
     * Set picturePath
     *
     * @param string $picturePath
     * @return SrcFinding
     */
    public function setPicturePath($picturePath)
    {
        $this->picturePath = $picturePath;
    
        return $this;
    }

    /**
     * Get picturePath
     *
     * @return string 
     */
    public function getPicturePath()
    {
        return $this->picturePath;
    }

    /**
     * Get idsrcFinding
     *
     * @return integer 
     */
    public function getIdsrcFinding()
    {
        return $this->idsrcFinding;
    }

    /**
     * Set pricePiece
     *
     * @param Prices $pricePiece
     * @return SrcFinding
     */
    public function setPricePiece(Prices $pricePiece = null)
    {
        $this->pricePiece = $pricePiece;
    
        return $this;
    }

    /**
     * Get pricePiece
     *
     * @return Prices 
     */
    public function getPricePiece()
    {
        return $this->pricePiece;
    }

    /**
     * Set priceGram
     *
     * @param Prices $priceGram
     * @return SrcFinding
     */
    public function setPriceGram(Prices $priceGram = null)
    {
        $this->priceGram = $priceGram;
    
        return $this;
    }

    /**
     * Get priceGram
     *
     * @return Prices 
     */
    public function getPriceGram()
    {
        return $this->priceGram;
    }

    /**
     * Set findingName
     *
     * @param FindingName $findingName
     * @return SrcFinding
     */
    public function setFindingName(FindingName $findingName = null)
    {
        $this->findingName = $findingName;
    
        return $this;
    }

    /**
     * Get findingName
     *
     * @return FindingName 
     */
    public function getFindingName()
    {
        return $this->findingName;
    }

    /**
     * Set furnisher
     *
     * @param Supplier $furnisher
     * @return SrcFinding
     */
    public function setFurnisher(Supplier $furnisher = null)
    {
        $this->furnisher = $furnisher;
    
        return $this;
    }

    /**
     * Get furnisher
     *
     * @return Supplier 
     */
    public function getFurnisher()
    {
        return $this->furnisher;
    }

    /**
     * Set itemId
     *
     * @param \Manja\SourcingBundle\Entity\Items $itemId
     * @return SrcFinding
     */
    public function setItemId(\Manja\SourcingBundle\Entity\Items $itemId = null)
    {
        $this->itemId = $itemId;
    
        return $this;
    }

    /**
     * Get itemId
     *
     * @return \Manja\SourcingBundle\Entity\Items 
     */
    public function getItemId()
    {
        return $this->itemId;
    }
}