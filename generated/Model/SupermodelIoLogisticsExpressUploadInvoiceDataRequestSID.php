<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID
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
     * Please provide Shipment Identification number (AWB number).
     *
     * @var string|null
     */
    protected $shipmentTrackingNumber;
    /**
     * The planned shipment date for the provided shipmentTrackingNumber.  The date must be in the format: YYYY-MM-DD.
     *
     * @var string|null
     */
    protected $plannedShipDate;
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     *
     * @var SupermodelIoLogisticsExpressAccount[]|null
     */
    protected $accounts;
    /**
     * Here you can define all the properties related to the content of the prospected shipment.
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContent|null
     */
    protected $content;
    /**
     * Here you can set invoice properties.
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImageProperties|null
     */
    protected $outputImageProperties;
    /**
     * Here you need to define all the parties needed to ship the package.
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails|null
     */
    protected $customerDetails;

    /**
     * Please provide Shipment Identification number (AWB number).
     */
    public function getShipmentTrackingNumber(): ?string
    {
        return $this->shipmentTrackingNumber;
    }

    /**
     * Please provide Shipment Identification number (AWB number).
     */
    public function setShipmentTrackingNumber(?string $shipmentTrackingNumber): self
    {
        $this->initialized['shipmentTrackingNumber'] = true;
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;

        return $this;
    }

    /**
     * The planned shipment date for the provided shipmentTrackingNumber.  The date must be in the format: YYYY-MM-DD.
     */
    public function getPlannedShipDate(): ?string
    {
        return $this->plannedShipDate;
    }

    /**
     * The planned shipment date for the provided shipmentTrackingNumber.  The date must be in the format: YYYY-MM-DD.
     */
    public function setPlannedShipDate(?string $plannedShipDate): self
    {
        $this->initialized['plannedShipDate'] = true;
        $this->plannedShipDate = $plannedShipDate;

        return $this;
    }

    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     *
     * @return SupermodelIoLogisticsExpressAccount[]|null
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }

    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     *
     * @param SupermodelIoLogisticsExpressAccount[]|null $accounts
     */
    public function setAccounts(?array $accounts): self
    {
        $this->initialized['accounts'] = true;
        $this->accounts = $accounts;

        return $this;
    }

    /**
     * Here you can define all the properties related to the content of the prospected shipment.
     */
    public function getContent(): ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContent
    {
        return $this->content;
    }

    /**
     * Here you can define all the properties related to the content of the prospected shipment.
     */
    public function setContent(?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContent $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }

    /**
     * Here you can set invoice properties.
     */
    public function getOutputImageProperties(): ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImageProperties
    {
        return $this->outputImageProperties;
    }

    /**
     * Here you can set invoice properties.
     */
    public function setOutputImageProperties(?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImageProperties $outputImageProperties): self
    {
        $this->initialized['outputImageProperties'] = true;
        $this->outputImageProperties = $outputImageProperties;

        return $this;
    }

    /**
     * Here you need to define all the parties needed to ship the package.
     */
    public function getCustomerDetails(): ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails
    {
        return $this->customerDetails;
    }

    /**
     * Here you need to define all the parties needed to ship the package.
     */
    public function setCustomerDetails(?SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails $customerDetails): self
    {
        $this->initialized['customerDetails'] = true;
        $this->customerDetails = $customerDetails;

        return $this;
    }
}
