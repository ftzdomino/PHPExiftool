<?php

namespace PHPExiftool\Driver\Tag\Canon;

class CanonExposureMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 20;

    protected $Name = 'CanonExposureMode';

    protected $FullName = 'Canon::CameraSettings';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Canon Exposure Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Easy',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Program AE',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Shutter speed priority AE',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Aperture-priority AE',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Manual',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Depth-of-field AE',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'M-Dep',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Bulb',
        ),
    );

}