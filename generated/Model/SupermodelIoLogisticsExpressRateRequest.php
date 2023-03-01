<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressRateRequest
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
     * @var SupermodelIoLogisticsExpressRateRequestCustomerDetails|null
     */
    protected $customerDetails;
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     *
     * @var SupermodelIoLogisticsExpressAccount[]|null
     */
    protected $accounts;
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
     * Please use if you wish to filter the response by product(s) and/or value added services.
     *
     * @var SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem[]|null
     */
    protected $productsAndServices;
    /**
     * payerCountryCode is to be provided if your profile has been enabled to view rates without an account number (this will provide DHL Express published rates for the payer country).
     *
     * @var string|null
     */
    protected $payerCountryCode;
    /**
     * Identifies the date and time the package is tendered. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00 GMT+01:00).
     *
     * @var string|null
     */
    protected $plannedShippingDateAndTime;
    /**
     * Please enter Unit of measurement - metric,imperial.
     *
     * @var string|null
     */
    protected $unitOfMeasurement;
    /**
     * For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false).
     *
     * @var bool|null
     */
    protected $isCustomsDeclarable;
    /**
     * Please provide monetary amount related to your shipment, for example shipment declared value.
     *
     * @var SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem[]|null
     */
    protected $monetaryAmount;
    /**
     * Legacy field and replaced by newer field getAdditionalInformation. Please set this to true to receive all value added services for each product available.
     *
     * @var bool|null
     */
    protected $requestAllValueAddedServices;
    /**
     * Estimated delivery date option for QDDF or QDDC.
     *
     * @var SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate|null
     */
    protected $estimatedDeliveryDate;
    /**
     * Provides additional information in the response like all value added services, and rule groups.
     *
     * @var SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem[]|null
     */
    protected $getAdditionalInformation;
    /**
     * Please set this to true to filter out all products which needs DHL Express special customer agreement.
     *
     * @var bool|null
     */
    protected $returnStandardProductsOnly;
    /**
     * Please set this to true in case you want to receive products which are not available on planned shipping date but next available day.
     *
     * @var bool|null
     */
    protected $nextBusinessDay = false;
    /**
     * Please select which type of priducts you are interested in.
     *
     * @var string|null
     */
    protected $productTypeCode;
    /**
     * Here you can define properties per package.
     *
     * @var SupermodelIoLogisticsExpressPackageRR[]|null
     */
    protected $packages;

    public function getCustomerDetails(): ?SupermodelIoLogisticsExpressRateRequestCustomerDetails
    {
        return $this->customerDetails;
    }

    public function setCustomerDetails(?SupermodelIoLogisticsExpressRateRequestCustomerDetails $customerDetails): self
    {
        $this->initialized['customerDetails'] = true;
        $this->customerDetails = $customerDetails;

        return $this;
    }

    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     *
     * @return SupermodelIoLogisticsExpressAccount[]|null
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }

    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     *
     * @param SupermodelIoLogisticsExpressAccount[]|null $accounts
     */
    public function setAccounts(?array $accounts): self
    {
        $this->initialized['accounts'] = true;
        $this->accounts = $accounts;

        return $this;
    }

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
        $this->initialized['productCode'] = true;
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
        $this->initialized['localProductCode'] = true;
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
        $this->initialized['valueAddedServices'] = true;
        $this->valueAddedServices = $valueAddedServices;

        return $this;
    }

    /**
     * Please use if you wish to filter the response by product(s) and/or value added services.
     *
     * @return SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem[]|null
     */
    public function getProductsAndServices(): ?array
    {
        return $this->productsAndServices;
    }

    /**
     * Please use if you wish to filter the response by product(s) and/or value added services.
     *
     * @param SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem[]|null $productsAndServices
     */
    public function setProductsAndServices(?array $productsAndServices): self
    {
        $this->initialized['productsAndServices'] = true;
        $this->productsAndServices = $productsAndServices;

        return $this;
    }

    /**
     * payerCountryCode is to be provided if your profile has been enabled to view rates without an account number (this will provide DHL Express published rates for the payer country).
     */
    public function getPayerCountryCode(): ?string
    {
        return $this->payerCountryCode;
    }

    /**
     * payerCountryCode is to be provided if your profile has been enabled to view rates without an account number (this will provide DHL Express published rates for the payer country).
     */
    public function setPayerCountryCode(?string $payerCountryCode): self
    {
        $this->initialized['payerCountryCode'] = true;
        $this->payerCountryCode = $payerCountryCode;

        return $this;
    }

    /**
     * Identifies the date and time the package is tendered. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00 GMT+01:00).
     */
    public function getPlannedShippingDateAndTime(): ?string
    {
        return $this->plannedShippingDateAndTime;
    }

    /**
     * Identifies the date and time the package is tendered. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00 GMT+01:00).
     */
    public function setPlannedShippingDateAndTime(?string $plannedShippingDateAndTime): self
    {
        $this->initialized['plannedShippingDateAndTime'] = true;
        $this->plannedShippingDateAndTime = $plannedShippingDateAndTime;

        return $this;
    }

    /**
     * Please enter Unit of measurement - metric,imperial.
     */
    public function getUnitOfMeasurement(): ?string
    {
        return $this->unitOfMeasurement;
    }

    /**
     * Please enter Unit of measurement - metric,imperial.
     */
    public function setUnitOfMeasurement(?string $unitOfMeasurement): self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;

        return $this;
    }

    /**
     * For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false).
     */
    public function getIsCustomsDeclarable(): ?bool
    {
        return $this->isCustomsDeclarable;
    }

    /**
     * For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false).
     */
    public function setIsCustomsDeclarable(?bool $isCustomsDeclarable): self
    {
        $this->initialized['isCustomsDeclarable'] = true;
        $this->isCustomsDeclarable = $isCustomsDeclarable;

        return $this;
    }

    /**
     * Please provide monetary amount related to your shipment, for example shipment declared value.
     *
     * @return SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem[]|null
     */
    public function getMonetaryAmount(): ?array
    {
        return $this->monetaryAmount;
    }

    /**
     * Please provide monetary amount related to your shipment, for example shipment declared value.
     *
     * @param SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem[]|null $monetaryAmount
     */
    public function setMonetaryAmount(?array $monetaryAmount): self
    {
        $this->initialized['monetaryAmount'] = true;
        $this->monetaryAmount = $monetaryAmount;

        return $this;
    }

    /**
     * Legacy field and replaced by newer field getAdditionalInformation. Please set this to true to receive all value added services for each product available.
     */
    public function getRequestAllValueAddedServices(): ?bool
    {
        return $this->requestAllValueAddedServices;
    }

    /**
     * Legacy field and replaced by newer field getAdditionalInformation. Please set this to true to receive all value added services for each product available.
     */
    public function setRequestAllValueAddedServices(?bool $requestAllValueAddedServices): self
    {
        $this->initialized['requestAllValueAddedServices'] = true;
        $this->requestAllValueAddedServices = $requestAllValueAddedServices;

        return $this;
    }

    /**
     * Estimated delivery date option for QDDF or QDDC.
     */
    public function getEstimatedDeliveryDate(): ?SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate
    {
        return $this->estimatedDeliveryDate;
    }

    /**
     * Estimated delivery date option for QDDF or QDDC.
     */
    public function setEstimatedDeliveryDate(?SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate $estimatedDeliveryDate): self
    {
        $this->initialized['estimatedDeliveryDate'] = true;
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;

        return $this;
    }

    /**
     * Provides additional information in the response like all value added services, and rule groups.
     *
     * @return SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem[]|null
     */
    public function getGetAdditionalInformation(): ?array
    {
        return $this->getAdditionalInformation;
    }

    /**
     * Provides additional information in the response like all value added services, and rule groups.
     *
     * @param SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem[]|null $getAdditionalInformation
     */
    public function setGetAdditionalInformation(?array $getAdditionalInformation): self
    {
        $this->initialized['getAdditionalInformation'] = true;
        $this->getAdditionalInformation = $getAdditionalInformation;

        return $this;
    }

    /**
     * Please set this to true to filter out all products which needs DHL Express special customer agreement.
     */
    public function getReturnStandardProductsOnly(): ?bool
    {
        return $this->returnStandardProductsOnly;
    }

    /**
     * Please set this to true to filter out all products which needs DHL Express special customer agreement.
     */
    public function setReturnStandardProductsOnly(?bool $returnStandardProductsOnly): self
    {
        $this->initialized['returnStandardProductsOnly'] = true;
        $this->returnStandardProductsOnly = $returnStandardProductsOnly;

        return $this;
    }

    /**
     * Please set this to true in case you want to receive products which are not available on planned shipping date but next available day.
     */
    public function getNextBusinessDay(): ?bool
    {
        return $this->nextBusinessDay;
    }

    /**
     * Please set this to true in case you want to receive products which are not available on planned shipping date but next available day.
     */
    public function setNextBusinessDay(?bool $nextBusinessDay): self
    {
        $this->initialized['nextBusinessDay'] = true;
        $this->nextBusinessDay = $nextBusinessDay;

        return $this;
    }

    /**
     * Please select which type of priducts you are interested in.
     */
    public function getProductTypeCode(): ?string
    {
        return $this->productTypeCode;
    }

    /**
     * Please select which type of priducts you are interested in.
     */
    public function setProductTypeCode(?string $productTypeCode): self
    {
        $this->initialized['productTypeCode'] = true;
        $this->productTypeCode = $productTypeCode;

        return $this;
    }

    /**
     * Here you can define properties per package.
     *
     * @return SupermodelIoLogisticsExpressPackageRR[]|null
     */
    public function getPackages(): ?array
    {
        return $this->packages;
    }

    /**
     * Here you can define properties per package.
     *
     * @param SupermodelIoLogisticsExpressPackageRR[]|null $packages
     */
    public function setPackages(?array $packages): self
    {
        $this->initialized['packages'] = true;
        $this->packages = $packages;

        return $this;
    }
}
