<?php

namespace horstoeko\invoicesuite\documents\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\udt\MeasureType;

class NetTonnageMeasureType extends MeasureType
{
    use HandlesObjectFlags;
}
