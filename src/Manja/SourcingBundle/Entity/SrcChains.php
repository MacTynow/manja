<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrcChains
 *
 * @ORM\Table(name="SRC_CHAINS")
 * @ORM\Entity
 */
class SrcChains
{
    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=45, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=45, nullable=true)
     */
    private $name;

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
     * @ORM\Column(name="Size_section", type="integer", nullable=false)
     */
    private $sizeSection;

    /**
     * @var integer
     *
     * @ORM\Column(name="Weight_meter", type="integer", nullable=false)
     */
    private $weightMeter;

    /**
     * @var integer
     *
     * @ORM\Column(name="Qty_length_finished", type="integer", nullable=true)
     */
    private $qtyLengthFinished;

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
     * @ORM\Column(name="idSRC_CHAINS", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsrcChains;

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
     *   @ORM\JoinColumn(name="Price_meter", referencedColumnName="idPRICES")
     * })
     */
    private $priceMeter;

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
     * @var \Supplier
     *
     * @ORM\ManyToOne(targetEntity="Supplier", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Furnisher", referencedColumnName="idSUPPLIER")
     * })
     */
    private $furnisher;



    /**
     * Set type
     *
     * @param string $type
     * @return SrcChains
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

    /**
     * Set name
     *
     * @param string $name
     * @return SrcChains
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
     * Set version
     *
     * @param string $version
     * @return SrcChains
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
     * @return SrcChains
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
     * @return SrcChains
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
     * @return SrcChains
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
     * @return SrcChains
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
     * @return SrcChains
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
     * Set sizeSection
     *
     * @param integer $sizeSection
     * @return SrcChains
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
     * Set weightMeter
     *
     * @param integer $weightMeter
     * @return SrcChains
     */
    public function setWeightMeter($weightMeter)
    {
        $this->weightMeter = $weightMeter;
    
        return $this;
    }

    /**
     * Get weightMeter
     *
     * @return integer 
     */
    public function getWeightMeter()
    {
        return $this->weightMeter;
    }

    /**
     * Set qtyLengthFinished
     *
     * @param integer $qtyLengthFinished
     * @return SrcChains
     */
    public function setQtyLengthFinished($qtyLengthFinished)
    {
        $this->qtyLengthFinished = $qtyLengthFinished;
    
        return $this;
    }

    /**
     * Get qtyLengthFinished
     *
     * @return integer 
     */
    public function getQtyLengthFinished()
    {
        return $this->qtyLengthFinished;
    }

    /**
     * Set minQtyBuy
     *
     * @param string $minQtyBuy
     * @return SrcChains
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
     * @return SrcChains
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
     * Get idsrcChains
     *
     * @return integer 
     */
    public function getIdsrcChains()
    {
        return $this->idsrcChains;
    }

    /**
     * Set pricePiece
     *
     * @param Prices $pricePiece
     * @return SrcChains
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
     * Set priceMeter
     *
     * @param Prices $priceMeter
     * @return SrcChains
     */
    public function setPriceMeter(Prices $priceMeter = null)
    {
        $this->priceMeter = $priceMeter;
    
        return $this;
    }

    /**
     * Get priceMeter
     *
     * @return Prices 
     */
    public function getPriceMeter()
    {
        return $this->priceMeter;
    }

    /**
     * Set priceGram
     *
     * @param Prices $priceGram
     * @return SrcChains
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
     * Set furnisher
     *
     * @param Supplier $furnisher
     * @return SrcChains
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
}
