<?php

namespace Korbeil\DHLExpress\Api\Model\Invoice;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequest
{
    /**
     * The planned shipment date for the provided shipmentTrackingNumber.  The date must be in the format: YYYY-MM-DD.
     */
    public ?string $plannedShipDate;
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     * Note: accounts/0/number with typeCode 'shipper' is mandatory if using POST method and no shipmentTrackingNumber is provided in request.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressAccount>|null
     */
    public ?array $accounts;
    /**
     * Here you can define all the properties related to the content of the prospected shipment.
     */
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent $content;
    /**
     * Here you can set invoice properties.
     */
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties $outputImageProperties;
    /**
     * Here you need to define all the parties needed to ship the package.
     */
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails $customerDetails;
}
