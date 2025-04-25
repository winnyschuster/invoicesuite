<?php

namespace horstoeko\invoicesuite\providers\zffx;

use horstoeko\invoicesuite\abstracts\InvoiceSuiteAbstractFormatProviderBuilder;

class InvoiceSuiteZugferdFacturXBasicWlProviderBuilder extends InvoiceSuiteZugferdFacturXProviderBuilder
{
    /**
     * @inheritDoc
     */
    public function initRootObject(): InvoiceSuiteAbstractFormatProviderBuilder
    {
        $this->setContextParameter('urn:factur-x.eu:1p0:basicwl');

        return $this;
    }
}
