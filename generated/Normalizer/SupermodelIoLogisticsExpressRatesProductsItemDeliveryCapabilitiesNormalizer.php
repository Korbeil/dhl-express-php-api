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

class SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('deliveryTypeCode', $data) && null !== $data['deliveryTypeCode']) {
            $object->setDeliveryTypeCode($data['deliveryTypeCode']);
        } elseif (\array_key_exists('deliveryTypeCode', $data) && null === $data['deliveryTypeCode']) {
            $object->setDeliveryTypeCode(null);
        }
        if (\array_key_exists('estimatedDeliveryDateAndTime', $data) && null !== $data['estimatedDeliveryDateAndTime']) {
            $object->setEstimatedDeliveryDateAndTime($data['estimatedDeliveryDateAndTime']);
        } elseif (\array_key_exists('estimatedDeliveryDateAndTime', $data) && null === $data['estimatedDeliveryDateAndTime']) {
            $object->setEstimatedDeliveryDateAndTime(null);
        }
        if (\array_key_exists('destinationServiceAreaCode', $data) && null !== $data['destinationServiceAreaCode']) {
            $object->setDestinationServiceAreaCode($data['destinationServiceAreaCode']);
        } elseif (\array_key_exists('destinationServiceAreaCode', $data) && null === $data['destinationServiceAreaCode']) {
            $object->setDestinationServiceAreaCode(null);
        }
        if (\array_key_exists('destinationFacilityAreaCode', $data) && null !== $data['destinationFacilityAreaCode']) {
            $object->setDestinationFacilityAreaCode($data['destinationFacilityAreaCode']);
        } elseif (\array_key_exists('destinationFacilityAreaCode', $data) && null === $data['destinationFacilityAreaCode']) {
            $object->setDestinationFacilityAreaCode(null);
        }
        if (\array_key_exists('deliveryAdditionalDays', $data) && null !== $data['deliveryAdditionalDays']) {
            $object->setDeliveryAdditionalDays($data['deliveryAdditionalDays']);
        } elseif (\array_key_exists('deliveryAdditionalDays', $data) && null === $data['deliveryAdditionalDays']) {
            $object->setDeliveryAdditionalDays(null);
        }
        if (\array_key_exists('deliveryDayOfWeek', $data) && null !== $data['deliveryDayOfWeek']) {
            $object->setDeliveryDayOfWeek($data['deliveryDayOfWeek']);
        } elseif (\array_key_exists('deliveryDayOfWeek', $data) && null === $data['deliveryDayOfWeek']) {
            $object->setDeliveryDayOfWeek(null);
        }
        if (\array_key_exists('totalTransitDays', $data) && null !== $data['totalTransitDays']) {
            $object->setTotalTransitDays($data['totalTransitDays']);
        } elseif (\array_key_exists('totalTransitDays', $data) && null === $data['totalTransitDays']) {
            $object->setTotalTransitDays(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDeliveryTypeCode()) {
            $data['deliveryTypeCode'] = $object->getDeliveryTypeCode();
        }
        if (null !== $object->getEstimatedDeliveryDateAndTime()) {
            $data['estimatedDeliveryDateAndTime'] = $object->getEstimatedDeliveryDateAndTime();
        }
        if (null !== $object->getDestinationServiceAreaCode()) {
            $data['destinationServiceAreaCode'] = $object->getDestinationServiceAreaCode();
        }
        if (null !== $object->getDestinationFacilityAreaCode()) {
            $data['destinationFacilityAreaCode'] = $object->getDestinationFacilityAreaCode();
        }
        if (null !== $object->getDeliveryAdditionalDays()) {
            $data['deliveryAdditionalDays'] = $object->getDeliveryAdditionalDays();
        }
        if (null !== $object->getDeliveryDayOfWeek()) {
            $data['deliveryDayOfWeek'] = $object->getDeliveryDayOfWeek();
        }
        if (null !== $object->getTotalTransitDays()) {
            $data['totalTransitDays'] = $object->getTotalTransitDays();
        }

        return $data;
    }
}
