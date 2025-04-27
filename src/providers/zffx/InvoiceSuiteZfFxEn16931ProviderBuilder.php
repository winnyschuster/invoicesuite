<?php

namespace horstoeko\invoicesuite\providers\zffx;

class InvoiceSuiteZfFxEn16931ProviderBuilder extends InvoiceSuiteZfFxProviderBuilder
{
    /**
     * @inheritDoc
     */
    public function initRootObject(): InvoiceSuiteZfFxEn16931ProviderBuilder
    {
        $this->setContextParameter('urn:cen.eu:en16931:2017');

        return $this;
    }
}
