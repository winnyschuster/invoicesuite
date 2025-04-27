<?php

namespace horstoeko\invoicesuite\providers\zffx;

use horstoeko\invoicesuite\providers\zffx\InvoiceSuiteZfFxProviderBuilder;

class InvoiceSuiteZfFxXRechnungProviderBuilder extends InvoiceSuiteZfFxProviderBuilder
{
    /**
     * @inheritDoc
     */
    public function initRootObject(): InvoiceSuiteZfFxXRechnungProviderBuilder
    {
        $this->setContextParameter(
            'urn:cen.eu:en16931:2017#compliant#urn:xeinkauf.de:kosit:xrechnung_3.0',
            'urn:fdc:peppol.eu:2017:poacc:billing:01:1.0'
        );

        return $this;
    }
}
