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
     * @var list<SupermodelIoLogisticsExpressProductsProductsItem>|null
     */
    protected $products;
    /**
     * @var list<string>|null
     */
    protected $warnings;

    /**
     * @return list<SupermodelIoLogisticsExpressProductsProductsItem>|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param list<SupermodelIoLogisticsExpressProductsProductsItem>|null $products
     */
    public function setProducts(?array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * @param list<string>|null $warnings
     */
    public function setWarnings(?array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;

        return $this;
    }
}
