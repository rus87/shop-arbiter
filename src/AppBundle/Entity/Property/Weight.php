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
     * Get unitsOfMeasure
     *
     * @return string
     */
    public function getUnitsOfMeasure()
    {
        return 'кг';
    }

    public function getClass()
    {
        return 'Weight';
    }
}

