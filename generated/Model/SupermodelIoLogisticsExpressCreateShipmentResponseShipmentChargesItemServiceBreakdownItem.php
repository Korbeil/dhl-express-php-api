<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem
{
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
        $this->typeCode = $typeCode;

        return $this;
    }
}
