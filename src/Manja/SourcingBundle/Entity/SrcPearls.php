<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrcPearls
 *
 * @ORM\Table(name="SRC_PEARLS")
 * @ORM\Entity
 */
class SrcPearls
{
    /**
     * @var string
     *
     * @ORM\Column(name="Variety", type="string", length=45, nullable=false)
     */
    private $variety;

    /**
     * @var string
     *
     * @ORM\Column(name="Origin", type="string", length=45, nullable=false)
     */
    private $origin;

    /**
     * @var string
     *
     * @ORM\Column(name="Drilling", type="string", length=45, nullable=true)
     */
    private $drilling;

    /**
     * @var string
     *
     * @ORM\Column(name="Shape", type="string", length=45, nullable=false)
     */
    private $shape;

    /**
     * @var integer
     *
     * @ORM\Column(name="Shape_grade", type="integer", nullable=false)
     */
    private $shapeGrade;

    /**
     * @var string
     *
     * @ORM\Column(name="Color1", type="string", length=45, nullable=false)
     */
    private $color1;

    /**
     * @var string
     *
     * @ORM\Column(name="Color2", type="string", length=45, nullable=false)
     */
    private $color2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Luster_grade", type="integer", nullable=false)
     */
    private $lusterGrade;

    /**
     * @var integer
     *
     * @ORM\Column(name="Surface_grade", type="integer", nullable=false)
     */
    private $surfaceGrade;

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
     * @var string
     *
     * @ORM\Column(name="Size_txt", type="string", length=45, nullable=true)
     */
    private $sizeTxt;

    /**
     * @var integer
     *
     * @ORM\Column(name="Weight_piece", type="integer", nullable=false)
     */
    private $weightPiece;

    /**
     * @var integer
     *
     * @ORM\Column(name="Min_qty_buy", type="integer", nullable=true)
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
     * @ORM\Column(name="idSRC_PEARLS", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsrcPearls;

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
     * Set variety
     *
     * @param string $variety
     * @return SrcPearls
     */
    public function setVariety($variety)
    {
        $this->variety = $variety;
    
        return $this;
    }

    /**
     * Get variety
     *
     * @return string 
     */
    public function getVariety()
    {
        return $this->variety;
    }

    /**
     * Set origin
     *
     * @param string $origin
     * @return SrcPearls
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
    
        return $this;
    }

    /**
     * Get origin
     *
     * @return string 
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set drilling
     *
     * @param string $drilling
     * @return SrcPearls
     */
    public function setDrilling($drilling)
    {
        $this->drilling = $drilling;
    
        return $this;
    }

    /**
     * Get drilling
     *
     * @return string 
     */
    public function getDrilling()
    {
        return $this->drilling;
    }

    /**
     * Set shape
     *
     * @param string $shape
     * @return SrcPearls
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
     * Set shapeGrade
     *
     * @param integer $shapeGrade
     * @return SrcPearls
     */
    public function setShapeGrade($shapeGrade)
    {
        $this->shapeGrade = $shapeGrade;
    
        return $this;
    }

    /**
     * Get shapeGrade
     *
     * @return integer 
     */
    public function getShapeGrade()
    {
        return $this->shapeGrade;
    }

    /**
     * Set color1
     *
     * @param string $color1
     * @return SrcPearls
     */
    public function setColor1($color1)
    {
        $this->color1 = $color1;
    
        return $this;
    }

    /**
     * Get color1
     *
     * @return string 
     */
    public function getColor1()
    {
        return $this->color1;
    }

    /**
     * Set color2
     *
     * @param string $color2
     * @return SrcPearls
     */
    public function setColor2($color2)
    {
        $this->color2 = $color2;
    
        return $this;
    }

    /**
     * Get color2
     *
     * @return string 
     */
    public function getColor2()
    {
        return $this->color2;
    }

    /**
     * Set lusterGrade
     *
     * @param integer $lusterGrade
     * @return SrcPearls
     */
    public function setLusterGrade($lusterGrade)
    {
        $this->lusterGrade = $lusterGrade;
    
        return $this;
    }

    /**
     * Get lusterGrade
     *
     * @return integer 
     */
    public function getLusterGrade()
    {
        return $this->lusterGrade;
    }

    /**
     * Set surfaceGrade
     *
     * @param integer $surfaceGrade
     * @return SrcPearls
     */
    public function setSurfaceGrade($surfaceGrade)
    {
        $this->surfaceGrade = $surfaceGrade;
    
        return $this;
    }

    /**
     * Get surfaceGrade
     *
     * @return integer 
     */
    public function getSurfaceGrade()
    {
        return $this->surfaceGrade;
    }

    /**
     * Set size1
     *
     * @param integer $size1
     * @return SrcPearls
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
     * @return SrcPearls
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
     * Set sizeTxt
     *
     * @param string $sizeTxt
     * @return SrcPearls
     */
    public function setSizeTxt($sizeTxt)
    {
        $this->sizeTxt = $sizeTxt;
    
        return $this;
    }

    /**
     * Get sizeTxt
     *
     * @return string 
     */
    public function getSizeTxt()
    {
        return $this->sizeTxt;
    }

    /**
     * Set weightPiece
     *
     * @param integer $weightPiece
     * @return SrcPearls
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
     * @param integer $minQtyBuy
     * @return SrcPearls
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
     * Set picturePath
     *
     * @param string $picturePath
     * @return SrcPearls
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
     * Get idsrcPearls
     *
     * @return integer 
     */
    public function getIdsrcPearls()
    {
        return $this->idsrcPearls;
    }

    /**
     * Set furnisher
     *
     * @param Supplier $furnisher
     * @return SrcPearls
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
     * @return SrcPearls
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
}
