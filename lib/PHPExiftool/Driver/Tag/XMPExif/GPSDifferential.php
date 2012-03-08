<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class GPSDifferential extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'GPSDifferential';

    protected $Name = 'GPSDifferential';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'GPS Differential';

    protected $local_g2 = 'Location';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No Correction',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Differential Corrected',
        ),
    );

}