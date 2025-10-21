<?php

namespace horstoeko\invoicesuite\documents\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\udt\PercentType as PercentTypeBase;

class PercentType extends PercentTypeBase
{
    use HandlesObjectFlags;
}
