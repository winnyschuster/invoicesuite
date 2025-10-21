<?php

namespace horstoeko\invoicesuite\documents\models\ubl\ext;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\udt\IdentifierType;

class ExtensionURIType extends IdentifierType
{
    use HandlesObjectFlags;
}
