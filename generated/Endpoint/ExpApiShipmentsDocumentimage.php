<?php

namespace Korbeil\DHLExpress\Api\Endpoint;

class ExpApiShipmentsDocumentimage extends \Korbeil\DHLExpress\Api\Runtime\Client\BaseEndpoint implements \Korbeil\DHLExpress\Api\Runtime\Client\Endpoint
{
    use \Korbeil\DHLExpress\Api\Runtime\Client\EndpointTrait;
    protected $shipmentTrackingNumber;

    /**
     * The Get Image service can be used to retrieve customer's own uploaded Commercial Invoice, Waybill Document or supporting documents that uploaded during shipment creation.
     *
     * @param string $shipmentTrackingNumber DHL Express shipment identification number
     * @param array  $queryParameters        {
     *
     *     @var string $shipperAccountNumber DHL Express customer shipper account number
     *     @var string $typeCode please provide correct document type
     *     @var string $pickupYearAndMonth Please provide the pickup's date in YYYY-MM format
     *     @var string $encodingFormat Please provide the document image encoding format in pdf or tiff format
     *     @var bool $allInOnePDF Option to return all the document images in a single PDF file
     *     @var bool $compressedPackage Option to return all the document images in a compressed package
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
        return str_replace(['{shipmentTrackingNumber}'], [$this->shipmentTrackingNumber], '/shipments/{shipmentTrackingNumber}/get-image');
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
        $optionsResolver->setDefined(['shipperAccountNumber', 'typeCode', 'pickupYearAndMonth', 'encodingFormat', 'allInOnePDF', 'compressedPackage']);
        $optionsResolver->setRequired(['shipperAccountNumber', 'typeCode', 'pickupYearAndMonth']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('shipperAccountNumber', ['string']);
        $optionsResolver->setAllowedTypes('typeCode', ['string']);
        $optionsResolver->setAllowedTypes('pickupYearAndMonth', ['string']);
        $optionsResolver->setAllowedTypes('encodingFormat', ['string']);
        $optionsResolver->setAllowedTypes('allInOnePDF', ['bool']);
        $optionsResolver->setAllowedTypes('compressedPackage', ['bool']);

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
     * @return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressDocumentImageResponse|null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsDocumentimageBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsDocumentimageNotFoundException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressDocumentImageResponse', 'json');
        }
        if ((null === $contentType) === false && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsDocumentimageBadRequestException($serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressErrorResponse', 'json'));
        }
        if ((null === $contentType) === false && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsDocumentimageNotFoundException($serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['basicAuth'];
    }
}
