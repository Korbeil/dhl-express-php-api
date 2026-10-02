<?php

namespace Korbeil\DHLExpress\Api\Normalizer\Invoice;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('plannedShipDate', $data) && null !== $data['plannedShipDate']) {
            $object->plannedShipDate = $data['plannedShipDate'];
        } elseif (\array_key_exists('plannedShipDate', $data)) {
            $object->plannedShipDate = null;
        }
        if (\array_key_exists('accounts', $data) && null !== $data['accounts']) {
            $values = [];
            foreach ($data['accounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressAccount::class, 'json', $context);
            }
            $object->accounts = $values;
        } elseif (\array_key_exists('accounts', $data)) {
            $object->accounts = null;
        }
        if (\array_key_exists('content', $data) && null !== $data['content']) {
            $object->content = $this->denormalizer->denormalize($data['content'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent::class, 'json', $context);
        } elseif (\array_key_exists('content', $data)) {
            $object->content = null;
        }
        if (\array_key_exists('outputImageProperties', $data) && null !== $data['outputImageProperties']) {
            $object->outputImageProperties = $this->denormalizer->denormalize($data['outputImageProperties'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties::class, 'json', $context);
        } elseif (\array_key_exists('outputImageProperties', $data)) {
            $object->outputImageProperties = null;
        }
        if (\array_key_exists('customerDetails', $data) && null !== $data['customerDetails']) {
            $object->customerDetails = $this->denormalizer->denormalize($data['customerDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails::class, 'json', $context);
        } elseif (\array_key_exists('customerDetails', $data)) {
            $object->customerDetails = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('plannedShipDate', get_object_vars($data)) && null !== ($data->plannedShipDate ?? null)) {
            $dataArray['plannedShipDate'] = $data->plannedShipDate;
        }
        if (\array_key_exists('accounts', get_object_vars($data)) && null !== ($data->accounts ?? null)) {
            $values = [];
            foreach ($data->accounts as $value) {
                $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['accounts'] = $values;
        }
        $normalized_1 = null === $data->content ? null : $this->normalizer->normalize($data->content, 'json', $context);
        $dataArray['content'] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        if (\array_key_exists('outputImageProperties', get_object_vars($data)) && null !== ($data->outputImageProperties ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->outputImageProperties, 'json', $context);
            $dataArray['outputImageProperties'] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (\array_key_exists('customerDetails', get_object_vars($data)) && null !== ($data->customerDetails ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->customerDetails, 'json', $context);
            $dataArray['customerDetails'] = is_iterable($normalized_3) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataRequest::class => false];
    }
}
