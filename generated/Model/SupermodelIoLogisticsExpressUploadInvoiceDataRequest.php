<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequest
{
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
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent|null
     */
    protected $content;
    /**
     * Here you can set invoice properties.
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties|null
     */
    protected $outputImageProperties;
    /**
     * Here you need to define all the parties needed to ship the package.
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails|null
     */
    protected $customerDetails;

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
        $this->accounts = $accounts;

        return $this;
    }

    /**
     * Here you can define all the properties related to the content of the prospected shipment.
     */
    public function getContent(): ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent
    {
        return $this->content;
    }

    /**
     * Here you can define all the properties related to the content of the prospected shipment.
     */
    public function setContent(?SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Here you can set invoice properties.
     */
    public function getOutputImageProperties(): ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties
    {
        return $this->outputImageProperties;
    }

    /**
     * Here you can set invoice properties.
     */
    public function setOutputImageProperties(?SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties $outputImageProperties): self
    {
        $this->outputImageProperties = $outputImageProperties;

        return $this;
    }

    /**
     * Here you need to define all the parties needed to ship the package.
     */
    public function getCustomerDetails(): ?SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails
    {
        return $this->customerDetails;
    }

    /**
     * Here you need to define all the parties needed to ship the package.
     */
    public function setCustomerDetails(?SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails $customerDetails): self
    {
        $this->customerDetails = $customerDetails;

        return $this;
    }
}
