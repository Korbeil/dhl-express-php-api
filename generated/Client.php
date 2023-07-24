<?php

namespace Korbeil\DHLExpress\Api;

class Client extends \Korbeil\DHLExpress\Api\Runtime\Client\Client
{
    /**
     * The Cancel Pickup service can be used to cancel a DHL Express pickup booking request.
     *
     * @param string $dispatchConfirmationNumber Shipment pickup confirmation number for example `PRG999126012345`
     * @param array  $queryParameters            {
     *
     * @var string $requestorName Name of the person requesting to cancel the scheduled pickup
     * @var string $reason Provide why scheduled pickup is being cancelled
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Message-Reference Please provide message reference
     * @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     * @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     * @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     * @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     * @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiPickupsCancelBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiPickupsCancelNotFoundException
     */
    public function expApiPickupsCancel(string $dispatchConfirmationNumber, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Korbeil\DHLExpress\Api\Endpoint\ExpApiPickupsCancel($dispatchConfirmationNumber, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * The Update Pickup service can be used to update pickup information for an existing DHL Express pickup booking request.
     *
     * @param string                                                                             $dispatchConfirmationNumber Shipment pickup confirmation number for example `PRG999126012345`
     * @param \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest|null $requestBody
     * @param array                                                                              $headerParameters           {
     *
     * @var string $Message-Reference Please provide message reference
     * @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     * @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     * @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     * @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     * @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiPickupsUpdateBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiPickupsUpdateNotFoundException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiPickupsUpdateUnprocessableEntityException
     */
    public function expApiPickupsUpdate(string $dispatchConfirmationNumber, Model\SupermodelIoLogisticsExpressUpdatePickupRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Korbeil\DHLExpress\Api\Endpoint\ExpApiPickupsUpdate($dispatchConfirmationNumber, $requestBody, $headerParameters), $fetch);
    }

    /**
     * The Pickup service creates a DHL Express pickup booking request.
     *
     * @param \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequest|null $requestBody
     * @param array                                                                        $headerParameters {
     *
     * @var string $Message-Reference Please provide message reference
     * @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     * @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     * @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     * @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     * @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiPickupsBadRequestException
     */
    public function expApiPickups(Model\SupermodelIoLogisticsExpressPickupRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Korbeil\DHLExpress\Api\Endpoint\ExpApiPickups($requestBody, $headerParameters), $fetch);
    }

    /**
     * Service to allocate identifiers upfront for DHL Express Breakbulk or Loose Break Bulk shipments. Requires authorization to use this service from DHL Express.
     *
     * @param array $queryParameters {
     *
     * @var string $accountNumber DHL Express customer account number
     * @var string $type Type of DHL Express identifier to retrieve
     * @var string $size Number of identifiers to be retrieved
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Message-Reference Please provide message reference
     * @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     * @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     * @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     * @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     * @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressIdentifierResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiIdentifiersBadRequestException
     */
    public function expApiIdentifiers(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Korbeil\DHLExpress\Api\Endpoint\ExpApiIdentifiers($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Validates if DHL Express has got pickup/delivery capabilities at origin/destination.
     *
     * @param array $queryParameters {
     *
     * @var string $type
     * @var string $countryCode A short text string code (see values defined in ISO 3166) specifying the shipment origin country. https://gs1.org/voc/Country, Alpha-2 Code
     * @var string $postalCode Text specifying the postal code for an address. https://gs1.org/voc/postalCode
     * @var string $cityName Text specifying the city name
     * @var string $countyName Text specifying the county name
     * @var string $strictValidation If set to true service will return no records when exact valid match not found
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Message-Reference Please provide message reference
     * @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     * @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     * @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     * @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     * @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiAddressValidateBadRequestException
     */
    public function expApiAddressValidate(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Korbeil\DHLExpress\Api\Endpoint\ExpApiAddressValidate($queryParameters, $headerParameters), $fetch);
    }

    /**
     * The Rate request will return DHL's product capabilities and prices (where applicable) based on the input data. Using the shipper and receiver address as well as the dimension and weights of the pieces belonging to a shipment, this operation returns the available products including the shipping price (where applicable).
     *
     * @param array $queryParameters {
     *
     * @var string $accountNumber DHL Express customer account number
     * @var string $originCountryCode A short text string code (see values defined in ISO 3166) specifying the shipment origin country. https://gs1.org/voc/Country, Alpha-2 Code
     * @var string $originPostalCode Text specifying the postal code for an address. https://gs1.org/voc/postalCode
     * @var string $originCityName Text specifying the city name
     * @var string $destinationCountryCode A short text string code (see values defined in ISO 3166) specifying the shipment destination country. https://gs1.org/voc/Country, Alpha-2 Code
     * @var string $destinationPostalCode Text specifying the postal code for an address. https://gs1.org/voc/postalCode
     * @var string $destinationCityName Text specifying the city name
     * @var float  $weight gross weight of the shipment including packaging
     * @var float  $length total length of the shipment including packaging
     * @var float  $width total width of the shipment including packaging
     * @var float  $height total height of the shipment including packaging
     * @var string $plannedShippingDate Timestamp represents the date you plan to ship your prospected shipment
     * @var string $isCustomsDeclarable
     * @var string $unitOfMeasurement The UnitOfMeasurement node conveys the unit of measurements used in the operation. This single value corresponds to the units of weight and measurement which are used throughout the message processing.
     * @var bool   $nextBusinessDay When set to true and there are no products available for given plannedShippingDate then products available for the next possible pickup date are returned
     * @var string $strictValidation if set to true, indicate strict DCT validation of address details, and validation of product and service(s) combination provided in request
     * @var string $getAllValueAddedServices Option to return list of all value added services and its rule groups if applicable
     * @var string $requestEstimatedDeliveryDate Option to return Estimated Delivery Date in response
     * @var string $estimatedDeliveryDateType Estimated Delivery Date Type. QDDF: is the fastest 'docs' transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered. QDDC: constitutes DHL's service commitment as quoted at booking or shipment creation. QDDc builds in clearance time, and potentially other special perational non-transport component(s), when relevant.
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Message-Reference Please provide message reference
     * @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     * @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     * @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     * @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     * @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRates|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiRatesBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiRatesInternalServerErrorException
     */
    public function expApiRates(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Korbeil\DHLExpress\Api\Endpoint\ExpApiRates($queryParameters, $headerParameters), $fetch);
    }

    /**
     * The Rate request will return DHL's product capabilities and prices (where applicable) based on the input data. Using the shipper and receiver address as well as the dimension and weights of the pieces belonging to a shipment, this operation returns the available products including the shipping price (where applicable).
     *
     * @param \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequest|null $requestBody
     * @param array                                                                      $queryParameters {
     *
     * @var string $strictValidation If set to true, indicate strict DCT validation of address details, and validation of product and service(s) combination provided in request.
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Message-Reference Please provide message reference
     * @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     * @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     * @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     * @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     * @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRates|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiRatesManyBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiRatesManyInternalServerErrorException
     */
    public function expApiRatesMany(Model\SupermodelIoLogisticsExpressRateRequest $requestBody = null, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Korbeil\DHLExpress\Api\Endpoint\ExpApiRatesMany($requestBody, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * The Landed Cost section allows further information around products being sold to be provided. In return the duty, tax and shipping charges are calculated in real time and provides transparency about any extra costs the buyer may have to pay before they reach them.
     *
     * @param \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest|null $requestBody
     * @param array                                                                            $headerParameters {
     *
     * @var string $Message-Reference Please provide message reference
     * @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     * @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     * @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     * @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     * @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRates|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiLandedCostBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiLandedCostInternalServerErrorException
     */
    public function expApiLandedCost(Model\SupermodelIoLogisticsExpressLandedCostRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Korbeil\DHLExpress\Api\Endpoint\ExpApiLandedCost($requestBody, $headerParameters), $fetch);
    }

    /**
     * The GET Products API will return DHL's product capabilities for a certain set of input data.
     * Using the shipper and receiver address as well as the dimension and weight of the piece belonging to a shipment, this operation returns the available products.
     *
     * @param array $queryParameters {
     *
     * @var string $accountNumber DHL Express customer account number
     * @var string $originCountryCode A short text string code (see values defined in ISO 3166) specifying the shipment origin country. https://gs1.org/voc/Country, Alpha-2 Code
     * @var string $originPostalCode Text specifying the postal code for an address. https://gs1.org/voc/postalCode
     * @var string $originCityName Text specifying the city name
     * @var string $destinationCountryCode A short text string code (see values defined in ISO 3166) specifying the shipment destination country. https://gs1.org/voc/Country, Alpha-2 Code
     * @var string $destinationPostalCode Text specifying the postal code for an address. https://gs1.org/voc/postalCode
     * @var string $destinationCityName Text specifying the city name
     * @var float  $weight gross weight of the shipment including packaging
     * @var float  $length total length of the shipment including packaging
     * @var float  $width total width of the shipment including packaging
     * @var float  $height total height of the shipment including packaging
     * @var string $plannedShippingDate Timestamp represents the date you plan to ship your prospected shipment
     * @var string $isCustomsDeclarable
     * @var string $unitOfMeasurement The UnitOfMeasurement node conveys the unit of measurements used in the operation. This single value corresponds to the units of weight and measurement which are used throughout the message processing.
     * @var bool   $nextBusinessDay When set to true and there are no products available for given plannedShippingDate then products available for the next possible pickup date are returned
     * @var string $strictValidation if set to true, indicate strict DCT validation of address details, and validation of product and service(s) combination provided in request
     * @var string $getAllValueAddedServices Option to return list of all value added services and its rule groups if applicable
     * @var string $requestEstimatedDeliveryDate Option to return Estimated Delivery Date in response
     * @var string $estimatedDeliveryDateType Estimated Delivery Date Type. QDDF: is the fastest 'docs' transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered. QDDC: constitutes DHL's service commitment as quoted at booking or shipment creation. QDDc builds in clearance time, and potentially other special perational non-transport component(s), when relevant.
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Message-Reference Please provide message reference
     * @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     * @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     * @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     * @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     * @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProducts|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiProductsBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiProductsInternalServerErrorException
     */
    public function expApiProducts(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Korbeil\DHLExpress\Api\Endpoint\ExpApiProducts($queryParameters, $headerParameters), $fetch);
    }

    /**
     * The Tracking service retrieves tracking statuses for a single DHL Express Shipment.
     *
     * @param string $shipmentTrackingNumber DHL Express shipment identification number
     * @param array  $queryParameters        {
     *
     * @var string $trackingView
     * @var string $levelOfDetail
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Message-Reference Please provide message reference
     * @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     * @var string $Accept-Language
     * @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     * @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     * @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     * @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsTrackingBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsTrackingNotFoundException
     */
    public function expApiShipmentsTracking(string $shipmentTrackingNumber, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Korbeil\DHLExpress\Api\Endpoint\ExpApiShipmentsTracking($shipmentTrackingNumber, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * The Tracking service retrieves tracking statuses for a single or multiple DHL Express Shipments.
     *
     * @param array $queryParameters {
     *
     * @var array  $shipmentTrackingNumber DHL Express shipment identification number
     * @var array  $pieceTrackingNumber DHL Express shipment piece tracking number
     * @var string $shipmentReference Shipment reference which was provided during the shipment label creation
     * @var string $shipmentReferenceType Shipment reference type which was provided during the shipment label creation
     * @var string $shipperAccountNumber Shipper DHL Express Account number under which the shipment label was created
     * @var string $dateRangeFrom When tracking by Shipment reference you need to restrict the search by timeframe. Please provide the start of the period.
     * @var string $dateRangeTo When tracking by Shipment reference you need to restrict the search by timeframe. Please provide the end of the period.
     * @var string $trackingView
     * @var string $levelOfDetail
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Message-Reference Please provide message reference
     * @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     * @var string $Accept-Language
     * @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     * @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     * @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     * @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsTrackingMultiBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsTrackingMultiNotFoundException
     */
    public function expApiShipmentsTrackingMulti(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Korbeil\DHLExpress\Api\Endpoint\ExpApiShipmentsTrackingMulti($queryParameters, $headerParameters), $fetch);
    }

    /**
     * The electronic proof of delivery service can be used to retrieve proof of delivery for certain delivered DHL Express shipments.
     *
     * @param string $shipmentTrackingNumber DHL Express shipment identification number
     * @param array  $queryParameters        {
     *
     * @var string $shipperAccountNumber DHL Express customer shipper account number
     * @var string $content
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Message-Reference Please provide message reference
     * @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     * @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     * @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     * @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     * @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressEPODResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsEpodBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsEpodNotFoundException
     */
    public function expApiShipmentsEpod(string $shipmentTrackingNumber, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Korbeil\DHLExpress\Api\Endpoint\ExpApiShipmentsEpod($shipmentTrackingNumber, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * The upload-image service can be used to upload PLT images to a previously created shipment. The PLT images for the shipment can be uploaded before the shipment has been physically collected by DHL courier. However, the original shipment must contain WY as the special service otherwise, an error will be returned when the customer wants to use the reupload function in this upload-image service. IMPORTANT: Please note that at least 10mins must be given between the initial createShipment request and then the upload-image request (including subsequent upload-image request).
     *
     * @param string                                                                            $shipmentTrackingNumber DHL Express shipment identification number
     * @param \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressImageUploadRequest|null $requestBody
     * @param string                                                                            $fetch                  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsImgUploadBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsImgUploadNotFoundException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsImgUploadUnprocessableEntityException
     */
    public function expApiShipmentsImgUpload(string $shipmentTrackingNumber, Model\SupermodelIoLogisticsExpressImageUploadRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Korbeil\DHLExpress\Api\Endpoint\ExpApiShipmentsImgUpload($shipmentTrackingNumber, $requestBody), $fetch);
    }

    /**
     * ## Create Shipment
     * The ShipmentRequest Operation will allow you to generate an AWB number and piece IDs, generate a shipping label, transmit manifest shipment detail to DHL, and optionally book a courier for the pickup of a shipment. The key elements in the response of the Shipment Request will be a base64 encoded PDF label and the Shipment and Piece identification numbers, which you can use for tracking on the DHL web site.
     * While the RateRequest and ShipmentRequest services can be used independently, DHL recommends the use of RateRequest to first validate the products available for the shipper/receiver. The global product codes which are output during the RateResponse can be used directly as input into the Shipment Request, as both perform similar validations in terms of service capability.
     *
     * @param \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest|null $requestBody
     * @param array                                                                                $queryParameters {
     *
     * @var string $strictValidation If set to true, indicate strict DCT validation of address details, and validation of product and service(s) combination provided in request.
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Message-Reference Please provide message reference
     * @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     * @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     * @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     * @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     * @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsUnprocessableEntityException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsInternalServerErrorException
     */
    public function expApiShipments(Model\SupermodelIoLogisticsExpressCreateShipmentRequest $requestBody = null, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Korbeil\DHLExpress\Api\Endpoint\ExpApiShipments($requestBody, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * ## Upload Invoice Data with Shipment ID
     * The upload invoice data service can be used to upload Commerical Invoice data with Shipment Identification Number for your DHL Express shipment.Customer can provide Commercial Invoice data before Shipment Data via Create Shipment flow or vice versa.
     *
     * Important Note: UploadInvoiceData service is not enabled by default and must be requested per customer. Use of this service is only enabled on exceptional basis and DHL Express recommends to submit shipment requests together with a commercial invoice data.To enable use of UploadInvoiceData service, please contact your DHL Express IT representative. To use UploadInvoiceData service, it is required that "PM" service code is provided in MyDHL API Create Shipment request. "PM" service code is not enabled by
     * default for the customers, and needs to be enabled upon request.
     *
     * When Shipment is created via MyDHL API Create Shipment service before uploading the Commercial Invoice (CIN) data,it is mandatory to provide the Shipment Identification Number as received in MyDHL API Create Shipment service Response.
     * When Commercial Invoice (CIN) data is uploaded prior to creating a shipment via MyDHL API Create Shipment service, it is mandatory to provide Invoice Reference Number with Invoice Reference Type value "CU" and Shipper Account Number.
     *
     * These elements are mandatory to facilitate an effective data merge of the Commercial Invoice (CIN) data with Shipment Data. As an output customer will receive Notification element value '0' on successful upload of Commercial Invoice (CIN) data.
     * DHL backend application performs the subsequent data merging process of the Shipment Data and Commercial Invoice data.
     *
     * @param string                                                                                  $shipmentTrackingNumber DHL Express shipment identification number
     * @param \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequest|null $requestBody
     * @param array                                                                                   $headerParameters       {
     *
     * @var string $Message-Reference Please provide message reference
     * @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     * @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     * @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     * @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     * @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsInvoiceDataAwbBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsInvoiceDataAwbUnprocessableEntityException
     */
    public function expApiShipmentsInvoiceDataAwb(string $shipmentTrackingNumber, Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Korbeil\DHLExpress\Api\Endpoint\ExpApiShipmentsInvoiceDataAwb($shipmentTrackingNumber, $requestBody, $headerParameters), $fetch);
    }

    /**
     * ## Upload invoice data
     * The upload invoice data service can be used to upload Commerical Invoice data without Shipment Identification Number for your DHL Express shipment. Customer can provide Commercial Invoice data before Shipment Data via Create Shipment flow or vice versa.
     *
     * Important Note: UploadInvoiceData service is not enabled by default and must be requested per customer.Use of this service is only enabled on exceptional basis and DHL Express recommends to submit shipment requests together with a commercial invoice data.
     * To enable use of UploadInvoiceData service, please contact your DHL Express IT representative. To use UploadInvoiceData service, it is required that "PM" service code is provided in MyDHL API Create Shipment request.
     * "PM" service code is not enabled by default for the customers, and needs to be enabled upon request.
     *
     * When Shipment is created via MyDHL API Create Shipment service before uploading the Commercial Invoice (CIN) data,it is mandatory to provide the Shipment Identification Number as received in MyDHL API Create Shipment service Response. When Commercial Invoice (CIN) data is uploaded prior to creating a shipment via MyDHL API Create Shipment service, it is
     * mandatory to provide Invoice Reference Number with Invoice Reference Type value "CU" and Shipper Account Number.
     *
     * These elements are mandatory to facilitate an effective data merge of the Commercial Invoice (CIN) data with Shipment Data. As an output customer will receive Notification element value '0' on successful upload of Commercial Invoice (CIN) data.
     * DHL backend application performs the subsequent data merging process of the Shipment Data and Commercial Invoice data.
     *
     * @param \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID|null $requestBody
     * @param array                                                                                      $headerParameters {
     *
     * @var string $Message-Reference Please provide message reference
     * @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     * @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     * @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     * @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     * @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsInvoiceDataBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsInvoiceDataInternalServerErrorException
     */
    public function expApiShipmentsInvoiceData(Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Korbeil\DHLExpress\Api\Endpoint\ExpApiShipmentsInvoiceData($requestBody, $headerParameters), $fetch);
    }

    /**
     * The Get Image service can be used to retrieve customer's own uploaded Commercial Invoice, Waybill Document or supporting documents that uploaded during shipment creation.
     *
     * @param string $shipmentTrackingNumber DHL Express shipment identification number
     * @param array  $queryParameters        {
     *
     * @var string $shipperAccountNumber DHL Express customer shipper account number
     * @var string $typeCode please provide correct document type
     * @var string $pickupYearAndMonth Please provide the pickup's date in YYYY-MM format
     * @var string $encodingFormat Please provide the document image encoding format in pdf or tiff format
     * @var bool   $allInOnePDF Option to return all the document images in a single PDF file
     * @var bool   $compressedPackage Option to return all the document images in a compressed package
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Message-Reference Please provide message reference
     * @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     * @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     * @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     * @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     * @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     * @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *             }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressDocumentImageResponse|\Psr\Http\Message\ResponseInterface|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsDocumentimageBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsDocumentimageNotFoundException
     */
    public function expApiShipmentsDocumentimage(string $shipmentTrackingNumber, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Korbeil\DHLExpress\Api\Endpoint\ExpApiShipmentsDocumentimage($shipmentTrackingNumber, $queryParameters, $headerParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api-mock.dhl.com/mydhlapi');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (\count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Korbeil\DHLExpress\Api\Normalizer\JaneObjectNormalizer()];
        if (\count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
