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

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('totalWeight', $data) && \is_int($data['totalWeight'])) {
            $data['totalWeight'] = (float) $data['totalWeight'];
        }
        if (\array_key_exists('numberOfPieces', $data) && \is_int($data['numberOfPieces'])) {
            $data['numberOfPieces'] = (float) $data['numberOfPieces'];
        }
        if (\array_key_exists('shipmentTrackingNumber', $data) && null !== $data['shipmentTrackingNumber']) {
            $object->shipmentTrackingNumber = $data['shipmentTrackingNumber'];
        } elseif (\array_key_exists('shipmentTrackingNumber', $data)) {
            $object->shipmentTrackingNumber = null;
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->status = $data['status'];
        } elseif (\array_key_exists('status', $data)) {
            $object->status = null;
        }
        if (\array_key_exists('shipmentTimestamp', $data) && null !== $data['shipmentTimestamp']) {
            $object->shipmentTimestamp = $data['shipmentTimestamp'];
        } elseif (\array_key_exists('shipmentTimestamp', $data)) {
            $object->shipmentTimestamp = null;
        }
        if (\array_key_exists('productCode', $data) && null !== $data['productCode']) {
            $object->productCode = $data['productCode'];
        } elseif (\array_key_exists('productCode', $data)) {
            $object->productCode = null;
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->description = $data['description'];
        } elseif (\array_key_exists('description', $data)) {
            $object->description = null;
        }
        if (\array_key_exists('shipperDetails', $data) && null !== $data['shipperDetails']) {
            $object->shipperDetails = $this->denormalizer->denormalize($data['shipperDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails::class, 'json', $context);
        } elseif (\array_key_exists('shipperDetails', $data)) {
            $object->shipperDetails = null;
        }
        if (\array_key_exists('receiverDetails', $data) && null !== $data['receiverDetails']) {
            $object->receiverDetails = $this->denormalizer->denormalize($data['receiverDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails::class, 'json', $context);
        } elseif (\array_key_exists('receiverDetails', $data)) {
            $object->receiverDetails = null;
        }
        if (\array_key_exists('totalWeight', $data) && null !== $data['totalWeight']) {
            $object->totalWeight = $data['totalWeight'];
        } elseif (\array_key_exists('totalWeight', $data)) {
            $object->totalWeight = null;
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
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem::class, 'json', $context);
            }
            $object->events = $values_1;
        } elseif (\array_key_exists('events', $data)) {
            $object->events = null;
        }
        if (\array_key_exists('numberOfPieces', $data) && null !== $data['numberOfPieces']) {
            $object->numberOfPieces = $data['numberOfPieces'];
        } elseif (\array_key_exists('numberOfPieces', $data)) {
            $object->numberOfPieces = null;
        }
        if (\array_key_exists('pieces', $data) && null !== $data['pieces']) {
            $values_2 = [];
            foreach ($data['pieces'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class, 'json', $context);
            }
            $object->pieces = $values_2;
        } elseif (\array_key_exists('pieces', $data)) {
            $object->pieces = null;
        }
        if (\array_key_exists('estimatedDeliveryDate', $data) && null !== $data['estimatedDeliveryDate']) {
            $object->estimatedDeliveryDate = $data['estimatedDeliveryDate'];
        } elseif (\array_key_exists('estimatedDeliveryDate', $data)) {
            $object->estimatedDeliveryDate = null;
        }
        if (\array_key_exists('childrenShipmentIdentificationNumbers', $data) && null !== $data['childrenShipmentIdentificationNumbers']) {
            $values_3 = [];
            foreach ($data['childrenShipmentIdentificationNumbers'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->childrenShipmentIdentificationNumbers = $values_3;
        } elseif (\array_key_exists('childrenShipmentIdentificationNumbers', $data)) {
            $object->childrenShipmentIdentificationNumbers = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('shipmentTrackingNumber', get_object_vars($data)) && null !== ($data->shipmentTrackingNumber ?? null)) {
            $dataArray['shipmentTrackingNumber'] = $data->shipmentTrackingNumber;
        }
        if (\array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status;
        }
        if (\array_key_exists('shipmentTimestamp', get_object_vars($data)) && null !== ($data->shipmentTimestamp ?? null)) {
            $dataArray['shipmentTimestamp'] = $data->shipmentTimestamp;
        }
        if (\array_key_exists('productCode', get_object_vars($data)) && null !== ($data->productCode ?? null)) {
            $dataArray['productCode'] = $data->productCode;
        }
        if (\array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description;
        }
        if (\array_key_exists('shipperDetails', get_object_vars($data)) && null !== ($data->shipperDetails ?? null)) {
            $normalized = $this->normalizer->normalize($data->shipperDetails, 'json', $context);
            $dataArray['shipperDetails'] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        if (\array_key_exists('receiverDetails', get_object_vars($data)) && null !== ($data->receiverDetails ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->receiverDetails, 'json', $context);
            $dataArray['receiverDetails'] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (\array_key_exists('totalWeight', get_object_vars($data)) && null !== ($data->totalWeight ?? null)) {
            $dataArray['totalWeight'] = $data->totalWeight;
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
        if (\array_key_exists('numberOfPieces', get_object_vars($data)) && null !== ($data->numberOfPieces ?? null)) {
            $dataArray['numberOfPieces'] = $data->numberOfPieces;
        }
        if (\array_key_exists('pieces', get_object_vars($data)) && null !== ($data->pieces ?? null)) {
            $values_2 = [];
            foreach ($data->pieces as $value_2) {
                $normalized_4 = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = is_iterable($normalized_4) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_4) : $normalized_4;
            }
            $dataArray['pieces'] = $values_2;
        }
        if (\array_key_exists('estimatedDeliveryDate', get_object_vars($data)) && null !== ($data->estimatedDeliveryDate ?? null)) {
            $dataArray['estimatedDeliveryDate'] = $data->estimatedDeliveryDate;
        }
        if (\array_key_exists('childrenShipmentIdentificationNumbers', get_object_vars($data)) && null !== ($data->childrenShipmentIdentificationNumbers ?? null)) {
            $values_3 = [];
            foreach ($data->childrenShipmentIdentificationNumbers as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['childrenShipmentIdentificationNumbers'] = $values_3;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem::class => false];
    }
}
