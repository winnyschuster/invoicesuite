<?php

namespace horstoeko\invoicesuite\documents\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\udt\QuantityType;

class ActualTemperatureReductionQuantityType extends QuantityType
{
    use HandlesObjectFlags;
}
