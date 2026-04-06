<?php

use horstoeko\invoicesuite\InvoiceSuiteDocumentReader;

/**
 * Read an elctronic invoice document from a XML file
 */

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/00_ExampleHelpers.php';

$reader = InvoiceSuiteDocumentReader::createFromFile(__DIR__ . '/01_SimpleInvoice.xml');

/*
 * Output the information read from the electronic invoice document
 * See 00_ExampleHelpers.php
 */

helperOutputDocumentReader($reader);
