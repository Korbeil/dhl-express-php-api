<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem
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
        $this->initialized['typeCode'] = true;
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
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }
}
