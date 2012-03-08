<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class MainDialExposureComp extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0.6';

    protected $Name = 'MainDialExposureComp';

    protected $FullName = 'NikonCustom::SettingsD80';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Main Dial Exposure Comp';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'On',
        ),
    );

}