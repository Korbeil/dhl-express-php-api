<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['importCustomsDutyValue'] = true;
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
        $this->initialized['importTaxesValue'] = true;
        $this->importTaxesValue = $importTaxesValue;

        return $this;
    }
}
