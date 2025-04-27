<?php

namespace horstoeko\invoicesuite\providers\zffx;

class InvoiceSuiteZfFxBasicWlProviderBuilder extends InvoiceSuiteZfFxProviderBuilder
{
    /**
     * @inheritDoc
     */
    public function initRootObject(): InvoiceSuiteZfFxBasicWlProviderBuilder
    {
        $this->setContextParameter('urn:factur-x.eu:1p0:basicwl');

        return $this;
    }
}
