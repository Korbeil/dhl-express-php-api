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

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
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
            $object->setShipmentTrackingNumber($data['shipmentTrackingNumber']);
        } elseif (\array_key_exists('shipmentTrackingNumber', $data) && null === $data['shipmentTrackingNumber']) {
            $object->setShipmentTrackingNumber(null);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        if (\array_key_exists('shipmentTimestamp', $data) && null !== $data['shipmentTimestamp']) {
            $object->setShipmentTimestamp($data['shipmentTimestamp']);
        } elseif (\array_key_exists('shipmentTimestamp', $data) && null === $data['shipmentTimestamp']) {
            $object->setShipmentTimestamp(null);
        }
        if (\array_key_exists('productCode', $data) && null !== $data['productCode']) {
            $object->setProductCode($data['productCode']);
        } elseif (\array_key_exists('productCode', $data) && null === $data['productCode']) {
            $object->setProductCode(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('shipperDetails', $data) && null !== $data['shipperDetails']) {
            $object->setShipperDetails($this->denormalizer->denormalize($data['shipperDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails::class, 'json', $context));
        } elseif (\array_key_exists('shipperDetails', $data) && null === $data['shipperDetails']) {
            $object->setShipperDetails(null);
        }
        if (\array_key_exists('receiverDetails', $data) && null !== $data['receiverDetails']) {
            $object->setReceiverDetails($this->denormalizer->denormalize($data['receiverDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails::class, 'json', $context));
        } elseif (\array_key_exists('receiverDetails', $data) && null === $data['receiverDetails']) {
            $object->setReceiverDetails(null);
        }
        if (\array_key_exists('totalWeight', $data) && null !== $data['totalWeight']) {
            $object->setTotalWeight($data['totalWeight']);
        } elseif (\array_key_exists('totalWeight', $data) && null === $data['totalWeight']) {
            $object->setTotalWeight(null);
        }
        if (\array_key_exists('unitOfMeasurements', $data) && null !== $data['unitOfMeasurements']) {
            $object->setUnitOfMeasurements($data['unitOfMeasurements']);
        } elseif (\array_key_exists('unitOfMeasurements', $data) && null === $data['unitOfMeasurements']) {
            $object->setUnitOfMeasurements(null);
        }
        if (\array_key_exists('shipperReferences', $data) && null !== $data['shipperReferences']) {
            $values = [];
            foreach ($data['shipperReferences'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressReference::class, 'json', $context);
            }
            $object->setShipperReferences($values);
        } elseif (\array_key_exists('shipperReferences', $data) && null === $data['shipperReferences']) {
            $object->setShipperReferences(null);
        }
        if (\array_key_exists('events', $data) && null !== $data['events']) {
            $values_1 = [];
            foreach ($data['events'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem::class, 'json', $context);
            }
            $object->setEvents($values_1);
        } elseif (\array_key_exists('events', $data) && null === $data['events']) {
            $object->setEvents(null);
        }
        if (\array_key_exists('numberOfPieces', $data) && null !== $data['numberOfPieces']) {
            $object->setNumberOfPieces($data['numberOfPieces']);
        } elseif (\array_key_exists('numberOfPieces', $data) && null === $data['numberOfPieces']) {
            $object->setNumberOfPieces(null);
        }
        if (\array_key_exists('pieces', $data) && null !== $data['pieces']) {
            $values_2 = [];
            foreach ($data['pieces'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class, 'json', $context);
            }
            $object->setPieces($values_2);
        } elseif (\array_key_exists('pieces', $data) && null === $data['pieces']) {
            $object->setPieces(null);
        }
        if (\array_key_exists('estimatedDeliveryDate', $data) && null !== $data['estimatedDeliveryDate']) {
            $object->setEstimatedDeliveryDate($data['estimatedDeliveryDate']);
        } elseif (\array_key_exists('estimatedDeliveryDate', $data) && null === $data['estimatedDeliveryDate']) {
            $object->setEstimatedDeliveryDate(null);
        }
        if (\array_key_exists('childrenShipmentIdentificationNumbers', $data) && null !== $data['childrenShipmentIdentificationNumbers']) {
            $values_3 = [];
            foreach ($data['childrenShipmentIdentificationNumbers'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setChildrenShipmentIdentificationNumbers($values_3);
        } elseif (\array_key_exists('childrenShipmentIdentificationNumbers', $data) && null === $data['childrenShipmentIdentificationNumbers']) {
            $object->setChildrenShipmentIdentificationNumbers(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('shipmentTrackingNumber') && null !== $data->getShipmentTrackingNumber()) {
            $dataArray['shipmentTrackingNumber'] = $data->getShipmentTrackingNumber();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('shipmentTimestamp') && null !== $data->getShipmentTimestamp()) {
            $dataArray['shipmentTimestamp'] = $data->getShipmentTimestamp();
        }
        if ($data->isInitialized('productCode') && null !== $data->getProductCode()) {
            $dataArray['productCode'] = $data->getProductCode();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('shipperDetails') && null !== $data->getShipperDetails()) {
            $dataArray['shipperDetails'] = null === $data->getShipperDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getShipperDetails(), 'json', $context));
        }
        if ($data->isInitialized('receiverDetails') && null !== $data->getReceiverDetails()) {
            $dataArray['receiverDetails'] = null === $data->getReceiverDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getReceiverDetails(), 'json', $context));
        }
        if ($data->isInitialized('totalWeight') && null !== $data->getTotalWeight()) {
            $dataArray['totalWeight'] = $data->getTotalWeight();
        }
        if ($data->isInitialized('unitOfMeasurements') && null !== $data->getUnitOfMeasurements()) {
            $dataArray['unitOfMeasurements'] = $data->getUnitOfMeasurements();
        }
        if ($data->isInitialized('shipperReferences') && null !== $data->getShipperReferences()) {
            $values = [];
            foreach ($data->getShipperReferences() as $value) {
                $values[] = null === $value ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['shipperReferences'] = $values;
        }
        $values_1 = [];
        foreach ($data->getEvents() as $value_1) {
            $values_1[] = null === $value_1 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
        }
        $dataArray['events'] = $values_1;
        if ($data->isInitialized('numberOfPieces') && null !== $data->getNumberOfPieces()) {
            $dataArray['numberOfPieces'] = $data->getNumberOfPieces();
        }
        if ($data->isInitialized('pieces') && null !== $data->getPieces()) {
            $values_2 = [];
            foreach ($data->getPieces() as $value_2) {
                $values_2[] = null === $value_2 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['pieces'] = $values_2;
        }
        if ($data->isInitialized('estimatedDeliveryDate') && null !== $data->getEstimatedDeliveryDate()) {
            $dataArray['estimatedDeliveryDate'] = $data->getEstimatedDeliveryDate();
        }
        if ($data->isInitialized('childrenShipmentIdentificationNumbers') && null !== $data->getChildrenShipmentIdentificationNumbers()) {
            $values_3 = [];
            foreach ($data->getChildrenShipmentIdentificationNumbers() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['childrenShipmentIdentificationNumbers'] = $values_3;
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem::class => false];
    }
}
