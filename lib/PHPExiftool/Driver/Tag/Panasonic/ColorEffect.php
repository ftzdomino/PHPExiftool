<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class ColorEffect extends \PHPExiftool\Driver\Tag
{

    protected $Id = 40;

    protected $Name = 'ColorEffect';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Color Effect';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Off',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Warm',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Cool',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Black & White',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Sepia',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Happy',
        ),
    );

}