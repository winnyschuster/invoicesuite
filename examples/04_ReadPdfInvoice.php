<?php

use horstoeko\invoicesuite\InvoiceSuitePdfDocumentReader;
use horstoeko\invoicesuite\utils\InvoiceSuitePathUtils;

/**
 * Read an hybrid elctronic Invoice document from a PDF file
 */

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/00_ExampleHelpers.php';

$pdfReader = InvoiceSuitePdfDocumentReader::createFromFile(InvoiceSuitePathUtils::combinePathWithFile(__DIR__, '04_Invoice.pdf'));
$reader = $pdfReader->getDocumentReader();

/*
 * Output the information read from the electronic invoice document
 * See 00_ExampleHelpers.php
 */

helperOutputDocumentReader($reader);
