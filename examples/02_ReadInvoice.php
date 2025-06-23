<?php

use horstoeko\invoicesuite\InvoiceSuiteDocumentReader;

require __DIR__ . "/../vendor/autoload.php";

$reader = InvoiceSuiteDocumentReader::createFromCFile(__DIR__ . "/01_SimpleInvoice.xml");
$reader->getDocumentNo($documentNumber);
$reader->getDocumentType($documentType);
$reader->getDocumentDescription($documentDescription);
$reader->getDocumentLanguage($documentLanguage);
$reader->getDocumentDate($documentDate);
$reader->getDocumentCompleteDate($documentCompleteDate);
$reader->getDocumentCurrency($documentCurrency);
$reader->getDocumentTaxCurrency($documentTaxCurrency);
$reader->getDocumentIsCopy($documentIsCopy);

echo "Document Number ........ $documentNumber\n";
echo "Document Type .......... $documentType\n";
echo "Document Name .......... $documentDescription\n";
echo "Document Language ...... $documentLanguage\n";
echo "Document Date .......... " . $documentDate->format("d.m.Y") . "\n";
echo "Document Compl. Date ... " . $documentCompleteDate->format("d.m.Y") . "\n";
echo "Document Currency ...... $documentCurrency\n";
echo "Document Tax Currency .. $documentTaxCurrency\n";
echo "Document Copy .......... $documentIsCopy\n";

if ($reader->firstDocumentNote()) {
    do {
        echo "Document has notes...\n";
    } while ($reader->nextDocumentNote());
}
