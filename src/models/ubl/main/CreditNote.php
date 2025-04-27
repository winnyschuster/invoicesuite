<?php

namespace horstoeko\invoicesuite\models\ubl\main;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CreditNote-2", prefix="ubl")
 * @JMS\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", prefix="cac")
 * @JMS\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", prefix="cbc")
 * @JMS\XmlNamespace(uri="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2", prefix="cec")
 */
class CreditNote extends CreditNoteType
{
}
