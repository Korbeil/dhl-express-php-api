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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            $object->isRequested = $data['isRequested'];
        } elseif (\array_key_exists('isRequested', $data)) {
            $object->isRequested = null;
        }
        if (\array_key_exists('closeTime', $data) && null !== $data['closeTime']) {
            $object->closeTime = $data['closeTime'];
        } elseif (\array_key_exists('closeTime', $data)) {
            $object->closeTime = null;
        }
        if (\array_key_exists('location', $data) && null !== $data['location']) {
            $object->location = $data['location'];
        } elseif (\array_key_exists('location', $data)) {
            $object->location = null;
        }
        if (\array_key_exists('specialInstructions', $data) && null !== $data['specialInstructions']) {
            $values = [];
            foreach ($data['specialInstructions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItem::class, 'json', $context);
            }
            $object->specialInstructions = $values;
        } elseif (\array_key_exists('specialInstructions', $data)) {
            $object->specialInstructions = null;
        }
        if (\array_key_exists('pickupDetails', $data) && null !== $data['pickupDetails']) {
            $object->pickupDetails = $this->denormalizer->denormalize($data['pickupDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails::class, 'json', $context);
        } elseif (\array_key_exists('pickupDetails', $data)) {
            $object->pickupDetails = null;
        }
        if (\array_key_exists('pickupRequestorDetails', $data) && null !== $data['pickupRequestorDetails']) {
            $object->pickupRequestorDetails = $this->denormalizer->denormalize($data['pickupRequestorDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails::class, 'json', $context);
        } elseif (\array_key_exists('pickupRequestorDetails', $data)) {
            $object->pickupRequestorDetails = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['isRequested'] = $data->isRequested;
        if (\array_key_exists('closeTime', get_object_vars($data)) && null !== ($data->closeTime ?? null)) {
            $dataArray['closeTime'] = $data->closeTime;
        }
        if (\array_key_exists('location', get_object_vars($data)) && null !== ($data->location ?? null)) {
            $dataArray['location'] = $data->location;
        }
        if (\array_key_exists('specialInstructions', get_object_vars($data)) && null !== ($data->specialInstructions ?? null)) {
            $values = [];
            foreach ($data->specialInstructions as $value) {
                $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['specialInstructions'] = $values;
        }
        if (\array_key_exists('pickupDetails', get_object_vars($data)) && null !== ($data->pickupDetails ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->pickupDetails, 'json', $context);
            $dataArray['pickupDetails'] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (\array_key_exists('pickupRequestorDetails', get_object_vars($data)) && null !== ($data->pickupRequestorDetails ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->pickupRequestorDetails, 'json', $context);
            $dataArray['pickupRequestorDetails'] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class => false];
    }
}
