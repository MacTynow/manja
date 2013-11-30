<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrcStone
 *
 * @ORM\Table(name="SRC_STONE")
 * @ORM\Entity
 */
class SrcStone
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
     * @ORM\Column(name="Comment", type="string", length=45, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="Shape", type="string", length=45, nullable=false)
     */
    private $shape;

    /**
     * @var string
     *
     * @ORM\Column(name="Cut", type="string", length=45, nullable=false)
     */
    private $cut;

    /**
     * @var string
     *
     * @ORM\Column(name="Cut_txt", type="string", length=45, nullable=true)
     */
    private $cutTxt;

    /**
     * @var string
     *
     * @ORM\Column(name="Color1", type="string", length=45, nullable=false)
     */
    private $color1;

    /**
     * @var string
     *
     * @ORM\Column(name="Color2", type="string", length=45, nullable=true)
     */
    private $color2;

    /**
     * @var string
     *
     * @ORM\Column(name="Saturation", type="string", length=45, nullable=false)
     */
    private $saturation;

    /**
     * @var string
     *
     * @ORM\Column(name="Clarity", type="string", length=45, nullable=false)
     */
    private $clarity;

    /**
     * @var string
     *
     * @ORM\Column(name="Transparency", type="string", length=45, nullable=false)
     */
    private $transparency;

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
     * @ORM\Column(name="Size_height", type="integer", nullable=false)
     */
    private $sizeHeight;

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
     * @ORM\Column(name="idSTONE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstone;

    /**
     * @var \StoneVariety
     *
     * @ORM\ManyToOne(targetEntity="StoneVariety", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Variety", referencedColumnName="idSTONE_VARIETY")
     * })
     */
    private $variety;

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
     *   @ORM\JoinColumn(name="Price_ct", referencedColumnName="idPRICES")
     * })
     */
    private $priceCt;

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
     * @return SrcStone
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
     * Set comment
     *
     * @param string $comment
     * @return SrcStone
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set shape
     *
     * @param string $shape
     * @return SrcStone
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
     * Set cut
     *
     * @param string $cut
     * @return SrcStone
     */
    public function setCut($cut)
    {
        $this->cut = $cut;
    
        return $this;
    }

    /**
     * Get cut
     *
     * @return string 
     */
    public function getCut()
    {
        return $this->cut;
    }

    /**
     * Set cutTxt
     *
     * @param string $cutTxt
     * @return SrcStone
     */
    public function setCutTxt($cutTxt)
    {
        $this->cutTxt = $cutTxt;
    
        return $this;
    }

    /**
     * Get cutTxt
     *
     * @return string 
     */
    public function getCutTxt()
    {
        return $this->cutTxt;
    }

    /**
     * Set color1
     *
     * @param string $color1
     * @return SrcStone
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
     * @return SrcStone
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
     * Set saturation
     *
     * @param string $saturation
     * @return SrcStone
     */
    public function setSaturation($saturation)
    {
        $this->saturation = $saturation;
    
        return $this;
    }

    /**
     * Get saturation
     *
     * @return string 
     */
    public function getSaturation()
    {
        return $this->saturation;
    }

    /**
     * Set clarity
     *
     * @param string $clarity
     * @return SrcStone
     */
    public function setClarity($clarity)
    {
        $this->clarity = $clarity;
    
        return $this;
    }

    /**
     * Get clarity
     *
     * @return string 
     */
    public function getClarity()
    {
        return $this->clarity;
    }

    /**
     * Set transparency
     *
     * @param string $transparency
     * @return SrcStone
     */
    public function setTransparency($transparency)
    {
        $this->transparency = $transparency;
    
        return $this;
    }

    /**
     * Get transparency
     *
     * @return string 
     */
    public function getTransparency()
    {
        return $this->transparency;
    }

    /**
     * Set size1
     *
     * @param integer $size1
     * @return SrcStone
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
     * @return SrcStone
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
     * Set sizeHeight
     *
     * @param integer $sizeHeight
     * @return SrcStone
     */
    public function setSizeHeight($sizeHeight)
    {
        $this->sizeHeight = $sizeHeight;
    
        return $this;
    }

    /**
     * Get sizeHeight
     *
     * @return integer 
     */
    public function getSizeHeight()
    {
        return $this->sizeHeight;
    }

    /**
     * Set weightPiece
     *
     * @param integer $weightPiece
     * @return SrcStone
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
     * @return SrcStone
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
     * @return SrcStone
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
     * Get idstone
     *
     * @return integer 
     */
    public function getIdstone()
    {
        return $this->idstone;
    }

    /**
     * Set variety
     *
     * @paramStoneVariety $variety
     * @return SrcStone
     */
    public function setVariety(StoneVariety $variety = null)
    {
        $this->variety = $variety;
    
        return $this;
    }

    /**
     * Get variety
     *
     * @return StoneVariety 
     */
    public function getVariety()
    {
        return $this->variety;
    }

    /**
     * Set pricePiece
     *
     * @param Prices $pricePiece
     * @return SrcStone
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
     * Set priceCt
     *
     * @param Prices $priceCt
     * @return SrcStone
     */
    public function setPriceCt(Prices $priceCt = null)
    {
        $this->priceCt = $priceCt;
    
        return $this;
    }

    /**
     * Get priceCt
     *
     * @return Prices 
     */
    public function getPriceCt()
    {
        return $this->priceCt;
    }

    /**
     * Set furnisher
     *
     * @param Supplier $furnisher
     * @return SrcStone
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
