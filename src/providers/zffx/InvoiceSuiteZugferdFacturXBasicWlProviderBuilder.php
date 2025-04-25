<?php

namespace horstoeko\invoicesuite\providers\zffx;

class InvoiceSuiteZugferdFacturXBasicWlProviderBuilder extends InvoiceSuiteZugferdFacturXProviderBuilder
{
    /**
     * @inheritDoc
     */
    public function initRootObject(): InvoiceSuiteZugferdFacturXBasicWlProviderBuilder
    {
        $this->setContextParameter('urn:factur-x.eu:1p0:basicwl');

        return $this;
    }
}
