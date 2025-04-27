<?php

namespace horstoeko\invoicesuite\providers\zffx;

class InvoiceSuiteZfFxMinimumProviderBuilder extends InvoiceSuiteZfFxProviderBuilder
{
    /**
     * @inheritDoc
     */
    public function initRootObject(): InvoiceSuiteZfFxMinimumProviderBuilder
    {
        $this->setContextParameter('urn:factur-x.eu:1p0:minimum');

        return $this;
    }
}
