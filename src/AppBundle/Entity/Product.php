<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, unique=true)
     */
    private $title;

    /**
     * @ORM\OneTomany(targetEntity="ProductShopInfo", mappedBy="product")
     */
    private $productShopInfos;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productShopInfos = new ArrayCollection();
    }


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
     * Set title
     *
     * @param string $title
     * @return Product
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * Add productShopInfo
     *
     * @param \AppBundle\Entity\ProductShopInfo $productShopInfo
     *
     * @return Product
     */
    public function addProductShopInfo($productShopInfo)
    {
        $this->productShopInfos[] = $productShopInfo;
        $productShopInfo->setProduct($this);

        return $this;
    }

    /**
     * Remove productShopInfo
     *
     * @param \AppBundle\Entity\ProductShopInfo $productShopInfo
     */
    public function removeProductShopInfo($productShopInfo)
    {
        $this->productShopInfos->removeElement($productShopInfo);
        $productShopInfo->setProduct(null);
    }

    /**
     * Get productShopInfos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductShopInfos()
    {
        return $this->productShopInfos;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Product
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
}
