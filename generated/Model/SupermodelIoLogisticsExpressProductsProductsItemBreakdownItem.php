<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem
{
    /**
     * Breakdown Name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Special service or extra charge code.  This is the code you would have to use in the /shipment service if you wish to add an optional Service such as Saturday delivery.
     *
     * @var string|null
     */
    protected $serviceCode;
    /**
     * Local service code.
     *
     * @var string|null
     */
    protected $localServiceCode;
    /**
     * Breakdown type code.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * Special service charge code type for service.
     *
     * @var string|null
     */
    protected $serviceTypeCode;
    /**
     * Customer agreement indicator for product and services, if service is offered with prior customer agreement.
     *
     * @var bool|null
     */
    protected $isCustomerAgreement;
    /**
     * Indicator if the special service is marketed service.
     *
     * @var bool|null
     */
    protected $isMarketedService;
    /**
     * Indicator if there is any discount allowed.
     *
     * @var bool|null
     */
    protected $isBillingServiceIndicator;

    /**
     * Breakdown Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Breakdown Name.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Special service or extra charge code.  This is the code you would have to use in the /shipment service if you wish to add an optional Service such as Saturday delivery.
     */
    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }

    /**
     * Special service or extra charge code.  This is the code you would have to use in the /shipment service if you wish to add an optional Service such as Saturday delivery.
     */
    public function setServiceCode(?string $serviceCode): self
    {
        $this->serviceCode = $serviceCode;

        return $this;
    }

    /**
     * Local service code.
     */
    public function getLocalServiceCode(): ?string
    {
        return $this->localServiceCode;
    }

    /**
     * Local service code.
     */
    public function setLocalServiceCode(?string $localServiceCode): self
    {
        $this->localServiceCode = $localServiceCode;

        return $this;
    }

    /**
     * Breakdown type code.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Breakdown type code.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Special service charge code type for service.
     */
    public function getServiceTypeCode(): ?string
    {
        return $this->serviceTypeCode;
    }

    /**
     * Special service charge code type for service.
     */
    public function setServiceTypeCode(?string $serviceTypeCode): self
    {
        $this->serviceTypeCode = $serviceTypeCode;

        return $this;
    }

    /**
     * Customer agreement indicator for product and services, if service is offered with prior customer agreement.
     */
    public function getIsCustomerAgreement(): ?bool
    {
        return $this->isCustomerAgreement;
    }

    /**
     * Customer agreement indicator for product and services, if service is offered with prior customer agreement.
     */
    public function setIsCustomerAgreement(?bool $isCustomerAgreement): self
    {
        $this->isCustomerAgreement = $isCustomerAgreement;

        return $this;
    }

    /**
     * Indicator if the special service is marketed service.
     */
    public function getIsMarketedService(): ?bool
    {
        return $this->isMarketedService;
    }

    /**
     * Indicator if the special service is marketed service.
     */
    public function setIsMarketedService(?bool $isMarketedService): self
    {
        $this->isMarketedService = $isMarketedService;

        return $this;
    }

    /**
     * Indicator if there is any discount allowed.
     */
    public function getIsBillingServiceIndicator(): ?bool
    {
        return $this->isBillingServiceIndicator;
    }

    /**
     * Indicator if there is any discount allowed.
     */
    public function setIsBillingServiceIndicator(?bool $isBillingServiceIndicator): self
    {
        $this->isBillingServiceIndicator = $isBillingServiceIndicator;

        return $this;
    }
}
