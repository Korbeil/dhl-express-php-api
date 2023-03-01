<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem
{
    /**
     * Please contact Express country representative to provide all applicable codes.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * Value related to the code.
     *
     * @var string|null
     */
    protected $value;

    /**
     * Please contact Express country representative to provide all applicable codes.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please contact Express country representative to provide all applicable codes.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Value related to the code.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Value related to the code.
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
