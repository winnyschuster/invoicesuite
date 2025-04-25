<?php

namespace horstoeko\invoicesuite\providers\zffx;

use horstoeko\invoicesuite\models\zffx\ram\ExchangedDocumentType;
use horstoeko\invoicesuite\models\zffx\rsm\CrossIndustryInvoiceType;
use horstoeko\invoicesuite\models\zffx\ram\DocumentContextParameterType;
use horstoeko\invoicesuite\models\zffx\ram\ExchangedDocumentContextType;
use horstoeko\invoicesuite\abstracts\InvoiceSuiteAbstractFormatProviderBuilder;

class InvoiceSuiteZugferdFacturXProviderBuilder extends InvoiceSuiteAbstractFormatProviderBuilder
{
    /**
     * Returns the root object as a CrossIndustryInvoiceType
     *
     * @return CrossIndustryInvoiceType
     */
    protected function getCrossIndustryRootObject(): CrossIndustryInvoiceType
    {
        return $this->getRootObject();
    }
    /**
     * Init context parameter for profile definition
     *
     * @param string $newContextParameter
     * @param string $newBusinessProcessContextParameter
     * @return static
     */
    public function setContextParameter(string $newContextParameter, string $newBusinessProcessContextParameter = ""): self
    {
        /**
         * @var CrossIndustryInvoiceType $crossIndustryInvoice
         */
        $crossIndustryInvoice = $this->getRootObject();

        $exchangedDocumentContextType = new ExchangedDocumentContextType();
        $exchangedDocumentType = new ExchangedDocumentType();

        $crossIndustryInvoice->setExchangedDocumentContext($exchangedDocumentContextType);
        $crossIndustryInvoice->setExchangedDocument($exchangedDocumentType);

        $documentContextParameterType = new DocumentContextParameterType();
        $documentContextParameterType->getIDWithCreate()->setValue($newContextParameter);

        $crossIndustryInvoice
            ->getExchangedDocumentContext()
            ->setGuidelineSpecifiedDocumentContextParameter($documentContextParameterType);

        if ($newBusinessProcessContextParameter !== "") {
            $documentContextParameterType = new DocumentContextParameterType();
            $documentContextParameterType->getIDWithCreate()->setValue($newBusinessProcessContextParameter);

            $crossIndustryInvoice
                ->getExchangedDocumentContext()
                ->setBusinessProcessSpecifiedDocumentContextParameter($documentContextParameterType);
        }

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setDocumentNo(string $newDocumentNo): self
    {
        $this->getCrossIndustryRootObject()->getExchangedDocument()->getIDWithCreate()->setValue($newDocumentNo);

        return $this;
    }
}
