<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressAddressValidateResponseAddressItem
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
     * @var string|null
     */
    protected $countryCode;
    /**
     * @var string|null
     */
    protected $postalCode;
    /**
     * @var string|null
     */
    protected $cityName;
    /**
     * Please enter your suburb or county name.
     *
     * @var string|null
     */
    protected $countyName;
    /**
     * @var SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea|null
     */
    protected $serviceArea;

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    public function setCityName(?string $cityName): self
    {
        $this->initialized['cityName'] = true;
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * Please enter your suburb or county name.
     */
    public function getCountyName(): ?string
    {
        return $this->countyName;
    }

    /**
     * Please enter your suburb or county name.
     */
    public function setCountyName(?string $countyName): self
    {
        $this->initialized['countyName'] = true;
        $this->countyName = $countyName;

        return $this;
    }

    public function getServiceArea(): ?SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea
    {
        return $this->serviceArea;
    }

    public function setServiceArea(?SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea $serviceArea): self
    {
        $this->initialized['serviceArea'] = true;
        $this->serviceArea = $serviceArea;

        return $this;
    }
}
