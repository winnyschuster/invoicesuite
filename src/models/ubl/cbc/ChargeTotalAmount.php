<?php

namespace horstoeko\invoicesuite\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot(name="ChargeTotalAmount", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
 */
class ChargeTotalAmount extends ChargeTotalAmountType
{
}
