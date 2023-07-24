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

class SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities();
        if (\array_key_exists('deliveryAdditionalDays', $data) && \is_int($data['deliveryAdditionalDays'])) {
            $data['deliveryAdditionalDays'] = (float) $data['deliveryAdditionalDays'];
        }
        if (\array_key_exists('deliveryDayOfWeek', $data) && \is_int($data['deliveryDayOfWeek'])) {
            $data['deliveryDayOfWeek'] = (float) $data['deliveryDayOfWeek'];
        }
        if (\array_key_exists('totalTransitDays', $data) && \is_int($data['totalTransitDays'])) {
            $data['totalTransitDays'] = (float) $data['totalTransitDays'];
        }
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

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('deliveryTypeCode') && null !== $object->getDeliveryTypeCode()) {
            $data['deliveryTypeCode'] = $object->getDeliveryTypeCode();
        }
        if ($object->isInitialized('estimatedDeliveryDateAndTime') && null !== $object->getEstimatedDeliveryDateAndTime()) {
            $data['estimatedDeliveryDateAndTime'] = $object->getEstimatedDeliveryDateAndTime();
        }
        if ($object->isInitialized('destinationServiceAreaCode') && null !== $object->getDestinationServiceAreaCode()) {
            $data['destinationServiceAreaCode'] = $object->getDestinationServiceAreaCode();
        }
        if ($object->isInitialized('destinationFacilityAreaCode') && null !== $object->getDestinationFacilityAreaCode()) {
            $data['destinationFacilityAreaCode'] = $object->getDestinationFacilityAreaCode();
        }
        if ($object->isInitialized('deliveryAdditionalDays') && null !== $object->getDeliveryAdditionalDays()) {
            $data['deliveryAdditionalDays'] = $object->getDeliveryAdditionalDays();
        }
        if ($object->isInitialized('deliveryDayOfWeek') && null !== $object->getDeliveryDayOfWeek()) {
            $data['deliveryDayOfWeek'] = $object->getDeliveryDayOfWeek();
        }
        if ($object->isInitialized('totalTransitDays') && null !== $object->getTotalTransitDays()) {
            $data['totalTransitDays'] = $object->getTotalTransitDays();
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities' => false];
    }
}
