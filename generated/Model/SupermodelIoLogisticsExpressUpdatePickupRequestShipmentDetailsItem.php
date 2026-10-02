<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem
{
    /**
     * Please provide DHL Express Global product code of the shipment.
     */
    public ?string $productCode;
    /**
     * Please provide DHL Express Local product code of the shipment.
     */
    public ?string $localProductCode;
    /**
     * @var list<Common\SupermodelIoLogisticsExpressAccount>|null
     */
    public ?array $accounts;
    /**
     * @var list<Common\SupermodelIoLogisticsExpressValueAddedServicesRates>|null
     */
    public ?array $valueAddedServices;
    /**
     * For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false).
     */
    public ?bool $isCustomsDeclarable;
    /**
     * For customs purposes please advise on declared value of the shipment.
     */
    public ?float $declaredValue;
    /**
     * For customs purposes please advise on declared value currency code of the shipment.
     */
    public ?string $declaredValueCurrency;
    /**
     * Please enter Unit of measurement - metric,imperial.
     */
    public ?string $unitOfMeasurement;
    /**
     * Please provide Shipment Identification number (AWB number).
     */
    public ?string $shipmentTrackingNumber;
    /**
     * @var list<Common\SupermodelIoLogisticsExpressPackageRR>|null
     */
    public ?array $packages;
}
