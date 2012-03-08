<?php

namespace PHPExiftool\Driver\Tag\ExifIFD;

class T4Options extends \PHPExiftool\Driver\Tag
{

    protected $Id = 292;

    protected $Name = 'T4Options';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'T4 Options';

    protected $local_g1 = 'ExifIFD';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => '2-Dimensional encoding',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Uncompressed',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Fill bits added',
        ),
    );

}