<?php

namespace horstoeko\invoicesuite\documents\models\ubl\udt;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cct\TextType as TextTypeBase;

class TextType extends TextTypeBase
{
    use HandlesObjectFlags;
}
