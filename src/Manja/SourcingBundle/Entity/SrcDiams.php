<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SrcDiams
 *
 * @ORM\Table(name="SRC_DIAMS")
 * @ORM\Entity
 */
class SrcDiams
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
     * @ORM\Column(name="Type", type="string", length=45, nullable=false)
     */
    private $type;

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
     * @ORM\Column(name="Cut_comment", type="string", length=45, nullable=true)
     */
    private $cutComment;

    /**
     * @var string
     *
     * @ORM\Column(name="Color", type="string", length=45, nullable=false)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="Clarity", type="string", length=45, nullable=false)
     */
    private $clarity;

    /**
     * @var string
     *
     * @ORM\Column(name="Comment", type="string", length=45, nullable=true)
     */
    private $comment;

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
     * @var integer
     *
     * @ORM\Column(name="idSRC_DIAMS", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsrcDiams;

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
     * @return SrcDiams
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
     * Set shape
     *
     * @param string $shape
     * @return SrcDiams
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
     * @return SrcDiams
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
     * Set cutComment
     *
     * @param string $cutComment
     * @return SrcDiams
     */
    public function setCutComment($cutComment)
    {
        $this->cutComment = $cutComment;
    
        return $this;
    }

    /**
     * Get cutComment
     *
     * @return string 
     */
    public function getCutComment()
    {
        return $this->cutComment;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return SrcDiams
     */
    public function setColor($color)
    {
        $this->color = $color;
    
        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set clarity
     *
     * @param string $clarity
     * @return SrcDiams
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
     * Set comment
     *
     * @param string $comment
     * @return SrcDiams
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
     * Set size1
     *
     * @param integer $size1
     * @return SrcDiams
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
     * @return SrcDiams
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
     * Set weightPiece
     *
     * @param integer $weightPiece
     * @return SrcDiams
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
     * @return SrcDiams
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
     * Get idsrcDiams
     *
     * @return integer 
     */
    public function getIdsrcDiams()
    {
        return $this->idsrcDiams;
    }

    /**
     * Set pricePiece
     *
     * @param Prices $pricePiece
     * @return SrcDiams
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
     * @return SrcDiams
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
     * @return SrcDiams
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
     * @return SrcDiams
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