<?php

namespace horstoeko\invoicesuite\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot(name="WeightNumeric", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
 */
class WeightNumeric extends WeightNumericType
{
}
