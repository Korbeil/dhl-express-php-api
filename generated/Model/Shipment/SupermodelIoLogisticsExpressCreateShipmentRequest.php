<?php

namespace Korbeil\DHLExpress\Api\Model\Shipment;

class SupermodelIoLogisticsExpressCreateShipmentRequest
{
    /**
     * Identifies the date and time the package is tendered. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00 GMT+01:00).
     */
    public ?string $plannedShippingDateAndTime;
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup $pickup;
    /**
     * Please enter DHL Express Global Product code.
     */
    public ?string $productCode;
    /**
     * Please enter DHL Express Local Product code. Important when shipping domestic products.
     */
    public ?string $localProductCode;
    /**
     * Please advise if you want to get rate estimates for given shipment.
     */
    public ?bool $getRateEstimates = false;
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressAccount>|null
     */
    public ?array $accounts;
    /**
     * This section communicates additional shipping services, such as Insurance (or Shipment Value Protection).
     *
     * @var list<SupermodelIoLogisticsExpressValueAddedServices>|null
     */
    public ?array $valueAddedServices;
    /**
     * Here you can modify label, waybillDoc, invoice and receipt properties.
     */
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties $outputImageProperties;
    /**
     * Here you can declare your customer references.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressReference>|null
     */
    public ?array $customerReferences;
    /**
     * Identifiers section is on the shipment level where you can optionaly provide a DHL Express waybill number. This has to be enabled by your DHL Express IT contact.
     *
     * @var list<SupermodelIoLogisticsExpressIdentifier>|null
     */
    public ?array $identifiers;
    /**
     * Here you need to define all the parties needed to ship the package.
     */
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails $customerDetails;
    /**
     * Here you can define all the properties related to the content of the prospected shipment.
     */
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent $content;
    /**
     * This section is to support multiple base64 encoded string with the image of export documentation for Paperless Trade images. When an invalid base64 encoded string is provided, an error message will be returned.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressDocumentImagesItem>|null
     */
    public ?array $documentImages;
    /**
     * Here you can provide data in case you wish to use DHL Express On demand delivery service.
     */
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery $onDemandDelivery;
    /**
     * Determines whether to request the On Demand Delivery (ODD) link. When set to true it will provide an URL link for the specified Waybill Number, Shipper Account Number. The default value is false, no ODD link URL is provided in the response message.
     */
    public ?bool $requestOndemandDeliveryURL;
    /**
     * This is to support sending email notification once the shipment is created. The email will contain the basic information on the shipper, recipient, waybill number, and shipment information.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem>|null
     */
    public ?array $shipmentNotification;
    /**
     * Please provide any charges you have already paid for this shipment, like freight paid upfront. To allow using this section please contact your DHL Express representative.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItem>|null
     */
    public ?array $prepaidCharges;
    /**
     * If set to true, response will return transliterated text of shipper and receiver details.
     */
    public ?bool $getTransliteratedResponse;
    /**
     * Estimated delivery date option for QDDF or QDDC.
     */
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDate $estimatedDeliveryDate;
    /**
     * Provides additional information in the response like service area details, routing code and pickup-related information.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItem>|null
     */
    public ?array $getAdditionalInformation;
    /**
     * Please provide the parent (mother) shipment details.
     */
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment $parentShipment;
}
