<?php

namespace Korbeil\DHLExpress\Api\Endpoint;

class ExpApiShipments extends \Korbeil\DHLExpress\Api\Runtime\Client\BaseEndpoint implements \Korbeil\DHLExpress\Api\Runtime\Client\Endpoint
{
    use \Korbeil\DHLExpress\Api\Runtime\Client\EndpointTrait;

    /**
     * ## Create Shipment.
     *
     * @param array $queryParameters {
     *
     *     @var string $strictValidation If set to true, indicate strict DCT validation of address details, and validation of product and service(s) combination provided in request.
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
    public function __construct(\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest $requestBody = null, array $queryParameters = [], array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/shipments';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['strictValidation']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['strictValidation' => false]);
        $optionsResolver->setAllowedTypes('strictValidation', ['string']);

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
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsUnprocessableEntityException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsInternalServerErrorException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        if ((null === $contentType) === false && (201 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponse', 'json');
        }
        if ((null === $contentType) === false && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsBadRequestException($serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressErrorResponse', 'json'));
        }
        if ((null === $contentType) === false && (422 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsUnprocessableEntityException($serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressErrorResponse', 'json'));
        }
        if ((null === $contentType) === false && (500 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsInternalServerErrorException($serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['basicAuth'];
    }
}
