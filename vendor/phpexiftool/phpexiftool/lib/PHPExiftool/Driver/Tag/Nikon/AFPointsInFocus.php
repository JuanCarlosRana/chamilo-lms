<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class AFPointsInFocus extends AbstractTag
{

    protected $Id = 2;

    protected $Name = 'AFPointsInFocus';

    protected $FullName = 'Nikon::AFInfo';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'AF Points In Focus';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Center',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Top',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Bottom',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Mid-left',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Mid-right',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Upper-left',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'Upper-right',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'Lower-left',
        ),
        256 => array(
            'Id' => 256,
            'Label' => 'Lower-right',
        ),
        512 => array(
            'Id' => 512,
            'Label' => 'Far Left',
        ),
        1024 => array(
            'Id' => 1024,
            'Label' => 'Far Right',
        ),
        2047 => array(
            'Id' => 2047,
            'Label' => 'All 11 Points',
        ),
    );

}
