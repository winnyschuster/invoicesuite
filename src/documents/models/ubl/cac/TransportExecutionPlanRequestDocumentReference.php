<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot(name="TransportExecutionPlanRequestDocumentReference", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
 */
class TransportExecutionPlanRequestDocumentReference extends DocumentReferenceType
{
    use HandlesObjectFlags;
}
