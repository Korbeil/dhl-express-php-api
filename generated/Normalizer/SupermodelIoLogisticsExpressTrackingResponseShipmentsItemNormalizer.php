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

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
            $object->setShipperDetails($this->denormalizer->denormalize($data['shipperDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails', 'json', $context));
        } elseif (\array_key_exists('shipperDetails', $data) && null === $data['shipperDetails']) {
            $object->setShipperDetails(null);
        }
        if (\array_key_exists('receiverDetails', $data) && null !== $data['receiverDetails']) {
            $object->setReceiverDetails($this->denormalizer->denormalize($data['receiverDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails', 'json', $context));
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
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressReference', 'json', $context);
            }
            $object->setShipperReferences($values);
        } elseif (\array_key_exists('shipperReferences', $data) && null === $data['shipperReferences']) {
            $object->setShipperReferences(null);
        }
        if (\array_key_exists('events', $data) && null !== $data['events']) {
            $values_1 = [];
            foreach ($data['events'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem', 'json', $context);
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
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem', 'json', $context);
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

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getShipmentTrackingNumber()) {
            $data['shipmentTrackingNumber'] = $object->getShipmentTrackingNumber();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getShipmentTimestamp()) {
            $data['shipmentTimestamp'] = $object->getShipmentTimestamp();
        }
        if (null !== $object->getProductCode()) {
            $data['productCode'] = $object->getProductCode();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getShipperDetails()) {
            $data['shipperDetails'] = $this->normalizer->normalize($object->getShipperDetails(), 'json', $context);
        }
        if (null !== $object->getReceiverDetails()) {
            $data['receiverDetails'] = $this->normalizer->normalize($object->getReceiverDetails(), 'json', $context);
        }
        if (null !== $object->getTotalWeight()) {
            $data['totalWeight'] = $object->getTotalWeight();
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
        if (null !== $object->getNumberOfPieces()) {
            $data['numberOfPieces'] = $object->getNumberOfPieces();
        }
        if (null !== $object->getPieces()) {
            $values_2 = [];
            foreach ($object->getPieces() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['pieces'] = $values_2;
        }
        if (null !== $object->getEstimatedDeliveryDate()) {
            $data['estimatedDeliveryDate'] = $object->getEstimatedDeliveryDate();
        }
        if (null !== $object->getChildrenShipmentIdentificationNumbers()) {
            $values_3 = [];
            foreach ($object->getChildrenShipmentIdentificationNumbers() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['childrenShipmentIdentificationNumbers'] = $values_3;
        }

        return $data;
    }
}
