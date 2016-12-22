<?php

namespace AppBundle\Entity\Property;

use Doctrine\ORM\Mapping as ORM;

/**
 * Volume
 *
 * @ORM\Table(name="property_volume")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Property\VolumeRepository")
 */
class Volume extends AbstractProperty
{


    /**
     * Get unitsOfMeasure
     *
     * @return string
     */
    public function getUnitsOfMeasure()
    {
        return 'мл.';
    }

    public function getClass()
    {
        return 'Volume';
    }
}

