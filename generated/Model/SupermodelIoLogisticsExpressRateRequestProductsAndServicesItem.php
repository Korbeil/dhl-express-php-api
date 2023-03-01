<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem
{
    /**
     * Please enter DHL Express Global Product code.
     *
     * @var string|null
     */
    protected $productCode;
    /**
     * Please enter DHL Express Local Product code.
     *
     * @var string|null
     */
    protected $localProductCode;
    /**
     * Please use if you wish to filter the response by value added services.
     *
     * @var SupermodelIoLogisticsExpressValueAddedServicesRates[]|null
     */
    protected $valueAddedServices;

    /**
     * Please enter DHL Express Global Product code.
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    /**
     * Please enter DHL Express Global Product code.
     */
    public function setProductCode(?string $productCode): self
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * Please enter DHL Express Local Product code.
     */
    public function getLocalProductCode(): ?string
    {
        return $this->localProductCode;
    }

    /**
     * Please enter DHL Express Local Product code.
     */
    public function setLocalProductCode(?string $localProductCode): self
    {
        $this->localProductCode = $localProductCode;

        return $this;
    }

    /**
     * Please use if you wish to filter the response by value added services.
     *
     * @return SupermodelIoLogisticsExpressValueAddedServicesRates[]|null
     */
    public function getValueAddedServices(): ?array
    {
        return $this->valueAddedServices;
    }

    /**
     * Please use if you wish to filter the response by value added services.
     *
     * @param SupermodelIoLogisticsExpressValueAddedServicesRates[]|null $valueAddedServices
     */
    public function setValueAddedServices(?array $valueAddedServices): self
    {
        $this->valueAddedServices = $valueAddedServices;

        return $this;
    }
}
