<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressAddressCreateShipmentResponse
{
    /**
     * Postal code.
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * City name.
     *
     * @var string|null
     */
    protected $cityName;
    /**
     * Country code.
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * Province or state code.
     *
     * @var string|null
     */
    protected $provinceCode;
    /**
     * Address line 1.
     *
     * @var string|null
     */
    protected $addressLine1;
    /**
     * Address line 2.
     *
     * @var string|null
     */
    protected $addressLine2;
    /**
     * Address line 3.
     *
     * @var string|null
     */
    protected $addressLine3;
    /**
     * Suburb or county name.
     *
     * @var string|null
     */
    protected $cityDistrictName;
    /**
     * Please enter your state or province name.
     *
     * @var string|null
     */
    protected $provinceName;
    /**
     * Please enter your country name.
     *
     * @var string|null
     */
    protected $countryName;

    /**
     * Postal code.
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * Postal code.
     */
    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * City name.
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    /**
     * City name.
     */
    public function setCityName(?string $cityName): self
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * Country code.
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Country code.
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Province or state code.
     */
    public function getProvinceCode(): ?string
    {
        return $this->provinceCode;
    }

    /**
     * Province or state code.
     */
    public function setProvinceCode(?string $provinceCode): self
    {
        $this->provinceCode = $provinceCode;

        return $this;
    }

    /**
     * Address line 1.
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * Address line 1.
     */
    public function setAddressLine1(?string $addressLine1): self
    {
        $this->addressLine1 = $addressLine1;

        return $this;
    }

    /**
     * Address line 2.
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * Address line 2.
     */
    public function setAddressLine2(?string $addressLine2): self
    {
        $this->addressLine2 = $addressLine2;

        return $this;
    }

    /**
     * Address line 3.
     */
    public function getAddressLine3(): ?string
    {
        return $this->addressLine3;
    }

    /**
     * Address line 3.
     */
    public function setAddressLine3(?string $addressLine3): self
    {
        $this->addressLine3 = $addressLine3;

        return $this;
    }

    /**
     * Suburb or county name.
     */
    public function getCityDistrictName(): ?string
    {
        return $this->cityDistrictName;
    }

    /**
     * Suburb or county name.
     */
    public function setCityDistrictName(?string $cityDistrictName): self
    {
        $this->cityDistrictName = $cityDistrictName;

        return $this;
    }

    /**
     * Please enter your state or province name.
     */
    public function getProvinceName(): ?string
    {
        return $this->provinceName;
    }

    /**
     * Please enter your state or province name.
     */
    public function setProvinceName(?string $provinceName): self
    {
        $this->provinceName = $provinceName;

        return $this;
    }

    /**
     * Please enter your country name.
     */
    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

    /**
     * Please enter your country name.
     */
    public function setCountryName(?string $countryName): self
    {
        $this->countryName = $countryName;

        return $this;
    }
}
