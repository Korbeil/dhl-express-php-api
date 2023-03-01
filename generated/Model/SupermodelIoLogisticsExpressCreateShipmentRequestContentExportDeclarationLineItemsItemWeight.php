<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemWeight
{
    /**
     * Please enter the net weight value.
     *
     * @var float|null
     */
    protected $netValue;
    /**
     * Please enter the gross weight value.
     *
     * @var float|null
     */
    protected $grossValue;

    /**
     * Please enter the net weight value.
     */
    public function getNetValue(): ?float
    {
        return $this->netValue;
    }

    /**
     * Please enter the net weight value.
     */
    public function setNetValue(?float $netValue): self
    {
        $this->netValue = $netValue;

        return $this;
    }

    /**
     * Please enter the gross weight value.
     */
    public function getGrossValue(): ?float
    {
        return $this->grossValue;
    }

    /**
     * Please enter the gross weight value.
     */
    public function setGrossValue(?float $grossValue): self
    {
        $this->grossValue = $grossValue;

        return $this;
    }
}
