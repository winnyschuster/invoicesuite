<?php

namespace horstoeko\invoicesuite\models\ubl\cbc;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot(name="EmbeddedDocumentBinaryObject", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
 */
class EmbeddedDocumentBinaryObject extends EmbeddedDocumentBinaryObjectType
{
}
