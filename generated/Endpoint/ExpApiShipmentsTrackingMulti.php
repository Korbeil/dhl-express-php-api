<?php

namespace Korbeil\DHLExpress\Api\Endpoint;

class ExpApiShipmentsTrackingMulti extends \Korbeil\DHLExpress\Api\Runtime\Client\BaseEndpoint implements \Korbeil\DHLExpress\Api\Runtime\Client\Endpoint
{
    use \Korbeil\DHLExpress\Api\Runtime\Client\EndpointTrait;

    /**
     * The Tracking service retrieves tracking statuses for a single or multiple DHL Express Shipments.
     *
     * @param array $queryParameters {
     *
     *     @var array $shipmentTrackingNumber DHL Express shipment identification number
     *     @var array $pieceTrackingNumber DHL Express shipment piece tracking number
     *     @var string $shipmentReference Shipment reference which was provided during the shipment label creation
     *     @var string $shipmentReferenceType Shipment reference type which was provided during the shipment label creation
     *     @var string $shipperAccountNumber Shipper DHL Express Account number under which the shipment label was created
     *     @var string $dateRangeFrom When tracking by Shipment reference you need to restrict the search by timeframe. Please provide the start of the period.
     *     @var string $dateRangeTo When tracking by Shipment reference you need to restrict the search by timeframe. Please provide the end of the period.
     *     @var string $trackingView
     *     @var string $levelOfDetail
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Message-Reference Please provide message reference
     *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *     @var string $Accept-Language
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
        return '/tracking';
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
        $optionsResolver->setDefined(['shipmentTrackingNumber', 'pieceTrackingNumber', 'shipmentReference', 'shipmentReferenceType', 'shipperAccountNumber', 'dateRangeFrom', 'dateRangeTo', 'trackingView', 'levelOfDetail']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['trackingView' => 'all-checkpoints', 'levelOfDetail' => 'shipment']);
        $optionsResolver->addAllowedTypes('shipmentTrackingNumber', ['array']);
        $optionsResolver->addAllowedTypes('pieceTrackingNumber', ['array']);
        $optionsResolver->addAllowedTypes('shipmentReference', ['string']);
        $optionsResolver->addAllowedTypes('shipmentReferenceType', ['string']);
        $optionsResolver->addAllowedTypes('shipperAccountNumber', ['string']);
        $optionsResolver->addAllowedTypes('dateRangeFrom', ['string']);
        $optionsResolver->addAllowedTypes('dateRangeTo', ['string']);
        $optionsResolver->addAllowedTypes('trackingView', ['string']);
        $optionsResolver->addAllowedTypes('levelOfDetail', ['string']);

        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Message-Reference', 'Message-Reference-Date', 'Accept-Language', 'Plugin-Name', 'Plugin-Version', 'Shipping-System-Platform-Name', 'Shipping-System-Platform-Version', 'Webstore-Platform-Name', 'Webstore-Platform-Version']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['Accept-Language' => 'eng']);
        $optionsResolver->addAllowedTypes('Message-Reference', ['string']);
        $optionsResolver->addAllowedTypes('Message-Reference-Date', ['string']);
        $optionsResolver->addAllowedTypes('Accept-Language', ['string']);
        $optionsResolver->addAllowedTypes('Plugin-Name', ['string']);
        $optionsResolver->addAllowedTypes('Plugin-Version', ['string']);
        $optionsResolver->addAllowedTypes('Shipping-System-Platform-Name', ['string']);
        $optionsResolver->addAllowedTypes('Shipping-System-Platform-Version', ['string']);
        $optionsResolver->addAllowedTypes('Webstore-Platform-Name', ['string']);
        $optionsResolver->addAllowedTypes('Webstore-Platform-Version', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponse|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsTrackingMultiBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsTrackingMultiNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponse', 'json');
        }
        if ((null === $contentType) === false && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsTrackingMultiBadRequestException($serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
        if ((null === $contentType) === false && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsTrackingMultiNotFoundException($serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['basicAuth'];
    }
}
