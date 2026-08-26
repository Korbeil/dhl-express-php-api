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

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
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
            $object->setNextBusinessDay($data['nextBusinessDay']);
        } elseif (\array_key_exists('nextBusinessDay', $data) && null === $data['nextBusinessDay']) {
            $object->setNextBusinessDay(null);
        }
        if (\array_key_exists('localCutoffDateAndTime', $data) && null !== $data['localCutoffDateAndTime']) {
            $object->setLocalCutoffDateAndTime($data['localCutoffDateAndTime']);
        } elseif (\array_key_exists('localCutoffDateAndTime', $data) && null === $data['localCutoffDateAndTime']) {
            $object->setLocalCutoffDateAndTime(null);
        }
        if (\array_key_exists('GMTCutoffTime', $data) && null !== $data['GMTCutoffTime']) {
            $object->setGMTCutoffTime($data['GMTCutoffTime']);
        } elseif (\array_key_exists('GMTCutoffTime', $data) && null === $data['GMTCutoffTime']) {
            $object->setGMTCutoffTime(null);
        }
        if (\array_key_exists('pickupEarliest', $data) && null !== $data['pickupEarliest']) {
            $object->setPickupEarliest($data['pickupEarliest']);
        } elseif (\array_key_exists('pickupEarliest', $data) && null === $data['pickupEarliest']) {
            $object->setPickupEarliest(null);
        }
        if (\array_key_exists('pickupLatest', $data) && null !== $data['pickupLatest']) {
            $object->setPickupLatest($data['pickupLatest']);
        } elseif (\array_key_exists('pickupLatest', $data) && null === $data['pickupLatest']) {
            $object->setPickupLatest(null);
        }
        if (\array_key_exists('originServiceAreaCode', $data) && null !== $data['originServiceAreaCode']) {
            $object->setOriginServiceAreaCode($data['originServiceAreaCode']);
        } elseif (\array_key_exists('originServiceAreaCode', $data) && null === $data['originServiceAreaCode']) {
            $object->setOriginServiceAreaCode(null);
        }
        if (\array_key_exists('originFacilityAreaCode', $data) && null !== $data['originFacilityAreaCode']) {
            $object->setOriginFacilityAreaCode($data['originFacilityAreaCode']);
        } elseif (\array_key_exists('originFacilityAreaCode', $data) && null === $data['originFacilityAreaCode']) {
            $object->setOriginFacilityAreaCode(null);
        }
        if (\array_key_exists('pickupAdditionalDays', $data) && null !== $data['pickupAdditionalDays']) {
            $object->setPickupAdditionalDays($data['pickupAdditionalDays']);
        } elseif (\array_key_exists('pickupAdditionalDays', $data) && null === $data['pickupAdditionalDays']) {
            $object->setPickupAdditionalDays(null);
        }
        if (\array_key_exists('pickupDayOfWeek', $data) && null !== $data['pickupDayOfWeek']) {
            $object->setPickupDayOfWeek($data['pickupDayOfWeek']);
        } elseif (\array_key_exists('pickupDayOfWeek', $data) && null === $data['pickupDayOfWeek']) {
            $object->setPickupDayOfWeek(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nextBusinessDay') && null !== $data->getNextBusinessDay()) {
            $dataArray['nextBusinessDay'] = $data->getNextBusinessDay();
        }
        if ($data->isInitialized('localCutoffDateAndTime') && null !== $data->getLocalCutoffDateAndTime()) {
            $dataArray['localCutoffDateAndTime'] = $data->getLocalCutoffDateAndTime();
        }
        if ($data->isInitialized('gMTCutoffTime') && null !== $data->getGMTCutoffTime()) {
            $dataArray['GMTCutoffTime'] = $data->getGMTCutoffTime();
        }
        if ($data->isInitialized('pickupEarliest') && null !== $data->getPickupEarliest()) {
            $dataArray['pickupEarliest'] = $data->getPickupEarliest();
        }
        if ($data->isInitialized('pickupLatest') && null !== $data->getPickupLatest()) {
            $dataArray['pickupLatest'] = $data->getPickupLatest();
        }
        if ($data->isInitialized('originServiceAreaCode') && null !== $data->getOriginServiceAreaCode()) {
            $dataArray['originServiceAreaCode'] = $data->getOriginServiceAreaCode();
        }
        if ($data->isInitialized('originFacilityAreaCode') && null !== $data->getOriginFacilityAreaCode()) {
            $dataArray['originFacilityAreaCode'] = $data->getOriginFacilityAreaCode();
        }
        if ($data->isInitialized('pickupAdditionalDays') && null !== $data->getPickupAdditionalDays()) {
            $dataArray['pickupAdditionalDays'] = $data->getPickupAdditionalDays();
        }
        if ($data->isInitialized('pickupDayOfWeek') && null !== $data->getPickupDayOfWeek()) {
            $dataArray['pickupDayOfWeek'] = $data->getPickupDayOfWeek();
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class => false];
    }
}
