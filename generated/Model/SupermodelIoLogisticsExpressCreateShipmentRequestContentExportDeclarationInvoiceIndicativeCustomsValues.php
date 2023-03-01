<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues
{
    /**
     * Please provide the pre-calculated import customs duties value for the shipment.
     *
     * @var float|null
     */
    protected $importCustomsDutyValue;
    /**
     * Please provide the pre-calculated import taxes (VAT/GST) value for the shipment.
     *
     * @var float|null
     */
    protected $importTaxesValue;

    /**
     * Please provide the pre-calculated import customs duties value for the shipment.
     */
    public function getImportCustomsDutyValue(): ?float
    {
        return $this->importCustomsDutyValue;
    }

    /**
     * Please provide the pre-calculated import customs duties value for the shipment.
     */
    public function setImportCustomsDutyValue(?float $importCustomsDutyValue): self
    {
        $this->importCustomsDutyValue = $importCustomsDutyValue;

        return $this;
    }

    /**
     * Please provide the pre-calculated import taxes (VAT/GST) value for the shipment.
     */
    public function getImportTaxesValue(): ?float
    {
        return $this->importTaxesValue;
    }

    /**
     * Please provide the pre-calculated import taxes (VAT/GST) value for the shipment.
     */
    public function setImportTaxesValue(?float $importTaxesValue): self
    {
        $this->importTaxesValue = $importTaxesValue;

        return $this;
    }
}
