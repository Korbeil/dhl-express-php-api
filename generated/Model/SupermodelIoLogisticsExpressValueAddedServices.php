<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressValueAddedServices
{
    /**
     * Please enter DHL Express value added service code. For detailed list of all available service codes for your prospect shipment please invoke GET /products or GET /rates.
     *
     * @var string|null
     */
    protected $serviceCode;
    /**
     * Please enter monetary value of service (e.g. Insured Value).
     *
     * @var float|null
     */
    protected $value;
    /**
     * Please enter currency code (e.g. Insured Value currency code).
     *
     * @var string|null
     */
    protected $currency;
    /**
     * Payment method code (e.g. Cash).
     *
     * @var string|null
     */
    protected $method;
    /**
     * The DangerousGoods section indicates if there is dangerous good content within the shipment.
     *
     * @var SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem[]|null
     */
    protected $dangerousGoods;

    /**
     * Please enter DHL Express value added service code. For detailed list of all available service codes for your prospect shipment please invoke GET /products or GET /rates.
     */
    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }

    /**
     * Please enter DHL Express value added service code. For detailed list of all available service codes for your prospect shipment please invoke GET /products or GET /rates.
     */
    public function setServiceCode(?string $serviceCode): self
    {
        $this->serviceCode = $serviceCode;

        return $this;
    }

    /**
     * Please enter monetary value of service (e.g. Insured Value).
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * Please enter monetary value of service (e.g. Insured Value).
     */
    public function setValue(?float $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Please enter currency code (e.g. Insured Value currency code).
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Please enter currency code (e.g. Insured Value currency code).
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Payment method code (e.g. Cash).
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * Payment method code (e.g. Cash).
     */
    public function setMethod(?string $method): self
    {
        $this->method = $method;

        return $this;
    }

    /**
     * The DangerousGoods section indicates if there is dangerous good content within the shipment.
     *
     * @return SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem[]|null
     */
    public function getDangerousGoods(): ?array
    {
        return $this->dangerousGoods;
    }

    /**
     * The DangerousGoods section indicates if there is dangerous good content within the shipment.
     *
     * @param SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem[]|null $dangerousGoods
     */
    public function setDangerousGoods(?array $dangerousGoods): self
    {
        $this->dangerousGoods = $dangerousGoods;

        return $this;
    }
}
