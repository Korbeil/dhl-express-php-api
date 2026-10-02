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

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('localCutoffDateAndTime', $data) && null !== $data['localCutoffDateAndTime']) {
            $object->localCutoffDateAndTime = $data['localCutoffDateAndTime'];
        } elseif (\array_key_exists('localCutoffDateAndTime', $data)) {
            $object->localCutoffDateAndTime = null;
        }
        if (\array_key_exists('gmtCutoffTime', $data) && null !== $data['gmtCutoffTime']) {
            $object->gmtCutoffTime = $data['gmtCutoffTime'];
        } elseif (\array_key_exists('gmtCutoffTime', $data)) {
            $object->gmtCutoffTime = null;
        }
        if (\array_key_exists('cutoffTimeOffset', $data) && null !== $data['cutoffTimeOffset']) {
            $object->cutoffTimeOffset = $data['cutoffTimeOffset'];
        } elseif (\array_key_exists('cutoffTimeOffset', $data)) {
            $object->cutoffTimeOffset = null;
        }
        if (\array_key_exists('pickupEarliest', $data) && null !== $data['pickupEarliest']) {
            $object->pickupEarliest = $data['pickupEarliest'];
        } elseif (\array_key_exists('pickupEarliest', $data)) {
            $object->pickupEarliest = null;
        }
        if (\array_key_exists('pickupLatest', $data) && null !== $data['pickupLatest']) {
            $object->pickupLatest = $data['pickupLatest'];
        } elseif (\array_key_exists('pickupLatest', $data)) {
            $object->pickupLatest = null;
        }
        if (\array_key_exists('totalTransitDays', $data) && null !== $data['totalTransitDays']) {
            $object->totalTransitDays = $data['totalTransitDays'];
        } elseif (\array_key_exists('totalTransitDays', $data)) {
            $object->totalTransitDays = null;
        }
        if (\array_key_exists('pickupAdditionalDays', $data) && null !== $data['pickupAdditionalDays']) {
            $object->pickupAdditionalDays = $data['pickupAdditionalDays'];
        } elseif (\array_key_exists('pickupAdditionalDays', $data)) {
            $object->pickupAdditionalDays = null;
        }
        if (\array_key_exists('deliveryAdditionalDays', $data) && null !== $data['deliveryAdditionalDays']) {
            $object->deliveryAdditionalDays = $data['deliveryAdditionalDays'];
        } elseif (\array_key_exists('deliveryAdditionalDays', $data)) {
            $object->deliveryAdditionalDays = null;
        }
        if (\array_key_exists('pickupDayOfWeek', $data) && null !== $data['pickupDayOfWeek']) {
            $object->pickupDayOfWeek = $data['pickupDayOfWeek'];
        } elseif (\array_key_exists('pickupDayOfWeek', $data)) {
            $object->pickupDayOfWeek = null;
        }
        if (\array_key_exists('deliveryDayOfWeek', $data) && null !== $data['deliveryDayOfWeek']) {
            $object->deliveryDayOfWeek = $data['deliveryDayOfWeek'];
        } elseif (\array_key_exists('deliveryDayOfWeek', $data)) {
            $object->deliveryDayOfWeek = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('localCutoffDateAndTime', get_object_vars($data)) && null !== ($data->localCutoffDateAndTime ?? null)) {
            $dataArray['localCutoffDateAndTime'] = $data->localCutoffDateAndTime;
        }
        if (\array_key_exists('gmtCutoffTime', get_object_vars($data)) && null !== ($data->gmtCutoffTime ?? null)) {
            $dataArray['gmtCutoffTime'] = $data->gmtCutoffTime;
        }
        if (\array_key_exists('cutoffTimeOffset', get_object_vars($data)) && null !== ($data->cutoffTimeOffset ?? null)) {
            $dataArray['cutoffTimeOffset'] = $data->cutoffTimeOffset;
        }
        if (\array_key_exists('pickupEarliest', get_object_vars($data)) && null !== ($data->pickupEarliest ?? null)) {
            $dataArray['pickupEarliest'] = $data->pickupEarliest;
        }
        if (\array_key_exists('pickupLatest', get_object_vars($data)) && null !== ($data->pickupLatest ?? null)) {
            $dataArray['pickupLatest'] = $data->pickupLatest;
        }
        if (\array_key_exists('totalTransitDays', get_object_vars($data)) && null !== ($data->totalTransitDays ?? null)) {
            $dataArray['totalTransitDays'] = $data->totalTransitDays;
        }
        if (\array_key_exists('pickupAdditionalDays', get_object_vars($data)) && null !== ($data->pickupAdditionalDays ?? null)) {
            $dataArray['pickupAdditionalDays'] = $data->pickupAdditionalDays;
        }
        if (\array_key_exists('deliveryAdditionalDays', get_object_vars($data)) && null !== ($data->deliveryAdditionalDays ?? null)) {
            $dataArray['deliveryAdditionalDays'] = $data->deliveryAdditionalDays;
        }
        if (\array_key_exists('pickupDayOfWeek', get_object_vars($data)) && null !== ($data->pickupDayOfWeek ?? null)) {
            $dataArray['pickupDayOfWeek'] = $data->pickupDayOfWeek;
        }
        if (\array_key_exists('deliveryDayOfWeek', get_object_vars($data)) && null !== ($data->deliveryDayOfWeek ?? null)) {
            $dataArray['deliveryDayOfWeek'] = $data->deliveryDayOfWeek;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails::class => false];
    }
}
