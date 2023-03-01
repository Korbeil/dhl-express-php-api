<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressAddressValidateResponseAddressItem
{
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
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    public function setCityName(?string $cityName): self
    {
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
        $this->countyName = $countyName;

        return $this;
    }

    public function getServiceArea(): ?SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea
    {
        return $this->serviceArea;
    }

    public function setServiceArea(?SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea $serviceArea): self
    {
        $this->serviceArea = $serviceArea;

        return $this;
    }
}
