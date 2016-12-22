<?php

namespace AppBundle\Entity\Property;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbstractProperty
 *
 * @ORM\Table(name="property")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Property\AbstractPropertyRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap(
 *      {
 *            "weight" = "AppBundle\Entity\Property\Fatness",
 *            "volume" = "AppBundle\Entity\Property\Volume",
 *            "fatness" = "AppBundle\Entity\Property\Weight",
 *      }
 * )
 */
abstract class AbstractProperty
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Product", inversedBy="properties")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $product;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string")
     */
    private $value;


    /**
     * Fatness constructor.
     * @param int $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set product
     *
     * @param \AppBundle\Entity\Product $product
     *
     * @return AbstractProperty
     */
    public function setProduct(\AppBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \AppBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }
}
