<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemPriceBreakdownItem
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
     * Discount or tax type codes as provided by DHL.<BR>                              Example values;<BR>                              For discount;<BR>                              P: promotional<BR>                              S: special.
     *
     * @var string|null
     */
    protected $priceType;
    /**
     * If a breakdown is provided, details can either be; - "TAX",<BR>                              - "DISCOUNT".
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
     * Discount or tax type codes as provided by DHL.<BR>                              Example values;<BR>                              For discount;<BR>                              P: promotional<BR>                              S: special.
     */
    public function getPriceType(): ?string
    {
        return $this->priceType;
    }

    /**
     * Discount or tax type codes as provided by DHL.<BR>                              Example values;<BR>                              For discount;<BR>                              P: promotional<BR>                              S: special.
     */
    public function setPriceType(?string $priceType): self
    {
        $this->initialized['priceType'] = true;
        $this->priceType = $priceType;

        return $this;
    }

    /**
     * If a breakdown is provided, details can either be; - "TAX",<BR>                              - "DISCOUNT".
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * If a breakdown is provided, details can either be; - "TAX",<BR>                              - "DISCOUNT".
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
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
        $this->initialized['price'] = true;
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
        $this->initialized['rate'] = true;
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
        $this->initialized['basePrice'] = true;
        $this->basePrice = $basePrice;

        return $this;
    }
}
