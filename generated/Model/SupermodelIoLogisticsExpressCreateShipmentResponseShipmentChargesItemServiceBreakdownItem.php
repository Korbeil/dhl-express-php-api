<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem
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
     * @var string|null
     */
    protected $name;
    /**
     * The amount price of DHL product and services.
     *
     * @var float|null
     */
    protected $price;
    /**
     * Special service charge code type for service.
     *
     * @var string|null
     */
    protected $typeCode;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The amount price of DHL product and services.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * The amount price of DHL product and services.
     */
    public function setPrice(?float $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;

        return $this;
    }

    /**
     * Special service charge code type for service.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Special service charge code type for service.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }
}
