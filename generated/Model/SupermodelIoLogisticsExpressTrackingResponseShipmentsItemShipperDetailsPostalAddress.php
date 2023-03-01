<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddress
{
    /**
     * @var string|null
     */
    protected $cityName;
    /**
     * @var string|null
     */
    protected $countyName;
    /**
     * @var string|null
     */
    protected $postalCode;
    /**
     * The region in which the locality is, and which is in the country.
     *
     * @var string|null
     */
    protected $provinceCode;
    /**
     * @var string|null
     */
    protected $countryCode;

    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    public function setCityName(?string $cityName): self
    {
        $this->cityName = $cityName;

        return $this;
    }

    public function getCountyName(): ?string
    {
        return $this->countyName;
    }

    public function setCountyName(?string $countyName): self
    {
        $this->countyName = $countyName;

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

    /**
     * The region in which the locality is, and which is in the country.
     */
    public function getProvinceCode(): ?string
    {
        return $this->provinceCode;
    }

    /**
     * The region in which the locality is, and which is in the country.
     */
    public function setProvinceCode(?string $provinceCode): self
    {
        $this->provinceCode = $provinceCode;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }
}
