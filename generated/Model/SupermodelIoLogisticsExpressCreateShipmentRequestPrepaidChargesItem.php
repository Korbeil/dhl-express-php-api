<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItem
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
     * Please enter type of prepaid charge. At this moment only freight is supported.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * Please enter currency for the value you have entered into value field.
     *
     * @var string|null
     */
    protected $currency;
    /**
     * Please enter nominal value related to the charge.
     *
     * @var float|null
     */
    protected $value;
    /**
     * Please enter method you have used to pay the charges. At this moment only cash is supported.
     *
     * @var string|null
     */
    protected $method;

    /**
     * Please enter type of prepaid charge. At this moment only freight is supported.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please enter type of prepaid charge. At this moment only freight is supported.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Please enter currency for the value you have entered into value field.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Please enter currency for the value you have entered into value field.
     */
    public function setCurrency(?string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }

    /**
     * Please enter nominal value related to the charge.
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * Please enter nominal value related to the charge.
     */
    public function setValue(?float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * Please enter method you have used to pay the charges. At this moment only cash is supported.
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * Please enter method you have used to pay the charges. At this moment only cash is supported.
     */
    public function setMethod(?string $method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;

        return $this;
    }
}
