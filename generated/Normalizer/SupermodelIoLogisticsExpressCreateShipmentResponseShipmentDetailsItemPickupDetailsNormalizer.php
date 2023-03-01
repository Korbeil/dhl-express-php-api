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

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('localCutoffDateAndTime', $data) && null !== $data['localCutoffDateAndTime']) {
            $object->setLocalCutoffDateAndTime($data['localCutoffDateAndTime']);
        } elseif (\array_key_exists('localCutoffDateAndTime', $data) && null === $data['localCutoffDateAndTime']) {
            $object->setLocalCutoffDateAndTime(null);
        }
        if (\array_key_exists('gmtCutoffTime', $data) && null !== $data['gmtCutoffTime']) {
            $object->setGmtCutoffTime($data['gmtCutoffTime']);
        } elseif (\array_key_exists('gmtCutoffTime', $data) && null === $data['gmtCutoffTime']) {
            $object->setGmtCutoffTime(null);
        }
        if (\array_key_exists('cutoffTimeOffset', $data) && null !== $data['cutoffTimeOffset']) {
            $object->setCutoffTimeOffset($data['cutoffTimeOffset']);
        } elseif (\array_key_exists('cutoffTimeOffset', $data) && null === $data['cutoffTimeOffset']) {
            $object->setCutoffTimeOffset(null);
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
        if (\array_key_exists('totalTransitDays', $data) && null !== $data['totalTransitDays']) {
            $object->setTotalTransitDays($data['totalTransitDays']);
        } elseif (\array_key_exists('totalTransitDays', $data) && null === $data['totalTransitDays']) {
            $object->setTotalTransitDays(null);
        }
        if (\array_key_exists('pickupAdditionalDays', $data) && null !== $data['pickupAdditionalDays']) {
            $object->setPickupAdditionalDays($data['pickupAdditionalDays']);
        } elseif (\array_key_exists('pickupAdditionalDays', $data) && null === $data['pickupAdditionalDays']) {
            $object->setPickupAdditionalDays(null);
        }
        if (\array_key_exists('deliveryAdditionalDays', $data) && null !== $data['deliveryAdditionalDays']) {
            $object->setDeliveryAdditionalDays($data['deliveryAdditionalDays']);
        } elseif (\array_key_exists('deliveryAdditionalDays', $data) && null === $data['deliveryAdditionalDays']) {
            $object->setDeliveryAdditionalDays(null);
        }
        if (\array_key_exists('pickupDayOfWeek', $data) && null !== $data['pickupDayOfWeek']) {
            $object->setPickupDayOfWeek($data['pickupDayOfWeek']);
        } elseif (\array_key_exists('pickupDayOfWeek', $data) && null === $data['pickupDayOfWeek']) {
            $object->setPickupDayOfWeek(null);
        }
        if (\array_key_exists('deliveryDayOfWeek', $data) && null !== $data['deliveryDayOfWeek']) {
            $object->setDeliveryDayOfWeek($data['deliveryDayOfWeek']);
        } elseif (\array_key_exists('deliveryDayOfWeek', $data) && null === $data['deliveryDayOfWeek']) {
            $object->setDeliveryDayOfWeek(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('localCutoffDateAndTime') && null !== $object->getLocalCutoffDateAndTime()) {
            $data['localCutoffDateAndTime'] = $object->getLocalCutoffDateAndTime();
        }
        if ($object->isInitialized('gmtCutoffTime') && null !== $object->getGmtCutoffTime()) {
            $data['gmtCutoffTime'] = $object->getGmtCutoffTime();
        }
        if ($object->isInitialized('cutoffTimeOffset') && null !== $object->getCutoffTimeOffset()) {
            $data['cutoffTimeOffset'] = $object->getCutoffTimeOffset();
        }
        if ($object->isInitialized('pickupEarliest') && null !== $object->getPickupEarliest()) {
            $data['pickupEarliest'] = $object->getPickupEarliest();
        }
        if ($object->isInitialized('pickupLatest') && null !== $object->getPickupLatest()) {
            $data['pickupLatest'] = $object->getPickupLatest();
        }
        if ($object->isInitialized('totalTransitDays') && null !== $object->getTotalTransitDays()) {
            $data['totalTransitDays'] = $object->getTotalTransitDays();
        }
        if ($object->isInitialized('pickupAdditionalDays') && null !== $object->getPickupAdditionalDays()) {
            $data['pickupAdditionalDays'] = $object->getPickupAdditionalDays();
        }
        if ($object->isInitialized('deliveryAdditionalDays') && null !== $object->getDeliveryAdditionalDays()) {
            $data['deliveryAdditionalDays'] = $object->getDeliveryAdditionalDays();
        }
        if ($object->isInitialized('pickupDayOfWeek') && null !== $object->getPickupDayOfWeek()) {
            $data['pickupDayOfWeek'] = $object->getPickupDayOfWeek();
        }
        if ($object->isInitialized('deliveryDayOfWeek') && null !== $object->getDeliveryDayOfWeek()) {
            $data['deliveryDayOfWeek'] = $object->getDeliveryDayOfWeek();
        }

        return $data;
    }
}
