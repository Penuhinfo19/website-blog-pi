<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class PhotoshopBGRThumbnail extends AbstractTag
{

    protected $Id = 1033;

    protected $Name = 'PhotoshopBGRThumbnail';

    protected $FullName = 'Photoshop::Main';

    protected $GroupName = 'Photoshop';

    protected $g0 = 'Photoshop';

    protected $g1 = 'Photoshop';

    protected $g2 = 'Image';

    protected $Type = 'undef';

    protected $Writable = true;

    protected $Description = 'Photoshop BGR Thumbnail';

    protected $local_g2 = 'Preview';

    protected $flag_Unsafe = true;

}
