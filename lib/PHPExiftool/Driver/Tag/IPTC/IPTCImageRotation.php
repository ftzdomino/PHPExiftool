<?php

namespace PHPExiftool\Driver\Tag\IPTC;

class IPTCImageRotation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 102;

    protected $Name = 'IPTCImageRotation';

    protected $FullName = 'IPTC::NewsPhoto';

    protected $GroupName = 'IPTC';

    protected $g0 = 'IPTC';

    protected $g1 = 'IPTC';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'IPTC Image Rotation';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 0,
        ),
        1 => array(
            'Id' => 1,
            'Label' => 90,
        ),
        2 => array(
            'Id' => 2,
            'Label' => 180,
        ),
        3 => array(
            'Id' => 3,
            'Label' => 270,
        ),
    );

}