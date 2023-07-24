<?php

namespace Korbeil\DHLExpress\Api\Endpoint;

class ExpApiShipmentsInvoiceDataAwb extends \Korbeil\DHLExpress\Api\Runtime\Client\BaseEndpoint implements \Korbeil\DHLExpress\Api\Runtime\Client\Endpoint
{
    use \Korbeil\DHLExpress\Api\Runtime\Client\EndpointTrait;
    protected $shipmentTrackingNumber;

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
     * @param array  $headerParameters       {
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
     */
    public function __construct(string $shipmentTrackingNumber, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequest $requestBody = null, array $headerParameters = [])
    {
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{shipmentTrackingNumber}'], [$this->shipmentTrackingNumber], '/shipments/{shipmentTrackingNumber}/upload-invoice-data');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequest) {
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
     * @return null
     *
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsInvoiceDataAwbBadRequestException
     * @throws \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsInvoiceDataAwbUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if ((null === $contentType) === false && (400 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsInvoiceDataAwbBadRequestException($serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
        if ((null === $contentType) === false && (422 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            throw new \Korbeil\DHLExpress\Api\Exception\ExpApiShipmentsInvoiceDataAwbUnprocessableEntityException($serializer->deserialize($body, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['basicAuth'];
    }
}
