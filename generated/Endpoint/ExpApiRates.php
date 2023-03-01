<?php

namespace Korbeil\DHLExpress\Api\Endpoint;

class ExpApiRates extends \Korbeil\DHLExpress\Api\Runtime\Client\BaseEndpoint implements \Korbeil\DHLExpress\Api\Runtime\Client\Endpoint
{
    use \Korbeil\DHLExpress\Api\Runtime\Client\EndpointTrait;

    /**
     * The Rate request will return DHL's product capabilities and prices (where applicable) based on the input data. Using the shipper and receiver address as well as the dimension and weights of the pieces belonging to a shipment, this operation returns the available products including the shipping price (where applicable).
     *
     * @param array $queryParameters {
     *
     *     @var string $accountNumber DHL Express customer account number
     *     @var string $originCountryCode A short text string code (see values defined in ISO 3166) specifying the shipment origin country. https://gs1.org/voc/Country, Alpha-2 Code
     *     @var string $originPostalCode Text specifying the postal code for an address. https://gs1.org/voc/postalCode
     *     @var string $originCityName Text specifying the city name
     *     @var string $destinationCountryCode A short text string code (see values defined in ISO 3166) specifying the shipment destination country. https://gs1.org/voc/Country, Alpha-2 Code
     *     @var string $destinationPostalCode Text specifying the postal code for an address. https://gs1.org/voc/postalCode
     *     @var string $destinationCityName Text specifying the city name
     *     @var float $weight gross weight of the shipment including packaging
     *     @var float $length total length of the shipment including packaging
     *     @var float $width total width of the shipment including packaging
     *     @var float $height total height of the shipment including packaging
     *     @var string $plannedShippingDate Timestamp represents the date you plan to ship your prospected shipment
     *     @var bool $isCustomsDeclarable
     *     @var string $unitOfMeasurement The UnitOfMeasurement node conveys the unit of measurements used in the operation. This single value corresponds to the units of weight and measurement which are used throughout the message processing.
     *     @var bool $nextBusinessDay When set to true and there are no products available for given plannedShippingDate then products available for the next possible pickup date are returned
     *     @var string $strictValidation if set to true, indicate strict DCT validation of address details, and validation of product and service(s) combination provided in request
     *     @var bool $getAllValueAddedServices Option to return list of all value added services and its rule groups if applicable
     *     @var bool $requestEstimatedDeliveryDate Option to return Estimated Delivery Date in response
     *     @var string $estimatedDeliveryDateType Estimated Delivery Date Type. QDDF: is the fastest 'docs' transit time as quoted to the customer at booking or shipment creation. No custom clearance is considered. QDDC: constitutes DHL's service commitment as quoted at booking or shipment creation. QDDc builds in clearance time, and potentially other special perational non-transport component(s), when relevant.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Message-Reference Please provide message reference
     *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     * }
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/rates';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['accountNumber', 'originCountryCode', 'originPostalCode', 'originCityName', 'destinationCountryCode', 'destinationPostalCode', 'destinationCityName', 'weight', 'length', 'width', 'height', 'plannedShippingDate', 'isCustomsDeclarable', 'unitOfMeasurement', 'nextBusinessDay', 'strictValidation', 'getAllValueAddedServices', 'requestEstimatedDeliveryDate', 'estimatedDeliveryDateType']);
        $optionsResolver->setRequired(['accountNumber', 'originCountryCode', 'originCityName', 'destinationCountryCode', 'destinationCityName', 'weight', 'length', 'width', 'height', 'plannedShippingDate', 'isCustomsDeclarable', 'unitOfMeasurement']);
        $optionsResolver->setDefaults(['strictValidation' => false, 'getAllValueAddedServices' => false, 'requestEstimatedDeliveryDate' => true, 'estimatedDeliveryDateType' => 'QDDF']);
        $optionsResolver->setAllowedTypes('accountNumber', ['string']);
        $optionsResolver->setAllowedTypes('originCountryCode', ['string']);
        $optionsResolver->setAllowedTypes('originPostalCode', ['string']);
        $optionsResolver->setAllowedTypes('originCityName', ['string']);
        $optionsResolver->setAllowedTypes('destinationCountryCode', ['string']);
        $optionsResolver->setAllowedTypes('destinationPostalCode', ['string']);
        $optionsResolver->setAllowedTypes('destinationCityName', ['string']);
        $optionsResolver->setAllowedTypes('weight', ['float']);
        $optionsResolver->setAllowedTypes('length', ['float']);
        $optionsResolver->setAllowedTypes('width', ['float']);
        $optionsResolver->setAllowedTypes('height', ['float']);
        $optionsResolver->setAllowedTypes('plannedShippingDate', ['string']);
        $optionsResolver->setAllowedTypes('isCustomsDeclarable', ['bool']);
        $optionsResolver->setAllowedTypes('unitOfMeasurement', ['string']);
        $optionsResolver->setAllowedTypes('nextBusinessDay', ['bool']);
        $optionsResolver->setAllowedTypes('strictValidation', ['string']);
        $optionsResolver->setAllowedTypes('getAllValueAddedServices', ['bool']);
        $optionsResolver->setAllowedTypes('requestEstimatedDeliveryDate', ['bool']);
        $optionsResolver->setAllowedTypes('estimatedDeliveryDateType', ['string']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Message-Reference', 'Message-Reference-Date', 'Plugin-Name', 'Plugin-Version', 'Shipping-System-Platform-Name', 'Shipping-System-Platform-Version', 'Webstore-Platform-Name', 'Webstore-Platform-Version']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('Message-Reference', ['string']);
        $optionsResolver->setAllowedTypes('Message-Reference-Date', ['string']);
        $optionsResolver->setAllowedTypes('Plugin-Name', ['string']);
        $optionsResolver->setAllowedTypes('Plugin-Version', ['string']);
        $optionsResolver->setAllowedTypes('Shipping-System-Platform-Name', ['string']);
        $optionsResolver->setAllowedTypes('Shipping-System-Platform-Version', ['string']);
        $optionsResolver->setAllowedTypes('Webstore-Platform-Name', ['string']);
        $optionsResolver->setAllowedTypes('Webstore-Platform-Version', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRates|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiRatesBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiRatesInternalServerErrorException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRates', 'json');
        }
        if ((null === $contentType) === false && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiRatesBadRequestException($serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressErrorResponse', 'json'));
        }
        if ((null === $contentType) === false && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiRatesInternalServerErrorException($serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['basicAuth'];
    }
}
