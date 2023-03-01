<?php

namespace Korbeil\DHLExpress\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
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

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
            $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions', 'json', $context));
        } elseif (\array_key_exists('dimensions', $data) && null === $data['dimensions']) {
            $object->setDimensions(null);
        }
        if (\array_key_exists('actualDimensions', $data) && null !== $data['actualDimensions']) {
            $object->setActualDimensions($this->denormalizer->denormalize($data['actualDimensions'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions', 'json', $context));
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
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressReference', 'json', $context);
            }
            $object->setShipperReferences($values);
        } elseif (\array_key_exists('shipperReferences', $data) && null === $data['shipperReferences']) {
            $object->setShipperReferences(null);
        }
        if (\array_key_exists('events', $data) && null !== $data['events']) {
            $values_1 = [];
            foreach ($data['events'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem', 'json', $context);
            }
            $object->setEvents($values_1);
        } elseif (\array_key_exists('events', $data) && null === $data['events']) {
            $object->setEvents(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if (null !== $object->getTypeCode()) {
            $data['typeCode'] = $object->getTypeCode();
        }
        if (null !== $object->getShipmentTrackingNumber()) {
            $data['shipmentTrackingNumber'] = $object->getShipmentTrackingNumber();
        }
        if (null !== $object->getTrackingNumber()) {
            $data['trackingNumber'] = $object->getTrackingNumber();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getWeight()) {
            $data['weight'] = $object->getWeight();
        }
        if (null !== $object->getDimensionalWeight()) {
            $data['dimensionalWeight'] = $object->getDimensionalWeight();
        }
        if (null !== $object->getActualWeight()) {
            $data['actualWeight'] = $object->getActualWeight();
        }
        if (null !== $object->getDimensions()) {
            $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
        }
        if (null !== $object->getActualDimensions()) {
            $data['actualDimensions'] = $this->normalizer->normalize($object->getActualDimensions(), 'json', $context);
        }
        if (null !== $object->getUnitOfMeasurements()) {
            $data['unitOfMeasurements'] = $object->getUnitOfMeasurements();
        }
        if (null !== $object->getShipperReferences()) {
            $values = [];
            foreach ($object->getShipperReferences() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['shipperReferences'] = $values;
        }
        $values_1 = [];
        foreach ($object->getEvents() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['events'] = $values_1;

        return $data;
    }
}
