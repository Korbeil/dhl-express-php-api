<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItem
{
    /**
     * Any special instructions user wish to send to the courier for the order pick-up.
     *
     * @var string|null
     */
    protected $value;
    /**
     * for future use.
     *
     * @var string|null
     */
    protected $typeCode;

    /**
     * Any special instructions user wish to send to the courier for the order pick-up.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Any special instructions user wish to send to the courier for the order pick-up.
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * for future use.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * for future use.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }
}
