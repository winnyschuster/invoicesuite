<?php

namespace horstoeko\invoicesuite\providers\zffx;

class InvoiceSuiteZfFxExtendedProviderBuilder extends InvoiceSuiteZfFxProviderBuilder
{
    /**
     * @inheritDoc
     */
    public function initRootObject(): InvoiceSuiteZfFxExtendedProviderBuilder
    {
        $this->setContextParameter('urn:cen.eu:en16931:2017#conformant#urn:factur-x.eu:1p0:extended');

        return $this;
    }
}
