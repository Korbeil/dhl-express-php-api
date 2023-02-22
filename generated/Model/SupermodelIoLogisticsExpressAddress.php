<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressAddress
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
     * Please enter your postcode or leave empty if the address doesn't have a postcode.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * Please enter the city.
     *
     * @var string|null
     */
    protected $cityName;
    /**
     * Please enter ISO country code.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * Please enter your province or state code.
     *
     * @var string|null
     */
    protected $provinceCode;
    /**
     * Please enter address line 1.
     *
     * @var string|null
     */
    protected $addressLine1;
    /**
     * Please enter address line 2.
     *
     * @var string|null
     */
    protected $addressLine2;
    /**
     * Please enter address line 3.
     *
     * @var string|null
     */
    protected $addressLine3;
    /**
     * Please enter your suburb or county name.
     *
     * @var string|null
     */
    protected $countyName;

    /**
     * Please enter your postcode or leave empty if the address doesn't have a postcode.
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * Please enter your postcode or leave empty if the address doesn't have a postcode.
     */
    public function setPostalCode(?string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Please enter the city.
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    /**
     * Please enter the city.
     */
    public function setCityName(?string $cityName): self
    {
        $this->initialized['cityName'] = true;
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * Please enter ISO country code.
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Please enter ISO country code.
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Please enter your province or state code.
     */
    public function getProvinceCode(): ?string
    {
        return $this->provinceCode;
    }

    /**
     * Please enter your province or state code.
     */
    public function setProvinceCode(?string $provinceCode): self
    {
        $this->initialized['provinceCode'] = true;
        $this->provinceCode = $provinceCode;

        return $this;
    }

    /**
     * Please enter address line 1.
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * Please enter address line 1.
     */
    public function setAddressLine1(?string $addressLine1): self
    {
        $this->initialized['addressLine1'] = true;
        $this->addressLine1 = $addressLine1;

        return $this;
    }

    /**
     * Please enter address line 2.
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * Please enter address line 2.
     */
    public function setAddressLine2(?string $addressLine2): self
    {
        $this->initialized['addressLine2'] = true;
        $this->addressLine2 = $addressLine2;

        return $this;
    }

    /**
     * Please enter address line 3.
     */
    public function getAddressLine3(): ?string
    {
        return $this->addressLine3;
    }

    /**
     * Please enter address line 3.
     */
    public function setAddressLine3(?string $addressLine3): self
    {
        $this->initialized['addressLine3'] = true;
        $this->addressLine3 = $addressLine3;

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
}
