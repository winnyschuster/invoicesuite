<?php

namespace horstoeko\invoicesuite\documents\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\udt\CodeType;

class ConsumerIncentiveTacticTypeCodeType extends CodeType
{
    use HandlesObjectFlags;
}
