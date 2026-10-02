<?php

namespace Korbeil\DHLExpress\Api\Model\Rating;

class SupermodelIoLogisticsExpressRateRequest
{
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestCustomerDetails $customerDetails;
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressAccount>|null
     */
    public ?array $accounts;
    /**
     * Please enter DHL Express Global Product code.
     */
    public ?string $productCode;
    /**
     * Please enter DHL Express Local Product code.
     */
    public ?string $localProductCode;
    /**
     * Please use if you wish to filter the response by value added services.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressValueAddedServicesRates>|null
     */
    public ?array $valueAddedServices;
    /**
     * Please use if you wish to filter the response by product(s) and/or value added services.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem>|null
     */
    public ?array $productsAndServices;
    /**
     * payerCountryCode is to be provided if your profile has been enabled to view rates without an account number (this will provide DHL Express published rates for the payer country).
     */
    public ?string $payerCountryCode;
    /**
     * Identifies the date and time the package is tendered. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00 GMT+01:00).
     */
    public ?string $plannedShippingDateAndTime;
    /**
     * Please enter Unit of measurement - metric,imperial.
     */
    public ?string $unitOfMeasurement;
    /**
     * For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false).
     */
    public ?bool $isCustomsDeclarable;
    /**
     * Please provide monetary amount related to your shipment, for example shipment declared value.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem>|null
     */
    public ?array $monetaryAmount;
    /**
     * Legacy field and replaced by newer field getAdditionalInformation. Please set this to true to receive all value added services for each product available.
     */
    public ?bool $requestAllValueAddedServices;
    /**
     * Estimated delivery date option for QDDF or QDDC.
     */
    public ?\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate $estimatedDeliveryDate;
    /**
     * Provides additional information in the response like all value added services, and rule groups.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem>|null
     */
    public ?array $getAdditionalInformation;
    /**
     * Please set this to true to filter out all products which needs DHL Express special customer agreement.
     */
    public ?bool $returnStandardProductsOnly;
    /**
     * Please set this to true in case you want to receive products which are not available on planned shipping date but next available day.
     */
    public ?bool $nextBusinessDay = false;
    /**
     * Please select which type of priducts you are interested in.
     */
    public ?string $productTypeCode;
    /**
     * Here you can define properties per package.
     *
     * @var list<\Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressPackageRR>|null
     */
    public ?array $packages;
}
