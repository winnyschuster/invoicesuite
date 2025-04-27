<?php

namespace horstoeko\invoicesuite\models\ubl\ext;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot(name="ExtensionURI", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2")
 */
class ExtensionURI extends ExtensionURIType
{
}
