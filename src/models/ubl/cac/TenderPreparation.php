<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot(name="TenderPreparation", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
 */
class TenderPreparation extends TenderPreparationType
{
}
