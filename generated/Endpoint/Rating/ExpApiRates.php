<?php

namespace Korbeil\DHLExpress\Api\Endpoint\Rating;

class ExpApiRates extends \Korbeil\DHLExpress\Api\Runtime\Client\BaseEndpoint implements \Korbeil\DHLExpress\Api\Runtime\Client\Endpoint
{
    use \Korbeil\DHLExpress\Api\Runtime\Client\EndpointTrait;

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
        $optionsResolver->setDefaults(['strictValidation' => 'false', 'getAllValueAddedServices' => 'false', 'requestEstimatedDeliveryDate' => 'true', 'estimatedDeliveryDateType' => 'QDDF']);
        $optionsResolver->addAllowedTypes('accountNumber', ['string']);
        $optionsResolver->addAllowedTypes('originCountryCode', ['string']);
        $optionsResolver->addAllowedTypes('originPostalCode', ['string']);
        $optionsResolver->addAllowedTypes('originCityName', ['string']);
        $optionsResolver->addAllowedTypes('destinationCountryCode', ['string']);
        $optionsResolver->addAllowedTypes('destinationPostalCode', ['string']);
        $optionsResolver->addAllowedTypes('destinationCityName', ['string']);
        $optionsResolver->addAllowedTypes('weight', ['float']);
        $optionsResolver->addAllowedTypes('length', ['float']);
        $optionsResolver->addAllowedTypes('width', ['float']);
        $optionsResolver->addAllowedTypes('height', ['float']);
        $optionsResolver->addAllowedTypes('plannedShippingDate', ['string']);
        $optionsResolver->addAllowedTypes('isCustomsDeclarable', ['string']);
        $optionsResolver->addAllowedTypes('unitOfMeasurement', ['string']);
        $optionsResolver->addAllowedTypes('nextBusinessDay', ['bool']);
        $optionsResolver->addAllowedTypes('strictValidation', ['string']);
        $optionsResolver->addAllowedTypes('getAllValueAddedServices', ['string']);
        $optionsResolver->addAllowedTypes('requestEstimatedDeliveryDate', ['string']);
        $optionsResolver->addAllowedTypes('estimatedDeliveryDateType', ['string']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Message-Reference', 'Message-Reference-Date', 'Plugin-Name', 'Plugin-Version', 'Shipping-System-Platform-Name', 'Shipping-System-Platform-Version', 'Webstore-Platform-Name', 'Webstore-Platform-Version']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Message-Reference', ['string']);
        $optionsResolver->addAllowedTypes('Message-Reference-Date', ['string']);
        $optionsResolver->addAllowedTypes('Plugin-Name', ['string']);
        $optionsResolver->addAllowedTypes('Plugin-Version', ['string']);
        $optionsResolver->addAllowedTypes('Shipping-System-Platform-Name', ['string']);
        $optionsResolver->addAllowedTypes('Shipping-System-Platform-Version', ['string']);
        $optionsResolver->addAllowedTypes('Webstore-Platform-Name', ['string']);
        $optionsResolver->addAllowedTypes('Webstore-Platform-Version', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Korbeil\DHLExpress\Api\Model\Rating\SupermodelIoLogisticsExpressRates|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiRatesBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiRatesInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'Korbeil\DHLExpress\Api\Model\Rating\SupermodelIoLogisticsExpressRates', 'json');
        }
        if ((null === $contentType) === false && (400 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiRatesBadRequestException($serializer->deserialize($body, 'Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
        if ((null === $contentType) === false && (500 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiRatesInternalServerErrorException($serializer->deserialize($body, 'Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['basicAuth'];
    }
}
