<?php

namespace horstoeko\invoicesuite\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot(name="SalesItem", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
 */
class SalesItem extends SalesItemType
{
}
