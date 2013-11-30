<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrcAccLength
 *
 * @ORM\Table(name="SRC_ACC_LENGTH")
 * @ORM\Entity
 */
class SrcAccLength
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
     * @ORM\Column(name="Basic_name", type="string", length=45, nullable=false)
     */
    private $basicName;

    /**
     * @var string
     *
     * @ORM\Column(name="Version", type="string", length=45, nullable=true)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="Base_material", type="string", length=45, nullable=false)
     */
    private $baseMaterial;

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
     * @ORM\Column(name="Weight_meter", type="integer", nullable=true)
     */
    private $weightMeter;

    /**
     * @var integer
     *
     * @ORM\Column(name="Length", type="integer", nullable=true)
     */
    private $length;

    /**
     * @var integer
     *
     * @ORM\Column(name="Min_qty_buy", type="integer", nullable=true)
     */
    private $minQtyBuy;

    /**
     * @var integer
     *
     * @ORM\Column(name="idSRC_ACC_LENGTH", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsrcAccLength;

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
     * Set type
     *
     * @param string $type
     * @return SrcAccLength
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
     * Set basicName
     *
     * @param string $basicName
     * @return SrcAccLength
     */
    public function setBasicName($basicName)
    {
        $this->basicName = $basicName;
    
        return $this;
    }

    /**
     * Get basicName
     *
     * @return string 
     */
    public function getBasicName()
    {
        return $this->basicName;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return SrcAccLength
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
     * Set baseMaterial
     *
     * @param string $baseMaterial
     * @return SrcAccLength
     */
    public function setBaseMaterial($baseMaterial)
    {
        $this->baseMaterial = $baseMaterial;
    
        return $this;
    }

    /**
     * Get baseMaterial
     *
     * @return string 
     */
    public function getBaseMaterial()
    {
        return $this->baseMaterial;
    }

    /**
     * Set finish
     *
     * @param string $finish
     * @return SrcAccLength
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
     * @return SrcAccLength
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
     * @return SrcAccLength
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
     * @return SrcAccLength
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
     * @return SrcAccLength
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
     * @return SrcAccLength
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
     * Set length
     *
     * @param integer $length
     * @return SrcAccLength
     */
    public function setLength($length)
    {
        $this->length = $length;
    
        return $this;
    }

    /**
     * Get length
     *
     * @return integer 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set minQtyBuy
     *
     * @param integer $minQtyBuy
     * @return SrcAccLength
     */
    public function setMinQtyBuy($minQtyBuy)
    {
        $this->minQtyBuy = $minQtyBuy;
    
        return $this;
    }

    /**
     * Get minQtyBuy
     *
     * @return integer 
     */
    public function getMinQtyBuy()
    {
        return $this->minQtyBuy;
    }

    /**
     * Get idsrcAccLength
     *
     * @return integer 
     */
    public function getIdsrcAccLength()
    {
        return $this->idsrcAccLength;
    }

    /**
     * Set furnisher
     *
     * @param Supplier $furnisher
     * @return SrcAccLength
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
     * Set pricePiece
     *
     * @param Prices $pricePiece
     * @return SrcAccLength
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
     * @return SrcAccLength
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
     * @return SrcAccLength
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
}
