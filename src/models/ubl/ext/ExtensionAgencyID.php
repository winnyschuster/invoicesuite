<?php

namespace horstoeko\invoicesuite\models\ubl\ext;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot(name="ExtensionAgencyID", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2")
 */
class ExtensionAgencyID extends ExtensionAgencyIDType
{
}
