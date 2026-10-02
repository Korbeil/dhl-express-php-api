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

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('number', $data) && \is_int($data['number'])) {
            $data['number'] = (float) $data['number'];
        }
        if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
            $data['weight'] = (float) $data['weight'];
        }
        if (\array_key_exists('dimensionalWeight', $data) && \is_int($data['dimensionalWeight'])) {
            $data['dimensionalWeight'] = (float) $data['dimensionalWeight'];
        }
        if (\array_key_exists('actualWeight', $data) && \is_int($data['actualWeight'])) {
            $data['actualWeight'] = (float) $data['actualWeight'];
        }
        if (\array_key_exists('number', $data) && null !== $data['number']) {
            $object->number = $data['number'];
        } elseif (\array_key_exists('number', $data)) {
            $object->number = null;
        }
        if (\array_key_exists('typeCode', $data) && null !== $data['typeCode']) {
            $object->typeCode = $data['typeCode'];
        } elseif (\array_key_exists('typeCode', $data)) {
            $object->typeCode = null;
        }
        if (\array_key_exists('shipmentTrackingNumber', $data) && null !== $data['shipmentTrackingNumber']) {
            $object->shipmentTrackingNumber = $data['shipmentTrackingNumber'];
        } elseif (\array_key_exists('shipmentTrackingNumber', $data)) {
            $object->shipmentTrackingNumber = null;
        }
        if (\array_key_exists('trackingNumber', $data) && null !== $data['trackingNumber']) {
            $object->trackingNumber = $data['trackingNumber'];
        } elseif (\array_key_exists('trackingNumber', $data)) {
            $object->trackingNumber = null;
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->description = $data['description'];
        } elseif (\array_key_exists('description', $data)) {
            $object->description = null;
        }
        if (\array_key_exists('weight', $data) && null !== $data['weight']) {
            $object->weight = $data['weight'];
        } elseif (\array_key_exists('weight', $data)) {
            $object->weight = null;
        }
        if (\array_key_exists('dimensionalWeight', $data) && null !== $data['dimensionalWeight']) {
            $object->dimensionalWeight = $data['dimensionalWeight'];
        } elseif (\array_key_exists('dimensionalWeight', $data)) {
            $object->dimensionalWeight = null;
        }
        if (\array_key_exists('actualWeight', $data) && null !== $data['actualWeight']) {
            $object->actualWeight = $data['actualWeight'];
        } elseif (\array_key_exists('actualWeight', $data)) {
            $object->actualWeight = null;
        }
        if (\array_key_exists('dimensions', $data) && null !== $data['dimensions']) {
            $object->dimensions = $this->denormalizer->denormalize($data['dimensions'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions::class, 'json', $context);
        } elseif (\array_key_exists('dimensions', $data)) {
            $object->dimensions = null;
        }
        if (\array_key_exists('actualDimensions', $data) && null !== $data['actualDimensions']) {
            $object->actualDimensions = $this->denormalizer->denormalize($data['actualDimensions'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions::class, 'json', $context);
        } elseif (\array_key_exists('actualDimensions', $data)) {
            $object->actualDimensions = null;
        }
        if (\array_key_exists('unitOfMeasurements', $data) && null !== $data['unitOfMeasurements']) {
            $object->unitOfMeasurements = $data['unitOfMeasurements'];
        } elseif (\array_key_exists('unitOfMeasurements', $data)) {
            $object->unitOfMeasurements = null;
        }
        if (\array_key_exists('shipperReferences', $data) && null !== $data['shipperReferences']) {
            $values = [];
            foreach ($data['shipperReferences'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressReference::class, 'json', $context);
            }
            $object->shipperReferences = $values;
        } elseif (\array_key_exists('shipperReferences', $data)) {
            $object->shipperReferences = null;
        }
        if (\array_key_exists('events', $data) && null !== $data['events']) {
            $values_1 = [];
            foreach ($data['events'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem::class, 'json', $context);
            }
            $object->events = $values_1;
        } elseif (\array_key_exists('events', $data)) {
            $object->events = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('number', get_object_vars($data)) && null !== ($data->number ?? null)) {
            $dataArray['number'] = $data->number;
        }
        if (\array_key_exists('typeCode', get_object_vars($data)) && null !== ($data->typeCode ?? null)) {
            $dataArray['typeCode'] = $data->typeCode;
        }
        if (\array_key_exists('shipmentTrackingNumber', get_object_vars($data)) && null !== ($data->shipmentTrackingNumber ?? null)) {
            $dataArray['shipmentTrackingNumber'] = $data->shipmentTrackingNumber;
        }
        if (\array_key_exists('trackingNumber', get_object_vars($data)) && null !== ($data->trackingNumber ?? null)) {
            $dataArray['trackingNumber'] = $data->trackingNumber;
        }
        if (\array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description;
        }
        if (\array_key_exists('weight', get_object_vars($data)) && null !== ($data->weight ?? null)) {
            $dataArray['weight'] = $data->weight;
        }
        if (\array_key_exists('dimensionalWeight', get_object_vars($data)) && null !== ($data->dimensionalWeight ?? null)) {
            $dataArray['dimensionalWeight'] = $data->dimensionalWeight;
        }
        if (\array_key_exists('actualWeight', get_object_vars($data)) && null !== ($data->actualWeight ?? null)) {
            $dataArray['actualWeight'] = $data->actualWeight;
        }
        if (\array_key_exists('dimensions', get_object_vars($data)) && null !== ($data->dimensions ?? null)) {
            $normalized = $this->normalizer->normalize($data->dimensions, 'json', $context);
            $dataArray['dimensions'] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        if (\array_key_exists('actualDimensions', get_object_vars($data)) && null !== ($data->actualDimensions ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->actualDimensions, 'json', $context);
            $dataArray['actualDimensions'] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (\array_key_exists('unitOfMeasurements', get_object_vars($data)) && null !== ($data->unitOfMeasurements ?? null)) {
            $dataArray['unitOfMeasurements'] = $data->unitOfMeasurements;
        }
        if (\array_key_exists('shipperReferences', get_object_vars($data)) && null !== ($data->shipperReferences ?? null)) {
            $values = [];
            foreach ($data->shipperReferences as $value) {
                $normalized_2 = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['shipperReferences'] = $values;
        }
        $values_1 = [];
        foreach ($data->events as $value_1) {
            $normalized_3 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
            $values_1[] = is_iterable($normalized_3) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        $dataArray['events'] = $values_1;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class => false];
    }
}
