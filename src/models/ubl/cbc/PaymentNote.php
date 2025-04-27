<?php

namespace horstoeko\invoicesuite\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot(name="PaymentNote", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
 */
class PaymentNote extends PaymentNoteType
{
}
