<?php

namespace AppBundle\Entity\Property;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fatness
 *
 * @ORM\Table(name="property_fatness")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Property\FatnessRepository")
 */
class Fatness extends AbstractProperty
{

    /**
     * Get unitsOfMeasure
     *
     * @return string
     */
    public function getUnitsOfMeasure()
    {
        return "%";
    }

    public function getClass()
    {
        return 'Fatness';
    }
}

