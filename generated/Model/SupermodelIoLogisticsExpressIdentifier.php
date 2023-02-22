<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressIdentifier
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
     * Please provide type of the identifier you want to set value for.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * Please enter value of your identifier (WB number, PieceID).
     *
     * @var string|null
     */
    protected $value;
    /**
     * Please enter value of Piece Data Identifier. Note: Piece identification data should be same for all the pieces provided in single shipment.
     *
     * @var string|null
     */
    protected $dataIdentifier;

    /**
     * Please provide type of the identifier you want to set value for.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please provide type of the identifier you want to set value for.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Please enter value of your identifier (WB number, PieceID).
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Please enter value of your identifier (WB number, PieceID).
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * Please enter value of Piece Data Identifier. Note: Piece identification data should be same for all the pieces provided in single shipment.
     */
    public function getDataIdentifier(): ?string
    {
        return $this->dataIdentifier;
    }

    /**
     * Please enter value of Piece Data Identifier. Note: Piece identification data should be same for all the pieces provided in single shipment.
     */
    public function setDataIdentifier(?string $dataIdentifier): self
    {
        $this->initialized['dataIdentifier'] = true;
        $this->dataIdentifier = $dataIdentifier;

        return $this;
    }
}
