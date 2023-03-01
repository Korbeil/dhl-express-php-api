<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItem
{
    /**
     * If a breakdown is provided, details can either be; 'TAX',<BR> 'DISCOUNT'.
     *
     * @var string|null
     */
    protected $priceType;
    /**
     * Discount or tax type codes as provided by DHL Express. Example values:<BR>                              For discount;<BR>                              P: promotional<BR>                              S: special.
     *
     * @var string|null
     */
    protected $typeCode;
    /**
     * The actual amount of the discount/tax.
     *
     * @var float|null
     */
    protected $price;
    /**
     * Percentage of the discount/tax.
     *
     * @var float|null
     */
    protected $rate;
    /**
     * The base amount of the service charge.
     *
     * @var float|null
     */
    protected $basePrice;

    /**
     * If a breakdown is provided, details can either be; 'TAX',<BR> 'DISCOUNT'.
     */
    public function getPriceType(): ?string
    {
        return $this->priceType;
    }

    /**
     * If a breakdown is provided, details can either be; 'TAX',<BR> 'DISCOUNT'.
     */
    public function setPriceType(?string $priceType): self
    {
        $this->priceType = $priceType;

        return $this;
    }

    /**
     * Discount or tax type codes as provided by DHL Express. Example values:<BR>                              For discount;<BR>                              P: promotional<BR>                              S: special.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Discount or tax type codes as provided by DHL Express. Example values:<BR>                              For discount;<BR>                              P: promotional<BR>                              S: special.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * The actual amount of the discount/tax.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * The actual amount of the discount/tax.
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Percentage of the discount/tax.
     */
    public function getRate(): ?float
    {
        return $this->rate;
    }

    /**
     * Percentage of the discount/tax.
     */
    public function setRate(?float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * The base amount of the service charge.
     */
    public function getBasePrice(): ?float
    {
        return $this->basePrice;
    }

    /**
     * The base amount of the service charge.
     */
    public function setBasePrice(?float $basePrice): self
    {
        $this->basePrice = $basePrice;

        return $this;
    }
}
