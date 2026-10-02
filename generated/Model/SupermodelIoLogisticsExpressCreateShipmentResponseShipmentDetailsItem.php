<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem
{
    /**
     * This array contains all the DHL Express special handling feature codes.
     *
     * @var list<string>|null
     */
    public ?array $serviceHandlingFeatureCodes;
    /**
     * Here you can find calculated volumetric weight based on dimensions provided in the request.
     */
    public ?float $volumetricWeight;
    /**
     * Here you can find billing code which was applied on your shipment.
     */
    public ?string $billingCode;
    /**
     * Here you can find the DHL Express shipment content code of your shipment.
     */
    public ?string $serviceContentCode;
    /**
     * Here you need to define all the parties needed to ship the package.
     */
    public ?SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails $customerDetails;
    public ?SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea $originServiceArea;
    public ?SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea $destinationServiceArea;
    /**
     * Here you can find DHL Routing Code which was applied on your shipment.
     */
    public ?string $dhlRoutingCode;
    /**
     * Here you can find DHL Routing Data ID which was applied on your shipment.
     */
    public ?string $dhlRoutingDataId;
    /**
     * Here you can find Delivery Date Code which was applied on your shipment.
     */
    public ?string $deliveryDateCode;
    /**
     * Here you can find Delivery Time Code which was applied on your shipment.
     */
    public ?string $deliveryTimeCode;
    /**
     * Here you can find the product short name of your shipment.
     */
    public ?string $productShortName;
    /**
     * @var list<SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItem>|null
     */
    public ?array $valueAddedServices;
    /**
     * Here you can find pickup details.
     */
    public ?SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails $pickupDetails;
}
