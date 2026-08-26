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

class SupermodelIoLogisticsExpressCreateShipmentRequestPickupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isRequested', $data) && \is_int($data['isRequested'])) {
            $data['isRequested'] = (bool) $data['isRequested'];
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
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItem::class, 'json', $context);
            }
            $object->setSpecialInstructions($values);
        } elseif (\array_key_exists('specialInstructions', $data) && null === $data['specialInstructions']) {
            $object->setSpecialInstructions(null);
        }
        if (\array_key_exists('pickupDetails', $data) && null !== $data['pickupDetails']) {
            $object->setPickupDetails($this->denormalizer->denormalize($data['pickupDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails::class, 'json', $context));
        } elseif (\array_key_exists('pickupDetails', $data) && null === $data['pickupDetails']) {
            $object->setPickupDetails(null);
        }
        if (\array_key_exists('pickupRequestorDetails', $data) && null !== $data['pickupRequestorDetails']) {
            $object->setPickupRequestorDetails($this->denormalizer->denormalize($data['pickupRequestorDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails::class, 'json', $context));
        } elseif (\array_key_exists('pickupRequestorDetails', $data) && null === $data['pickupRequestorDetails']) {
            $object->setPickupRequestorDetails(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['isRequested'] = $data->getIsRequested();
        if ($data->isInitialized('closeTime') && null !== $data->getCloseTime()) {
            $dataArray['closeTime'] = $data->getCloseTime();
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $data->getLocation();
        }
        if ($data->isInitialized('specialInstructions') && null !== $data->getSpecialInstructions()) {
            $values = [];
            foreach ($data->getSpecialInstructions() as $value) {
                $values[] = null === $value ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['specialInstructions'] = $values;
        }
        if ($data->isInitialized('pickupDetails') && null !== $data->getPickupDetails()) {
            $dataArray['pickupDetails'] = null === $data->getPickupDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPickupDetails(), 'json', $context));
        }
        if ($data->isInitialized('pickupRequestorDetails') && null !== $data->getPickupRequestorDetails()) {
            $dataArray['pickupRequestorDetails'] = null === $data->getPickupRequestorDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPickupRequestorDetails(), 'json', $context));
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class => false];
    }
}
