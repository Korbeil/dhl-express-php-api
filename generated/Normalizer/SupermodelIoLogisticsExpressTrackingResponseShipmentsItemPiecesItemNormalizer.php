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

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
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
            $object->setNumber($data['number']);
        } elseif (\array_key_exists('number', $data) && null === $data['number']) {
            $object->setNumber(null);
        }
        if (\array_key_exists('typeCode', $data) && null !== $data['typeCode']) {
            $object->setTypeCode($data['typeCode']);
        } elseif (\array_key_exists('typeCode', $data) && null === $data['typeCode']) {
            $object->setTypeCode(null);
        }
        if (\array_key_exists('shipmentTrackingNumber', $data) && null !== $data['shipmentTrackingNumber']) {
            $object->setShipmentTrackingNumber($data['shipmentTrackingNumber']);
        } elseif (\array_key_exists('shipmentTrackingNumber', $data) && null === $data['shipmentTrackingNumber']) {
            $object->setShipmentTrackingNumber(null);
        }
        if (\array_key_exists('trackingNumber', $data) && null !== $data['trackingNumber']) {
            $object->setTrackingNumber($data['trackingNumber']);
        } elseif (\array_key_exists('trackingNumber', $data) && null === $data['trackingNumber']) {
            $object->setTrackingNumber(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('weight', $data) && null !== $data['weight']) {
            $object->setWeight($data['weight']);
        } elseif (\array_key_exists('weight', $data) && null === $data['weight']) {
            $object->setWeight(null);
        }
        if (\array_key_exists('dimensionalWeight', $data) && null !== $data['dimensionalWeight']) {
            $object->setDimensionalWeight($data['dimensionalWeight']);
        } elseif (\array_key_exists('dimensionalWeight', $data) && null === $data['dimensionalWeight']) {
            $object->setDimensionalWeight(null);
        }
        if (\array_key_exists('actualWeight', $data) && null !== $data['actualWeight']) {
            $object->setActualWeight($data['actualWeight']);
        } elseif (\array_key_exists('actualWeight', $data) && null === $data['actualWeight']) {
            $object->setActualWeight(null);
        }
        if (\array_key_exists('dimensions', $data) && null !== $data['dimensions']) {
            $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions::class, 'json', $context));
        } elseif (\array_key_exists('dimensions', $data) && null === $data['dimensions']) {
            $object->setDimensions(null);
        }
        if (\array_key_exists('actualDimensions', $data) && null !== $data['actualDimensions']) {
            $object->setActualDimensions($this->denormalizer->denormalize($data['actualDimensions'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions::class, 'json', $context));
        } elseif (\array_key_exists('actualDimensions', $data) && null === $data['actualDimensions']) {
            $object->setActualDimensions(null);
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
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem::class, 'json', $context);
            }
            $object->setEvents($values_1);
        } elseif (\array_key_exists('events', $data) && null === $data['events']) {
            $object->setEvents(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('number') && null !== $data->getNumber()) {
            $dataArray['number'] = $data->getNumber();
        }
        if ($data->isInitialized('typeCode') && null !== $data->getTypeCode()) {
            $dataArray['typeCode'] = $data->getTypeCode();
        }
        if ($data->isInitialized('shipmentTrackingNumber') && null !== $data->getShipmentTrackingNumber()) {
            $dataArray['shipmentTrackingNumber'] = $data->getShipmentTrackingNumber();
        }
        if ($data->isInitialized('trackingNumber') && null !== $data->getTrackingNumber()) {
            $dataArray['trackingNumber'] = $data->getTrackingNumber();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('weight') && null !== $data->getWeight()) {
            $dataArray['weight'] = $data->getWeight();
        }
        if ($data->isInitialized('dimensionalWeight') && null !== $data->getDimensionalWeight()) {
            $dataArray['dimensionalWeight'] = $data->getDimensionalWeight();
        }
        if ($data->isInitialized('actualWeight') && null !== $data->getActualWeight()) {
            $dataArray['actualWeight'] = $data->getActualWeight();
        }
        if ($data->isInitialized('dimensions') && null !== $data->getDimensions()) {
            $dataArray['dimensions'] = null === $data->getDimensions() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getDimensions(), 'json', $context));
        }
        if ($data->isInitialized('actualDimensions') && null !== $data->getActualDimensions()) {
            $dataArray['actualDimensions'] = null === $data->getActualDimensions() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getActualDimensions(), 'json', $context));
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

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class => false];
    }
}
