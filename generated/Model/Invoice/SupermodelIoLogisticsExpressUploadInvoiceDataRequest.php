<?php

namespace Korbeil\DHLExpress\Api\Model\Invoice;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequest
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
     * The planned shipment date for the provided shipmentTrackingNumber.  The date must be in the format: YYYY-MM-DD.
     *
     * @var string|null
     */
    protected $plannedShipDate;
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     * Note: accounts/0/number with typeCode 'shipper' is mandatory if using POST method and no shipmentTrackingNumber is provided in request.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressAccount>|null
     */
    protected $accounts;
    /**
     * Here you can define all the properties related to the content of the prospected shipment.
     *
     * @var \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent|null
     */
    protected $content;
    /**
     * Here you can set invoice properties.
     *
     * @var \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties|null
     */
    protected $outputImageProperties;
    /**
     * Here you need to define all the parties needed to ship the package.
     *
     * @var \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails|null
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
        $this->initialized['plannedShipDate'] = true;
        $this->plannedShipDate = $plannedShipDate;

        return $this;
    }

    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     * Note: accounts/0/number with typeCode 'shipper' is mandatory if using POST method and no shipmentTrackingNumber is provided in request.
     *
     * @return list<\Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressAccount>|null
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }

    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     * Note: accounts/0/number with typeCode 'shipper' is mandatory if using POST method and no shipmentTrackingNumber is provided in request.
     *
     * @param list<\Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressAccount>|null $accounts
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
    public function getContent(): ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent
    {
        return $this->content;
    }

    /**
     * Here you can define all the properties related to the content of the prospected shipment.
     */
    public function setContent(?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }

    /**
     * Here you can set invoice properties.
     */
    public function getOutputImageProperties(): ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties
    {
        return $this->outputImageProperties;
    }

    /**
     * Here you can set invoice properties.
     */
    public function setOutputImageProperties(?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties $outputImageProperties): self
    {
        $this->initialized['outputImageProperties'] = true;
        $this->outputImageProperties = $outputImageProperties;

        return $this;
    }

    /**
     * Here you need to define all the parties needed to ship the package.
     */
    public function getCustomerDetails(): ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails
    {
        return $this->customerDetails;
    }

    /**
     * Here you need to define all the parties needed to ship the package.
     */
    public function setCustomerDetails(?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails $customerDetails): self
    {
        $this->initialized['customerDetails'] = true;
        $this->customerDetails = $customerDetails;

        return $this;
    }
}
