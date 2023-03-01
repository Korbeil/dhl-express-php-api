<?php

namespace Korbeil\DHLExpress\Api\Endpoint;

class ExpApiShipmentsImgUpload extends \Korbeil\DHLExpress\Api\Runtime\Client\BaseEndpoint implements \Korbeil\DHLExpress\Api\Runtime\Client\Endpoint
{
    use \Korbeil\DHLExpress\Api\Runtime\Client\EndpointTrait;
    protected $shipmentTrackingNumber;

    /**
     * The upload-image service can be used to upload PLT images to a previously created shipment. The PLT images for the shipment can be uploaded before the shipment has been physically collected by DHL courier. However, the original shipment must contain WY as the special service otherwise, an error will be returned when the customer wants to use the reupload function in this upload-image service. IMPORTANT: Please note that at least 10mins must be given between the initial createShipment request and then the upload-image request (including subsequent upload-image request).
     *
     * @param string $shipmentTrackingNumber DHL Express shipment identification number
     */
    public function __construct(string $shipmentTrackingNumber, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressImageUploadRequest $requestBody = null)
    {
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{shipmentTrackingNumber}'], [$this->shipmentTrackingNumber], '/shipments/{shipmentTrackingNumber}/upload-image');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressImageUploadRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsImgUploadBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsImgUploadNotFoundException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsImgUploadUnprocessableEntityException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if ((null === $contentType) === false && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsImgUploadBadRequestException($serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressErrorResponse', 'json'));
        }
        if ((null === $contentType) === false && (404 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsImgUploadNotFoundException($serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressErrorResponse', 'json'));
        }
        if ((null === $contentType) === false && (422 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsImgUploadUnprocessableEntityException($serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['basicAuth'];
    }
}
