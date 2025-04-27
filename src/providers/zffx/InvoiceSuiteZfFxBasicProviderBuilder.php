<?php

namespace horstoeko\invoicesuite\providers\zffx;

class InvoiceSuiteZfFxBasicProviderBuilder extends InvoiceSuiteZfFxProviderBuilder
{
    /**
     * @inheritDoc
     */
    public function initRootObject(): InvoiceSuiteZfFxBasicProviderBuilder
    {
        $this->setContextParameter('urn:cen.eu:en16931:2017#compliant#urn:factur-x.eu:1p0:basic');

        return $this;
    }
}
