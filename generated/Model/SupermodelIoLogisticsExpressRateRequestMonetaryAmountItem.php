<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem
{
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
        $this->currency = $currency;

        return $this;
    }
}
