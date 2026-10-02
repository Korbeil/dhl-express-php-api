<?php

namespace Korbeil\DHLExpress\Api\Normalizer\Shipment\Documents;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SupermodelIoLogisticsExpressImageUploadRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Shipment\Documents\SupermodelIoLogisticsExpressImageUploadRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Shipment\Documents\SupermodelIoLogisticsExpressImageUploadRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Shipment\Documents\SupermodelIoLogisticsExpressImageUploadRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('shipmentTrackingNumber', $data) && null !== $data['shipmentTrackingNumber']) {
            $object->shipmentTrackingNumber = $data['shipmentTrackingNumber'];
        } elseif (\array_key_exists('shipmentTrackingNumber', $data)) {
            $object->shipmentTrackingNumber = null;
        }
        if (\array_key_exists('originalPlannedShippingDate', $data) && null !== $data['originalPlannedShippingDate']) {
            $object->originalPlannedShippingDate = $data['originalPlannedShippingDate'];
        } elseif (\array_key_exists('originalPlannedShippingDate', $data)) {
            $object->originalPlannedShippingDate = null;
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
        if (\array_key_exists('productCode', $data) && null !== $data['productCode']) {
            $object->productCode = $data['productCode'];
        } elseif (\array_key_exists('productCode', $data)) {
            $object->productCode = null;
        }
        if (\array_key_exists('documentImages', $data) && null !== $data['documentImages']) {
            $values_1 = [];
            foreach ($data['documentImages'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressDocumentImagesItem::class, 'json', $context);
            }
            $object->documentImages = $values_1;
        } elseif (\array_key_exists('documentImages', $data)) {
            $object->documentImages = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['shipmentTrackingNumber'] = $data->shipmentTrackingNumber;
        $dataArray['originalPlannedShippingDate'] = $data->originalPlannedShippingDate;
        $values = [];
        foreach ($data->accounts as $value) {
            $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
            $values[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        $dataArray['accounts'] = $values;
        $dataArray['productCode'] = $data->productCode;
        $values_1 = [];
        foreach ($data->documentImages as $value_1) {
            $normalized_1 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
            $values_1[] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        $dataArray['documentImages'] = $values_1;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Shipment\Documents\SupermodelIoLogisticsExpressImageUploadRequest::class => false];
    }
}
