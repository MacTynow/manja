<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Supplier
 *
 * @ORM\Table(name="SUPPLIER")
 * @ORM\Entity
 */
class Supplier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSUPPLIER", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsupplier;

    /**
     * @var string
     *
     * @ORM\Column(name="Product_category", type="string", length=45, nullable=true)
     */
    private $productCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="Comment", type="string", length=45, nullable=true)
     */
    private $comment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Supplies_diamond", type="boolean", nullable=true)
     */
    private $suppliesDiamond;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Supplies_Stones", type="boolean", nullable=true)
     */
    private $suppliesStones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Supplies_Pearls", type="boolean", nullable=true)
     */
    private $suppliesPearls;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Supplies_chains", type="boolean", nullable=true)
     */
    private $suppliesChains;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Supplies_findings", type="boolean", nullable=true)
     */
    private $suppliesFindings;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Supplies_acc_length", type="boolean", nullable=true)
     */
    private $suppliesAccLength;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Supplies_acc_piece", type="boolean", nullable=true)
     */
    private $suppliesAccPiece;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Supplies_Metal", type="boolean", nullable=true)
     */
    private $suppliesMetal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Supplies_Task", type="boolean", nullable=true)
     */
    private $suppliesTask;

    /**
     * @var \Contact
     *
     * @ORM\ManyToOne(targetEntity="Contact", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Contact", referencedColumnName="idCONTACT")
     * })
     */
    private $contact;

    /**
     * @var \ContactRank
     *
     * @ORM\ManyToOne(targetEntity="ContactRank", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Rank", referencedColumnName="idCONTACT_RANK")
     * })
     */
    private $rank;



    /**
     * Get idsupplier
     *
     * @return integer 
     */
    public function getIdsupplier()
    {
        return $this->idsupplier;
    }

    /**
     * Set productCategory
     *
     * @param string $productCategory
     * @return Supplier
     */
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;
    
        return $this;
    }

    /**
     * Get productCategory
     *
     * @return string 
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Supplier
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
     * Set suppliesDiamond
     *
     * @param boolean $suppliesDiamond
     * @return Supplier
     */
    public function setSuppliesDiamond($suppliesDiamond)
    {
        $this->suppliesDiamond = $suppliesDiamond;
    
        return $this;
    }

    /**
     * Get suppliesDiamond
     *
     * @return boolean 
     */
    public function getSuppliesDiamond()
    {
        return $this->suppliesDiamond;
    }

    /**
     * Set suppliesStones
     *
     * @param boolean $suppliesStones
     * @return Supplier
     */
    public function setSuppliesStones($suppliesStones)
    {
        $this->suppliesStones = $suppliesStones;
    
        return $this;
    }

    /**
     * Get suppliesStones
     *
     * @return boolean 
     */
    public function getSuppliesStones()
    {
        return $this->suppliesStones;
    }

    /**
     * Set suppliesPearls
     *
     * @param boolean $suppliesPearls
     * @return Supplier
     */
    public function setSuppliesPearls($suppliesPearls)
    {
        $this->suppliesPearls = $suppliesPearls;
    
        return $this;
    }

    /**
     * Get suppliesPearls
     *
     * @return boolean 
     */
    public function getSuppliesPearls()
    {
        return $this->suppliesPearls;
    }

    /**
     * Set suppliesChains
     *
     * @param boolean $suppliesChains
     * @return Supplier
     */
    public function setSuppliesChains($suppliesChains)
    {
        $this->suppliesChains = $suppliesChains;
    
        return $this;
    }

    /**
     * Get suppliesChains
     *
     * @return boolean 
     */
    public function getSuppliesChains()
    {
        return $this->suppliesChains;
    }

    /**
     * Set suppliesFindings
     *
     * @param boolean $suppliesFindings
     * @return Supplier
     */
    public function setSuppliesFindings($suppliesFindings)
    {
        $this->suppliesFindings = $suppliesFindings;
    
        return $this;
    }

    /**
     * Get suppliesFindings
     *
     * @return boolean 
     */
    public function getSuppliesFindings()
    {
        return $this->suppliesFindings;
    }

    /**
     * Set suppliesAccLength
     *
     * @param boolean $suppliesAccLength
     * @return Supplier
     */
    public function setSuppliesAccLength($suppliesAccLength)
    {
        $this->suppliesAccLength = $suppliesAccLength;
    
        return $this;
    }

    /**
     * Get suppliesAccLength
     *
     * @return boolean 
     */
    public function getSuppliesAccLength()
    {
        return $this->suppliesAccLength;
    }

    /**
     * Set suppliesAccPiece
     *
     * @param boolean $suppliesAccPiece
     * @return Supplier
     */
    public function setSuppliesAccPiece($suppliesAccPiece)
    {
        $this->suppliesAccPiece = $suppliesAccPiece;
    
        return $this;
    }

    /**
     * Get suppliesAccPiece
     *
     * @return boolean 
     */
    public function getSuppliesAccPiece()
    {
        return $this->suppliesAccPiece;
    }

    /**
     * Set suppliesMetal
     *
     * @param boolean $suppliesMetal
     * @return Supplier
     */
    public function setSuppliesMetal($suppliesMetal)
    {
        $this->suppliesMetal = $suppliesMetal;
    
        return $this;
    }

    /**
     * Get suppliesMetal
     *
     * @return boolean 
     */
    public function getSuppliesMetal()
    {
        return $this->suppliesMetal;
    }

    /**
     * Set suppliesTask
     *
     * @param boolean $suppliesTask
     * @return Supplier
     */
    public function setSuppliesTask($suppliesTask)
    {
        $this->suppliesTask = $suppliesTask;
    
        return $this;
    }

    /**
     * Get suppliesTask
     *
     * @return boolean 
     */
    public function getSuppliesTask()
    {
        return $this->suppliesTask;
    }

    /**
     * Set contact
     *
     * @param \Manja\SourcingBundle\Entity\Contact $contact
     * @return Supplier
     */
    public function setContact(\Manja\SourcingBundle\Entity\Contact $contact = null)
    {
        $this->contact = $contact;
    
        return $this;
    }

    /**
     * Get contact
     *
     * @return \Manja\SourcingBundle\Entity\Contact 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set rank
     *
     * @param \Manja\SourcingBundle\Entity\ContactRank $rank
     * @return Supplier
     */
    public function setRank(\Manja\SourcingBundle\Entity\ContactRank $rank = null)
    {
        $this->rank = $rank;
    
        return $this;
    }

    /**
     * Get rank
     *
     * @return \Manja\SourcingBundle\Entity\ContactRank 
     */
    public function getRank()
    {
        return $this->rank;
    }

    /* Get company and names from supplier entity */
    public function getCompany()
    {
        return $this->getContact()->getCompany();
        //return $this->getContact()->getFirstName() .' '. $this->getContact()->getLastName() .' ('. $this->getContact()->getCompany() .')';
    }

}
