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

class SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('deliveryAdditionalDays', $data) && \is_int($data['deliveryAdditionalDays'])) {
            $data['deliveryAdditionalDays'] = (float) $data['deliveryAdditionalDays'];
        }
        if (\array_key_exists('deliveryDayOfWeek', $data) && \is_int($data['deliveryDayOfWeek'])) {
            $data['deliveryDayOfWeek'] = (float) $data['deliveryDayOfWeek'];
        }
        if (\array_key_exists('totalTransitDays', $data) && \is_int($data['totalTransitDays'])) {
            $data['totalTransitDays'] = (float) $data['totalTransitDays'];
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

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('deliveryTypeCode') && null !== $data->getDeliveryTypeCode()) {
            $dataArray['deliveryTypeCode'] = $data->getDeliveryTypeCode();
        }
        if ($data->isInitialized('estimatedDeliveryDateAndTime') && null !== $data->getEstimatedDeliveryDateAndTime()) {
            $dataArray['estimatedDeliveryDateAndTime'] = $data->getEstimatedDeliveryDateAndTime();
        }
        if ($data->isInitialized('destinationServiceAreaCode') && null !== $data->getDestinationServiceAreaCode()) {
            $dataArray['destinationServiceAreaCode'] = $data->getDestinationServiceAreaCode();
        }
        if ($data->isInitialized('destinationFacilityAreaCode') && null !== $data->getDestinationFacilityAreaCode()) {
            $dataArray['destinationFacilityAreaCode'] = $data->getDestinationFacilityAreaCode();
        }
        if ($data->isInitialized('deliveryAdditionalDays') && null !== $data->getDeliveryAdditionalDays()) {
            $dataArray['deliveryAdditionalDays'] = $data->getDeliveryAdditionalDays();
        }
        if ($data->isInitialized('deliveryDayOfWeek') && null !== $data->getDeliveryDayOfWeek()) {
            $dataArray['deliveryDayOfWeek'] = $data->getDeliveryDayOfWeek();
        }
        if ($data->isInitialized('totalTransitDays') && null !== $data->getTotalTransitDays()) {
            $dataArray['totalTransitDays'] = $data->getTotalTransitDays();
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities::class => false];
    }
}
