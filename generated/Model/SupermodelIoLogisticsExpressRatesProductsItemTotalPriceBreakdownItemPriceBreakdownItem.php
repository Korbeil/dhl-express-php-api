<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemPriceBreakdownItem
{
    /**
     * Expected values in Breakdown/Type are below:<BR>                        STTXA:  Total tax for the shipment<BR>                        STDIS: Total discount for the shipment<BR>                        SPRQT: Net shipment / weight charge.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * The amount price of DHL product and services.
     *
     * @var float|null
     */
    protected $price;

    /**
     * Expected values in Breakdown/Type are below:<BR>                        STTXA:  Total tax for the shipment<BR>                        STDIS: Total discount for the shipment<BR>                        SPRQT: Net shipment / weight charge.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Expected values in Breakdown/Type are below:<BR>                        STTXA:  Total tax for the shipment<BR>                        STDIS: Total discount for the shipment<BR>                        SPRQT: Net shipment / weight charge.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

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
}
