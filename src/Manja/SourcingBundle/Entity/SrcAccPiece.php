<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrcAccPiece
 *
 * @ORM\Table(name="SRC_ACC_PIECE")
 * @ORM\Entity
 */
class SrcAccPiece
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSRC_ACC_PIECE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsrcAccPiece;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=45, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Version", type="string", length=45, nullable=false)
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
     * @ORM\Column(name="Finish", type="string", length=45, nullable=false)
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
     * @ORM\Column(name="Size1", type="integer", nullable=true)
     */
    private $size1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Size2", type="integer", nullable=true)
     */
    private $size2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Size3", type="integer", nullable=true)
     */
    private $size3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Size_section", type="integer", nullable=true)
     */
    private $sizeSection;

    /**
     * @var string
     *
     * @ORM\Column(name="Size_text", type="string", length=45, nullable=true)
     */
    private $sizeText;

    /**
     * @var integer
     *
     * @ORM\Column(name="Weight_piece", type="integer", nullable=true)
     */
    private $weightPiece;

    /**
     * @var string
     *
     * @ORM\Column(name="Piece_lot", type="string", length=45, nullable=true)
     */
    private $pieceLot;

    /**
     * @var integer
     *
     * @ORM\Column(name="Price_gram", type="integer", nullable=true)
     */
    private $priceGram;

    /**
     * @var integer
     *
     * @ORM\Column(name="Min_qty_buy", type="integer", nullable=true)
     */
    private $minQtyBuy;

    /**
     * @var \Supplier
     *
     * @ORM\ManyToOne(targetEntity="Supplier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Fusnisher", referencedColumnName="idSUPPLIER")
     * })
     */
    private $fusnisher;

    /**
     * @var \Prices
     *
     * @ORM\ManyToOne(targetEntity="Prices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Price_piece", referencedColumnName="idPRICES")
     * })
     */
    private $pricePiece;

    /**
     * @var \Prices
     *
     * @ORM\ManyToOne(targetEntity="Prices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Price_lot", referencedColumnName="idPRICES")
     * })
     */
    private $priceLot;



    /**
     * Get idsrcAccPiece
     *
     * @return integer 
     */
    public function getIdsrcAccPiece()
    {
        return $this->idsrcAccPiece;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return SrcAccPiece
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
     * @return SrcAccPiece
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
     * @return SrcAccPiece
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
     * @return SrcAccPiece
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
     * @return SrcAccPiece
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
     * @return SrcAccPiece
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
     * @return SrcAccPiece
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
     * @return SrcAccPiece
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
     * @return SrcAccPiece
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
     * @return SrcAccPiece
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
     * Set sizeText
     *
     * @param string $sizeText
     * @return SrcAccPiece
     */
    public function setSizeText($sizeText)
    {
        $this->sizeText = $sizeText;
    
        return $this;
    }

    /**
     * Get sizeText
     *
     * @return string 
     */
    public function getSizeText()
    {
        return $this->sizeText;
    }

    /**
     * Set weightPiece
     *
     * @param integer $weightPiece
     * @return SrcAccPiece
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
     * Set pieceLot
     *
     * @param string $pieceLot
     * @return SrcAccPiece
     */
    public function setPieceLot($pieceLot)
    {
        $this->pieceLot = $pieceLot;
    
        return $this;
    }

    /**
     * Get pieceLot
     *
     * @return string 
     */
    public function getPieceLot()
    {
        return $this->pieceLot;
    }

    /**
     * Set priceGram
     *
     * @param integer $priceGram
     * @return SrcAccPiece
     */
    public function setPriceGram($priceGram)
    {
        $this->priceGram = $priceGram;
    
        return $this;
    }

    /**
     * Get priceGram
     *
     * @return integer 
     */
    public function getPriceGram()
    {
        return $this->priceGram;
    }

    /**
     * Set minQtyBuy
     *
     * @param integer $minQtyBuy
     * @return SrcAccPiece
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
     * Set fusnisher
     *
     * @param \Manja\SourcingBundle\Entity\Supplier $fusnisher
     * @return SrcAccPiece
     */
    public function setFusnisher(\Manja\SourcingBundle\Entity\Supplier $fusnisher = null)
    {
        $this->fusnisher = $fusnisher;
    
        return $this;
    }

    /**
     * Get fusnisher
     *
     * @return \Manja\SourcingBundle\Entity\Supplier 
     */
    public function getFusnisher()
    {
        return $this->fusnisher;
    }

    /**
     * Set pricePiece
     *
     * @param \Manja\SourcingBundle\Entity\Prices $pricePiece
     * @return SrcAccPiece
     */
    public function setPricePiece(\Manja\SourcingBundle\Entity\Prices $pricePiece = null)
    {
        $this->pricePiece = $pricePiece;
    
        return $this;
    }

    /**
     * Get pricePiece
     *
     * @return \Manja\SourcingBundle\Entity\Prices 
     */
    public function getPricePiece()
    {
        return $this->pricePiece;
    }

    /**
     * Set priceLot
     *
     * @param \Manja\SourcingBundle\Entity\Prices $priceLot
     * @return SrcAccPiece
     */
    public function setPriceLot(\Manja\SourcingBundle\Entity\Prices $priceLot = null)
    {
        $this->priceLot = $priceLot;
    
        return $this;
    }

    /**
     * Get priceLot
     *
     * @return \Manja\SourcingBundle\Entity\Prices 
     */
    public function getPriceLot()
    {
        return $this->priceLot;
    }
}