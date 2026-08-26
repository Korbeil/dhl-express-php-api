<?php

namespace Korbeil\DHLExpress\Api;

class Client extends Runtime\Client\Client
{
    /**
     * The Cancel Pickup service can be used to cancel a DHL Express pickup booking request.
     *
     * @param string $dispatchConfirmationNumber Shipment pickup confirmation number for example `PRG999126012345`
     * @param array{
     *    "requestorName": string, //Name of the person requesting to cancel the scheduled pickup
     *    "reason": string, //Provide why scheduled pickup is being cancelled
     * } $queryParameters
     * @param array{
     *    "Message-Reference"?: string, //Please provide message reference
     *    "Message-Reference-Date"?: string, //Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *    "Plugin-Name"?: string, //Please provide name of the plugin (applicable to 3PV only)
     *    "Plugin-Version"?: string, //Please provide version of the plugin (applicable to 3PV only)
     *    "Shipping-System-Platform-Name"?: string, //Please provide name of the shipping platform(applicable to 3PV only)
     *    "Shipping-System-Platform-Version"?: string, //Please provide version of the shipping platform (applicable to 3PV only)
     *    "Webstore-Platform-Name"?: string, //Please provide name of the webstore platform (applicable to 3PV only)
     *    "Webstore-Platform-Version"?: string, //Please provide version of the webstore platform (applicable to 3PV only)
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ExpApiPickupsCancelBadRequestException
     * @throws Exception\ExpApiPickupsCancelNotFoundException
     */
    public function expApiPickupsCancel(string $dispatchConfirmationNumber, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Pickup\ExpApiPickupsCancel($dispatchConfirmationNumber, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * The Update Pickup service can be used to update pickup information for an existing DHL Express pickup booking request.
     *
     * @param string $dispatchConfirmationNumber Shipment pickup confirmation number for example `PRG999126012345`
     * @param array{
     *    "Message-Reference"?: string, //Please provide message reference
     *    "Message-Reference-Date"?: string, //Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *    "Plugin-Name"?: string, //Please provide name of the plugin (applicable to 3PV only)
     *    "Plugin-Version"?: string, //Please provide version of the plugin (applicable to 3PV only)
     *    "Shipping-System-Platform-Name"?: string, //Please provide name of the shipping platform(applicable to 3PV only)
     *    "Shipping-System-Platform-Version"?: string, //Please provide version of the shipping platform (applicable to 3PV only)
     *    "Webstore-Platform-Name"?: string, //Please provide name of the webstore platform (applicable to 3PV only)
     *    "Webstore-Platform-Version"?: string, //Please provide version of the webstore platform (applicable to 3PV only)
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Pickup\SupermodelIoLogisticsExpressUpdatePickupResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ExpApiPickupsUpdateBadRequestException
     * @throws Exception\ExpApiPickupsUpdateNotFoundException
     * @throws Exception\ExpApiPickupsUpdateUnprocessableEntityException
     */
    public function expApiPickupsUpdate(string $dispatchConfirmationNumber, Model\Pickup\SupermodelIoLogisticsExpressUpdatePickupRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Pickup\ExpApiPickupsUpdate($dispatchConfirmationNumber, $requestBody, $headerParameters), $fetch);
    }

    /**
     * The Pickup service creates a DHL Express pickup booking request.
     *
     * @param array{
     *    "Message-Reference"?: string, //Please provide message reference
     *    "Message-Reference-Date"?: string, //Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *    "Plugin-Name"?: string, //Please provide name of the plugin (applicable to 3PV only)
     *    "Plugin-Version"?: string, //Please provide version of the plugin (applicable to 3PV only)
     *    "Shipping-System-Platform-Name"?: string, //Please provide name of the shipping platform(applicable to 3PV only)
     *    "Shipping-System-Platform-Version"?: string, //Please provide version of the shipping platform (applicable to 3PV only)
     *    "Webstore-Platform-Name"?: string, //Please provide name of the webstore platform (applicable to 3PV only)
     *    "Webstore-Platform-Version"?: string, //Please provide version of the webstore platform (applicable to 3PV only)
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Pickup\SupermodelIoLogisticsExpressPickupResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ExpApiPickupsBadRequestException
     */
    public function expApiPickups(Model\Pickup\SupermodelIoLogisticsExpressPickupRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Pickup\ExpApiPickups($requestBody, $headerParameters), $fetch);
    }

    /**
     * Service to allocate identifiers upfront for DHL Express Breakbulk or Loose Break Bulk shipments. Requires authorization to use this service from DHL Express.
     *
     * @param array{
     *    "accountNumber": string, //DHL Express customer account number
     *    "type": string, //Type of DHL Express identifier to retrieve
     *    "size": string, //Number of identifiers to be retrieved
     * } $queryParameters
     * @param array{
     *    "Message-Reference"?: string, //Please provide message reference
     *    "Message-Reference-Date"?: string, //Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *    "Plugin-Name"?: string, //Please provide name of the plugin (applicable to 3PV only)
     *    "Plugin-Version"?: string, //Please provide version of the plugin (applicable to 3PV only)
     *    "Shipping-System-Platform-Name"?: string, //Please provide name of the shipping platform(applicable to 3PV only)
     *    "Shipping-System-Platform-Version"?: string, //Please provide version of the shipping platform (applicable to 3PV only)
     *    "Webstore-Platform-Name"?: string, //Please provide name of the webstore platform (applicable to 3PV only)
     *    "Webstore-Platform-Version"?: string, //Please provide version of the webstore platform (applicable to 3PV only)
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Identifier\SupermodelIoLogisticsExpressIdentifierResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ExpApiIdentifiersBadRequestException
     */
    public function expApiIdentifiers(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Identifier\ExpApiIdentifiers($queryParameters, $headerParameters), $fetch);
    }

    /**
     * Validates if DHL Express has got pickup/delivery capabilities at origin/destination.
     *
     * @param array{
     *    "type": string,
     *    "countryCode": string, //A short text string code (see values defined in ISO 3166) specifying the shipment origin country. https://gs1.org/voc/Country, Alpha-2 Code
     *    "postalCode"?: string, //Text specifying the postal code for an address. https://gs1.org/voc/postalCode
     *    "cityName"?: string, //Text specifying the city name
     *    "countyName"?: string, //Text specifying the county name
     *    "strictValidation"?: string, //If set to true service will return no records when exact valid match not found
     * } $queryParameters
     * @param array{
     *    "Message-Reference"?: string, //Please provide message reference
     *    "Message-Reference-Date"?: string, //Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *    "Plugin-Name"?: string, //Please provide name of the plugin (applicable to 3PV only)
     *    "Plugin-Version"?: string, //Please provide version of the plugin (applicable to 3PV only)
     *    "Shipping-System-Platform-Name"?: string, //Please provide name of the shipping platform(applicable to 3PV only)
     *    "Shipping-System-Platform-Version"?: string, //Please provide version of the shipping platform (applicable to 3PV only)
     *    "Webstore-Platform-Name"?: string, //Please provide name of the webstore platform (applicable to 3PV only)
     *    "Webstore-Platform-Version"?: string, //Please provide version of the webstore platform (applicable to 3PV only)
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Address\SupermodelIoLogisticsExpressAddressValidateResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ExpApiAddressValidateBadRequestException
     */
    public function expApiAddressValidate(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Address\ExpApiAddressValidate($queryParameters, $headerParameters), $fetch);
    }

    /**
     * The Rate request will return DHL's product capabilities and prices (where applicable) based on the input data. Using the shipper and receiver address as well as the dimension and weights of the pieces belonging to a shipment, this operation returns the available products including the shipping price (where applicable).
     *
     * @param array{
     *    "accountNumber": string, //DHL Express customer account number
     *    "originCountryCode": string, //A short text string code (see values defined in ISO 3166) specifying the shipment origin country. https://gs1.org/voc/Country, Alpha-2 Code
     *    "originPostalCode"?: string, //Text specifying the postal code for an address. https://gs1.org/voc/postalCode
     *    "originCityName": string, //Text specifying the city name
     *    "destinationCountryCode": string, //A short text string code (see values defined in ISO 3166) specifying the shipment destination country. https://gs1.org/voc/Country, Alpha-2 Code
     *    "destinationPostalCode"?: string, //Text specifying the postal code for an address. https://gs1.org/voc/postalCode
     *    "destinationCityName": string, //Text specifying the city name
     *    "weight": float, //Gross weight of the shipment including packaging.
     *    "length": float, //Total length of the shipment including packaging.
     *    "width": float, //Total width of the shipment including packaging.
     *    "height": float, //Total height of the shipment including packaging.
     *    "plannedShippingDate": string, //Timestamp represents the date you plan to ship your prospected shipment
     *    "isCustomsDeclarable": string,
     *    "unitOfMeasurement": string, //The UnitOfMeasurement node conveys the unit of measurements used in the operation. This single value corresponds to the units of weight and measurement which are used throughout the message processing.
     *    "nextBusinessDay"?: bool, //When set to true and there are no products available for given plannedShippingDate then products available for the next possible pickup date are returned
     *    "strictValidation"?: string, //If set to true, indicate strict DCT validation of address details, and validation of product and service(s) combination provided in request.
     *    "getAllValueAddedServices"?: string, //Option to return list of all value added services and its rule groups if applicable
     *    "requestEstimatedDeliveryDate"?: string, //Option to return Estimated Delivery Date in response
     *    "estimatedDeliveryDateType"?: string, //Estimated Delivery Date Type. QDDF: is the fastest 'docs' transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered. QDDC: constitutes DHL's service commitment as quoted at booking or shipment creation. QDDc builds in clearance time, and potentially other special perational non-transport component(s), when relevant.
     * } $queryParameters
     * @param array{
     *    "Message-Reference"?: string, //Please provide message reference
     *    "Message-Reference-Date"?: string, //Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *    "Plugin-Name"?: string, //Please provide name of the plugin (applicable to 3PV only)
     *    "Plugin-Version"?: string, //Please provide version of the plugin (applicable to 3PV only)
     *    "Shipping-System-Platform-Name"?: string, //Please provide name of the shipping platform(applicable to 3PV only)
     *    "Shipping-System-Platform-Version"?: string, //Please provide version of the shipping platform (applicable to 3PV only)
     *    "Webstore-Platform-Name"?: string, //Please provide name of the webstore platform (applicable to 3PV only)
     *    "Webstore-Platform-Version"?: string, //Please provide version of the webstore platform (applicable to 3PV only)
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Rating\SupermodelIoLogisticsExpressRates|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ExpApiRatesBadRequestException
     * @throws Exception\ExpApiRatesInternalServerErrorException
     */
    public function expApiRates(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Rating\ExpApiRates($queryParameters, $headerParameters), $fetch);
    }

    /**
     * The Rate request will return DHL's product capabilities and prices (where applicable) based on the input data. Using the shipper and receiver address as well as the dimension and weights of the pieces belonging to a shipment, this operation returns the available products including the shipping price (where applicable).
     *
     * @param array{
     *    "strictValidation"?: string, //If set to true, indicate strict DCT validation of address details, and validation of product and service(s) combination provided in request.
     * } $queryParameters
     * @param array{
     *    "Message-Reference"?: string, //Please provide message reference
     *    "Message-Reference-Date"?: string, //Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *    "Plugin-Name"?: string, //Please provide name of the plugin (applicable to 3PV only)
     *    "Plugin-Version"?: string, //Please provide version of the plugin (applicable to 3PV only)
     *    "Shipping-System-Platform-Name"?: string, //Please provide name of the shipping platform(applicable to 3PV only)
     *    "Shipping-System-Platform-Version"?: string, //Please provide version of the shipping platform (applicable to 3PV only)
     *    "Webstore-Platform-Name"?: string, //Please provide name of the webstore platform (applicable to 3PV only)
     *    "Webstore-Platform-Version"?: string, //Please provide version of the webstore platform (applicable to 3PV only)
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Rating\SupermodelIoLogisticsExpressRates|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ExpApiRatesManyBadRequestException
     * @throws Exception\ExpApiRatesManyInternalServerErrorException
     */
    public function expApiRatesMany(Model\Rating\SupermodelIoLogisticsExpressRateRequest $requestBody = null, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Rating\ExpApiRatesMany($requestBody, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * The Landed Cost section allows further information around products being sold to be provided. In return the duty, tax and shipping charges are calculated in real time and provides transparency about any extra costs the buyer may have to pay before they reach them.
     *
     * @param array{
     *    "Message-Reference"?: string, //Please provide message reference
     *    "Message-Reference-Date"?: string, //Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *    "Plugin-Name"?: string, //Please provide name of the plugin (applicable to 3PV only)
     *    "Plugin-Version"?: string, //Please provide version of the plugin (applicable to 3PV only)
     *    "Shipping-System-Platform-Name"?: string, //Please provide name of the shipping platform(applicable to 3PV only)
     *    "Shipping-System-Platform-Version"?: string, //Please provide version of the shipping platform (applicable to 3PV only)
     *    "Webstore-Platform-Name"?: string, //Please provide name of the webstore platform (applicable to 3PV only)
     *    "Webstore-Platform-Version"?: string, //Please provide version of the webstore platform (applicable to 3PV only)
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Rating\SupermodelIoLogisticsExpressRates|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ExpApiLandedCostBadRequestException
     * @throws Exception\ExpApiLandedCostInternalServerErrorException
     */
    public function expApiLandedCost(Model\Rating\SupermodelIoLogisticsExpressLandedCostRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Rating\ExpApiLandedCost($requestBody, $headerParameters), $fetch);
    }

    /**
     * The GET Products API will return DHL's product capabilities for a certain set of input data.
     * Using the shipper and receiver address as well as the dimension and weight of the piece belonging to a shipment, this operation returns the available products.
     *
     * @param array{
     *    "accountNumber": string, //DHL Express customer account number
     *    "originCountryCode": string, //A short text string code (see values defined in ISO 3166) specifying the shipment origin country. https://gs1.org/voc/Country, Alpha-2 Code
     *    "originPostalCode"?: string, //Text specifying the postal code for an address. https://gs1.org/voc/postalCode
     *    "originCityName": string, //Text specifying the city name
     *    "destinationCountryCode": string, //A short text string code (see values defined in ISO 3166) specifying the shipment destination country. https://gs1.org/voc/Country, Alpha-2 Code
     *    "destinationPostalCode"?: string, //Text specifying the postal code for an address. https://gs1.org/voc/postalCode
     *    "destinationCityName": string, //Text specifying the city name
     *    "weight": float, //Gross weight of the shipment including packaging.
     *    "length": float, //Total length of the shipment including packaging.
     *    "width": float, //Total width of the shipment including packaging.
     *    "height": float, //Total height of the shipment including packaging.
     *    "plannedShippingDate": string, //Timestamp represents the date you plan to ship your prospected shipment
     *    "isCustomsDeclarable": string,
     *    "unitOfMeasurement": string, //The UnitOfMeasurement node conveys the unit of measurements used in the operation. This single value corresponds to the units of weight and measurement which are used throughout the message processing.
     *    "nextBusinessDay"?: bool, //When set to true and there are no products available for given plannedShippingDate then products available for the next possible pickup date are returned
     *    "strictValidation"?: string, //If set to true, indicate strict DCT validation of address details, and validation of product and service(s) combination provided in request.
     *    "getAllValueAddedServices"?: string, //Option to return list of all value added services and its rule groups if applicable
     *    "requestEstimatedDeliveryDate"?: string, //Option to return Estimated Delivery Date in response
     *    "estimatedDeliveryDateType"?: string, //Estimated Delivery Date Type. QDDF: is the fastest 'docs' transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered. QDDC: constitutes DHL's service commitment as quoted at booking or shipment creation. QDDc builds in clearance time, and potentially other special perational non-transport component(s), when relevant.
     * } $queryParameters
     * @param array{
     *    "Message-Reference"?: string, //Please provide message reference
     *    "Message-Reference-Date"?: string, //Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *    "Plugin-Name"?: string, //Please provide name of the plugin (applicable to 3PV only)
     *    "Plugin-Version"?: string, //Please provide version of the plugin (applicable to 3PV only)
     *    "Shipping-System-Platform-Name"?: string, //Please provide name of the shipping platform(applicable to 3PV only)
     *    "Shipping-System-Platform-Version"?: string, //Please provide version of the shipping platform (applicable to 3PV only)
     *    "Webstore-Platform-Name"?: string, //Please provide name of the webstore platform (applicable to 3PV only)
     *    "Webstore-Platform-Version"?: string, //Please provide version of the webstore platform (applicable to 3PV only)
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Product\SupermodelIoLogisticsExpressProducts|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ExpApiProductsBadRequestException
     * @throws Exception\ExpApiProductsInternalServerErrorException
     */
    public function expApiProducts(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Product\ExpApiProducts($queryParameters, $headerParameters), $fetch);
    }

    /**
     * The Tracking service retrieves tracking statuses for a single DHL Express Shipment.
     *
     * @param string $shipmentTrackingNumber DHL Express shipment identification number
     * @param array{
     *    "trackingView"?: string,
     *    "levelOfDetail"?: string,
     * } $queryParameters
     * @param array{
     *    "Message-Reference"?: string, //Please provide message reference
     *    "Message-Reference-Date"?: string, //Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *    "Accept-Language"?: string,
     *    "Plugin-Name"?: string, //Please provide name of the plugin (applicable to 3PV only)
     *    "Plugin-Version"?: string, //Please provide version of the plugin (applicable to 3PV only)
     *    "Shipping-System-Platform-Name"?: string, //Please provide name of the shipping platform(applicable to 3PV only)
     *    "Shipping-System-Platform-Version"?: string, //Please provide version of the shipping platform (applicable to 3PV only)
     *    "Webstore-Platform-Name"?: string, //Please provide name of the webstore platform (applicable to 3PV only)
     *    "Webstore-Platform-Version"?: string, //Please provide version of the webstore platform (applicable to 3PV only)
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Shipment\Tracking\SupermodelIoLogisticsExpressTrackingResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ExpApiShipmentsTrackingBadRequestException
     * @throws Exception\ExpApiShipmentsTrackingNotFoundException
     */
    public function expApiShipmentsTracking(string $shipmentTrackingNumber, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Shipment\Tracking\ExpApiShipmentsTracking($shipmentTrackingNumber, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * The Tracking service retrieves tracking statuses for a single or multiple DHL Express Shipments.
     *
     * @param array{
     *    "shipmentTrackingNumber"?: array, //DHL Express shipment identification number
     *    "pieceTrackingNumber"?: array, //DHL Express shipment piece tracking number
     *    "shipmentReference"?: string, //Shipment reference which was provided during the shipment label creation
     *    "shipmentReferenceType"?: string, //Shipment reference type which was provided during the shipment label creation
     *    "shipperAccountNumber"?: string, //Shipper DHL Express Account number under which the shipment label was created
     *    "dateRangeFrom"?: string, //When tracking by Shipment reference you need to restrict the search by timeframe. Please provide the start of the period.
     *    "dateRangeTo"?: string, //When tracking by Shipment reference you need to restrict the search by timeframe. Please provide the end of the period.
     *    "trackingView"?: string,
     *    "levelOfDetail"?: string,
     * } $queryParameters
     * @param array{
     *    "Message-Reference"?: string, //Please provide message reference
     *    "Message-Reference-Date"?: string, //Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *    "Accept-Language"?: string,
     *    "Plugin-Name"?: string, //Please provide name of the plugin (applicable to 3PV only)
     *    "Plugin-Version"?: string, //Please provide version of the plugin (applicable to 3PV only)
     *    "Shipping-System-Platform-Name"?: string, //Please provide name of the shipping platform(applicable to 3PV only)
     *    "Shipping-System-Platform-Version"?: string, //Please provide version of the shipping platform (applicable to 3PV only)
     *    "Webstore-Platform-Name"?: string, //Please provide name of the webstore platform (applicable to 3PV only)
     *    "Webstore-Platform-Version"?: string, //Please provide version of the webstore platform (applicable to 3PV only)
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Shipment\Tracking\SupermodelIoLogisticsExpressTrackingResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ExpApiShipmentsTrackingMultiBadRequestException
     * @throws Exception\ExpApiShipmentsTrackingMultiNotFoundException
     */
    public function expApiShipmentsTrackingMulti(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Shipment\Tracking\ExpApiShipmentsTrackingMulti($queryParameters, $headerParameters), $fetch);
    }

    /**
     * The electronic proof of delivery service can be used to retrieve proof of delivery for certain delivered DHL Express shipments.
     *
     * @param string $shipmentTrackingNumber DHL Express shipment identification number
     * @param array{
     *    "shipperAccountNumber"?: string, //DHL Express customer shipper account number
     *    "content"?: string,
     * } $queryParameters
     * @param array{
     *    "Message-Reference"?: string, //Please provide message reference
     *    "Message-Reference-Date"?: string, //Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *    "Plugin-Name"?: string, //Please provide name of the plugin (applicable to 3PV only)
     *    "Plugin-Version"?: string, //Please provide version of the plugin (applicable to 3PV only)
     *    "Shipping-System-Platform-Name"?: string, //Please provide name of the shipping platform(applicable to 3PV only)
     *    "Shipping-System-Platform-Version"?: string, //Please provide version of the shipping platform (applicable to 3PV only)
     *    "Webstore-Platform-Name"?: string, //Please provide name of the webstore platform (applicable to 3PV only)
     *    "Webstore-Platform-Version"?: string, //Please provide version of the webstore platform (applicable to 3PV only)
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Shipment\Tracking\SupermodelIoLogisticsExpressEPODResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ExpApiShipmentsEpodBadRequestException
     * @throws Exception\ExpApiShipmentsEpodNotFoundException
     */
    public function expApiShipmentsEpod(string $shipmentTrackingNumber, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Shipment\Tracking\ExpApiShipmentsEpod($shipmentTrackingNumber, $queryParameters, $headerParameters), $fetch);
    }

    /**
     * The upload-image service can be used to upload PLT images to a previously created shipment. The PLT images for the shipment can be uploaded before the shipment has been physically collected by DHL courier. However, the original shipment must contain WY as the special service otherwise, an error will be returned when the customer wants to use the reupload function in this upload-image service. IMPORTANT: Please note that at least 10mins must be given between the initial createShipment request and then the upload-image request (including subsequent upload-image request).
     *
     * @param string $shipmentTrackingNumber DHL Express shipment identification number
     * @param string $fetch                  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ExpApiShipmentsImgUploadBadRequestException
     * @throws Exception\ExpApiShipmentsImgUploadNotFoundException
     * @throws Exception\ExpApiShipmentsImgUploadUnprocessableEntityException
     */
    public function expApiShipmentsImgUpload(string $shipmentTrackingNumber, Model\Shipment\Documents\SupermodelIoLogisticsExpressImageUploadRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Shipment\Documents\ExpApiShipmentsImgUpload($shipmentTrackingNumber, $requestBody), $fetch);
    }

    /**
     * ## Create Shipment
     * The ShipmentRequest Operation will allow you to generate an AWB number and piece IDs, generate a shipping label, transmit manifest shipment detail to DHL, and optionally book a courier for the pickup of a shipment. The key elements in the response of the Shipment Request will be a base64 encoded PDF label and the Shipment and Piece identification numbers, which you can use for tracking on the DHL web site.
     * While the RateRequest and ShipmentRequest services can be used independently, DHL recommends the use of RateRequest to first validate the products available for the shipper/receiver. The global product codes which are output during the RateResponse can be used directly as input into the Shipment Request, as both perform similar validations in terms of service capability.
     *
     * @param array{
     *    "strictValidation"?: string, //If set to true, indicate strict DCT validation of address details, and validation of product and service(s) combination provided in request.
     * } $queryParameters
     * @param array{
     *    "Message-Reference"?: string, //Please provide message reference
     *    "Message-Reference-Date"?: string, //Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *    "Plugin-Name"?: string, //Please provide name of the plugin (applicable to 3PV only)
     *    "Plugin-Version"?: string, //Please provide version of the plugin (applicable to 3PV only)
     *    "Shipping-System-Platform-Name"?: string, //Please provide name of the shipping platform(applicable to 3PV only)
     *    "Shipping-System-Platform-Version"?: string, //Please provide version of the shipping platform (applicable to 3PV only)
     *    "Webstore-Platform-Name"?: string, //Please provide name of the webstore platform (applicable to 3PV only)
     *    "Webstore-Platform-Version"?: string, //Please provide version of the webstore platform (applicable to 3PV only)
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Shipment\SupermodelIoLogisticsExpressCreateShipmentResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ExpApiShipmentsBadRequestException
     * @throws Exception\ExpApiShipmentsUnprocessableEntityException
     * @throws Exception\ExpApiShipmentsInternalServerErrorException
     */
    public function expApiShipments(Model\Shipment\SupermodelIoLogisticsExpressCreateShipmentRequest $requestBody = null, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Shipment\ExpApiShipments($requestBody, $queryParameters, $headerParameters), $fetch);
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
     * @param string $shipmentTrackingNumber DHL Express shipment identification number
     * @param array{
     *    "Message-Reference"?: string, //Please provide message reference
     *    "Message-Reference-Date"?: string, //Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *    "Plugin-Name"?: string, //Please provide name of the plugin (applicable to 3PV only)
     *    "Plugin-Version"?: string, //Please provide version of the plugin (applicable to 3PV only)
     *    "Shipping-System-Platform-Name"?: string, //Please provide name of the shipping platform(applicable to 3PV only)
     *    "Shipping-System-Platform-Version"?: string, //Please provide version of the shipping platform (applicable to 3PV only)
     *    "Webstore-Platform-Name"?: string, //Please provide name of the webstore platform (applicable to 3PV only)
     *    "Webstore-Platform-Version"?: string, //Please provide version of the webstore platform (applicable to 3PV only)
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ExpApiShipmentsInvoiceDataAwbBadRequestException
     * @throws Exception\ExpApiShipmentsInvoiceDataAwbUnprocessableEntityException
     */
    public function expApiShipmentsInvoiceDataAwb(string $shipmentTrackingNumber, Model\Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Invoice\ExpApiShipmentsInvoiceDataAwb($shipmentTrackingNumber, $requestBody, $headerParameters), $fetch);
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
     * @param array{
     *    "Message-Reference"?: string, //Please provide message reference
     *    "Message-Reference-Date"?: string, //Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *    "Plugin-Name"?: string, //Please provide name of the plugin (applicable to 3PV only)
     *    "Plugin-Version"?: string, //Please provide version of the plugin (applicable to 3PV only)
     *    "Shipping-System-Platform-Name"?: string, //Please provide name of the shipping platform(applicable to 3PV only)
     *    "Shipping-System-Platform-Version"?: string, //Please provide version of the shipping platform (applicable to 3PV only)
     *    "Webstore-Platform-Name"?: string, //Please provide name of the webstore platform (applicable to 3PV only)
     *    "Webstore-Platform-Version"?: string, //Please provide version of the webstore platform (applicable to 3PV only)
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ExpApiShipmentsInvoiceDataBadRequestException
     * @throws Exception\ExpApiShipmentsInvoiceDataInternalServerErrorException
     */
    public function expApiShipmentsInvoiceData(Model\Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Invoice\ExpApiShipmentsInvoiceData($requestBody, $headerParameters), $fetch);
    }

    /**
     * The Get Image service can be used to retrieve customer's own uploaded Commercial Invoice, Waybill Document or supporting documents that uploaded during shipment creation.
     *
     * @param string $shipmentTrackingNumber DHL Express shipment identification number
     * @param array{
     *    "shipperAccountNumber": string, //DHL Express customer shipper account number
     *    "typeCode": string, //Please provide correct document type.
     *    "pickupYearAndMonth": string, //Please provide the pickup's date in YYYY-MM format
     *    "encodingFormat"?: string, //Please provide the document image encoding format in pdf or tiff format
     *    "allInOnePDF"?: bool, //Option to return all the document images in a single PDF file
     *    "compressedPackage"?: bool, //Option to return all the document images in a compressed package
     * } $queryParameters
     * @param array{
     *    "Message-Reference"?: string, //Please provide message reference
     *    "Message-Reference-Date"?: string, //Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *    "Plugin-Name"?: string, //Please provide name of the plugin (applicable to 3PV only)
     *    "Plugin-Version"?: string, //Please provide version of the plugin (applicable to 3PV only)
     *    "Shipping-System-Platform-Name"?: string, //Please provide name of the shipping platform(applicable to 3PV only)
     *    "Shipping-System-Platform-Version"?: string, //Please provide version of the shipping platform (applicable to 3PV only)
     *    "Webstore-Platform-Name"?: string, //Please provide name of the webstore platform (applicable to 3PV only)
     *    "Webstore-Platform-Version"?: string, //Please provide version of the webstore platform (applicable to 3PV only)
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? Model\Shipment\Documents\SupermodelIoLogisticsExpressDocumentImageResponse|null : \Psr\Http\Message\ResponseInterface)
     *
     * @throws Exception\ExpApiShipmentsDocumentimageBadRequestException
     * @throws Exception\ExpApiShipmentsDocumentimageNotFoundException
     */
    public function expApiShipmentsDocumentimage(string $shipmentTrackingNumber, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new Endpoint\Shipment\Documents\ExpApiShipmentsDocumentimage($shipmentTrackingNumber, $queryParameters, $headerParameters), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
        }
        if ($applyServerPlugins) {
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://api-mock.dhl.com/mydhlapi');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
        }
        if (\count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new Normalizer\JaneObjectNormalizer()];
        if (\count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
