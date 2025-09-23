<?php

use horstoeko\invoicesuite\pdf\InvoiceSuitePdfDocumentBuilder;

require __DIR__ . "/../vendor/autoload.php";

$xmlContent = file_get_contents(__DIR__ . '/01_SimpleInvoice.xml');
$pdfContent = file_get_contents(__DIR__ . '/../tests/assets/pdf_plain.pdf');

InvoiceSuitePdfDocumentBuilder::createFromPdfContentAndXmlContent($pdfContent, $xmlContent);
