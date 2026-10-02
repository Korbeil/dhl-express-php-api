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

class SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('pickupAdditionalDays', $data) && \is_int($data['pickupAdditionalDays'])) {
            $data['pickupAdditionalDays'] = (float) $data['pickupAdditionalDays'];
        }
        if (\array_key_exists('pickupDayOfWeek', $data) && \is_int($data['pickupDayOfWeek'])) {
            $data['pickupDayOfWeek'] = (float) $data['pickupDayOfWeek'];
        }
        if (\array_key_exists('nextBusinessDay', $data) && \is_int($data['nextBusinessDay'])) {
            $data['nextBusinessDay'] = (bool) $data['nextBusinessDay'];
        }
        if (\array_key_exists('nextBusinessDay', $data) && null !== $data['nextBusinessDay']) {
            $object->nextBusinessDay = $data['nextBusinessDay'];
        } elseif (\array_key_exists('nextBusinessDay', $data)) {
            $object->nextBusinessDay = null;
        }
        if (\array_key_exists('localCutoffDateAndTime', $data) && null !== $data['localCutoffDateAndTime']) {
            $object->localCutoffDateAndTime = $data['localCutoffDateAndTime'];
        } elseif (\array_key_exists('localCutoffDateAndTime', $data)) {
            $object->localCutoffDateAndTime = null;
        }
        if (\array_key_exists('GMTCutoffTime', $data) && null !== $data['GMTCutoffTime']) {
            $object->gMTCutoffTime = $data['GMTCutoffTime'];
        } elseif (\array_key_exists('GMTCutoffTime', $data)) {
            $object->gMTCutoffTime = null;
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
        if (\array_key_exists('originServiceAreaCode', $data) && null !== $data['originServiceAreaCode']) {
            $object->originServiceAreaCode = $data['originServiceAreaCode'];
        } elseif (\array_key_exists('originServiceAreaCode', $data)) {
            $object->originServiceAreaCode = null;
        }
        if (\array_key_exists('originFacilityAreaCode', $data) && null !== $data['originFacilityAreaCode']) {
            $object->originFacilityAreaCode = $data['originFacilityAreaCode'];
        } elseif (\array_key_exists('originFacilityAreaCode', $data)) {
            $object->originFacilityAreaCode = null;
        }
        if (\array_key_exists('pickupAdditionalDays', $data) && null !== $data['pickupAdditionalDays']) {
            $object->pickupAdditionalDays = $data['pickupAdditionalDays'];
        } elseif (\array_key_exists('pickupAdditionalDays', $data)) {
            $object->pickupAdditionalDays = null;
        }
        if (\array_key_exists('pickupDayOfWeek', $data) && null !== $data['pickupDayOfWeek']) {
            $object->pickupDayOfWeek = $data['pickupDayOfWeek'];
        } elseif (\array_key_exists('pickupDayOfWeek', $data)) {
            $object->pickupDayOfWeek = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('nextBusinessDay', get_object_vars($data)) && null !== ($data->nextBusinessDay ?? null)) {
            $dataArray['nextBusinessDay'] = $data->nextBusinessDay;
        }
        if (\array_key_exists('localCutoffDateAndTime', get_object_vars($data)) && null !== ($data->localCutoffDateAndTime ?? null)) {
            $dataArray['localCutoffDateAndTime'] = $data->localCutoffDateAndTime;
        }
        if (\array_key_exists('gMTCutoffTime', get_object_vars($data)) && null !== ($data->gMTCutoffTime ?? null)) {
            $dataArray['GMTCutoffTime'] = $data->gMTCutoffTime;
        }
        if (\array_key_exists('pickupEarliest', get_object_vars($data)) && null !== ($data->pickupEarliest ?? null)) {
            $dataArray['pickupEarliest'] = $data->pickupEarliest;
        }
        if (\array_key_exists('pickupLatest', get_object_vars($data)) && null !== ($data->pickupLatest ?? null)) {
            $dataArray['pickupLatest'] = $data->pickupLatest;
        }
        if (\array_key_exists('originServiceAreaCode', get_object_vars($data)) && null !== ($data->originServiceAreaCode ?? null)) {
            $dataArray['originServiceAreaCode'] = $data->originServiceAreaCode;
        }
        if (\array_key_exists('originFacilityAreaCode', get_object_vars($data)) && null !== ($data->originFacilityAreaCode ?? null)) {
            $dataArray['originFacilityAreaCode'] = $data->originFacilityAreaCode;
        }
        if (\array_key_exists('pickupAdditionalDays', get_object_vars($data)) && null !== ($data->pickupAdditionalDays ?? null)) {
            $dataArray['pickupAdditionalDays'] = $data->pickupAdditionalDays;
        }
        if (\array_key_exists('pickupDayOfWeek', get_object_vars($data)) && null !== ($data->pickupDayOfWeek ?? null)) {
            $dataArray['pickupDayOfWeek'] = $data->pickupDayOfWeek;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class => false];
    }
}
