<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem
{
    /**
     * Item additional quantity value UOM:<BR> example PFL=percent of alcohol.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * An Item's additional quantity value:<BR> example is percent of alcohol.
     *
     * @var float|null
     */
    protected $amount;

    /**
     * Item additional quantity value UOM:<BR> example PFL=percent of alcohol.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Item additional quantity value UOM:<BR> example PFL=percent of alcohol.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * An Item's additional quantity value:<BR> example is percent of alcohol.
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * An Item's additional quantity value:<BR> example is percent of alcohol.
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }
}
