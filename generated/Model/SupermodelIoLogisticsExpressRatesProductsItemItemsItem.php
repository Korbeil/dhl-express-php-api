<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemItemsItem
{
    /**
     * Item line number.
     *
     * @var float|null
     */
    protected $number;
    /**
     * @var SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItem[]|null
     */
    protected $breakdown;

    /**
     * Item line number.
     */
    public function getNumber(): ?float
    {
        return $this->number;
    }

    /**
     * Item line number.
     */
    public function setNumber(?float $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItem[]|null
     */
    public function getBreakdown(): ?array
    {
        return $this->breakdown;
    }

    /**
     * @param SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItem[]|null $breakdown
     */
    public function setBreakdown(?array $breakdown): self
    {
        $this->breakdown = $breakdown;

        return $this;
    }
}
