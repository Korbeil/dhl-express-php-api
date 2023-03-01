<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem
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
     * Please provide the monetary amount type.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * Please provide the monetary value.
     *
     * @var float|null
     */
    protected $value;
    /**
     * Pleaseprovide monetary amount currency code.
     *
     * @var string|null
     */
    protected $currency;

    /**
     * Please provide the monetary amount type.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please provide the monetary amount type.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Please provide the monetary value.
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * Please provide the monetary value.
     */
    public function setValue(?float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * Pleaseprovide monetary amount currency code.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Pleaseprovide monetary amount currency code.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }
}
