<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MIEFlash;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class FlashMake extends AbstractTag
{

    protected $Id = 'Make';

    protected $Name = 'FlashMake';

    protected $FullName = 'MIE::Flash';

    protected $GroupName = 'MIE-Flash';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-Flash';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Flash Make';

}
