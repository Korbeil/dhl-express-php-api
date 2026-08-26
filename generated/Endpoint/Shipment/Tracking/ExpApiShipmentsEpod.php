<?php

namespace Korbeil\DHLExpress\Api\Endpoint\Shipment\Tracking;

class ExpApiShipmentsEpod extends \Korbeil\DHLExpress\Api\Runtime\Client\BaseEndpoint implements \Korbeil\DHLExpress\Api\Runtime\Client\Endpoint
{
    use \Korbeil\DHLExpress\Api\Runtime\Client\EndpointTrait;
    protected $shipmentTrackingNumber;

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
     */
    public function __construct(string $shipmentTrackingNumber, array $queryParameters = [], array $headerParameters = [])
    {
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{shipmentTrackingNumber}'], [$this->shipmentTrackingNumber], '/shipments/{shipmentTrackingNumber}/proof-of-delivery');
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
        $optionsResolver->setDefined(['shipperAccountNumber', 'content']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['content' => 'epod-summary']);
        $optionsResolver->addAllowedTypes('shipperAccountNumber', ['string']);
        $optionsResolver->addAllowedTypes('content', ['string']);

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
     * @return \Korbeil\DHLExpress\Api\Model\Shipment\Tracking\SupermodelIoLogisticsExpressEPODResponse|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsEpodBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsEpodNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'Korbeil\DHLExpress\Api\Model\Shipment\Tracking\SupermodelIoLogisticsExpressEPODResponse', 'json');
        }
        if ((null === $contentType) === false && (400 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsEpodBadRequestException($serializer->deserialize($body, 'Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
        if ((null === $contentType) === false && (404 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsEpodNotFoundException($serializer->deserialize($body, 'Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['basicAuth'];
    }
}
