<?php

namespace horstoeko\invoicesuite\documents\models\ubl\udt;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cct\NumericType;

class ValueType extends NumericType
{
    use HandlesObjectFlags;
}
