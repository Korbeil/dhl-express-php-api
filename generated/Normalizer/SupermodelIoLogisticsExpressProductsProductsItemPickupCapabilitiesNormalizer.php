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

class SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities();
        if (\array_key_exists('pickupAdditionalDays', $data) && \is_int($data['pickupAdditionalDays'])) {
            $data['pickupAdditionalDays'] = (float) $data['pickupAdditionalDays'];
        }
        if (\array_key_exists('pickupDayOfWeek', $data) && \is_int($data['pickupDayOfWeek'])) {
            $data['pickupDayOfWeek'] = (float) $data['pickupDayOfWeek'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
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

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('nextBusinessDay') && null !== $object->getNextBusinessDay()) {
            $data['nextBusinessDay'] = $object->getNextBusinessDay();
        }
        if ($object->isInitialized('localCutoffDateAndTime') && null !== $object->getLocalCutoffDateAndTime()) {
            $data['localCutoffDateAndTime'] = $object->getLocalCutoffDateAndTime();
        }
        if ($object->isInitialized('gMTCutoffTime') && null !== $object->getGMTCutoffTime()) {
            $data['GMTCutoffTime'] = $object->getGMTCutoffTime();
        }
        if ($object->isInitialized('pickupEarliest') && null !== $object->getPickupEarliest()) {
            $data['pickupEarliest'] = $object->getPickupEarliest();
        }
        if ($object->isInitialized('pickupLatest') && null !== $object->getPickupLatest()) {
            $data['pickupLatest'] = $object->getPickupLatest();
        }
        if ($object->isInitialized('originServiceAreaCode') && null !== $object->getOriginServiceAreaCode()) {
            $data['originServiceAreaCode'] = $object->getOriginServiceAreaCode();
        }
        if ($object->isInitialized('originFacilityAreaCode') && null !== $object->getOriginFacilityAreaCode()) {
            $data['originFacilityAreaCode'] = $object->getOriginFacilityAreaCode();
        }
        if ($object->isInitialized('pickupAdditionalDays') && null !== $object->getPickupAdditionalDays()) {
            $data['pickupAdditionalDays'] = $object->getPickupAdditionalDays();
        }
        if ($object->isInitialized('pickupDayOfWeek') && null !== $object->getPickupDayOfWeek()) {
            $data['pickupDayOfWeek'] = $object->getPickupDayOfWeek();
        }

        return $data;
    }
}
