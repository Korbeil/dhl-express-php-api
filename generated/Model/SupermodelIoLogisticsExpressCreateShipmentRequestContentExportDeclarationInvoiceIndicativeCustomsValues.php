<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues
{
    /**
     * Please provide the pre-calculated import customs duties value for the shipment.
     */
    public ?float $importCustomsDutyValue;
    /**
     * Please provide the pre-calculated import taxes (VAT/GST) value for the shipment.
     */
    public ?float $importTaxesValue;
}
