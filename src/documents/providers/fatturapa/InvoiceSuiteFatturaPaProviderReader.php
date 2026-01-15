<?php

declare(strict_types=1);

/**
 * This file is a part of horstoeko/invoicesuite
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\documents\providers\fatturapa;

use DateTimeInterface;
use horstoeko\invoicesuite\documents\abstracts\InvoiceSuiteAbstractDocumentFormatReader;
use horstoeko\invoicesuite\documents\dto\InvoiceSuiteDocumentHeaderDTO;
use horstoeko\invoicesuite\utils\InvoiceSuiteAttachment;

class InvoiceSuiteFatturaPaProviderReader extends InvoiceSuiteAbstractDocumentFormatReader
{
    /**
     * Create a DTO from this document
     *
     * @param  null|InvoiceSuiteDocumentHeaderDTO $newDocumentDTO Data-Transfer-Object
     * @return static
     *
     * @phpstan-param-out InvoiceSuiteDocumentHeaderDTO $newDocumentDTO
     */
    public function convertToDTO(?InvoiceSuiteDocumentHeaderDTO &$newDocumentDTO): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newDocumentDTO = new InvoiceSuiteDocumentHeaderDTO();

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Gets the document number (e.g. invoice number)
     *
     * @param  null|string $newDocumentNo The document no issued by the seller
     * @return static
     *
     * @phpstan-param-out string $newDocumentNo
     */
    public function getDocumentNo(?string &$newDocumentNo): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newDocumentNo = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Gets the document type code
     *
     * @param  null|string $newDocumentType The type of the document
     * @return static
     *
     * @phpstan-param-out string $newDocumentType
     */
    public function getDocumentType(?string &$newDocumentType): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newDocumentType = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Gets the document description
     *
     * @param  null|string $newDocumentDescription The documenttype as free text
     * @return static
     *
     * @phpstan-param-out string $newDocumentDescription
     */
    public function getDocumentDescription(?string &$newDocumentDescription): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newDocumentDescription = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Gets the document language
     *
     * @param  null|string $newDocumentLanguage Language indicator. The language code in which the document was written
     * @return static
     *
     * @phpstan-param-out string $newDocumentLanguage
     */
    public function getDocumentLanguage(?string &$newDocumentLanguage): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newDocumentLanguage = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Gets the document date (e.g. invoice date)
     *
     * @param  null|DateTimeInterface $newDocumentDate Date of the document. The date when the document was issued by the seller
     * @return static
     *
     * @phpstan-param-out DateTimeInterface|null $newDocumentDate
     */
    public function getDocumentDate(?DateTimeInterface &$newDocumentDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newDocumentDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Gets the document period
     *
     * @param  null|DateTimeInterface $newCompleteDate Contractual due date of the document
     * @return static
     *
     * @phpstan-param-out DateTimeInterface|null $newCompleteDate
     */
    public function getDocumentCompleteDate(?DateTimeInterface &$newCompleteDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newCompleteDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Gets the document currency
     *
     * @param  null|string $newDocumentCurrency Code for the invoice currency
     * @return static
     *
     * @phpstan-param-out string $newDocumentCurrency
     */
    public function getDocumentCurrency(?string &$newDocumentCurrency): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newDocumentCurrency = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Gets the document tax currency
     *
     * @param  null|string $newDocumentTaxCurrency Code for the tax currency
     * @return static
     *
     * @phpstan-param-out string $newDocumentTaxCurrency
     */
    public function getDocumentTaxCurrency(?string &$newDocumentTaxCurrency): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newDocumentTaxCurrency = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Gets the status of the copy indicator
     *
     * @param  null|bool $newDocumentIsCopy Indicates that the document is a copy
     * @return static
     *
     * @phpstan-param-out boolean $newDocumentIsCopy
     */
    public function getDocumentIsCopy(?bool &$newDocumentIsCopy): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newDocumentIsCopy = false;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Gets the status of the test indicator
     *
     * @param  null|bool $newDocumentIsTest Indicates that the document is a test
     * @return static
     *
     * @phpstan-param-out boolean $newDocumentIsTest
     */
    public function getDocumentIsTest(?bool &$newDocumentIsTest): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newDocumentIsTest = false;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first document of the document
     *
     * @return bool
     */
    public function firstDocumentNote(): bool
    {
        return false;
    }

    /**
     * Go to the next document of the document
     *
     * @return bool
     */
    public function nextDocumentNote(): bool
    {
        return false;
    }

    /**
     * Get a note to the document.
     *
     * @param  null|string $newContent     Free text containing unstructured information that is relevant to the invoice as a whole
     * @param  null|string $newContentCode Code to classify the content of the free text of the invoice
     * @param  null|string $newSubjectCode Qualification of the free text for the invoice
     * @return static
     *
     * @phpstan-param-out string $newContent
     * @phpstan-param-out string $newContentCode
     * @phpstan-param-out string $newSubjectCode
     */
    public function getDocumentNote(?string &$newContent, ?string &$newContentCode, ?string &$newSubjectCode): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newContent = '';
        $newContentCode = '';
        $newSubjectCode = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first billing period
     *
     * @return bool
     */
    public function firstDocumentBillingPeriod(): bool
    {
        return false;
    }

    /**
     * Go to the next billing period
     *
     * @return bool
     */
    public function nextDocumentBillingPeriod(): bool
    {
        return false;
    }

    /**
     * Get the start and/or end date of the billing period
     *
     * @param  null|DateTimeInterface $newStartDate   Start of the billing period
     * @param  null|DateTimeInterface $newEndDate     End of the billing period
     * @param  null|string            $newDescription Further information of the billing period (Obsolete)
     * @return static
     *
     * @phpstan-param-out DateTimeInterface|null $newStartDate
     * @phpstan-param-out DateTimeInterface|null $newEndDate
     * @phpstan-param-out string $newDescription
     */
    public function getDocumentBillingPeriod(?DateTimeInterface &$newStartDate, ?DateTimeInterface &$newEndDate, ?string &$newDescription): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newStartDate = null;
        $newEndDate = null;
        $newDescription = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first posting reference
     *
     * @return bool
     */
    public function firstDocumentPostingReference(): bool
    {
        return false;
    }

    /**
     * Go to the next posting reference
     *
     * @return bool
     */
    public function nextDocumentPostingReference(): bool
    {
        return false;
    }

    /**
     * Get a posting reference
     *
     * @param  null|string $newType      Type of the posting reference
     * @param  null|string $newAccountId Posting reference of the byuer
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newAccountId
     */
    public function getDocumentPostingReference(?string &$newType, ?string &$newAccountId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newAccountId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first associated seller's order confirmation
     *
     * @return bool
     */
    public function firstDocumentSellerOrderReference(): bool
    {
        return false;
    }

    /**
     * Go to the next associated seller's order confirmation
     *
     * @return bool
     */
    public function nextDocumentSellerOrderReference(): bool
    {
        return false;
    }

    /**
     * Get the associated seller's order confirmation.
     *
     * @param  null|string            $newReferenceNumber Seller's order confirmation number
     * @param  null|DateTimeInterface $newReferenceDate   Seller's order confirmation date
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     */
    public function getDocumentSellerOrderReference(?string &$newReferenceNumber, ?DateTimeInterface &$newReferenceDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first associated buyer's order confirmation
     *
     * @return bool
     */
    public function firstDocumentBuyerOrderReference(): bool
    {
        return false;
    }

    /**
     * Go to the next associated buyer's order confirmation
     *
     * @return bool
     */
    public function nextDocumentBuyerOrderReference(): bool
    {
        return false;
    }

    /**
     * Get the associated buyer's order confirmation.
     *
     * @param  null|string            $newReferenceNumber Buyer's order number
     * @param  null|DateTimeInterface $newReferenceDate   Buyer's order date
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     */
    public function getDocumentBuyerOrderReference(?string &$newReferenceNumber, ?DateTimeInterface &$newReferenceDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first associated quotation
     *
     * @return bool
     */
    public function firstDocumentQuotationReference(): bool
    {
        return false;
    }

    /**
     * Go to the next associated quotation
     *
     * @return bool
     */
    public function nextDocumentQuotationReference(): bool
    {
        return false;
    }

    /**
     * Get the associated quotation
     *
     * @param  null|string            $newReferenceNumber Quotation number
     * @param  null|DateTimeInterface $newReferenceDate   Quotation date
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     */
    public function getDocumentQuotationReference(?string &$newReferenceNumber, ?DateTimeInterface &$newReferenceDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first associated contract
     *
     * @return bool
     */
    public function firstDocumentContractReference(): bool
    {
        return false;
    }

    /**
     * Go to the next associated contract
     *
     * @return bool
     */
    public function nextDocumentContractReference(): bool
    {
        return false;
    }

    /**
     * Get the associated contract
     *
     * @param  null|string            $newReferenceNumber Contract number
     * @param  null|DateTimeInterface $newReferenceDate   Contract date
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     */
    public function getDocumentContractReference(?string &$newReferenceNumber, ?DateTimeInterface &$newReferenceDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first additional associated document
     *
     * @return bool
     */
    public function firstDocumentAdditionalReference(): bool
    {
        return false;
    }

    /**
     * Go to the next additional associated document
     *
     * @return bool
     */
    public function nextDocumentAdditionalReference(): bool
    {
        return false;
    }

    /**
     * Get an additional associated document
     *
     * @param  null|string                 $newReferenceNumber        Additional document number
     * @param  null|DateTimeInterface      $newReferenceDate          Additional document date
     * @param  null|string                 $newTypeCode               Additional document type code
     * @param  null|string                 $newReferenceTypeCode      Additional document reference-type code
     * @param  null|string                 $newDescription            Additional document description
     * @param  null|InvoiceSuiteAttachment $newInvoiceSuiteAttachment Additional document attachment
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     * @phpstan-param-out string $newTypeCode
     * @phpstan-param-out string $newReferenceTypeCode
     * @phpstan-param-out string $newDescription
     * @phpstan-param-out InvoiceSuiteAttachment|null $newInvoiceSuiteAttachment
     */
    public function getDocumentAdditionalReference(?string &$newReferenceNumber, ?DateTimeInterface &$newReferenceDate, ?string &$newTypeCode, ?string &$newReferenceTypeCode, ?string &$newDescription, ?InvoiceSuiteAttachment &$newInvoiceSuiteAttachment): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceDate = null;
        $newTypeCode = '';
        $newReferenceTypeCode = '';
        $newDescription = '';
        $newInvoiceSuiteAttachment = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first additional invoice document (reference to preceding invoice)
     *
     * @return bool
     */
    public function firstDocumentInvoiceReference(): bool
    {
        return false;
    }

    /**
     * Go to the next additional invoice document (reference to preceding invoice)
     *
     * @return bool
     */
    public function nextDocumentInvoiceReference(): bool
    {
        return false;
    }

    /**
     * Get an additional invoice document (reference to preceding invoice)
     *
     * @param  null|string            $newReferenceNumber Identification of an invoice previously sent
     * @param  null|DateTimeInterface $newReferenceDate   Date of the previous invoice
     * @param  null|string            $newTypeCode        Type code of previous invoice
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     * @phpstan-param-out string $newTypeCode
     */
    public function getDocumentInvoiceReference(?string &$newReferenceNumber, ?DateTimeInterface &$newReferenceDate, ?string &$newTypeCode): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceDate = null;
        $newTypeCode = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first additional project reference
     *
     * @return bool
     */
    public function firstDocumentProjectReference(): bool
    {
        return false;
    }

    /**
     * Go to the next additional project reference
     *
     * @return bool
     */
    public function nextDocumentProjectReference(): bool
    {
        return false;
    }

    /**
     * Get an additional project reference
     *
     * @param  null|string $newReferenceNumber Project number
     * @param  null|string $newName            Project name
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out string $newName
     */
    public function getDocumentProjectReference(?string &$newReferenceNumber, ?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first additional ultimate customer order reference
     *
     * @return bool
     */
    public function firstDocumentUltimateCustomerOrderReference(): bool
    {
        return false;
    }

    /**
     * Go to the next additional ultimate customer order reference
     *
     * @return bool
     */
    public function nextDocumentUltimateCustomerOrderReference(): bool
    {
        return false;
    }

    /**
     * Get an additional ultimate customer order reference
     *
     * @param  null|string            $newReferenceNumber Ultimate customer order number
     * @param  null|DateTimeInterface $newReferenceDate   Ultimate customer order date
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     */
    public function getDocumentUltimateCustomerOrderReference(?string &$newReferenceNumber, ?DateTimeInterface &$newReferenceDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first additional despatch advice reference
     *
     * @return bool
     */
    public function firstDocumentDespatchAdviceReference(): bool
    {
        return false;
    }

    /**
     * Go to the next additional despatch advice reference
     *
     * @return bool
     */
    public function nextDocumentDespatchAdviceReference(): bool
    {
        return false;
    }

    /**
     * Get an additional despatch advice reference
     *
     * @param  null|string            $newReferenceNumber Shipping notification number
     * @param  null|DateTimeInterface $newReferenceDate   Shipping notification date
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     */
    public function getDocumentDespatchAdviceReference(?string &$newReferenceNumber, ?DateTimeInterface &$newReferenceDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first additional receiving advice reference
     *
     * @return bool
     */
    public function firstDocumentReceivingAdviceReference(): bool
    {
        return false;
    }

    /**
     * Go to the next additional Receiving advice reference
     *
     * @return bool
     */
    public function nextDocumentReceivingAdviceReference(): bool
    {
        return false;
    }

    /**
     * Get an additional receiving advice reference
     *
     * @param  null|string            $newReferenceNumber Receipt notification number
     * @param  null|DateTimeInterface $newReferenceDate   Receipt notification date
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     */
    public function getDocumentReceivingAdviceReference(?string &$newReferenceNumber, ?DateTimeInterface &$newReferenceDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first additional delivery note reference
     *
     * @return bool
     */
    public function firstDocumentDeliveryNoteReference(): bool
    {
        return false;
    }

    /**
     * Go to the next additional delivery note reference
     *
     * @return bool
     */
    public function nextDocumentDeliveryNoteReference(): bool
    {
        return false;
    }

    /**
     * Get an additional delivery note reference
     *
     * @param  null|string            $newReferenceNumber Delivery slip number
     * @param  null|DateTimeInterface $newReferenceDate   Delivery slip date
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     */
    public function getDocumentDeliveryNoteReference(?string &$newReferenceNumber, ?DateTimeInterface &$newReferenceDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get the date of the delivery
     *
     * @param  null|DateTimeInterface $newDate Actual delivery date
     * @return static
     *
     * @phpstan-param-out DateTimeInterface|null $newDate
     */
    public function getDocumentSupplyChainEvent(?DateTimeInterface &$newDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get the identifier assigned by the buyer and used for internal routing
     *
     * @param  null|string $newBuyerReference An identifier assigned by the buyer and used for internal routing
     * @return static
     *
     * @phpstan-param-out string $newBuyerReference
     */
    public function getDocumentBuyerReference(?string &$newBuyerReference): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newBuyerReference = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get information on the delivery conditions
     *
     * @param  null|string $newCode The code indicating the type of delivery for these commercial delivery terms. To be selected from the entries in the list UNTDID 4053 + INCOTERMS
     * @return static
     *
     * @phpstan-param-out string $newCode
     */
    public function getDocumentDeliveryTerms(?string &$newCode = null): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newCode = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get the name of the seller/supplier party
     *
     * @param  null|string $newName the full formal name under which the party is registered
     * @return static
     *
     * @phpstan-param-out string $newName
     */
    public function getDocumentSellerName(?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first ID of the seller/supplier party
     *
     * @return bool
     */
    public function firstDocumentSellerId(): bool
    {
        return false;
    }

    /**
     * Go to the next ID of the seller/supplier party
     *
     * @return bool
     */
    public function nextDocumentSellerId(): bool
    {
        return false;
    }

    /**
     * Get the ID of the seller/supplier party
     *
     * @param  null|string $newId An identifier of the party. In many systems, identification is key information.
     * @return static
     *
     * @phpstan-param-out string $newId
     */
    public function getDocumentSellerId(?string &$newId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first global ID of the seller/supplier party
     *
     * @return bool
     */
    public function firstDocumentSellerGlobalId(): bool
    {
        return false;
    }

    /**
     * Go to the next global ID of the seller/supplier party
     *
     * @return bool
     */
    public function nextDocumentSellerGlobalId(): bool
    {
        return false;
    }

    /**
     * Get the Global ID of the seller/supplier party
     *
     * @param  null|string $newGlobalId     a global identifier of the party
     * @param  null|string $newGlobalIdType type of the global identifier of the party
     * @return static
     *
     * @phpstan-param-out string $newGlobalId
     * @phpstan-param-out string $newGlobalIdType
     */
    public function getDocumentSellerGlobalId(?string &$newGlobalId, ?string &$newGlobalIdType): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newGlobalId = '';
        $newGlobalIdType = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first Tax Registration of the seller/supplier party
     *
     * @return bool
     */
    public function firstDocumentSellerTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Go to the next Tax Registration of the seller/supplier party
     *
     * @return bool
     */
    public function nextDocumentSellerTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Get the Tax Registration of the seller/supplier party
     *
     * @param  null|string $newTaxRegistrationType Type of tax identification number of the party (e.g. FC = Tax number or VA = Sales tax identification number).
     * @param  null|string $newTaxRegistrationId   tax identification number
     * @return static
     *
     * @phpstan-param-out string $newTaxRegistrationType
     * @phpstan-param-out string $newTaxRegistrationId
     */
    public function getDocumentSellerTaxRegistration(?string &$newTaxRegistrationType, ?string &$newTaxRegistrationId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newTaxRegistrationType = '';
        $newTaxRegistrationId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first address of the seller/supplier party
     *
     * @return bool
     */
    public function firstDocumentSellerAddress(): bool
    {
        return false;
    }

    /**
     * Go to the next address of the seller/supplier party
     *
     * @return bool
     */
    public function nextDocumentSellerAddress(): bool
    {
        return false;
    }

    /**
     * Get the address of the seller/supplier party
     *
     * @param  null|string $newAddressLine1 The main line in the address. This is usually the street name and house number or the post office box.
     * @param  null|string $newAddressLine2 Line 2 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newAddressLine3 Line 3 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newPostcode     zip code of the city or municipality in which the party's address is located
     * @param  null|string $newCity         name of the city or municipality in which the party's address is located
     * @param  null|string $newCountryId    country in which the party's address is located
     * @param  null|string $newSubDivision  region or federal state in which the party's address is located
     * @return static
     *
     * @phpstan-param-out string $newAddressLine1
     * @phpstan-param-out string $newAddressLine2
     * @phpstan-param-out string $newAddressLine3
     * @phpstan-param-out string $newPostcode
     * @phpstan-param-out string $newCity
     * @phpstan-param-out string $newCountryId
     * @phpstan-param-out string $newSubDivision
     */
    public function getDocumentSellerAddress(?string &$newAddressLine1, ?string &$newAddressLine2, ?string &$newAddressLine3, ?string &$newPostcode, ?string &$newCity, ?string &$newCountryId, ?string &$newSubDivision): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newAddressLine1 = '';
        $newAddressLine2 = '';
        $newAddressLine3 = '';
        $newPostcode = '';
        $newCity = '';
        $newCountryId = '';
        $newSubDivision = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first the legal information of the seller/supplier party
     *
     * @return bool
     */
    public function firstDocumentSellerLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Go to the next the legal information of the seller/supplier party
     *
     * @return bool
     */
    public function nextDocumentSellerLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Get the legal information of the seller/supplier party
     *
     * @param  null|string $newType type of the identification number of the legal registration of the party
     * @param  null|string $newId   identification number of the legal registration of the party
     * @param  null|string $newName name by which the party is known, if different from the party's name
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newId
     * @phpstan-param-out string $newName
     */
    public function getDocumentSellerLegalOrganisation(?string &$newType, ?string &$newId, ?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newId = '';
        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first contact information of the seller/supplier party
     *
     * @return bool
     */
    public function firstDocumentSellerContact(): bool
    {
        return false;
    }

    /**
     * Go to the next contact information of the seller/supplier party
     *
     * @return bool
     */
    public function nextDocumentSellerContact(): bool
    {
        return false;
    }

    /**
     * Get the contact information of the seller/supplier party
     *
     * @param  null|string $newPersonName     name of contact person or department or office for the contact point
     * @param  null|string $newDepartmentName name of the department for the contact point
     * @param  null|string $newPhoneNumber    telephone number for the contact point
     * @param  null|string $newFaxNumber      fax number of the contact point
     * @param  null|string $newEmailAddress   E-Mail address of the contact point
     * @return static
     *
     * @phpstan-param-out string $newPersonName
     * @phpstan-param-out string $newDepartmentName
     * @phpstan-param-out string $newPhoneNumber
     * @phpstan-param-out string $newFaxNumber
     * @phpstan-param-out string $newEmailAddress
     */
    public function getDocumentSellerContact(?string &$newPersonName, ?string &$newDepartmentName, ?string &$newPhoneNumber, ?string &$newFaxNumber, ?string &$newEmailAddress): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newPersonName = '';
        $newDepartmentName = '';
        $newPhoneNumber = '';
        $newFaxNumber = '';
        $newEmailAddress = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first communication information of the seller/supplier party
     *
     * @return bool
     */
    public function firstDocumentSellerCommunication(): bool
    {
        return false;
    }

    /**
     * Go to the next communication information of the seller/supplier party
     *
     * @return bool
     */
    public function nextDocumentSellerCommunication(): bool
    {
        return false;
    }

    /**
     * Get communication information of the seller/supplier party
     *
     * @param  null|string $newType the type for the party's electronic address
     * @param  null|string $newUri  the party's electronic address
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newUri
     */
    public function getDocumentSellerCommunication(?string &$newType, ?string &$newUri): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newUri = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get the name of the buyer/customer party
     *
     * @param  null|string $newName the full formal name under which the party is registered
     * @return static
     *
     * @phpstan-param-out string $newName
     */
    public function getDocumentBuyerName(?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first ID of the buyer/customer party
     *
     * @return bool
     */
    public function firstDocumentBuyerId(): bool
    {
        return false;
    }

    /**
     * Go to the next ID of the buyer/customer party
     *
     * @return bool
     */
    public function nextDocumentBuyerId(): bool
    {
        return false;
    }

    /**
     * Get the ID of the buyer/customer party
     *
     * @param  null|string $newId An identifier of the party. In many systems, identification is key information.
     * @return static
     *
     * @phpstan-param-out string $newId
     */
    public function getDocumentBuyerId(?string &$newId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first global ID of the buyer/customer party
     *
     * @return bool
     */
    public function firstDocumentBuyerGlobalId(): bool
    {
        return false;
    }

    /**
     * Go to the next global ID of the buyer/customer party
     *
     * @return bool
     */
    public function nextDocumentBuyerGlobalId(): bool
    {
        return false;
    }

    /**
     * Get the Global ID of the buyer/customer party
     *
     * @param  null|string $newGlobalId     a global identifier of the party
     * @param  null|string $newGlobalIdType type of the global identifier of the party
     * @return static
     *
     * @phpstan-param-out string $newGlobalId
     * @phpstan-param-out string $newGlobalIdType
     */
    public function getDocumentBuyerGlobalId(?string &$newGlobalId, ?string &$newGlobalIdType): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newGlobalId = '';
        $newGlobalIdType = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first Tax Registration of the buyer/customer party
     *
     * @return bool
     */
    public function firstDocumentBuyerTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Go to the next Tax Registration of the buyer/customer party
     *
     * @return bool
     */
    public function nextDocumentBuyerTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Get the Tax Registration of the buyer/customer party
     *
     * @param  null|string $newTaxRegistrationType Type of tax identification number of the party (e.g. FC = Tax number or VA = Sales tax identification number).
     * @param  null|string $newTaxRegistrationId   tax identification number
     * @return static
     *
     * @phpstan-param-out string $newTaxRegistrationType
     * @phpstan-param-out string $newTaxRegistrationId
     */
    public function getDocumentBuyerTaxRegistration(?string &$newTaxRegistrationType, ?string &$newTaxRegistrationId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newTaxRegistrationType = '';
        $newTaxRegistrationId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first address of the buyer/customer party
     *
     * @return bool
     */
    public function firstDocumentBuyerAddress(): bool
    {
        return false;
    }

    /**
     * Go to the next address of the buyer/customer party
     *
     * @return bool
     */
    public function nextDocumentBuyerAddress(): bool
    {
        return false;
    }

    /**
     * Get the address of the buyer/customer party
     *
     * @param  null|string $newAddressLine1 The main line in the address. This is usually the street name and house number or the post office box.
     * @param  null|string $newAddressLine2 Line 2 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newAddressLine3 Line 3 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newPostcode     zip code of the city or municipality in which the party's address is located
     * @param  null|string $newCity         name of the city or municipality in which the party's address is located
     * @param  null|string $newCountryId    country in which the party's address is located
     * @param  null|string $newSubDivision  region or federal state in which the party's address is located
     * @return static
     *
     * @phpstan-param-out string $newAddressLine1
     * @phpstan-param-out string $newAddressLine2
     * @phpstan-param-out string $newAddressLine3
     * @phpstan-param-out string $newPostcode
     * @phpstan-param-out string $newCity
     * @phpstan-param-out string $newCountryId
     * @phpstan-param-out string $newSubDivision
     */
    public function getDocumentBuyerAddress(?string &$newAddressLine1, ?string &$newAddressLine2, ?string &$newAddressLine3, ?string &$newPostcode, ?string &$newCity, ?string &$newCountryId, ?string &$newSubDivision): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newAddressLine1 = '';
        $newAddressLine2 = '';
        $newAddressLine3 = '';
        $newPostcode = '';
        $newCity = '';
        $newCountryId = '';
        $newSubDivision = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first the legal information of the buyer/customer party
     *
     * @return bool
     */
    public function firstDocumentBuyerLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Go to the next the legal information of the buyer/customer party
     *
     * @return bool
     */
    public function nextDocumentBuyerLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Get the legal information of the buyer/customer party
     *
     * @param  null|string $newType type of the identification number of the legal registration of the party
     * @param  null|string $newId   identification number of the legal registration of the party
     * @param  null|string $newName name by which the party is known, if different from the party's name
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newId
     * @phpstan-param-out string $newName
     */
    public function getDocumentBuyerLegalOrganisation(?string &$newType, ?string &$newId, ?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newId = '';
        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first contact information of the buyer/customer party
     *
     * @return bool
     */
    public function firstDocumentBuyerContact(): bool
    {
        return false;
    }

    /**
     * Go to the next contact information of the buyer/customer party
     *
     * @return bool
     */
    public function nextDocumentBuyerContact(): bool
    {
        return false;
    }

    /**
     * Get the contact information of the buyer/customer party
     *
     * @param  null|string $newPersonName     name of contact person or department or office for the contact point
     * @param  null|string $newDepartmentName name of the department for the contact point
     * @param  null|string $newPhoneNumber    telephone number for the contact point
     * @param  null|string $newFaxNumber      fax number of the contact point
     * @param  null|string $newEmailAddress   E-Mail address of the contact point
     * @return static
     *
     * @phpstan-param-out string $newPersonName
     * @phpstan-param-out string $newDepartmentName
     * @phpstan-param-out string $newPhoneNumber
     * @phpstan-param-out string $newFaxNumber
     * @phpstan-param-out string $newEmailAddress
     */
    public function getDocumentBuyerContact(?string &$newPersonName, ?string &$newDepartmentName, ?string &$newPhoneNumber, ?string &$newFaxNumber, ?string &$newEmailAddress): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newPersonName = '';
        $newDepartmentName = '';
        $newPhoneNumber = '';
        $newFaxNumber = '';
        $newEmailAddress = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first communication information of the buyer/customer party
     *
     * @return bool
     */
    public function firstDocumentBuyerCommunication(): bool
    {
        return false;
    }

    /**
     * Go to the next communication information of the buyer/customer party
     *
     * @return bool
     */
    public function nextDocumentBuyerCommunication(): bool
    {
        return false;
    }

    /**
     * Get communication information of the buyer/customer party
     *
     * @param  null|string $newType the type for the party's electronic address
     * @param  null|string $newUri  the party's electronic address
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newUri
     */
    public function getDocumentBuyerCommunication(?string &$newType, ?string &$newUri): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newUri = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get the name of the tax representative party
     *
     * @param  null|string $newName the full formal name under which the party is registered
     * @return static
     *
     * @phpstan-param-out string $newName
     */
    public function getDocumentTaxRepresentativeName(?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first ID of the tax representative party
     *
     * @return bool
     */
    public function firstDocumentTaxRepresentativeId(): bool
    {
        return false;
    }

    /**
     * Go to the next ID of the tax representative party
     *
     * @return bool
     */
    public function nextDocumentTaxRepresentativeId(): bool
    {
        return false;
    }

    /**
     * Get the ID of the tax representative party
     *
     * @param  null|string $newId An identifier of the party. In many systems, identification is key information.
     * @return static
     *
     * @phpstan-param-out string $newId
     */
    public function getDocumentTaxRepresentativeId(?string &$newId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first global ID of the tax representative party
     *
     * @return bool
     */
    public function firstDocumentTaxRepresentativeGlobalId(): bool
    {
        return false;
    }

    /**
     * Go to the next global ID of the tax representative party
     *
     * @return bool
     */
    public function nextDocumentTaxRepresentativeGlobalId(): bool
    {
        return false;
    }

    /**
     * Get the Global ID of the tax representative party
     *
     * @param  null|string $newGlobalId     a global identifier of the party
     * @param  null|string $newGlobalIdType type of the global identifier of the party
     * @return static
     *
     * @phpstan-param-out string $newGlobalId
     * @phpstan-param-out string $newGlobalIdType
     */
    public function getDocumentTaxRepresentativeGlobalId(?string &$newGlobalId, ?string &$newGlobalIdType): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newGlobalId = '';
        $newGlobalIdType = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first Tax Registration of the tax representative party
     *
     * @return bool
     */
    public function firstDocumentTaxRepresentativeTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Go to the next Tax Registration of the tax representative party
     *
     * @return bool
     */
    public function nextDocumentTaxRepresentativeTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Get the Tax Registration of the tax representative party
     *
     * @param  null|string $newTaxRegistrationType Type of tax identification number of the party (e.g. FC = Tax number or VA = Sales tax identification number).
     * @param  null|string $newTaxRegistrationId   tax identification number
     * @return static
     *
     * @phpstan-param-out string $newTaxRegistrationType
     * @phpstan-param-out string $newTaxRegistrationId
     */
    public function getDocumentTaxRepresentativeTaxRegistration(?string &$newTaxRegistrationType, ?string &$newTaxRegistrationId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newTaxRegistrationType = '';
        $newTaxRegistrationId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first address of the tax representative party
     *
     * @return bool
     */
    public function firstDocumentTaxRepresentativeAddress(): bool
    {
        return false;
    }

    /**
     * Go to the next address of the tax representative party
     *
     * @return bool
     */
    public function nextDocumentTaxRepresentativeAddress(): bool
    {
        return false;
    }

    /**
     * Get the address of the tax representative party
     *
     * @param  null|string $newAddressLine1 The main line in the address. This is usually the street name and house number or the post office box.
     * @param  null|string $newAddressLine2 Line 2 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newAddressLine3 Line 3 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newPostcode     zip code of the city or municipality in which the party's address is located
     * @param  null|string $newCity         name of the city or municipality in which the party's address is located
     * @param  null|string $newCountryId    country in which the party's address is located
     * @param  null|string $newSubDivision  region or federal state in which the party's address is located
     * @return static
     *
     * @phpstan-param-out string $newAddressLine1
     * @phpstan-param-out string $newAddressLine2
     * @phpstan-param-out string $newAddressLine3
     * @phpstan-param-out string $newPostcode
     * @phpstan-param-out string $newCity
     * @phpstan-param-out string $newCountryId
     * @phpstan-param-out string $newSubDivision
     */
    public function getDocumentTaxRepresentativeAddress(?string &$newAddressLine1, ?string &$newAddressLine2, ?string &$newAddressLine3, ?string &$newPostcode, ?string &$newCity, ?string &$newCountryId, ?string &$newSubDivision): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newAddressLine1 = '';
        $newAddressLine2 = '';
        $newAddressLine3 = '';
        $newPostcode = '';
        $newCity = '';
        $newCountryId = '';
        $newSubDivision = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first the legal information of the tax representative party
     *
     * @return bool
     */
    public function firstDocumentTaxRepresentativeLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Go to the next the legal information of the tax representative party
     *
     * @return bool
     */
    public function nextDocumentTaxRepresentativeLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Get the legal information of the tax representative party
     *
     * @param  null|string $newType type of the identification number of the legal registration of the party
     * @param  null|string $newId   identification number of the legal registration of the party
     * @param  null|string $newName name by which the party is known, if different from the party's name
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newId
     * @phpstan-param-out string $newName
     */
    public function getDocumentTaxRepresentativeLegalOrganisation(?string &$newType, ?string &$newId, ?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newId = '';
        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first contact information of the tax representative party
     *
     * @return bool
     */
    public function firstDocumentTaxRepresentativeContact(): bool
    {
        return false;
    }

    /**
     * Go to the next contact information of the tax representative party
     *
     * @return bool
     */
    public function nextDocumentTaxRepresentativeContact(): bool
    {
        return false;
    }

    /**
     * Get the contact information of the tax representative party
     *
     * @param  null|string $newPersonName     name of contact person or department or office for the contact point
     * @param  null|string $newDepartmentName name of the department for the contact point
     * @param  null|string $newPhoneNumber    telephone number for the contact point
     * @param  null|string $newFaxNumber      fax number of the contact point
     * @param  null|string $newEmailAddress   E-Mail address of the contact point
     * @return static
     *
     * @phpstan-param-out string $newPersonName
     * @phpstan-param-out string $newDepartmentName
     * @phpstan-param-out string $newPhoneNumber
     * @phpstan-param-out string $newFaxNumber
     * @phpstan-param-out string $newEmailAddress
     */
    public function getDocumentTaxRepresentativeContact(?string &$newPersonName, ?string &$newDepartmentName, ?string &$newPhoneNumber, ?string &$newFaxNumber, ?string &$newEmailAddress): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newPersonName = '';
        $newDepartmentName = '';
        $newPhoneNumber = '';
        $newFaxNumber = '';
        $newEmailAddress = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first communication information of the tax representative party
     *
     * @return bool
     */
    public function firstDocumentTaxRepresentativeCommunication(): bool
    {
        return false;
    }

    /**
     * Go to the next communication information of the tax representative party
     *
     * @return bool
     */
    public function nextDocumentTaxRepresentativeCommunication(): bool
    {
        return false;
    }

    /**
     * Get communication information of the tax representative party
     *
     * @param  null|string $newType the type for the party's electronic address
     * @param  null|string $newUri  the party's electronic address
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newUri
     */
    public function getDocumentTaxRepresentativeCommunication(?string &$newType, ?string &$newUri): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newUri = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get the name of the product end-user party
     *
     * @param  null|string $newName the full formal name under which the party is registered
     * @return static
     *
     * @phpstan-param-out string $newName
     */
    public function getDocumentProductEndUserName(?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first ID of the product end-user party
     *
     * @return bool
     */
    public function firstDocumentProductEndUserId(): bool
    {
        return false;
    }

    /**
     * Go to the next ID of the product end-user party
     *
     * @return bool
     */
    public function nextDocumentProductEndUserId(): bool
    {
        return false;
    }

    /**
     * Get the ID of the product end-user party
     *
     * @param  null|string $newId An identifier of the party. In many systems, identification is key information.
     * @return static
     *
     * @phpstan-param-out string $newId
     */
    public function getDocumentProductEndUserId(?string &$newId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first global ID of the product end-user party
     *
     * @return bool
     */
    public function firstDocumentProductEndUserGlobalId(): bool
    {
        return false;
    }

    /**
     * Go to the next global ID of the product end-user party
     *
     * @return bool
     */
    public function nextDocumentProductEndUserGlobalId(): bool
    {
        return false;
    }

    /**
     * Get the Global ID of the product end-user party
     *
     * @param  null|string $newGlobalId     a global identifier of the party
     * @param  null|string $newGlobalIdType type of the global identifier of the party
     * @return static
     *
     * @phpstan-param-out string $newGlobalId
     * @phpstan-param-out string $newGlobalIdType
     */
    public function getDocumentProductEndUserGlobalId(?string &$newGlobalId, ?string &$newGlobalIdType): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newGlobalId = '';
        $newGlobalIdType = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first Tax Registration of the product end-user party
     *
     * @return bool
     */
    public function firstDocumentProductEndUserTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Go to the next Tax Registration of the product end-user party
     *
     * @return bool
     */
    public function nextDocumentProductEndUserTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Get the Tax Registration of the product end-user party
     *
     * @param  null|string $newTaxRegistrationType Type of tax identification number of the party (e.g. FC = Tax number or VA = Sales tax identification number).
     * @param  null|string $newTaxRegistrationId   tax identification number
     * @return static
     *
     * @phpstan-param-out string $newTaxRegistrationType
     * @phpstan-param-out string $newTaxRegistrationId
     */
    public function getDocumentProductEndUserTaxRegistration(?string &$newTaxRegistrationType, ?string &$newTaxRegistrationId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newTaxRegistrationType = '';
        $newTaxRegistrationId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first address of the product end-user party
     *
     * @return bool
     */
    public function firstDocumentProductEndUserAddress(): bool
    {
        return false;
    }

    /**
     * Go to the next address of the product end-user party
     *
     * @return bool
     */
    public function nextDocumentProductEndUserAddress(): bool
    {
        return false;
    }

    /**
     * Get the address of the product end-user party
     *
     * @param  null|string $newAddressLine1 The main line in the address. This is usually the street name and house number or the post office box.
     * @param  null|string $newAddressLine2 Line 2 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newAddressLine3 Line 3 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newPostcode     zip code of the city or municipality in which the party's address is located
     * @param  null|string $newCity         name of the city or municipality in which the party's address is located
     * @param  null|string $newCountryId    country in which the party's address is located
     * @param  null|string $newSubDivision  region or federal state in which the party's address is located
     * @return static
     *
     * @phpstan-param-out string $newAddressLine1
     * @phpstan-param-out string $newAddressLine2
     * @phpstan-param-out string $newAddressLine3
     * @phpstan-param-out string $newPostcode
     * @phpstan-param-out string $newCity
     * @phpstan-param-out string $newCountryId
     * @phpstan-param-out string $newSubDivision
     */
    public function getDocumentProductEndUserAddress(?string &$newAddressLine1, ?string &$newAddressLine2, ?string &$newAddressLine3, ?string &$newPostcode, ?string &$newCity, ?string &$newCountryId, ?string &$newSubDivision): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newAddressLine1 = '';
        $newAddressLine2 = '';
        $newAddressLine3 = '';
        $newPostcode = '';
        $newCity = '';
        $newCountryId = '';
        $newSubDivision = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first the legal information of the product end-user party
     *
     * @return bool
     */
    public function firstDocumentProductEndUserLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Go to the next the legal information of the product end-user party
     *
     * @return bool
     */
    public function nextDocumentProductEndUserLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Get the legal information of the product end-user party
     *
     * @param  null|string $newType type of the identification number of the legal registration of the party
     * @param  null|string $newId   identification number of the legal registration of the party
     * @param  null|string $newName name by which the party is known, if different from the party's name
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newId
     * @phpstan-param-out string $newName
     */
    public function getDocumentProductEndUserLegalOrganisation(?string &$newType, ?string &$newId, ?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newId = '';
        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first contact information of the product end-user party
     *
     * @return bool
     */
    public function firstDocumentProductEndUserContact(): bool
    {
        return false;
    }

    /**
     * Go to the next contact information of the product end-user party
     *
     * @return bool
     */
    public function nextDocumentProductEndUserContact(): bool
    {
        return false;
    }

    /**
     * Get the contact information of the product end-user party
     *
     * @param  null|string $newPersonName     name of contact person or department or office for the contact point
     * @param  null|string $newDepartmentName name of the department for the contact point
     * @param  null|string $newPhoneNumber    telephone number for the contact point
     * @param  null|string $newFaxNumber      fax number of the contact point
     * @param  null|string $newEmailAddress   E-Mail address of the contact point
     * @return static
     *
     * @phpstan-param-out string $newPersonName
     * @phpstan-param-out string $newDepartmentName
     * @phpstan-param-out string $newPhoneNumber
     * @phpstan-param-out string $newFaxNumber
     * @phpstan-param-out string $newEmailAddress
     */
    public function getDocumentProductEndUserContact(?string &$newPersonName, ?string &$newDepartmentName, ?string &$newPhoneNumber, ?string &$newFaxNumber, ?string &$newEmailAddress): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newPersonName = '';
        $newDepartmentName = '';
        $newPhoneNumber = '';
        $newFaxNumber = '';
        $newEmailAddress = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first communication information of the product end-user party
     *
     * @return bool
     */
    public function firstDocumentProductEndUserCommunication(): bool
    {
        return false;
    }

    /**
     * Go to the next communication information of the product end-user party
     *
     * @return bool
     */
    public function nextDocumentProductEndUserCommunication(): bool
    {
        return false;
    }

    /**
     * Get communication information of the product end-user party
     *
     * @param  null|string $newType the type for the party's electronic address
     * @param  null|string $newUri  the party's electronic address
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newUri
     */
    public function getDocumentProductEndUserCommunication(?string &$newType, ?string &$newUri): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newUri = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get the name of the Ship-To party
     *
     * @param  null|string $newName the full formal name under which the party is registered
     * @return static
     *
     * @phpstan-param-out string $newName
     */
    public function getDocumentShipToName(?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first ID of the Ship-To party
     *
     * @return bool
     */
    public function firstDocumentShipToId(): bool
    {
        return false;
    }

    /**
     * Go to the next ID of the Ship-To party
     *
     * @return bool
     */
    public function nextDocumentShipToId(): bool
    {
        return false;
    }

    /**
     * Get the ID of the Ship-To party
     *
     * @param  null|string $newId An identifier of the party. In many systems, identification is key information.
     * @return static
     *
     * @phpstan-param-out string $newId
     */
    public function getDocumentShipToId(?string &$newId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first global ID of the Ship-To party
     *
     * @return bool
     */
    public function firstDocumentShipToGlobalId(): bool
    {
        return false;
    }

    /**
     * Go to the next global ID of the Ship-To party
     *
     * @return bool
     */
    public function nextDocumentShipToGlobalId(): bool
    {
        return false;
    }

    /**
     * Get the Global ID of the Ship-To party
     *
     * @param  null|string $newGlobalId     a global identifier of the party
     * @param  null|string $newGlobalIdType type of the global identifier of the party
     * @return static
     *
     * @phpstan-param-out string $newGlobalId
     * @phpstan-param-out string $newGlobalIdType
     */
    public function getDocumentShipToGlobalId(?string &$newGlobalId, ?string &$newGlobalIdType): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newGlobalId = '';
        $newGlobalIdType = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first Tax Registration of the Ship-To party
     *
     * @return bool
     */
    public function firstDocumentShipToTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Go to the next Tax Registration of the Ship-To party
     *
     * @return bool
     */
    public function nextDocumentShipToTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Get the Tax Registration of the Ship-To party
     *
     * @param  null|string $newTaxRegistrationType Type of tax identification number of the party (e.g. FC = Tax number or VA = Sales tax identification number).
     * @param  null|string $newTaxRegistrationId   tax identification number
     * @return static
     *
     * @phpstan-param-out string $newTaxRegistrationType
     * @phpstan-param-out string $newTaxRegistrationId
     */
    public function getDocumentShipToTaxRegistration(?string &$newTaxRegistrationType, ?string &$newTaxRegistrationId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newTaxRegistrationType = '';
        $newTaxRegistrationId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first address of the Ship-To party
     *
     * @return bool
     */
    public function firstDocumentShipToAddress(): bool
    {
        return false;
    }

    /**
     * Go to the next address of the Ship-To party
     *
     * @return bool
     */
    public function nextDocumentShipToAddress(): bool
    {
        return false;
    }

    /**
     * Get the address of the Ship-To party
     *
     * @param  null|string $newAddressLine1 The main line in the address. This is usually the street name and house number or the post office box.
     * @param  null|string $newAddressLine2 Line 2 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newAddressLine3 Line 3 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newPostcode     zip code of the city or municipality in which the party's address is located
     * @param  null|string $newCity         name of the city or municipality in which the party's address is located
     * @param  null|string $newCountryId    country in which the party's address is located
     * @param  null|string $newSubDivision  region or federal state in which the party's address is located
     * @return static
     *
     * @phpstan-param-out string $newAddressLine1
     * @phpstan-param-out string $newAddressLine2
     * @phpstan-param-out string $newAddressLine3
     * @phpstan-param-out string $newPostcode
     * @phpstan-param-out string $newCity
     * @phpstan-param-out string $newCountryId
     * @phpstan-param-out string $newSubDivision
     */
    public function getDocumentShipToAddress(?string &$newAddressLine1, ?string &$newAddressLine2, ?string &$newAddressLine3, ?string &$newPostcode, ?string &$newCity, ?string &$newCountryId, ?string &$newSubDivision): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newAddressLine1 = '';
        $newAddressLine2 = '';
        $newAddressLine3 = '';
        $newPostcode = '';
        $newCity = '';
        $newCountryId = '';
        $newSubDivision = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first the legal information of the Ship-To party
     *
     * @return bool
     */
    public function firstDocumentShipToLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Go to the next the legal information of the Ship-To party
     *
     * @return bool
     */
    public function nextDocumentShipToLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Get the legal information of the Ship-To party
     *
     * @param  null|string $newType type of the identification number of the legal registration of the party
     * @param  null|string $newId   identification number of the legal registration of the party
     * @param  null|string $newName name by which the party is known, if different from the party's name
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newId
     * @phpstan-param-out string $newName
     */
    public function getDocumentShipToLegalOrganisation(?string &$newType, ?string &$newId, ?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newId = '';
        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first contact information of the Ship-To party
     *
     * @return bool
     */
    public function firstDocumentShipToContact(): bool
    {
        return false;
    }

    /**
     * Go to the next contact information of the Ship-To party
     *
     * @return bool
     */
    public function nextDocumentShipToContact(): bool
    {
        return false;
    }

    /**
     * Get the contact information of the Ship-To party
     *
     * @param  null|string $newPersonName     name of contact person or department or office for the contact point
     * @param  null|string $newDepartmentName name of the department for the contact point
     * @param  null|string $newPhoneNumber    telephone number for the contact point
     * @param  null|string $newFaxNumber      fax number of the contact point
     * @param  null|string $newEmailAddress   E-Mail address of the contact point
     * @return static
     *
     * @phpstan-param-out string $newPersonName
     * @phpstan-param-out string $newDepartmentName
     * @phpstan-param-out string $newPhoneNumber
     * @phpstan-param-out string $newFaxNumber
     * @phpstan-param-out string $newEmailAddress
     */
    public function getDocumentShipToContact(?string &$newPersonName, ?string &$newDepartmentName, ?string &$newPhoneNumber, ?string &$newFaxNumber, ?string &$newEmailAddress): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newPersonName = '';
        $newDepartmentName = '';
        $newPhoneNumber = '';
        $newFaxNumber = '';
        $newEmailAddress = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first communication information of the Ship-To party
     *
     * @return bool
     */
    public function firstDocumentShipToCommunication(): bool
    {
        return false;
    }

    /**
     * Go to the next communication information of the Ship-To party
     *
     * @return bool
     */
    public function nextDocumentShipToCommunication(): bool
    {
        return false;
    }

    /**
     * Get communication information of the Ship-To party
     *
     * @param  null|string $newType the type for the party's electronic address
     * @param  null|string $newUri  the party's electronic address
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newUri
     */
    public function getDocumentShipToCommunication(?string &$newType, ?string &$newUri): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newUri = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get the name of the ultimate Ship-To party
     *
     * @param  null|string $newName the full formal name under which the party is registered
     * @return static
     *
     * @phpstan-param-out string $newName
     */
    public function getDocumentUltimateShipToName(?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first ID of the ultimate Ship-To party
     *
     * @return bool
     */
    public function firstDocumentUltimateShipToId(): bool
    {
        return false;
    }

    /**
     * Go to the next ID of the ultimate Ship-To party
     *
     * @return bool
     */
    public function nextDocumentUltimateShipToId(): bool
    {
        return false;
    }

    /**
     * Get the ID of the ultimate Ship-To party
     *
     * @param  null|string $newId An identifier of the party. In many systems, identification is key information.
     * @return static
     *
     * @phpstan-param-out string $newId
     */
    public function getDocumentUltimateShipToId(?string &$newId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first global ID of the ultimate Ship-To party
     *
     * @return bool
     */
    public function firstDocumentUltimateShipToGlobalId(): bool
    {
        return false;
    }

    /**
     * Go to the next global ID of the ultimate Ship-To party
     *
     * @return bool
     */
    public function nextDocumentUltimateShipToGlobalId(): bool
    {
        return false;
    }

    /**
     * Get the Global ID of the ultimate Ship-To party
     *
     * @param  null|string $newGlobalId     a global identifier of the party
     * @param  null|string $newGlobalIdType type of the global identifier of the party
     * @return static
     *
     * @phpstan-param-out string $newGlobalId
     * @phpstan-param-out string $newGlobalIdType
     */
    public function getDocumentUltimateShipToGlobalId(?string &$newGlobalId, ?string &$newGlobalIdType): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newGlobalId = '';
        $newGlobalIdType = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first Tax Registration of the ultimate Ship-To party
     *
     * @return bool
     */
    public function firstDocumentUltimateShipToTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Go to the next Tax Registration of the ultimate Ship-To party
     *
     * @return bool
     */
    public function nextDocumentUltimateShipToTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Get the Tax Registration of the ultimate Ship-To party
     *
     * @param  null|string $newTaxRegistrationType Type of tax identification number of the party (e.g. FC = Tax number or VA = Sales tax identification number).
     * @param  null|string $newTaxRegistrationId   tax identification number
     * @return static
     *
     * @phpstan-param-out string $newTaxRegistrationType
     * @phpstan-param-out string $newTaxRegistrationId
     */
    public function getDocumentUltimateShipToTaxRegistration(?string &$newTaxRegistrationType, ?string &$newTaxRegistrationId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newTaxRegistrationType = '';
        $newTaxRegistrationId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first address of the ultimate Ship-To party
     *
     * @return bool
     */
    public function firstDocumentUltimateShipToAddress(): bool
    {
        return false;
    }

    /**
     * Go to the next address of the ultimate Ship-To party
     *
     * @return bool
     */
    public function nextDocumentUltimateShipToAddress(): bool
    {
        return false;
    }

    /**
     * Get the address of the ultimate Ship-To party
     *
     * @param  null|string $newAddressLine1 The main line in the address. This is usually the street name and house number or the post office box.
     * @param  null|string $newAddressLine2 Line 2 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newAddressLine3 Line 3 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newPostcode     zip code of the city or municipality in which the party's address is located
     * @param  null|string $newCity         name of the city or municipality in which the party's address is located
     * @param  null|string $newCountryId    country in which the party's address is located
     * @param  null|string $newSubDivision  region or federal state in which the party's address is located
     * @return static
     *
     * @phpstan-param-out string $newAddressLine1
     * @phpstan-param-out string $newAddressLine2
     * @phpstan-param-out string $newAddressLine3
     * @phpstan-param-out string $newPostcode
     * @phpstan-param-out string $newCity
     * @phpstan-param-out string $newCountryId
     * @phpstan-param-out string $newSubDivision
     */
    public function getDocumentUltimateShipToAddress(?string &$newAddressLine1, ?string &$newAddressLine2, ?string &$newAddressLine3, ?string &$newPostcode, ?string &$newCity, ?string &$newCountryId, ?string &$newSubDivision): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newAddressLine1 = '';
        $newAddressLine2 = '';
        $newAddressLine3 = '';
        $newPostcode = '';
        $newCity = '';
        $newCountryId = '';
        $newSubDivision = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first the legal information of the ultimate Ship-To party
     *
     * @return bool
     */
    public function firstDocumentUltimateShipToLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Go to the next the legal information of the ultimate Ship-To party
     *
     * @return bool
     */
    public function nextDocumentUltimateShipToLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Get the legal information of the ultimate Ship-To party
     *
     * @param  null|string $newType type of the identification number of the legal registration of the party
     * @param  null|string $newId   identification number of the legal registration of the party
     * @param  null|string $newName name by which the party is known, if different from the party's name
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newId
     * @phpstan-param-out string $newName
     */
    public function getDocumentUltimateShipToLegalOrganisation(?string &$newType, ?string &$newId, ?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newId = '';
        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first contact information of the ultimate Ship-To party
     *
     * @return bool
     */
    public function firstDocumentUltimateShipToContact(): bool
    {
        return false;
    }

    /**
     * Go to the next contact information of the ultimate Ship-To party
     *
     * @return bool
     */
    public function nextDocumentUltimateShipToContact(): bool
    {
        return false;
    }

    /**
     * Get the contact information of the ultimate Ship-To party
     *
     * @param  null|string $newPersonName     name of contact person or department or office for the contact point
     * @param  null|string $newDepartmentName name of the department for the contact point
     * @param  null|string $newPhoneNumber    telephone number for the contact point
     * @param  null|string $newFaxNumber      fax number of the contact point
     * @param  null|string $newEmailAddress   E-Mail address of the contact point
     * @return static
     *
     * @phpstan-param-out string $newPersonName
     * @phpstan-param-out string $newDepartmentName
     * @phpstan-param-out string $newPhoneNumber
     * @phpstan-param-out string $newFaxNumber
     * @phpstan-param-out string $newEmailAddress
     */
    public function getDocumentUltimateShipToContact(?string &$newPersonName, ?string &$newDepartmentName, ?string &$newPhoneNumber, ?string &$newFaxNumber, ?string &$newEmailAddress): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newPersonName = '';
        $newDepartmentName = '';
        $newPhoneNumber = '';
        $newFaxNumber = '';
        $newEmailAddress = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first communication information of the ultimate Ship-To party
     *
     * @return bool
     */
    public function firstDocumentUltimateShipToCommunication(): bool
    {
        return false;
    }

    /**
     * Go to the next communication information of the ultimate Ship-To party
     *
     * @return bool
     */
    public function nextDocumentUltimateShipToCommunication(): bool
    {
        return false;
    }

    /**
     * Get communication information of the ultimate Ship-To party
     *
     * @param  null|string $newType the type for the party's electronic address
     * @param  null|string $newUri  the party's electronic address
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newUri
     */
    public function getDocumentUltimateShipToCommunication(?string &$newType, ?string &$newUri): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newUri = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get the name of the Ship-From party
     *
     * @param  null|string $newName the full formal name under which the party is registered
     * @return static
     *
     * @phpstan-param-out string $newName
     */
    public function getDocumentShipFromName(?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first ID of the Ship-From party
     *
     * @return bool
     */
    public function firstDocumentShipFromId(): bool
    {
        return false;
    }

    /**
     * Go to the next ID of the Ship-From party
     *
     * @return bool
     */
    public function nextDocumentShipFromId(): bool
    {
        return false;
    }

    /**
     * Get the ID of the Ship-From party
     *
     * @param  null|string $newId An identifier of the party. In many systems, identification is key information.
     * @return static
     *
     * @phpstan-param-out string $newId
     */
    public function getDocumentShipFromId(?string &$newId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first global ID of the Ship-From party
     *
     * @return bool
     */
    public function firstDocumentShipFromGlobalId(): bool
    {
        return false;
    }

    /**
     * Go to the next global ID of the Ship-From party
     *
     * @return bool
     */
    public function nextDocumentShipFromGlobalId(): bool
    {
        return false;
    }

    /**
     * Get the Global ID of the Ship-From party
     *
     * @param  null|string $newGlobalId     a global identifier of the party
     * @param  null|string $newGlobalIdType type of the global identifier of the party
     * @return static
     *
     * @phpstan-param-out string $newGlobalId
     * @phpstan-param-out string $newGlobalIdType
     */
    public function getDocumentShipFromGlobalId(?string &$newGlobalId, ?string &$newGlobalIdType): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newGlobalId = '';
        $newGlobalIdType = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first Tax Registration of the Ship-From party
     *
     * @return bool
     */
    public function firstDocumentShipFromTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Go to the next Tax Registration of the Ship-From party
     *
     * @return bool
     */
    public function nextDocumentShipFromTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Get the Tax Registration of the Ship-From party
     *
     * @param  null|string $newTaxRegistrationType Type of tax identification number of the party (e.g. FC = Tax number or VA = Sales tax identification number).
     * @param  null|string $newTaxRegistrationId   tax identification number
     * @return static
     *
     * @phpstan-param-out string $newTaxRegistrationType
     * @phpstan-param-out string $newTaxRegistrationId
     */
    public function getDocumentShipFromTaxRegistration(?string &$newTaxRegistrationType, ?string &$newTaxRegistrationId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newTaxRegistrationType = '';
        $newTaxRegistrationId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first address of the Ship-From party
     *
     * @return bool
     */
    public function firstDocumentShipFromAddress(): bool
    {
        return false;
    }

    /**
     * Go to the next address of the Ship-From party
     *
     * @return bool
     */
    public function nextDocumentShipFromAddress(): bool
    {
        return false;
    }

    /**
     * Get the address of the Ship-From party
     *
     * @param  null|string $newAddressLine1 The main line in the address. This is usually the street name and house number or the post office box.
     * @param  null|string $newAddressLine2 Line 2 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newAddressLine3 Line 3 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newPostcode     zip code of the city or municipality in which the party's address is located
     * @param  null|string $newCity         name of the city or municipality in which the party's address is located
     * @param  null|string $newCountryId    country in which the party's address is located
     * @param  null|string $newSubDivision  region or federal state in which the party's address is located
     * @return static
     *
     * @phpstan-param-out string $newAddressLine1
     * @phpstan-param-out string $newAddressLine2
     * @phpstan-param-out string $newAddressLine3
     * @phpstan-param-out string $newPostcode
     * @phpstan-param-out string $newCity
     * @phpstan-param-out string $newCountryId
     * @phpstan-param-out string $newSubDivision
     */
    public function getDocumentShipFromAddress(?string &$newAddressLine1, ?string &$newAddressLine2, ?string &$newAddressLine3, ?string &$newPostcode, ?string &$newCity, ?string &$newCountryId, ?string &$newSubDivision): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newAddressLine1 = '';
        $newAddressLine2 = '';
        $newAddressLine3 = '';
        $newPostcode = '';
        $newCity = '';
        $newCountryId = '';
        $newSubDivision = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first the legal information of the Ship-From party
     *
     * @return bool
     */
    public function firstDocumentShipFromLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Go to the next the legal information of the Ship-From party
     *
     * @return bool
     */
    public function nextDocumentShipFromLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Get the legal information of the Ship-From party
     *
     * @param  null|string $newType type of the identification number of the legal registration of the party
     * @param  null|string $newId   identification number of the legal registration of the party
     * @param  null|string $newName name by which the party is known, if different from the party's name
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newId
     * @phpstan-param-out string $newName
     */
    public function getDocumentShipFromLegalOrganisation(?string &$newType, ?string &$newId, ?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newId = '';
        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first contact information of the Ship-From party
     *
     * @return bool
     */
    public function firstDocumentShipFromContact(): bool
    {
        return false;
    }

    /**
     * Go to the next contact information of the Ship-From party
     *
     * @return bool
     */
    public function nextDocumentShipFromContact(): bool
    {
        return false;
    }

    /**
     * Get the contact information of the Ship-From party
     *
     * @param  null|string $newPersonName     name of contact person or department or office for the contact point
     * @param  null|string $newDepartmentName name of the department for the contact point
     * @param  null|string $newPhoneNumber    telephone number for the contact point
     * @param  null|string $newFaxNumber      fax number of the contact point
     * @param  null|string $newEmailAddress   E-Mail address of the contact point
     * @return static
     *
     * @phpstan-param-out string $newPersonName
     * @phpstan-param-out string $newDepartmentName
     * @phpstan-param-out string $newPhoneNumber
     * @phpstan-param-out string $newFaxNumber
     * @phpstan-param-out string $newEmailAddress
     */
    public function getDocumentShipFromContact(?string &$newPersonName, ?string &$newDepartmentName, ?string &$newPhoneNumber, ?string &$newFaxNumber, ?string &$newEmailAddress): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newPersonName = '';
        $newDepartmentName = '';
        $newPhoneNumber = '';
        $newFaxNumber = '';
        $newEmailAddress = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first communication information of the Ship-From party
     *
     * @return bool
     */
    public function firstDocumentShipFromCommunication(): bool
    {
        return false;
    }

    /**
     * Go to the next communication information of the Ship-From party
     *
     * @return bool
     */
    public function nextDocumentShipFromCommunication(): bool
    {
        return false;
    }

    /**
     * Get communication information of the Ship-From party
     *
     * @param  null|string $newType the type for the party's electronic address
     * @param  null|string $newUri  the party's electronic address
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newUri
     */
    public function getDocumentShipFromCommunication(?string &$newType, ?string &$newUri): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newUri = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get the name of the Invoicer party
     *
     * @param  null|string $newName the full formal name under which the party is registered
     * @return static
     *
     * @phpstan-param-out string $newName
     */
    public function getDocumentInvoicerName(?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first ID of the Invoicer party
     *
     * @return bool
     */
    public function firstDocumentInvoicerId(): bool
    {
        return false;
    }

    /**
     * Go to the next ID of the Invoicer party
     *
     * @return bool
     */
    public function nextDocumentInvoicerId(): bool
    {
        return false;
    }

    /**
     * Get the ID of the Invoicer party
     *
     * @param  null|string $newId An identifier of the party. In many systems, identification is key information.
     * @return static
     *
     * @phpstan-param-out string $newId
     */
    public function getDocumentInvoicerId(?string &$newId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first global ID of the Invoicer party
     *
     * @return bool
     */
    public function firstDocumentInvoicerGlobalId(): bool
    {
        return false;
    }

    /**
     * Go to the next global ID of the Invoicer party
     *
     * @return bool
     */
    public function nextDocumentInvoicerGlobalId(): bool
    {
        return false;
    }

    /**
     * Get the Global ID of the Invoicer party
     *
     * @param  null|string $newGlobalId     a global identifier of the party
     * @param  null|string $newGlobalIdType type of the global identifier of the party
     * @return static
     *
     * @phpstan-param-out string $newGlobalId
     * @phpstan-param-out string $newGlobalIdType
     */
    public function getDocumentInvoicerGlobalId(?string &$newGlobalId, ?string &$newGlobalIdType): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newGlobalId = '';
        $newGlobalIdType = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first Tax Registration of the Invoicer party
     *
     * @return bool
     */
    public function firstDocumentInvoicerTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Go to the next Tax Registration of the Invoicer party
     *
     * @return bool
     */
    public function nextDocumentInvoicerTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Get the Tax Registration of the Invoicer party
     *
     * @param  null|string $newTaxRegistrationType Type of tax identification number of the party (e.g. FC = Tax number or VA = Sales tax identification number).
     * @param  null|string $newTaxRegistrationId   tax identification number
     * @return static
     *
     * @phpstan-param-out string $newTaxRegistrationType
     * @phpstan-param-out string $newTaxRegistrationId
     */
    public function getDocumentInvoicerTaxRegistration(?string &$newTaxRegistrationType, ?string &$newTaxRegistrationId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newTaxRegistrationType = '';
        $newTaxRegistrationId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first address of the Invoicer party
     *
     * @return bool
     */
    public function firstDocumentInvoicerAddress(): bool
    {
        return false;
    }

    /**
     * Go to the next address of the Invoicer party
     *
     * @return bool
     */
    public function nextDocumentInvoicerAddress(): bool
    {
        return false;
    }

    /**
     * Get the address of the Invoicer party
     *
     * @param  null|string $newAddressLine1 The main line in the address. This is usually the street name and house number or the post office box.
     * @param  null|string $newAddressLine2 Line 2 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newAddressLine3 Line 3 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newPostcode     zip code of the city or municipality in which the party's address is located
     * @param  null|string $newCity         name of the city or municipality in which the party's address is located
     * @param  null|string $newCountryId    country in which the party's address is located
     * @param  null|string $newSubDivision  region or federal state in which the party's address is located
     * @return static
     *
     * @phpstan-param-out string $newAddressLine1
     * @phpstan-param-out string $newAddressLine2
     * @phpstan-param-out string $newAddressLine3
     * @phpstan-param-out string $newPostcode
     * @phpstan-param-out string $newCity
     * @phpstan-param-out string $newCountryId
     * @phpstan-param-out string $newSubDivision
     */
    public function getDocumentInvoicerAddress(?string &$newAddressLine1, ?string &$newAddressLine2, ?string &$newAddressLine3, ?string &$newPostcode, ?string &$newCity, ?string &$newCountryId, ?string &$newSubDivision): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newAddressLine1 = '';
        $newAddressLine2 = '';
        $newAddressLine3 = '';
        $newPostcode = '';
        $newCity = '';
        $newCountryId = '';
        $newSubDivision = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first the legal information of the Invoicer party
     *
     * @return bool
     */
    public function firstDocumentInvoicerLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Go to the next the legal information of the Invoicer party
     *
     * @return bool
     */
    public function nextDocumentInvoicerLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Get the legal information of the Invoicer party
     *
     * @param  null|string $newType type of the identification number of the legal registration of the party
     * @param  null|string $newId   identification number of the legal registration of the party
     * @param  null|string $newName name by which the party is known, if different from the party's name
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newId
     * @phpstan-param-out string $newName
     */
    public function getDocumentInvoicerLegalOrganisation(?string &$newType, ?string &$newId, ?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newId = '';
        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first contact information of the Invoicer party
     *
     * @return bool
     */
    public function firstDocumentInvoicerContact(): bool
    {
        return false;
    }

    /**
     * Go to the next contact information of the Invoicer party
     *
     * @return bool
     */
    public function nextDocumentInvoicerContact(): bool
    {
        return false;
    }

    /**
     * Get the contact information of the Invoicer party
     *
     * @param  null|string $newPersonName     name of contact person or department or office for the contact point
     * @param  null|string $newDepartmentName name of the department for the contact point
     * @param  null|string $newPhoneNumber    telephone number for the contact point
     * @param  null|string $newFaxNumber      fax number of the contact point
     * @param  null|string $newEmailAddress   E-Mail address of the contact point
     * @return static
     *
     * @phpstan-param-out string $newPersonName
     * @phpstan-param-out string $newDepartmentName
     * @phpstan-param-out string $newPhoneNumber
     * @phpstan-param-out string $newFaxNumber
     * @phpstan-param-out string $newEmailAddress
     */
    public function getDocumentInvoicerContact(?string &$newPersonName, ?string &$newDepartmentName, ?string &$newPhoneNumber, ?string &$newFaxNumber, ?string &$newEmailAddress): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newPersonName = '';
        $newDepartmentName = '';
        $newPhoneNumber = '';
        $newFaxNumber = '';
        $newEmailAddress = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first communication information of the Invoicer party
     *
     * @return bool
     */
    public function firstDocumentInvoicerCommunication(): bool
    {
        return false;
    }

    /**
     * Go to the next communication information of the Invoicer party
     *
     * @return bool
     */
    public function nextDocumentInvoicerCommunication(): bool
    {
        return false;
    }

    /**
     * Get communication information of the Invoicer party
     *
     * @param  null|string $newType the type for the party's electronic address
     * @param  null|string $newUri  the party's electronic address
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newUri
     */
    public function getDocumentInvoicerCommunication(?string &$newType, ?string &$newUri): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newUri = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get the name of the Invoicee party
     *
     * @param  null|string $newName the full formal name under which the party is registered
     * @return static
     *
     * @phpstan-param-out string $newName
     */
    public function getDocumentInvoiceeName(?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first ID of the Invoicee party
     *
     * @return bool
     */
    public function firstDocumentInvoiceeId(): bool
    {
        return false;
    }

    /**
     * Go to the next ID of the Invoicee party
     *
     * @return bool
     */
    public function nextDocumentInvoiceeId(): bool
    {
        return false;
    }

    /**
     * Get the ID of the Invoicee party
     *
     * @param  null|string $newId An identifier of the party. In many systems, identification is key information.
     * @return static
     *
     * @phpstan-param-out string $newId
     */
    public function getDocumentInvoiceeId(?string &$newId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first global ID of the Invoicee party
     *
     * @return bool
     */
    public function firstDocumentInvoiceeGlobalId(): bool
    {
        return false;
    }

    /**
     * Go to the next global ID of the Invoicee party
     *
     * @return bool
     */
    public function nextDocumentInvoiceeGlobalId(): bool
    {
        return false;
    }

    /**
     * Get the Global ID of the Invoicee party
     *
     * @param  null|string $newGlobalId     a global identifier of the party
     * @param  null|string $newGlobalIdType type of the global identifier of the party
     * @return static
     *
     * @phpstan-param-out string $newGlobalId
     * @phpstan-param-out string $newGlobalIdType
     */
    public function getDocumentInvoiceeGlobalId(?string &$newGlobalId, ?string &$newGlobalIdType): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newGlobalId = '';
        $newGlobalIdType = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first Tax Registration of the Invoicee party
     *
     * @return bool
     */
    public function firstDocumentInvoiceeTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Go to the next Tax Registration of the Invoicee party
     *
     * @return bool
     */
    public function nextDocumentInvoiceeTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Get the Tax Registration of the Invoicee party
     *
     * @param  null|string $newTaxRegistrationType Type of tax identification number of the party (e.g. FC = Tax number or VA = Sales tax identification number).
     * @param  null|string $newTaxRegistrationId   tax identification number
     * @return static
     *
     * @phpstan-param-out string $newTaxRegistrationType
     * @phpstan-param-out string $newTaxRegistrationId
     */
    public function getDocumentInvoiceeTaxRegistration(?string &$newTaxRegistrationType, ?string &$newTaxRegistrationId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newTaxRegistrationType = '';
        $newTaxRegistrationId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first address of the Invoicee party
     *
     * @return bool
     */
    public function firstDocumentInvoiceeAddress(): bool
    {
        return false;
    }

    /**
     * Go to the next address of the Invoicee party
     *
     * @return bool
     */
    public function nextDocumentInvoiceeAddress(): bool
    {
        return false;
    }

    /**
     * Get the address of the Invoicee party
     *
     * @param  null|string $newAddressLine1 The main line in the address. This is usually the street name and house number or the post office box.
     * @param  null|string $newAddressLine2 Line 2 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newAddressLine3 Line 3 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newPostcode     zip code of the city or municipality in which the party's address is located
     * @param  null|string $newCity         name of the city or municipality in which the party's address is located
     * @param  null|string $newCountryId    country in which the party's address is located
     * @param  null|string $newSubDivision  region or federal state in which the party's address is located
     * @return static
     *
     * @phpstan-param-out string $newAddressLine1
     * @phpstan-param-out string $newAddressLine2
     * @phpstan-param-out string $newAddressLine3
     * @phpstan-param-out string $newPostcode
     * @phpstan-param-out string $newCity
     * @phpstan-param-out string $newCountryId
     * @phpstan-param-out string $newSubDivision
     */
    public function getDocumentInvoiceeAddress(?string &$newAddressLine1, ?string &$newAddressLine2, ?string &$newAddressLine3, ?string &$newPostcode, ?string &$newCity, ?string &$newCountryId, ?string &$newSubDivision): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newAddressLine1 = '';
        $newAddressLine2 = '';
        $newAddressLine3 = '';
        $newPostcode = '';
        $newCity = '';
        $newCountryId = '';
        $newSubDivision = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first the legal information of the Invoicee party
     *
     * @return bool
     */
    public function firstDocumentInvoiceeLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Go to the next the legal information of the Invoicee party
     *
     * @return bool
     */
    public function nextDocumentInvoiceeLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Get the legal information of the Invoicee party
     *
     * @param  null|string $newType type of the identification number of the legal registration of the party
     * @param  null|string $newId   identification number of the legal registration of the party
     * @param  null|string $newName name by which the party is known, if different from the party's name
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newId
     * @phpstan-param-out string $newName
     */
    public function getDocumentInvoiceeLegalOrganisation(?string &$newType, ?string &$newId, ?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newId = '';
        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first contact information of the Invoicee party
     *
     * @return bool
     */
    public function firstDocumentInvoiceeContact(): bool
    {
        return false;
    }

    /**
     * Go to the next contact information of the Invoicee party
     *
     * @return bool
     */
    public function nextDocumentInvoiceeContact(): bool
    {
        return false;
    }

    /**
     * Get the contact information of the Invoicee party
     *
     * @param  null|string $newPersonName     name of contact person or department or office for the contact point
     * @param  null|string $newDepartmentName name of the department for the contact point
     * @param  null|string $newPhoneNumber    telephone number for the contact point
     * @param  null|string $newFaxNumber      fax number of the contact point
     * @param  null|string $newEmailAddress   E-Mail address of the contact point
     * @return static
     *
     * @phpstan-param-out string $newPersonName
     * @phpstan-param-out string $newDepartmentName
     * @phpstan-param-out string $newPhoneNumber
     * @phpstan-param-out string $newFaxNumber
     * @phpstan-param-out string $newEmailAddress
     */
    public function getDocumentInvoiceeContact(?string &$newPersonName, ?string &$newDepartmentName, ?string &$newPhoneNumber, ?string &$newFaxNumber, ?string &$newEmailAddress): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newPersonName = '';
        $newDepartmentName = '';
        $newPhoneNumber = '';
        $newFaxNumber = '';
        $newEmailAddress = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first communication information of the Invoicee party
     *
     * @return bool
     */
    public function firstDocumentInvoiceeCommunication(): bool
    {
        return false;
    }

    /**
     * Go to the next communication information of the Invoicee party
     *
     * @return bool
     */
    public function nextDocumentInvoiceeCommunication(): bool
    {
        return false;
    }

    /**
     * Get communication information of the Invoicee party
     *
     * @param  null|string $newType the type for the party's electronic address
     * @param  null|string $newUri  the party's electronic address
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newUri
     */
    public function getDocumentInvoiceeCommunication(?string &$newType, ?string &$newUri): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newUri = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get the name of the Payee party
     *
     * @param  null|string $newName the full formal name under which the party is registered
     * @return static
     *
     * @phpstan-param-out string $newName
     */
    public function getDocumentPayeeName(?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first ID of the Payee party
     *
     * @return bool
     */
    public function firstDocumentPayeeId(): bool
    {
        return false;
    }

    /**
     * Go to the next ID of the Payee party
     *
     * @return bool
     */
    public function nextDocumentPayeeId(): bool
    {
        return false;
    }

    /**
     * Get the ID of the Payee party
     *
     * @param  null|string $newId An identifier of the party. In many systems, identification is key information.
     * @return static
     *
     * @phpstan-param-out string $newId
     */
    public function getDocumentPayeeId(?string &$newId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first global ID of the Payee party
     *
     * @return bool
     */
    public function firstDocumentPayeeGlobalId(): bool
    {
        return false;
    }

    /**
     * Go to the next global ID of the Payee party
     *
     * @return bool
     */
    public function nextDocumentPayeeGlobalId(): bool
    {
        return false;
    }

    /**
     * Get the Global ID of the Payee party
     *
     * @param  null|string $newGlobalId     a global identifier of the party
     * @param  null|string $newGlobalIdType type of the global identifier of the party
     * @return static
     *
     * @phpstan-param-out string $newGlobalId
     * @phpstan-param-out string $newGlobalIdType
     */
    public function getDocumentPayeeGlobalId(?string &$newGlobalId, ?string &$newGlobalIdType): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newGlobalId = '';
        $newGlobalIdType = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first Tax Registration of the Payee party
     *
     * @return bool
     */
    public function firstDocumentPayeeTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Go to the next Tax Registration of the Payee party
     *
     * @return bool
     */
    public function nextDocumentPayeeTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Get the Tax Registration of the Payee party
     *
     * @param  null|string $newTaxRegistrationType Type of tax identification number of the party (e.g. FC = Tax number or VA = Sales tax identification number).
     * @param  null|string $newTaxRegistrationId   tax identification number
     * @return static
     *
     * @phpstan-param-out string $newTaxRegistrationType
     * @phpstan-param-out string $newTaxRegistrationId
     */
    public function getDocumentPayeeTaxRegistration(?string &$newTaxRegistrationType, ?string &$newTaxRegistrationId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newTaxRegistrationType = '';
        $newTaxRegistrationId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first address of the Payee party
     *
     * @return bool
     */
    public function firstDocumentPayeeAddress(): bool
    {
        return false;
    }

    /**
     * Go to the next address of the Payee party
     *
     * @return bool
     */
    public function nextDocumentPayeeAddress(): bool
    {
        return false;
    }

    /**
     * Get the address of the Payee party
     *
     * @param  null|string $newAddressLine1 The main line in the address. This is usually the street name and house number or the post office box.
     * @param  null|string $newAddressLine2 Line 2 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newAddressLine3 Line 3 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newPostcode     zip code of the city or municipality in which the party's address is located
     * @param  null|string $newCity         name of the city or municipality in which the party's address is located
     * @param  null|string $newCountryId    country in which the party's address is located
     * @param  null|string $newSubDivision  region or federal state in which the party's address is located
     * @return static
     *
     * @phpstan-param-out string $newAddressLine1
     * @phpstan-param-out string $newAddressLine2
     * @phpstan-param-out string $newAddressLine3
     * @phpstan-param-out string $newPostcode
     * @phpstan-param-out string $newCity
     * @phpstan-param-out string $newCountryId
     * @phpstan-param-out string $newSubDivision
     */
    public function getDocumentPayeeAddress(?string &$newAddressLine1, ?string &$newAddressLine2, ?string &$newAddressLine3, ?string &$newPostcode, ?string &$newCity, ?string &$newCountryId, ?string &$newSubDivision): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newAddressLine1 = '';
        $newAddressLine2 = '';
        $newAddressLine3 = '';
        $newPostcode = '';
        $newCity = '';
        $newCountryId = '';
        $newSubDivision = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first the legal information of the Payee party
     *
     * @return bool
     */
    public function firstDocumentPayeeLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Go to the next the legal information of the Payee party
     *
     * @return bool
     */
    public function nextDocumentPayeeLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Get the legal information of the Payee party
     *
     * @param  null|string $newType type of the identification number of the legal registration of the party
     * @param  null|string $newId   identification number of the legal registration of the party
     * @param  null|string $newName name by which the party is known, if different from the party's name
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newId
     * @phpstan-param-out string $newName
     */
    public function getDocumentPayeeLegalOrganisation(?string &$newType, ?string &$newId, ?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newId = '';
        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first contact information of the Payee party
     *
     * @return bool
     */
    public function firstDocumentPayeeContact(): bool
    {
        return false;
    }

    /**
     * Go to the next contact information of the Payee party
     *
     * @return bool
     */
    public function nextDocumentPayeeContact(): bool
    {
        return false;
    }

    /**
     * Get the contact information of the Payee party
     *
     * @param  null|string $newPersonName     name of contact person or department or office for the contact point
     * @param  null|string $newDepartmentName name of the department for the contact point
     * @param  null|string $newPhoneNumber    telephone number for the contact point
     * @param  null|string $newFaxNumber      fax number of the contact point
     * @param  null|string $newEmailAddress   E-Mail address of the contact point
     * @return static
     *
     * @phpstan-param-out string $newPersonName
     * @phpstan-param-out string $newDepartmentName
     * @phpstan-param-out string $newPhoneNumber
     * @phpstan-param-out string $newFaxNumber
     * @phpstan-param-out string $newEmailAddress
     */
    public function getDocumentPayeeContact(?string &$newPersonName, ?string &$newDepartmentName, ?string &$newPhoneNumber, ?string &$newFaxNumber, ?string &$newEmailAddress): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newPersonName = '';
        $newDepartmentName = '';
        $newPhoneNumber = '';
        $newFaxNumber = '';
        $newEmailAddress = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first communication information of the Payee party
     *
     * @return bool
     */
    public function firstDocumentPayeeCommunication(): bool
    {
        return false;
    }

    /**
     * Go to the next communication information of the Payee party
     *
     * @return bool
     */
    public function nextDocumentPayeeCommunication(): bool
    {
        return false;
    }

    /**
     * Get communication information of the Payee party
     *
     * @param  null|string $newType the type for the party's electronic address
     * @param  null|string $newUri  the party's electronic address
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newUri
     */
    public function getDocumentPayeeCommunication(?string &$newType, ?string &$newUri): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newUri = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first Payment mean
     *
     * @return bool
     */
    public function firstDocumentPaymentMean(): bool
    {
        return false;
    }

    /**
     * Go to the next Payment mean
     *
     * @return bool
     */
    public function nextDocumentPaymentMean(): bool
    {
        return false;
    }

    /**
     * Get Payment mean
     *
     * @param  null|string $newTypeCode            Expected or used means of payment expressed as a code
     * @param  null|string $newName                Expected or used means of payment expressed in text form
     * @param  null|string $newFinancialCardId     Primary account number (PAN) of the payment card
     * @param  null|string $newFinancialCardHolder Name of the payment card holder
     * @param  null|string $newBuyerIban           Identifier of the account to be debited
     * @param  null|string $newPayeeIban           Payment account identifier
     * @param  null|string $newPayeeAccountName    Name of the payment account
     * @param  null|string $newPayeeProprietaryId  National account number (not for SEPA)
     * @param  null|string $newPayeeBic            Identifier of the payment service provider
     * @param  null|string $newPaymentReference    Text value used to link the payment to the invoice issued by the seller
     * @param  null|string $newMandate             Identification of the mandate reference
     * @return static
     *
     * @phpstan-param-out string $newTypeCode
     * @phpstan-param-out string $newName
     * @phpstan-param-out string $newFinancialCardId
     * @phpstan-param-out string $newFinancialCardHolder
     * @phpstan-param-out string $newBuyerIban
     * @phpstan-param-out string $newPayeeIban
     * @phpstan-param-out string $newPayeeAccountName
     * @phpstan-param-out string $newPayeeProprietaryId
     * @phpstan-param-out string $newPayeeBic
     * @phpstan-param-out string $newPaymentReference
     * @phpstan-param-out string $newMandate
     */
    public function getDocumentPaymentMean(?string &$newTypeCode, ?string &$newName, ?string &$newFinancialCardId, ?string &$newFinancialCardHolder, ?string &$newBuyerIban, ?string &$newPayeeIban, ?string &$newPayeeAccountName, ?string &$newPayeeProprietaryId, ?string &$newPayeeBic, ?string &$newPaymentReference, ?string &$newMandate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newTypeCode = '';
        $newName = '';
        $newFinancialCardId = '';
        $newFinancialCardHolder = '';
        $newBuyerIban = '';
        $newPayeeIban = '';
        $newPayeeAccountName = '';
        $newPayeeProprietaryId = '';
        $newPayeeBic = '';
        $newPaymentReference = '';
        $newMandate = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first Unique bank details of the payee or the seller
     *
     * @return bool
     */
    public function firstDocumentPaymentCreditorReferenceID(): bool
    {
        return false;
    }

    /**
     * Go to the next Unique bank details of the payee or the seller
     *
     * @return bool
     */
    public function nextDocumentPaymentCreditorReferenceID(): bool
    {
        return false;
    }

    /**
     * Get Unique bank details of the payee or the seller
     *
     * @param  null|string $newId Creditor identifier
     * @return static
     *
     * @phpstan-param-out string $newId
     */
    public function getDocumentPaymentCreditorReferenceID(?string &$newId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first link to the invoice issued by the seller
     *
     * @return bool
     */
    public function firstDocumentPaymentReference(): bool
    {
        return false;
    }

    /**
     * Go to the next link to the invoice issued by the seller
     *
     * @return bool
     */
    public function nextDocumentPaymentReference(): bool
    {
        return false;
    }

    /**
     * Get a link to the invoice issued by the seller
     *
     * @param  null|string $newId Creditor identifier
     * @return static
     *
     * @phpstan-param-out string $newId
     */
    public function getDocumentPaymentReference(?string &$newId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first payment term
     *
     * @return bool
     */
    public function firstDocumentPaymentTerm(): bool
    {
        return false;
    }

    /**
     * Go to the next payment term
     *
     * @return bool
     */
    public function nextDocumentPaymentTerm(): bool
    {
        return false;
    }

    /**
     * Get payment term
     *
     * @param  null|string            $newDescription Text description of the payment terms
     * @param  null|DateTimeInterface $newDueDate     Date by which payment is due
     * @return static
     *
     * @phpstan-param-out string $newDescription
     * @phpstan-param-out null|DateTimeInterface $newDueDate
     * @phpstan-param-out string $newMandate
     */
    public function getDocumentPaymentTerm(?string &$newDescription, ?DateTimeInterface &$newDueDate, ?string &$newMandate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newDescription = '';
        $newDueDate = null;
        $newMandate = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first payment discount term in latest resolved payment term
     *
     * @return bool
     */
    public function firstDocumentPaymentDiscountTermsInLastPaymentTerm(): bool
    {
        return false;
    }

    /**
     * Go to the last payment discount term in latest resolved payment term
     *
     * @return bool
     */
    public function nextDocumentPaymentDiscountTermsInLastPaymentTerm(): bool
    {
        return false;
    }

    /**
     * Get payment discount terms in latest resolved payment terms
     *
     * @param  null|float             $newBaseAmount      Base amount of the payment discount
     * @param  null|float             $newDiscountAmount  Amount of the payment discount
     * @param  null|float             $newDiscountPercent Percentage of the payment discount
     * @param  null|DateTimeInterface $newBaseDate        Due date reference date
     * @param  null|float             $newBasePeriod      Maturity period (basis)
     * @param  null|string            $newBasePeriodUnit  Maturity period (unit)
     * @return static
     *
     * @phpstan-param-out float $newBaseAmount
     * @phpstan-param-out float $newDiscountAmount
     * @phpstan-param-out float $newDiscountPercent
     * @phpstan-param-out float $newBasePeriod
     * @phpstan-param-out string $newBasePeriodUnit
     */
    public function getDocumentPaymentDiscountTermsInLastPaymentTerm(?float &$newBaseAmount, ?float &$newDiscountAmount, ?float &$newDiscountPercent, ?DateTimeInterface &$newBaseDate, ?float &$newBasePeriod, ?string &$newBasePeriodUnit): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newBaseAmount = 0.0;
        $newDiscountAmount = 0.0;
        $newDiscountPercent = 0.0;
        $newBaseDate = null;
        $newBasePeriod = 0.0;
        $newBasePeriodUnit = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first payment penalty term in latest resolved payment term
     *
     * @return bool
     */
    public function firstDocumentPaymentPenaltyTermsInLastPaymentTerm(): bool
    {
        return false;
    }

    /**
     * Go to the last payment penalty term in latest resolved payment term
     *
     * @return bool
     */
    public function nextDocumentPaymentPenaltyTermsInLastPaymentTerm(): bool
    {
        return false;
    }

    /**
     * Get payment penalty terms in latest resolved payment terms
     *
     * @param  null|float             $newBaseAmount     Base amount of the payment penalty
     * @param  null|float             $newPenaltyAmount  Amount of the payment penalty
     * @param  null|float             $newPenaltyPercent Percentage of the payment penalty
     * @param  null|DateTimeInterface $newBaseDate       Due date reference date
     * @param  null|float             $newBasePeriod     Maturity period (basis)
     * @param  null|string            $newBasePeriodUnit Maturity period (unit)
     * @return static
     *
     * @phpstan-param-out float $newBaseAmount
     * @phpstan-param-out float $newPenaltyAmount
     * @phpstan-param-out float $newPenaltyPercent
     * @phpstan-param-out float $newBasePeriod
     * @phpstan-param-out string $newBasePeriodUnit
     */
    public function getDocumentPaymentPenaltyTermsInLastPaymentTerm(?float &$newBaseAmount, ?float &$newPenaltyAmount, ?float &$newPenaltyPercent, ?DateTimeInterface &$newBaseDate, ?float &$newBasePeriod, ?string &$newBasePeriodUnit): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newBaseAmount = 0.0;
        $newPenaltyAmount = 0.0;
        $newPenaltyPercent = 0.0;
        $newBaseDate = null;
        $newBasePeriod = 0.0;
        $newBasePeriodUnit = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first Document Tax Breakdown
     *
     * @return bool
     */
    public function firstDocumentTax(): bool
    {
        return false;
    }

    /**
     * Go to the next Document Tax Breakdown
     *
     * @return bool
     */
    public function nextDocumentTax(): bool
    {
        return false;
    }

    /**
     * Get Document Tax Breakdown
     *
     * @param  null|string            $newTaxCategory         Coded description of the tax category
     * @param  null|string            $newTaxType             Coded description of the tax type
     * @param  null|float             $newBasisAmount         Tax base amount
     * @param  null|float             $newTaxAmount           Tax total amount
     * @param  null|float             $newTaxPercent          Tax Rate (Percentage)
     * @param  null|string            $newExemptionReason     Reason for tax exemption (free text)
     * @param  null|string            $newExemptionReasonCode Reason for tax exemption (Code)
     * @param  null|DateTimeInterface $newTaxDueDate          Date on which tax is due
     * @param  null|string            $newTaxDueCode          Code for the date on which tax is due
     * @return static
     *
     * @phpstan-param-out string $newTaxCategory
     * @phpstan-param-out string $newTaxType
     * @phpstan-param-out float $newBasisAmount
     * @phpstan-param-out float $newTaxAmount
     * @phpstan-param-out float $newTaxPercent
     * @phpstan-param-out string $newExemptionReason
     * @phpstan-param-out string $newExemptionReasonCode
     * @phpstan-param-out DateTimeInterface|null $newTaxDueDate
     * @phpstan-param-out string $newTaxDueCode
     */
    public function getDocumentTax(?string &$newTaxCategory, ?string &$newTaxType, ?float &$newBasisAmount, ?float &$newTaxAmount, ?float &$newTaxPercent, ?string &$newExemptionReason, ?string &$newExemptionReasonCode, ?DateTimeInterface &$newTaxDueDate, ?string &$newTaxDueCode): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newTaxCategory = '';
        $newTaxType = '';
        $newBasisAmount = 0.0;
        $newTaxAmount = 0.0;
        $newTaxPercent = 0.0;
        $newExemptionReason = '';
        $newExemptionReasonCode = '';
        $newTaxDueDate = null;
        $newTaxDueCode = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first Document Allowance/Charge
     *
     * @return bool
     */
    public function firstDocumentAllowanceCharge(): bool
    {
        return false;
    }

    /**
     * Go to the next Document Allowance/Charge
     *
     * @return bool
     */
    public function nextDocumentAllowanceCharge(): bool
    {
        return false;
    }

    /**
     * Get Document Allowance/Charge
     *
     * @param  null|bool   $newChargeIndicator           Switch that indicates whether the following data refer to an surcharge or a discount, true means that this an charge
     * @param  null|float  $newAllowanceChargeAmount     Amount of the surcharge or discount
     * @param  null|float  $newAllowanceChargeBaseAmount The base amount that may be used in conjunction with the percentage of the surcharge or discount
     * @param  null|string $newTaxCategory               Coded description of the tax category
     * @param  null|string $newTaxType                   Coded description of the tax type
     * @param  null|float  $newTaxPercent                Tax Rate (Percentage)
     * @param  null|string $newAllowanceChargeReason     Reason given in text form for the surcharge or discount
     * @param  null|string $newAllowanceChargeReasonCode Reason given as a code for the surcharge or discount
     * @param  null|float  $newAllowanceChargePercent    Percentage that may be used, in conjunction with the document level allowance base amount, to calculate the document level allowance or charge amount. To state 20%, use value 20
     * @return static
     *
     * @phpstan-param-out bool $newChargeIndicator
     * @phpstan-param-out float $newAllowanceChargeAmount
     * @phpstan-param-out float $newAllowanceChargeBaseAmount
     * @phpstan-param-out string $newTaxCategory
     * @phpstan-param-out string $newTaxType
     * @phpstan-param-out float $newTaxPercent
     * @phpstan-param-out string $newAllowanceChargeReason
     * @phpstan-param-out string $newAllowanceChargeReasonCode
     * @phpstan-param-out float $newAllowanceChargePercent
     */
    public function getDocumentAllowanceCharge(?bool &$newChargeIndicator, ?float &$newAllowanceChargeAmount, ?float &$newAllowanceChargeBaseAmount, ?string &$newTaxCategory, ?string &$newTaxType, ?float &$newTaxPercent, ?string &$newAllowanceChargeReason, ?string &$newAllowanceChargeReasonCode, ?float &$newAllowanceChargePercent): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newChargeIndicator = false;
        $newAllowanceChargeAmount = 0.0;
        $newAllowanceChargeBaseAmount = 0.0;
        $newTaxCategory = '';
        $newTaxType = '';
        $newTaxPercent = 0.0;
        $newAllowanceChargeReason = '';
        $newAllowanceChargeReasonCode = '';
        $newAllowanceChargePercent = 0.0;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first Document Logistic Service Charge
     *
     * @return bool
     */
    public function firstDocumentLogisticServiceCharge(): bool
    {
        return false;
    }

    /**
     * Go to the next Document Logistic Service Charge
     *
     * @return bool
     */
    public function nextDocumentLogisticServiceCharge(): bool
    {
        return false;
    }

    /**
     * Get Document Logistic Service Charge
     *
     * @param  null|float  $newChargeAmount Amount of the service fee
     * @param  null|string $newDescription  Identification of the service fee
     * @param  null|string $newTaxCategory  Coded description of the tax category
     * @param  null|string $newTaxType      Coded description of the tax type
     * @param  null|float  $newTaxPercent   Tax Rate (Percentage)
     * @return static
     *
     * @phpstan-param-out float $newChargeAmount
     * @phpstan-param-out string $newDescription
     * @phpstan-param-out string $newTaxCategory
     * @phpstan-param-out string $newTaxType
     * @phpstan-param-out float $newTaxPercent
     */
    public function getDocumentLogisticServiceCharge(?float &$newChargeAmount, ?string &$newDescription, ?string &$newTaxCategory, ?string &$newTaxType, ?float &$newTaxPercent): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newChargeAmount = 0.0;
        $newDescription = '';
        $newTaxCategory = '';
        $newTaxType = '';
        $newTaxPercent = 0.0;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get the document summation
     *
     * @param  null|float $newNetAmount           Sum of the net amounts of all invoice lines
     * @param  null|float $newChargeTotalAmount   Sum of the charges
     * @param  null|float $newDiscountTotalAmount Sum of the discounts
     * @param  null|float $newTaxBasisAmount      Total invoice amount excluding sales tax
     * @param  null|float $newTaxTotalAmount      Total amount of the invoice sales tax (in the invoice currency)
     * @param  null|float $newGrossAmount         Total invoice amount including sales tax
     * @param  null|float $newDueAmount           Payment amount due
     * @param  null|float $newPrepaidAmount       Prepayment amount
     * @param  null|float $newRoungingAmount      Rounding amount
     * @return static
     *
     * @phpstan-param-out float $newNetAmount
     * @phpstan-param-out float $newChargeTotalAmount
     * @phpstan-param-out float $newDiscountTotalAmount
     * @phpstan-param-out float $newTaxBasisAmount
     * @phpstan-param-out float $newTaxTotalAmount
     * @phpstan-param-out float $newTaxTotalAmount2
     * @phpstan-param-out float $newGrossAmount
     * @phpstan-param-out float $newDueAmount
     * @phpstan-param-out float $newPrepaidAmount
     * @phpstan-param-out float $newRoungingAmount
     */
    public function getDocumentSummation(?float &$newNetAmount, ?float &$newChargeTotalAmount, ?float &$newDiscountTotalAmount, ?float &$newTaxBasisAmount, ?float &$newTaxTotalAmount, ?float &$newTaxTotalAmount2, ?float &$newGrossAmount, ?float &$newDueAmount, ?float &$newPrepaidAmount, ?float &$newRoungingAmount): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newNetAmount = 0.0;
        $newChargeTotalAmount = 0.0;
        $newDiscountTotalAmount = 0.0;
        $newTaxBasisAmount = 0.0;
        $newTaxTotalAmount = 0.0;
        $newTaxTotalAmount2 = 0.0;
        $newGrossAmount = 0.0;
        $newDueAmount = 0.0;
        $newPrepaidAmount = 0.0;
        $newRoungingAmount = 0.0;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first document position
     *
     * @return bool
     */
    public function firstDocumentPosition(): bool
    {
        return false;
    }

    /**
     * Go to the next document position
     *
     * @return bool
     */
    public function nextDocumentPosition(): bool
    {
        return false;
    }

    /**
     * Get position general information
     *
     * @param  null|string $newPositionId           Identification of the position
     * @param  null|string $newParentPositionId     Identification of the parent position
     * @param  null|string $newLineStatusCode       Indicates whether the invoice item contains prices that must be taken into account when calculating the invoice amount or whether only information is included
     * @param  null|string $newLineStatusReasonCode Type to specify whether the invoice line is
     * @return static
     *
     * @phpstan-param-out string $newPositionId
     * @phpstan-param-out string $newParentPositionId
     * @phpstan-param-out string $newLineStatusCode
     * @phpstan-param-out string $newLineStatusReasonCode
     */
    public function getDocumentPosition(?string &$newPositionId, ?string &$newParentPositionId, ?string &$newLineStatusCode, ?string &$newLineStatusReasonCode): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newPositionId = '';
        $newParentPositionId = '';
        $newLineStatusCode = '';
        $newLineStatusReasonCode = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first text information of the latest position
     *
     * @return bool
     */
    public function firstDocumentPositionNote(): bool
    {
        return false;
    }

    /**
     * Go to the next text information of the latest position
     *
     * @return bool
     */
    public function nextDocumentPositionNote(): bool
    {
        return false;
    }

    /**
     * Get text information from latest position
     *
     * @param  null|string $newContent     Text that contains unstructured information that is relevant to the invoice item
     * @param  null|string $newContentCode Code to classify the content of the free text of the invoice
     * @param  null|string $newSubjectCode Code for qualifying the free text for the invoice item
     * @return static
     *
     * @phpstan-param-out string $newContent
     * @phpstan-param-out string $newContentCode
     * @phpstan-param-out string $newSubjectCode
     */
    public function getDocumentPositionNote(?string &$newContent, ?string &$newContentCode, ?string &$newSubjectCode): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newContent = '';
        $newContentCode = '';
        $newSubjectCode = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get product details from latest position
     *
     * @param  null|string $newProductId                 ID of the product (product id, Order-X interoperable)
     * @param  null|string $newProductName               Name of the product (product name)
     * @param  null|string $newProductDescription        Product description of the item, the item description makes it possible to describe the item
     * @param  null|string $newProductSellerId           Identifier assigned to the product by the seller
     * @param  null|string $newProductBuyerId            Identifier assigned to the product by the buyer
     * @param  null|string $newProductGlobalId           Product global id
     * @param  null|string $newProductGlobalIdType       Type of the product global id
     * @param  null|string $newProductIndustryId         Id assigned by the industry
     * @param  null|string $newProductModelId            Unique model identifier of the product
     * @param  null|string $newProductBatchId            Batch (lot) identifier of the product
     * @param  null|string $newProductBrandName          Brand name of the product
     * @param  null|string $newProductModelName          Model name of the product
     * @param  null|string $newProductOriginTradeCountry Code indicating the country the goods came from
     * @return static
     *
     * @phpstan-param-out string $newProductId
     * @phpstan-param-out string $newProductName
     * @phpstan-param-out string $newProductDescription
     * @phpstan-param-out string $newProductSellerId
     * @phpstan-param-out string $newProductBuyerId
     * @phpstan-param-out string $newProductGlobalId
     * @phpstan-param-out string $newProductGlobalIdType
     * @phpstan-param-out string $newProductIndustryId
     * @phpstan-param-out string $newProductModelId
     * @phpstan-param-out string $newProductBatchId
     * @phpstan-param-out string $newProductBrandName
     * @phpstan-param-out string $newProductModelName
     * @phpstan-param-out string $newProductOriginTradeCountry
     */
    public function getDocumentPositionProductDetails(?string &$newProductId, ?string &$newProductName, ?string &$newProductDescription, ?string &$newProductSellerId, ?string &$newProductBuyerId, ?string &$newProductGlobalId, ?string &$newProductGlobalIdType, ?string &$newProductIndustryId, ?string &$newProductModelId, ?string &$newProductBatchId, ?string &$newProductBrandName, ?string &$newProductModelName, ?string &$newProductOriginTradeCountry): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newProductId = '';
        $newProductName = '';
        $newProductDescription = '';
        $newProductSellerId = '';
        $newProductBuyerId = '';
        $newProductGlobalId = '';
        $newProductGlobalIdType = '';
        $newProductIndustryId = '';
        $newProductModelId = '';
        $newProductBatchId = '';
        $newProductBrandName = '';
        $newProductModelName = '';
        $newProductOriginTradeCountry = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first product characteristics from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionProductCharacteristic(): bool
    {
        return false;
    }

    /**
     * Go to the next product characteristics from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionProductCharacteristic(): bool
    {
        return false;
    }

    /**
     * Get product characteristics from latest position
     *
     * @param  null|string $newProductCharacteristicDescription  Name of the attribute or characteristic ("Colour")
     * @param  null|string $newProductCharacteristicValue        Value of the attribute or characteristic ("Red")
     * @param  null|string $newProductCharacteristicType         Type (Code) of product characteristic
     * @param  null|float  $newProductCharacteristicMeasureValue Value of the characteristic (numerical measured)
     * @param  null|string $newProductCharacteristicMeasureUnit  Unit of value of the characteristic
     * @return static
     *
     * @phpstan-param-out string $newProductCharacteristicDescription
     * @phpstan-param-out string $newProductCharacteristicValue
     * @phpstan-param-out string $newProductCharacteristicType
     * @phpstan-param-out float $newProductCharacteristicMeasureValue
     * @phpstan-param-out string $newProductCharacteristicMeasureUnit
     */
    public function getDocumentPositionProductCharacteristic(?string &$newProductCharacteristicDescription, ?string &$newProductCharacteristicValue, ?string &$newProductCharacteristicType, ?float &$newProductCharacteristicMeasureValue, ?string &$newProductCharacteristicMeasureUnit): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newProductCharacteristicDescription = '';
        $newProductCharacteristicValue = '';
        $newProductCharacteristicType = '';
        $newProductCharacteristicMeasureValue = 0.0;
        $newProductCharacteristicMeasureUnit = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first product classification from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionProductClassification(): bool
    {
        return false;
    }

    /**
     * Go to the next product classification from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionProductClassification(): bool
    {
        return false;
    }

    /**
     * Get product classification from latest position
     *
     * @param  null|string $newProductClassificationCode          Classification identifier
     * @param  null|string $newProductClassificationListId        Identifier for the identification scheme of the item classification
     * @param  null|string $newProductClassificationListVersionId Version of the identification scheme
     * @param  null|string $newProductClassificationCodeClassname Name with which an article can be classified according to type or quality
     * @return static
     *
     * @phpstan-param-out string $newProductClassificationCode
     * @phpstan-param-out string $newProductClassificationListId
     * @phpstan-param-out string $newProductClassificationListVersionId
     * @phpstan-param-out string $newProductClassificationCodeClassname
     */
    public function getDocumentPositionProductClassification(?string &$newProductClassificationCode, ?string &$newProductClassificationListId, ?string &$newProductClassificationListVersionId, ?string &$newProductClassificationCodeClassname): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newProductClassificationCode = '';
        $newProductClassificationListId = '';
        $newProductClassificationListVersionId = '';
        $newProductClassificationCodeClassname = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first referenced product in latest position
     *
     * @return bool
     */
    public function firstDocumentPositionReferencedProduct(): bool
    {
        return false;
    }

    /**
     * Go to the next referenced product in latest position
     *
     * @return bool
     */
    public function nextDocumentPositionReferencedProduct(): bool
    {
        return false;
    }

    /**
     * Get referenced product from latest position
     *
     * @param  null|string $newProductId               ID of the product (product id, Order-X interoperable)
     * @param  null|string $newProductName             Name of the product (product name)
     * @param  null|string $newProductDescription      Product description of the item, the item description makes it possible to describe the item
     * @param  null|string $newProductSellerId         Identifier assigned to the product by the seller
     * @param  null|string $newProductBuyerId          Identifier assigned to the product by the buyer
     * @param  null|string $newProductGlobalId         Product global id
     * @param  null|string $newProductGlobalIdType     Type of the product global id
     * @param  null|string $newProductIndustryId       Id assigned by the industry
     * @param  null|float  $newProductUnitQuantity     Quantity Quantity of the referenced product contained
     * @param  null|string $newProductUnitQuantityUnit Unit code of the quantity of the referenced product contained
     * @return static
     *
     * @phpstan-param-out string $newProductId
     * @phpstan-param-out string $newProductName
     * @phpstan-param-out string $newProductDescription
     * @phpstan-param-out string $newProductSellerId
     * @phpstan-param-out string $newProductBuyerId
     * @phpstan-param-out string $newProductGlobalId
     * @phpstan-param-out string $newProductGlobalIdType
     * @phpstan-param-out string $newProductIndustryId
     * @phpstan-param-out float $newProductUnitQuantity
     * @phpstan-param-out string $newProductUnitQuantityUnit
     */
    public function getDocumentPositionReferencedProduct(?string &$newProductId, ?string &$newProductName, ?string &$newProductDescription, ?string &$newProductSellerId, ?string &$newProductBuyerId, ?string &$newProductGlobalId, ?string &$newProductGlobalIdType, ?string &$newProductIndustryId, ?float &$newProductUnitQuantity, ?string &$newProductUnitQuantityUnit): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newProductId = '';
        $newProductName = '';
        $newProductDescription = '';
        $newProductSellerId = '';
        $newProductBuyerId = '';
        $newProductGlobalId = '';
        $newProductGlobalIdType = '';
        $newProductIndustryId = '';
        $newProductUnitQuantity = 0.0;
        $newProductUnitQuantityUnit = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first associated seller's order confirmation (line reference) from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionSellerOrderReference(): bool
    {
        return false;
    }

    /**
     * Go to the next associated seller's order confirmation (line reference) from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionSellerOrderReference(): bool
    {
        return false;
    }

    /**
     * Get the associated seller's order confirmation (line reference) from latest position
     *
     * @param  null|string            $newReferenceNumber     Seller's order confirmation number
     * @param  null|string            $newReferenceLineNumber Seller's order confirmation line number
     * @param  null|DateTimeInterface $newReferenceDate       Seller's order confirmation date
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out string $newReferenceLineNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     */
    public function getDocumentPositionSellerOrderReference(?string &$newReferenceNumber, ?string &$newReferenceLineNumber, ?DateTimeInterface &$newReferenceDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceLineNumber = '';
        $newReferenceDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first associated buyer's order confirmation (line reference) from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionBuyerOrderReference(): bool
    {
        return false;
    }

    /**
     * Go to the next associated buyer's order confirmation (line reference) from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionBuyerOrderReference(): bool
    {
        return false;
    }

    /**
     * Get the associated buyer's order confirmation (line reference) from latest position
     *
     * @param  null|string            $newReferenceNumber     Buyer's order confirmation number
     * @param  null|string            $newReferenceLineNumber Buyer's order confirmation line number
     * @param  null|DateTimeInterface $newReferenceDate       Buyer's order confirmation date
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out string $newReferenceLineNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     */
    public function getDocumentPositionBuyerOrderReference(?string &$newReferenceNumber = null, ?string &$newReferenceLineNumber = null, ?DateTimeInterface &$newReferenceDate = null): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceLineNumber = '';
        $newReferenceDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first associated quotation (line reference) from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionQuotationReference(): bool
    {
        return false;
    }

    /**
     * Go to the next associated quotation (line reference)
     *
     * @return bool
     */
    public function nextDocumentPositionQuotationReference(): bool
    {
        return false;
    }

    /**
     * Get the associated quotation (line reference) from latest position
     *
     * @param  null|string            $newReferenceNumber     Buyer's order confirmation number
     * @param  null|string            $newReferenceLineNumber Buyer's order confirmation line number
     * @param  null|DateTimeInterface $newReferenceDate       Buyer's order confirmation date
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out string $newReferenceLineNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     */
    public function getDocumentPositionQuotationReference(?string &$newReferenceNumber, ?string &$newReferenceLineNumber, ?DateTimeInterface &$newReferenceDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceLineNumber = '';
        $newReferenceDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first associated contract (line reference) from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionContractReference(): bool
    {
        return false;
    }

    /**
     * Go to the next associated contract (line reference) from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionContractReference(): bool
    {
        return false;
    }

    /**
     * Get the associated contract (line reference) from latest position
     *
     * @param  null|string            $newReferenceNumber     Buyer's order confirmation number
     * @param  null|string            $newReferenceLineNumber Buyer's order confirmation line number
     * @param  null|DateTimeInterface $newReferenceDate       Buyer's order confirmation date
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out string $newReferenceLineNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     */
    public function getDocumentPositionContractReference(?string &$newReferenceNumber, ?string &$newReferenceLineNumber, ?DateTimeInterface &$newReferenceDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceLineNumber = '';
        $newReferenceDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to first additional associated document (line reference) from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionAdditionalReference(): bool
    {
        return false;
    }

    /**
     * Go to next additional associated document (line reference) from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionAdditionalReference(): bool
    {
        return false;
    }

    /**
     * Get an additional associated document (line reference) from latest position
     *
     * @param  null|string                 $newReferenceNumber         Additional document number
     * @param  null|string                 $newReferenceLineNumber     Additional document line number
     * @param  null|DateTimeInterface      $newReferenceDate           Additional document date
     * @param  null|string                 $newTypeCode                Additional document type code
     * @param  null|string                 $newReferenceTypeCode       Additional document reference-type code
     * @param  null|string                 $newDescription             Additional document description
     * @param  null|InvoiceSuiteAttachment &$newInvoiceSuiteAttachment Additional document attachment
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out string $newReferenceLineNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     * @phpstan-param-out string $newTypeCode
     * @phpstan-param-out string $newReferenceTypeCode
     * @phpstan-param-out string $newDescription
     * @phpstan-param-out InvoiceSuiteAttachment|null $newInvoiceSuiteAttachment
     */
    public function getDocumentPositionAdditionalReference(?string &$newReferenceNumber, ?string &$newReferenceLineNumber, ?DateTimeInterface &$newReferenceDate, ?string &$newTypeCode, ?string &$newReferenceTypeCode, ?string &$newDescription, ?InvoiceSuiteAttachment &$newInvoiceSuiteAttachment): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceLineNumber = '';
        $newReferenceDate = null;
        $newTypeCode = '';
        $newReferenceTypeCode = '';
        $newDescription = '';
        $newInvoiceSuiteAttachment = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first an additional ultimate customer order reference (line reference) from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionUltimateCustomerOrderReference(): bool
    {
        return false;
    }

    /**
     * Go to the next an additional ultimate customer order reference (line reference) from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionUltimateCustomerOrderReference(): bool
    {
        return false;
    }

    /**
     * Get an additional ultimate customer order reference (line reference) from latest position
     *
     * @param  null|string            $newReferenceNumber     Ultimate customer order number
     * @param  null|string            $newReferenceLineNumber Ultimate customer order line number
     * @param  null|DateTimeInterface $newReferenceDate       Ultimate customer order date
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out string $newReferenceLineNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     */
    public function getDocumentPositionUltimateCustomerOrderReference(?string &$newReferenceNumber, ?string &$newReferenceLineNumber, ?DateTimeInterface &$newReferenceDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceLineNumber = '';
        $newReferenceDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first additional despatch advice reference (line reference) from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionDespatchAdviceReference(): bool
    {
        return false;
    }

    /**
     * Go to the next additional despatch advice reference (line reference) from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionDespatchAdviceReference(): bool
    {
        return false;
    }

    /**
     * Get an additional despatch advice reference (line reference) from latest position
     *
     * @param  null|string            $newReferenceNumber     Shipping notification number
     * @param  null|string            $newReferenceLineNumber Shipping notification line number
     * @param  null|DateTimeInterface $newReferenceDate       Shipping notification date
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out string $newReferenceLineNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     */
    public function getDocumentPositionDespatchAdviceReference(?string &$newReferenceNumber, ?string &$newReferenceLineNumber, ?DateTimeInterface &$newReferenceDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceLineNumber = '';
        $newReferenceDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first additional receiving advice reference (line reference) from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionReceivingAdviceReference(): bool
    {
        return false;
    }

    /**
     * Go to the next additional receiving advice reference (line reference) from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionReceivingAdviceReference(): bool
    {
        return false;
    }

    /**
     * Get an additional receiving advice reference (line reference) from latest position
     *
     * @param  null|string            $newReferenceNumber     Receipt notification number
     * @param  null|string            $newReferenceLineNumber Receipt notification line number
     * @param  null|DateTimeInterface $newReferenceDate       Receipt notification date
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out string $newReferenceLineNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     */
    public function getDocumentPositionReceivingAdviceReference(?string &$newReferenceNumber, ?string &$newReferenceLineNumber, ?DateTimeInterface &$newReferenceDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceLineNumber = '';
        $newReferenceDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first additional delivery note reference (line reference) from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionDeliveryNoteReference(): bool
    {
        return false;
    }

    /**
     * Go to the next additional delivery note reference (line reference) from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionDeliveryNoteReference(): bool
    {
        return false;
    }

    /**
     * Get an additional delivery note reference (line reference) from latest position
     *
     * @param  null|string            $newReferenceNumber     Delivery slip number
     * @param  null|string            $newReferenceLineNumber Delivery slip line number
     * @param  null|DateTimeInterface $newReferenceDate       Delivery slip date
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out string $newReferenceLineNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     */
    public function getDocumentPositionDeliveryNoteReference(?string &$newReferenceNumber, ?string &$newReferenceLineNumber, ?DateTimeInterface &$newReferenceDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceLineNumber = '';
        $newReferenceDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first additional invoice document (reference to preceding invoice) (line reference) from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionInvoiceReference(): bool
    {
        return false;
    }

    /**
     * Go to the next additional invoice document (reference to preceding invoice) (line reference) from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionInvoiceReference(): bool
    {
        return false;
    }

    /**
     * Get an additional invoice document (reference to preceding invoice) (line reference) from latest position
     *
     * @param  null|string            $newReferenceNumber     Identification of an invoice previously sent
     * @param  null|string            $newReferenceLineNumber Identification of an invoice line previously sent
     * @param  null|DateTimeInterface $newReferenceDate       Date of the previous invoice
     * @param  null|string            $newTypeCode            Type code of previous invoice
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out string $newReferenceLineNumber
     * @phpstan-param-out DateTimeInterface|null $newReferenceDate
     * @phpstan-param-out string $newTypeCode
     */
    public function getDocumentPositionInvoiceReference(?string &$newReferenceNumber, ?string &$newReferenceLineNumber, ?DateTimeInterface &$newReferenceDate, ?string &$newTypeCode): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newReferenceLineNumber = '';
        $newReferenceDate = null;
        $newTypeCode = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first additional object reference
     *
     * @return bool
     */
    public function firstDocumentPositionAdditionalObjectReference(): bool
    {
        return false;
    }

    /**
     * Go to the next additional object reference
     *
     * @return bool
     */
    public function nextDocumentPositionAdditionalObjectReference(): bool
    {
        return false;
    }

    /**
     * Get an additional object reference
     *
     * @param  null|string $newReferenceNumber   Object identification at the level on position-level
     * @param  null|string $newTypeCode          Labelling of the object identifier
     * @param  null|string $newReferenceTypeCode Schema identifier, Type of identifier for an item on which the invoice item is based
     * @return static
     *
     * @phpstan-param-out string $newReferenceNumber
     * @phpstan-param-out string $newTypeCode
     * @phpstan-param-out string $newReferenceTypeCode
     */
    public function getDocumentPositionAdditionalObjectReference(?string &$newReferenceNumber = null, ?string &$newTypeCode = null, ?string &$newReferenceTypeCode = null): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newReferenceNumber = '';
        $newTypeCode = '';
        $newReferenceTypeCode = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Returns true if a gross price was specified
     *
     * @return bool
     */
    public function firstDcumentPositionGrossPrice(): bool
    {
        return false;
    }

    /**
     * Get the position's gross price from latest position
     *
     * @param  null|float  $newGrossPrice                  Unit price excluding sales tax before deduction of the discount on the item price
     * @param  null|float  $newGrossPriceBasisQuantity     Number of item units for which the price applies
     * @param  null|string $newGrossPriceBasisQuantityUnit Unit code of the number of item units for which the price applies
     * @return static
     *
     * @phpstan-param-out float $newGrossPrice
     * @phpstan-param-out float $newGrossPriceBasisQuantity
     * @phpstan-param-out string $newGrossPriceBasisQuantityUnit
     */
    public function getDocumentPositionGrossPrice(?float &$newGrossPrice, ?float &$newGrossPriceBasisQuantity, ?string &$newGrossPriceBasisQuantityUnit): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newGrossPrice = 0.0;
        $newGrossPriceBasisQuantity = 0.0;
        $newGrossPriceBasisQuantityUnit = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first discount or charge from the gross price from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionGrossPriceAllowanceCharge(): bool
    {
        return false;
    }

    /**
     * Go to the next discount or charge from the gross price from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionGrossPriceAllowanceCharge(): bool
    {
        return false;
    }

    /**
     * Get discount or charge from the gross price from latest position
     *
     * @param  null|float  $newGrossPriceAllowanceChargeAmount      Discount amount or charge amount on the item price
     * @param  null|bool   $newIsCharge                             Switch for charge/discount
     * @param  null|float  $newGrossPriceAllowanceChargePercent     Discount or charge on the item price in percent
     * @param  null|float  $newGrossPriceAllowanceChargeBasisAmount Base amount of the discount or charge
     * @param  null|string $newGrossPriceAllowanceChargeReason      Reason for discount or charge (free text)
     * @param  null|string $newGrossPriceAllowanceChargeReasonCode  Reason code for discount or charge (free text)
     * @return static
     *
     * @phpstan-param-out float $newGrossPriceAllowanceChargeAmount
     * @phpstan-param-out bool $newIsCharge
     * @phpstan-param-out float $newGrossPriceAllowanceChargePercent
     * @phpstan-param-out float $newGrossPriceAllowanceChargeBasisAmount
     * @phpstan-param-out string $newGrossPriceAllowanceChargeReason
     * @phpstan-param-out string $newGrossPriceAllowanceChargeReasonCode
     */
    public function getDocumentPositionGrossPriceAllowanceCharge(?float &$newGrossPriceAllowanceChargeAmount, ?bool &$newIsCharge, ?float &$newGrossPriceAllowanceChargePercent, ?float &$newGrossPriceAllowanceChargeBasisAmount, ?string &$newGrossPriceAllowanceChargeReason, ?string &$newGrossPriceAllowanceChargeReasonCode): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newGrossPriceAllowanceChargeAmount = 0.0;
        $newIsCharge = false;
        $newGrossPriceAllowanceChargePercent = 0.0;
        $newGrossPriceAllowanceChargeBasisAmount = 0.0;
        $newGrossPriceAllowanceChargeReason = '';
        $newGrossPriceAllowanceChargeReasonCode = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Returns true if a net price was specified
     *
     * @return bool
     */
    public function firstDocumentPositionNetPrice(): bool
    {
        return false;
    }

    /**
     * Get the position's net price from latest position
     *
     * @param  null|float  $newNetPrice                  Unit price excluding sales tax after deduction of the discount on the item price
     * @param  null|float  $newNetPriceBasisQuantity     Number of item units for which the price applies
     * @param  null|string $newNetPriceBasisQuantityUnit Unit code of the number of item units for which the price applies
     * @return static
     *
     * @phpstan-param-out float $newNetPrice
     * @phpstan-param-out float $newNetPriceBasisQuantity
     * @phpstan-param-out string $newNetPriceBasisQuantityUnit
     */
    public function getDocumentPositionNetPrice(?float &$newNetPrice, ?float &$newNetPriceBasisQuantity, ?string &$newNetPriceBasisQuantityUnit): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newNetPrice = 0.0;
        $newNetPriceBasisQuantity = 0.0;
        $newNetPriceBasisQuantityUnit = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get the position's net price included tax from latest position
     *
     * @param  null|string $newTaxCategory         Coded description of the tax category
     * @param  null|string $newTaxType             Coded description of the tax type
     * @param  null|float  $newTaxAmount           Tax total amount
     * @param  null|float  $newTaxPercent          Tax Rate (Percentage)
     * @param  null|string $newExemptionReason     Reason for tax exemption (free text)
     * @param  null|string $newExemptionReasonCode Reason for tax exemption (Code)
     * @return static
     *
     * @phpstan-param-out string $newTaxCategory
     * @phpstan-param-out string $newTaxType
     * @phpstan-param-out float $newTaxAmount
     * @phpstan-param-out float $newTaxPercent
     * @phpstan-param-out string $newExemptionReason
     * @phpstan-param-out string $newExemptionReasonCode
     */
    public function getDocumentPositionNetPriceTax(?string &$newTaxCategory, ?string &$newTaxType, ?float &$newTaxAmount, ?float &$newTaxPercent, ?string &$newExemptionReason, ?string &$newExemptionReasonCode): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newTaxCategory = '';
        $newTaxType = '';
        $newTaxAmount = 0.0;
        $newTaxPercent = 0.0;
        $newExemptionReason = '';
        $newExemptionReasonCode = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get the position's quantities from latest position
     *
     * @param  null|float  $newQuantity                   Invoiced quantity
     * @param  null|string $newQuantityUnit               Invoiced quantity unit
     * @param  null|float  $newChargeFreeQuantity         Charge Free quantity
     * @param  null|string $newChargeFreeQuantityUnit     Charge Free quantity unit
     * @param  null|float  $newPackageQuantity            Package quantity
     * @param  null|string $newPackageQuantityUnit        Package quantity unit
     * @param  null|float  $newPerPackageUnitQuantity     Per Package unit quantity
     * @param  null|string $newPerPackageUnitQuantityUnit Per Package unit quantity unit
     * @return static
     *
     * @phpstan-param-out float $newQuantity
     * @phpstan-param-out string $newQuantityUnit
     * @phpstan-param-out float $newChargeFreeQuantity
     * @phpstan-param-out string $newChargeFreeQuantityUnit
     * @phpstan-param-out float $newPackageQuantity
     * @phpstan-param-out string $newPackageQuantityUnit
     * @phpstan-param-out float $newPerPackageUnitQuantity
     * @phpstan-param-out string $newPerPackageUnitQuantityUnit
     */
    public function getDocumentPositionQuantities(?float &$newQuantity, ?string &$newQuantityUnit, ?float &$newChargeFreeQuantity, ?string &$newChargeFreeQuantityUnit, ?float &$newPackageQuantity, ?string &$newPackageQuantityUnit, ?float &$newPerPackageUnitQuantity, ?string &$newPerPackageUnitQuantityUnit): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newQuantity = 0.0;
        $newQuantityUnit = '';
        $newChargeFreeQuantity = 0.0;
        $newChargeFreeQuantityUnit = '';
        $newPackageQuantity = 0.0;
        $newPackageQuantityUnit = '';
        $newPerPackageUnitQuantity = 0.0;
        $newPerPackageUnitQuantityUnit = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get the name of the Ship-To party from latest position
     *
     * @param  string $newName the full formal name under which the party is registered
     * @return static
     *
     * @phpstan-param-out string $newName
     */
    public function getDocumentPositionShipToName(?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first ID of the Ship-To party from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionShipToId(): bool
    {
        return false;
    }

    /**
     * Go to the next ID of the Ship-To party from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionShipToId(): bool
    {
        return false;
    }

    /**
     * Get the ID of the Ship-To party from latest position
     *
     * @param  null|string $newId An identifier of the party. In many systems, identification is key information.
     * @return static
     *
     * @phpstan-param-out string $newId
     */
    public function getDocumentPositionShipToId(?string &$newId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first ID of the Ship-To party from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionShipToGlobalId(): bool
    {
        return false;
    }

    /**
     * Go to the next ID of the Ship-To party from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionShipToGlobalId(): bool
    {
        return false;
    }

    /**
     * Get the Global ID of the Ship-To party from latest position
     *
     * @param  null|string $newGlobalId     a global identifier of the party
     * @param  null|string $newGlobalIdType type of the global identifier of the party
     * @return static
     *
     * @phpstan-param-out string $newGlobalId
     * @phpstan-param-out string $newGlobalIdType
     */
    public function getDocumentPositionShipToGlobalId(?string &$newGlobalId, ?string &$newGlobalIdType): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newGlobalId = '';
        $newGlobalIdType = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first Tax Registration of the Ship-To party from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionShipToTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Go to the next Tax Registration of the Ship-To party from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionShipToTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Get the Tax Registration of the Ship-To party from latest position
     *
     * @param  null|string $newTaxRegistrationType Type of tax identification number of the party (e.g. FC = Tax number or VA = Sales tax identification number).
     * @param  null|string $newTaxRegistrationId   tax identification number
     * @return static
     *
     * @phpstan-param-out string $newTaxRegistrationType
     * @phpstan-param-out string $newTaxRegistrationId
     */
    public function getDocumentPositionShipToTaxRegistration(?string &$newTaxRegistrationType, ?string &$newTaxRegistrationId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newTaxRegistrationType = '';
        $newTaxRegistrationId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first address of the Ship-To party from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionShipToAddress(): bool
    {
        return false;
    }

    /**
     * Go to the first address of the Ship-To party from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionShipToAddress(): bool
    {
        return false;
    }

    /**
     * Get the address of the Ship-To party from latest position
     *
     * @param  null|string $newAddressLine1 The main line in the address. This is usually the street name and house number or the post office box.
     * @param  null|string $newAddressLine2 Line 2 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newAddressLine3 Line 3 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newPostcode     zip code of the city or municipality in which the party's address is located
     * @param  null|string $newCity         name of the city or municipality in which the party's address is located
     * @param  null|string $newCountryId    country in which the party's address is located
     * @param  null|string $newSubDivision  region or federal state in which the party's address is located
     * @return static
     *
     * @phpstan-param-out string $newAddressLine1
     * @phpstan-param-out string $newAddressLine2
     * @phpstan-param-out string $newAddressLine3
     * @phpstan-param-out string $newPostcode
     * @phpstan-param-out string $newCity
     * @phpstan-param-out string $newCountryId
     * @phpstan-param-out string $newSubDivision
     */
    public function getDocumentPositionShipToAddress(?string &$newAddressLine1, ?string &$newAddressLine2, ?string &$newAddressLine3, ?string &$newPostcode, ?string &$newCity, ?string &$newCountryId, ?string &$newSubDivision): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newAddressLine1 = '';
        $newAddressLine2 = '';
        $newAddressLine3 = '';
        $newPostcode = '';
        $newCity = '';
        $newCountryId = '';
        $newSubDivision = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first the legal information of the Ship-To party from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionShipToLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Go to the next the legal information of the Ship-To party from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionShipToLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Get the legal information of the Ship-To party from latest position
     *
     * @param  null|string $newType type of the identification number of the legal registration of the party
     * @param  null|string $newId   identification number of the legal registration of the party
     * @param  null|string $newName name by which the party is known, if different from the party's name
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newId
     * @phpstan-param-out string $newName
     */
    public function getDocumentPositionShipToLegalOrganisation(?string &$newType, ?string &$newId, ?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newId = '';
        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first contact information of the Ship-To party from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionShipToContact(): bool
    {
        return false;
    }

    /**
     * Go to the next contact information of the Ship-To party from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionShipToContact(): bool
    {
        return false;
    }

    /**
     * Get the contact information of the Ship-To party from latest position
     *
     * @param  null|string $newPersonName     name of contact person or department or office for the contact point
     * @param  null|string $newDepartmentName name of the department for the contact point
     * @param  null|string $newPhoneNumber    telephone number for the contact point
     * @param  null|string $newFaxNumber      fax number of the contact point
     * @param  null|string $newEmailAddress   E-Mail address of the contact point
     * @return static
     *
     * @phpstan-param-out string $newPersonName
     * @phpstan-param-out string $newDepartmentName
     * @phpstan-param-out string $newPhoneNumber
     * @phpstan-param-out string $newFaxNumber
     * @phpstan-param-out string $newEmailAddress
     */
    public function getDocumentPositionShipToContact(?string &$newPersonName, ?string &$newDepartmentName, ?string &$newPhoneNumber, ?string &$newFaxNumber, ?string &$newEmailAddress): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newPersonName = '';
        $newDepartmentName = '';
        $newPhoneNumber = '';
        $newFaxNumber = '';
        $newEmailAddress = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first communication information of the Ship-To party from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionShipToCommunication(): bool
    {
        return false;
    }

    /**
     * Go to the next communication information of the Ship-To party from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionShipToCommunication(): bool
    {
        return false;
    }

    /**
     * Get the communication information of the Ship-To party from latest position
     *
     * @param  null|string $newType the type for the party's electronic address
     * @param  null|string $newUri  the party's electronic address
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newUri
     */
    public function getDocumentPositionShipToCommunication(?string &$newType, ?string &$newUri): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newUri = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get the name of the ultimate Ship-To party from latest position
     *
     * @param  string $newName the full formal name under which the party is registered
     * @return static
     *
     * @phpstan-param-out string $newName
     */
    public function getDocumentPositionUltimateShipToName(?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first ID of the ultimate Ship-To party from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionUltimateShipToId(): bool
    {
        return false;
    }

    /**
     * Go to the next ID of the ultimate Ship-To party from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionUltimateShipToId(): bool
    {
        return false;
    }

    /**
     * Get the ID of the ultimate Ship-To party from latest position
     *
     * @param  null|string $newId An identifier of the party. In many systems, identification is key information.
     * @return static
     *
     * @phpstan-param-out string $newId
     */
    public function getDocumentPositionUltimateShipToId(?string &$newId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first ID of the ultimate Ship-To party from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionUltimateShipToGlobalId(): bool
    {
        return false;
    }

    /**
     * Go to the next ID of the ultimate Ship-To party from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionUltimateShipToGlobalId(): bool
    {
        return false;
    }

    /**
     * Get the Global ID of the ultimate Ship-To party from latest position
     *
     * @param  null|string $newGlobalId     a global identifier of the party
     * @param  null|string $newGlobalIdType type of the global identifier of the party
     * @return static
     *
     * @phpstan-param-out string $newGlobalId
     * @phpstan-param-out string $newGlobalIdType
     */
    public function getDocumentPositionUltimateShipToGlobalId(?string &$newGlobalId, ?string &$newGlobalIdType): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newGlobalId = '';
        $newGlobalIdType = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first Tax Registration of the ultimate Ship-To party from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionUltimateShipToTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Go to the next Tax Registration of the ultimate Ship-To party from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionUltimateShipToTaxRegistration(): bool
    {
        return false;
    }

    /**
     * Get the Tax Registration of the ultimate Ship-To party from latest position
     *
     * @param  null|string $newTaxRegistrationType Type of tax identification number of the party (e.g. FC = Tax number or VA = Sales tax identification number).
     * @param  null|string $newTaxRegistrationId   tax identification number
     * @return static
     *
     * @phpstan-param-out string $newTaxRegistrationType
     * @phpstan-param-out string $newTaxRegistrationId
     */
    public function getDocumentPositionUltimateShipToTaxRegistration(?string &$newTaxRegistrationType, ?string &$newTaxRegistrationId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newTaxRegistrationType = '';
        $newTaxRegistrationId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first address of the ultimate Ship-To party from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionUltimateShipToAddress(): bool
    {
        return false;
    }

    /**
     * Go to the first address of the ultimate Ship-To party from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionUltimateShipToAddress(): bool
    {
        return false;
    }

    /**
     * Get the address of the ultimate Ship-To party from latest position
     *
     * @param  null|string $newAddressLine1 The main line in the address. This is usually the street name and house number or the post office box.
     * @param  null|string $newAddressLine2 Line 2 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newAddressLine3 Line 3 of the address. This is an additional address line in an address that can be used to provide additional details in addition to the main line.
     * @param  null|string $newPostcode     zip code of the city or municipality in which the party's address is located
     * @param  null|string $newCity         name of the city or municipality in which the party's address is located
     * @param  null|string $newCountryId    country in which the party's address is located
     * @param  null|string $newSubDivision  region or federal state in which the party's address is located
     * @return static
     *
     * @phpstan-param-out string $newAddressLine1
     * @phpstan-param-out string $newAddressLine2
     * @phpstan-param-out string $newAddressLine3
     * @phpstan-param-out string $newPostcode
     * @phpstan-param-out string $newCity
     * @phpstan-param-out string $newCountryId
     * @phpstan-param-out string $newSubDivision
     */
    public function getDocumentPositionUltimateShipToAddress(?string &$newAddressLine1, ?string &$newAddressLine2, ?string &$newAddressLine3, ?string &$newPostcode, ?string &$newCity, ?string &$newCountryId, ?string &$newSubDivision): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newAddressLine1 = '';
        $newAddressLine2 = '';
        $newAddressLine3 = '';
        $newPostcode = '';
        $newCity = '';
        $newCountryId = '';
        $newSubDivision = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first the legal information of the ultimate Ship-To party from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionUltimateShipToLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Go to the next the legal information of the ultimate Ship-To party from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionUltimateShipToLegalOrganisation(): bool
    {
        return false;
    }

    /**
     * Get the legal information of the ultimate Ship-To party from latest position
     *
     * @param  null|string $newType type of the identification number of the legal registration of the party
     * @param  null|string $newId   identification number of the legal registration of the party
     * @param  null|string $newName name by which the party is known, if different from the party's name
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newId
     * @phpstan-param-out string $newName
     */
    public function getDocumentPositionUltimateShipToLegalOrganisation(?string &$newType, ?string &$newId, ?string &$newName): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newId = '';
        $newName = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first contact information of the ultimate Ship-To party from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionUltimateShipToContact(): bool
    {
        return false;
    }

    /**
     * Go to the next contact information of the ultimate Ship-To party from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionUltimateShipToContact(): bool
    {
        return false;
    }

    /**
     * Get the contact information of the ultimate Ship-To party from latest position
     *
     * @param  null|string $newPersonName     name of contact person or department or office for the contact point
     * @param  null|string $newDepartmentName name of the department for the contact point
     * @param  null|string $newPhoneNumber    telephone number for the contact point
     * @param  null|string $newFaxNumber      fax number of the contact point
     * @param  null|string $newEmailAddress   E-Mail address of the contact point
     * @return static
     *
     * @phpstan-param-out string $newPersonName
     * @phpstan-param-out string $newDepartmentName
     * @phpstan-param-out string $newPhoneNumber
     * @phpstan-param-out string $newFaxNumber
     * @phpstan-param-out string $newEmailAddress
     */
    public function getDocumentPositionUltimateShipToContact(?string &$newPersonName, ?string &$newDepartmentName, ?string &$newPhoneNumber, ?string &$newFaxNumber, ?string &$newEmailAddress): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newPersonName = '';
        $newDepartmentName = '';
        $newPhoneNumber = '';
        $newFaxNumber = '';
        $newEmailAddress = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first communication information of the ultimate Ship-To party from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionUltimateShipToCommunication(): bool
    {
        return false;
    }

    /**
     * Go to the next communication information of the ultimate Ship-To party from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionUltimateShipToCommunication(): bool
    {
        return false;
    }

    /**
     * Get the communication information of the ultimate Ship-To party from latest position
     *
     * @param  null|string $newType the type for the party's electronic address
     * @param  null|string $newUri  the party's electronic address
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newUri
     */
    public function getDocumentPositionUltimateShipToCommunication(?string &$newType, ?string &$newUri): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newUri = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Get the date of the delivery from latest position
     *
     * @param  null|DateTimeInterface $newDate
     * @return static
     *
     * @phpstan-param-out DateTimeInterface|null $newDate
     */
    public function getDocumentPositionSupplyChainEvent(?DateTimeInterface &$newDate): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newDate = null;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first billing period
     *
     * @return bool
     */
    public function firstDocumentPositionBillingPeriod(): bool
    {
        return false;
    }

    /**
     * Go to the next billing period
     *
     * @return bool
     */
    public function nextDocumentPositionBillingPeriod(): bool
    {
        return false;
    }

    /**
     * Get the start and/or end date of the billing period from latest position
     *
     * @param  null|DateTimeInterface $newStartDate   Start of the billing period
     * @param  null|DateTimeInterface $newEndDate     End of the billing period
     * @param  null|string            $newDescription Further information of the billing period (Obsolete)
     * @return static
     *
     * @phpstan-param-out DateTimeInterface|null $newStartDate
     * @phpstan-param-out DateTimeInterface|null $newEndDate
     * @phpstan-param-out string $newDescription
     */
    public function getDocumentPositionBillingPeriod(?DateTimeInterface &$newStartDate, ?DateTimeInterface &$newEndDate, ?string &$newDescription): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newStartDate = null;
        $newEndDate = null;
        $newDescription = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first position's tax information from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionTax(): bool
    {
        return false;
    }

    /**
     * Go to the next position's tax information from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionTax(): bool
    {
        return false;
    }

    /**
     * Get the position's tax information from latest position
     *
     * @param  null|string $newTaxCategory         Coded description of the tax category
     * @param  null|string $newTaxType             Coded description of the tax type
     * @param  null|float  $newTaxAmount           Tax total amount
     * @param  null|float  $newTaxPercent          Tax Rate (Percentage)
     * @param  null|string $newExemptionReason     Reason for tax exemption (free text)
     * @param  null|string $newExemptionReasonCode Reason for tax exemption (Code)
     * @return static
     *
     * @phpstan-param-out string $newTaxCategory
     * @phpstan-param-out string $newTaxType
     * @phpstan-param-out float $newTaxAmount
     * @phpstan-param-out float $newTaxPercent
     * @phpstan-param-out string $newExemptionReason
     * @phpstan-param-out string $newExemptionReasonCode
     */
    public function getDocumentPositionTax(?string &$newTaxCategory, ?string &$newTaxType, ?float &$newTaxAmount, ?float &$newTaxPercent, ?string &$newExemptionReason, ?string &$newExemptionReasonCode): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newTaxCategory = '';
        $newTaxType = '';
        $newTaxAmount = 0.0;
        $newTaxPercent = 0.0;
        $newExemptionReason = '';
        $newExemptionReasonCode = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first Document position Allowance/Charge from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionAllowanceCharge(): bool
    {
        return false;
    }

    /**
     * Go to the next Document position Allowance/Charge from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionAllowanceCharge(): bool
    {
        return false;
    }

    /**
     * Get Document position Allowance/Charge from latest position
     *
     * @param  null|bool   $newChargeIndicator           Switch that indicates whether the following data refer to an surcharge or a discount, true means that this an charge
     * @param  null|float  $newAllowanceChargeAmount     Amount of the surcharge or discount
     * @param  null|float  $newAllowanceChargeBaseAmount The base amount that may be used in conjunction with the percentage of the surcharge or discount
     * @param  null|string $newAllowanceChargeReason     Reason given in text form for the surcharge or discount
     * @param  null|string $newAllowanceChargeReasonCode Reason given as a code for the surcharge or discount
     * @param  null|float  $newAllowanceChargePercent    Percentage that may be used, in conjunction with the document level allowance base amount, to calculate the document level allowance or charge amount. To state 20%, use value 20
     * @return static
     *
     * @phpstan-param-out bool $newChargeIndicator
     * @phpstan-param-out float $newAllowanceChargeAmount
     * @phpstan-param-out float $newAllowanceChargeBaseAmount
     * @phpstan-param-out string $newAllowanceChargeReason
     * @phpstan-param-out string $newAllowanceChargeReasonCode
     * @phpstan-param-out float $newAllowanceChargePercent
     */
    public function getDocumentPositionAllowanceCharge(?bool &$newChargeIndicator, ?float &$newAllowanceChargeAmount, ?float &$newAllowanceChargeBaseAmount, ?string &$newAllowanceChargeReason, ?string &$newAllowanceChargeReasonCode, ?float &$newAllowanceChargePercent): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newChargeIndicator = false;
        $newAllowanceChargeAmount = 0.0;
        $newAllowanceChargeBaseAmount = 0.0;
        $newAllowanceChargeReason = '';
        $newAllowanceChargeReasonCode = '';
        $newAllowanceChargePercent = 0.0;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Returns true if a position summation exists
     *
     * @return bool
     */
    public function firstDocumentPositionSummation(): bool
    {
        return false;
    }

    /**
     * Get the document position summation from latest position
     *
     * @param  null|float $newNetAmount           Net amount
     * @param  null|float $newChargeTotalAmount   Sum of the charges
     * @param  null|float $newDiscountTotalAmount Sum of the discounts
     * @param  null|float $newTaxTotalAmount      Total amount of the line (in the invoice currency)
     * @param  null|float $newGrossAmount         Total invoice line amount including sales tax
     * @return static
     *
     * @phpstan-param-out float $newNetAmount
     * @phpstan-param-out float $newChargeTotalAmount
     * @phpstan-param-out float $newDiscountTotalAmount
     * @phpstan-param-out float $newTaxTotalAmount
     * @phpstan-param-out float $newGrossAmount
     */
    public function getDocumentPositionSummation(?float &$newNetAmount, ?float &$newChargeTotalAmount, ?float &$newDiscountTotalAmount, ?float &$newTaxTotalAmount, ?float &$newGrossAmount): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newNetAmount = 0.0;
        $newChargeTotalAmount = 0.0;
        $newDiscountTotalAmount = 0.0;
        $newTaxTotalAmount = 0.0;
        $newGrossAmount = 0.0;

        $this->traceMethodExit(__METHOD__);

        return $this;
    }

    /**
     * Go to the first posting reference from latest position
     *
     * @return bool
     */
    public function firstDocumentPositionPostingReference(): bool
    {
        return false;
    }

    /**
     * Go to the next posting reference from latest position
     *
     * @return bool
     */
    public function nextDocumentPositionPostingReference(): bool
    {
        return false;
    }

    /**
     * Get a position's posting reference from latest position
     *
     * @param  null|string $newType      Type of the posting reference
     * @param  null|string $newAccountId Posting reference of the byuer
     * @return static
     *
     * @phpstan-param-out string $newType
     * @phpstan-param-out string $newAccountId
     */
    public function getDocumentPositionPostingReference(?string &$newType, ?string &$newAccountId): static
    {
        $this->traceMethodEnter(__METHOD__);

        $newType = '';
        $newAccountId = '';

        $this->traceMethodExit(__METHOD__);

        return $this;
    }
}
