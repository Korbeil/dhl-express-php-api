<?php

namespace Korbeil\DHLExpress\Api\Endpoint;

class ExpApiPickupsUpdate extends \Korbeil\DHLExpress\Api\Runtime\Client\BaseEndpoint implements \Korbeil\DHLExpress\Api\Runtime\Client\Endpoint
{
    use \Korbeil\DHLExpress\Api\Runtime\Client\EndpointTrait;
    protected $dispatchConfirmationNumber;

    /**
     * The Update Pickup service can be used to update pickup information for an existing DHL Express pickup booking request.
     *
     * @param string $dispatchConfirmationNumber Shipment pickup confirmation number for example `PRG999126012345`
     * @param array  $headerParameters           {
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
    public function __construct(string $dispatchConfirmationNumber, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest $requestBody = null, array $headerParameters = [])
    {
        $this->dispatchConfirmationNumber = $dispatchConfirmationNumber;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{dispatchConfirmationNumber}'], [$this->dispatchConfirmationNumber], '/pickups/{dispatchConfirmationNumber}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
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
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupResponse|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiPickupsUpdateBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiPickupsUpdateNotFoundException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiPickupsUpdateUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUpdatePickupResponse', 'json');
        }
        if ((null === $contentType) === false && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiPickupsUpdateBadRequestException($serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
        if ((null === $contentType) === false && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiPickupsUpdateNotFoundException($serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
        if ((null === $contentType) === false && (422 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiPickupsUpdateUnprocessableEntityException($serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['basicAuth'];
    }
}
