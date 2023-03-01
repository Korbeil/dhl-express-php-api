<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressProducts
{
    /**
     * @var SupermodelIoLogisticsExpressProductsProductsItem[]|null
     */
    protected $products;
    /**
     * @var string[]|null
     */
    protected $warnings;

    /**
     * @return SupermodelIoLogisticsExpressProductsProductsItem[]|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param SupermodelIoLogisticsExpressProductsProductsItem[]|null $products
     */
    public function setProducts(?array $products): self
    {
        $this->products = $products;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * @param string[]|null $warnings
     */
    public function setWarnings(?array $warnings): self
    {
        $this->warnings = $warnings;

        return $this;
    }
}
