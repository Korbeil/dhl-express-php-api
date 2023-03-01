<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressProducts
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
        $this->initialized['products'] = true;
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
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;

        return $this;
    }
}
