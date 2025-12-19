<?php

use horstoeko\invoicesuite\InvoiceSuiteDocumentBuilder;
use horstoeko\invoicesuite\InvoiceSuiteDocumentReader;
use horstoeko\invoicesuite\utils\InvoiceSuitePathUtils;
use horstoeko\invoicesuite\validators\kosit\InvoiceSuiteKositDocumentValidator;

require __DIR__ . "/../vendor/autoload.php";

// Create (Remote-) Validator

$reader = InvoiceSuiteDocumentReader::createFromFile(InvoiceSuitePathUtils::combinePathWithFile(__DIR__, "/../tests/assets/00_case_comfort_simple.xml"));
$reader->convertToDTO($dto);

$builder = InvoiceSuiteDocumentBuilder::createByProviderUniqueId('xrechnungubl');
$builder->createFromDTO($dto);
$builder->saveAsXmlFile(__DIR__ . "/01_SimpleInvoice_UBL2.xml");

$validator = InvoiceSuiteKositDocumentValidator::createFromDocumentBuilderAsXml($builder);
$validator->enableRemoteMode();
$validator->setRemoteModeHost('192.168.1.83');
$validator->setRemoteModePort(8081);
$validator->validate();

echo "Finished\n";
echo sprintf("HasErrorMessages .......... %s\n", $validator->hasErrorMessagesInMessageBag());
echo sprintf("HasWarningMessages ........ %s\n", $validator->hasWarningMessagesInMessageBag());
echo sprintf("HasLogMessages ............ %s\n", $validator->hasInfoMessagesInMessageBag());

foreach ($validator->getErrorMessagesInMessageBag() as $message)
{
    echo sprintf("  ....... %s\n", $message->getMessageContent());
}
