<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem
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
     * Please enter all the DHL Express accounts related to this shipment.
     *
     * @var list<Common\SupermodelIoLogisticsExpressAccount>|null
     */
    public ?array $accounts;
    /**
     * This section communicates additional shipping services, such as Insurance (or Shipment Value Protection).
     *
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
     * Here you can define properties per package.
     *
     * @var list<Common\SupermodelIoLogisticsExpressPackageRR>|null
     */
    public ?array $packages;
}
