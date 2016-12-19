<?php

namespace AppBundle\Entity\Property;

use Doctrine\ORM\Mapping as ORM;

/**
 * Weight
 *
 * @ORM\Table(name="property_weight")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Property\WeightRepository")
 */
class Weight extends AbstractProperty
{
    /**
     * @var int
     *
     * @ORM\Column(name="value", type="integer")
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="unitsOfMeasure", type="string", length=10)
     */
    private $unitsOfMeasure;


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
     * Set value
     *
     * @param integer $value
     *
     * @return Weight
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set unitsOfMeasure
     *
     * @param string $unitsOfMeasure
     *
     * @return Weight
     */
    public function setUnitsOfMeasure($unitsOfMeasure)
    {
        $this->unitsOfMeasure = $unitsOfMeasure;

        return $this;
    }

    /**
     * Get unitsOfMeasure
     *
     * @return string
     */
    public function getUnitsOfMeasure()
    {
        return $this->unitsOfMeasure;
    }
}

