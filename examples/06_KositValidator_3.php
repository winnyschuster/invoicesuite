<?php

use horstoeko\invoicesuite\utils\InvoiceSuitePathUtils;
use horstoeko\invoicesuite\validators\kosit\InvoiceSuiteKositDocumentValidator;

require __DIR__ . "/../vendor/autoload.php";

// Create (Remote-) Validator

$contents = file_get_contents(InvoiceSuitePathUtils::combinePathWithFile(__DIR__, "/../tests/assets/00_case_xrechnung_cii_simple_dto.xml"));

$validator = InvoiceSuiteKositDocumentValidator::createFromContent($contents);
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
