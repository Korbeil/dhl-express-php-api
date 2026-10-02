<?php

namespace Korbeil\DHLExpress\Api\Model\Shipment;

class SupermodelIoLogisticsExpressValueAddedServices
{
    /**
     * Please enter DHL Express value added service code. For detailed list of all available service codes for your prospect shipment please invoke GET /products or GET /rates.
     */
    public ?string $serviceCode;
    /**
     * Please enter monetary value of service (e.g. Insured Value).
     */
    public ?float $value;
    /**
     * Please enter currency code (e.g. Insured Value currency code).
     */
    public ?string $currency;
    /**
     * Payment method code (e.g. Cash).
     */
    public ?string $method;
    /**
     * The DangerousGoods section indicates if there is dangerous good content within the shipment.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem>|null
     */
    public ?array $dangerousGoods;
}
