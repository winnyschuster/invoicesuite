<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot(name="PackagedTransportHandlingUnit", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
 */
class PackagedTransportHandlingUnit extends TransportHandlingUnitType
{
    use HandlesObjectFlags;
}
