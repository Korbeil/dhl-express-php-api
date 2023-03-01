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

class SupermodelIoLogisticsExpressCreateShipmentRequestPickupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestPickup' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestPickup' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('isRequested', $data) && null !== $data['isRequested']) {
            $object->setIsRequested($data['isRequested']);
        } elseif (\array_key_exists('isRequested', $data) && null === $data['isRequested']) {
            $object->setIsRequested(null);
        }
        if (\array_key_exists('closeTime', $data) && null !== $data['closeTime']) {
            $object->setCloseTime($data['closeTime']);
        } elseif (\array_key_exists('closeTime', $data) && null === $data['closeTime']) {
            $object->setCloseTime(null);
        }
        if (\array_key_exists('location', $data) && null !== $data['location']) {
            $object->setLocation($data['location']);
        } elseif (\array_key_exists('location', $data) && null === $data['location']) {
            $object->setLocation(null);
        }
        if (\array_key_exists('specialInstructions', $data) && null !== $data['specialInstructions']) {
            $values = [];
            foreach ($data['specialInstructions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItem', 'json', $context);
            }
            $object->setSpecialInstructions($values);
        } elseif (\array_key_exists('specialInstructions', $data) && null === $data['specialInstructions']) {
            $object->setSpecialInstructions(null);
        }
        if (\array_key_exists('pickupDetails', $data) && null !== $data['pickupDetails']) {
            $object->setPickupDetails($this->denormalizer->denormalize($data['pickupDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails', 'json', $context));
        } elseif (\array_key_exists('pickupDetails', $data) && null === $data['pickupDetails']) {
            $object->setPickupDetails(null);
        }
        if (\array_key_exists('pickupRequestorDetails', $data) && null !== $data['pickupRequestorDetails']) {
            $object->setPickupRequestorDetails($this->denormalizer->denormalize($data['pickupRequestorDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails', 'json', $context));
        } elseif (\array_key_exists('pickupRequestorDetails', $data) && null === $data['pickupRequestorDetails']) {
            $object->setPickupRequestorDetails(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['isRequested'] = $object->getIsRequested();
        if (null !== $object->getCloseTime()) {
            $data['closeTime'] = $object->getCloseTime();
        }
        if (null !== $object->getLocation()) {
            $data['location'] = $object->getLocation();
        }
        if (null !== $object->getSpecialInstructions()) {
            $values = [];
            foreach ($object->getSpecialInstructions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['specialInstructions'] = $values;
        }
        if (null !== $object->getPickupDetails()) {
            $data['pickupDetails'] = $this->normalizer->normalize($object->getPickupDetails(), 'json', $context);
        }
        if (null !== $object->getPickupRequestorDetails()) {
            $data['pickupRequestorDetails'] = $this->normalizer->normalize($object->getPickupRequestorDetails(), 'json', $context);
        }

        return $data;
    }
}
