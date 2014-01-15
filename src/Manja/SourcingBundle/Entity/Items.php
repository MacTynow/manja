<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Items
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \categoryId
     *
     * @ORM\ManyToOne(targetEntity="ItemCategories", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoryId", referencedColumnName="id")
     * })
     */
    private $categoryId;

    /**
     * @ORM\Column(type="integer")
     */
    private $number;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Items
     */
    public function setCategory($category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set categoryId
     *
     * @param \Manja\SourcingBundle\Entity\itemCategories $categoryId
     * @return Items
     */
    public function setCategoryId(\Manja\SourcingBundle\Entity\itemCategories $categoryId = null)
    {
        $this->categoryId = $categoryId;
    
        return $this;
    }

    /**
     * Get categoryId
     *
     * @return \Manja\SourcingBundle\Entity\itemCategories
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set number
     *
     * @param integer $number
     * @return Items
     */
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }
}