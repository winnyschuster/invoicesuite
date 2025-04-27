<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot(name="ShipsSurgeonPerson", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
 */
class ShipsSurgeonPerson extends PersonType
{
}
