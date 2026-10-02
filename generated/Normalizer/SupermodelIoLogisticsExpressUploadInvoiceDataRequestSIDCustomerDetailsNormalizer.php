<?php

namespace Korbeil\DHLExpress\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('sellerDetails', $data) && null !== $data['sellerDetails']) {
            $object->sellerDetails = $this->denormalizer->denormalize($data['sellerDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails::class, 'json', $context);
        } elseif (\array_key_exists('sellerDetails', $data)) {
            $object->sellerDetails = null;
        }
        if (\array_key_exists('buyerDetails', $data) && null !== $data['buyerDetails']) {
            $object->buyerDetails = $this->denormalizer->denormalize($data['buyerDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails::class, 'json', $context);
        } elseif (\array_key_exists('buyerDetails', $data)) {
            $object->buyerDetails = null;
        }
        if (\array_key_exists('importerDetails', $data) && null !== $data['importerDetails']) {
            $object->importerDetails = $this->denormalizer->denormalize($data['importerDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails::class, 'json', $context);
        } elseif (\array_key_exists('importerDetails', $data)) {
            $object->importerDetails = null;
        }
        if (\array_key_exists('exporterDetails', $data) && null !== $data['exporterDetails']) {
            $object->exporterDetails = $this->denormalizer->denormalize($data['exporterDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails::class, 'json', $context);
        } elseif (\array_key_exists('exporterDetails', $data)) {
            $object->exporterDetails = null;
        }
        if (\array_key_exists('ultimateConsigneeDetails', $data) && null !== $data['ultimateConsigneeDetails']) {
            $object->ultimateConsigneeDetails = $this->denormalizer->denormalize($data['ultimateConsigneeDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails::class, 'json', $context);
        } elseif (\array_key_exists('ultimateConsigneeDetails', $data)) {
            $object->ultimateConsigneeDetails = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('sellerDetails', get_object_vars($data)) && null !== ($data->sellerDetails ?? null)) {
            $normalized = $this->normalizer->normalize($data->sellerDetails, 'json', $context);
            $dataArray['sellerDetails'] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        if (\array_key_exists('buyerDetails', get_object_vars($data)) && null !== ($data->buyerDetails ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->buyerDetails, 'json', $context);
            $dataArray['buyerDetails'] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (\array_key_exists('importerDetails', get_object_vars($data)) && null !== ($data->importerDetails ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->importerDetails, 'json', $context);
            $dataArray['importerDetails'] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (\array_key_exists('exporterDetails', get_object_vars($data)) && null !== ($data->exporterDetails ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->exporterDetails, 'json', $context);
            $dataArray['exporterDetails'] = is_iterable($normalized_3) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (\array_key_exists('ultimateConsigneeDetails', get_object_vars($data)) && null !== ($data->ultimateConsigneeDetails ?? null)) {
            $normalized_4 = $this->normalizer->normalize($data->ultimateConsigneeDetails, 'json', $context);
            $dataArray['ultimateConsigneeDetails'] = is_iterable($normalized_4) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_4) : $normalized_4;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails::class => false];
    }
}
