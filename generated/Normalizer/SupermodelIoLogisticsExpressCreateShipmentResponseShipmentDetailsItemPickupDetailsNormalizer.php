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

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
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

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('localCutoffDateAndTime') && null !== $data->getLocalCutoffDateAndTime()) {
            $dataArray['localCutoffDateAndTime'] = $data->getLocalCutoffDateAndTime();
        }
        if ($data->isInitialized('gmtCutoffTime') && null !== $data->getGmtCutoffTime()) {
            $dataArray['gmtCutoffTime'] = $data->getGmtCutoffTime();
        }
        if ($data->isInitialized('cutoffTimeOffset') && null !== $data->getCutoffTimeOffset()) {
            $dataArray['cutoffTimeOffset'] = $data->getCutoffTimeOffset();
        }
        if ($data->isInitialized('pickupEarliest') && null !== $data->getPickupEarliest()) {
            $dataArray['pickupEarliest'] = $data->getPickupEarliest();
        }
        if ($data->isInitialized('pickupLatest') && null !== $data->getPickupLatest()) {
            $dataArray['pickupLatest'] = $data->getPickupLatest();
        }
        if ($data->isInitialized('totalTransitDays') && null !== $data->getTotalTransitDays()) {
            $dataArray['totalTransitDays'] = $data->getTotalTransitDays();
        }
        if ($data->isInitialized('pickupAdditionalDays') && null !== $data->getPickupAdditionalDays()) {
            $dataArray['pickupAdditionalDays'] = $data->getPickupAdditionalDays();
        }
        if ($data->isInitialized('deliveryAdditionalDays') && null !== $data->getDeliveryAdditionalDays()) {
            $dataArray['deliveryAdditionalDays'] = $data->getDeliveryAdditionalDays();
        }
        if ($data->isInitialized('pickupDayOfWeek') && null !== $data->getPickupDayOfWeek()) {
            $dataArray['pickupDayOfWeek'] = $data->getPickupDayOfWeek();
        }
        if ($data->isInitialized('deliveryDayOfWeek') && null !== $data->getDeliveryDayOfWeek()) {
            $dataArray['deliveryDayOfWeek'] = $data->getDeliveryDayOfWeek();
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails::class => false];
    }
}
