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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities();
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
            $object->deliveryTypeCode = $data['deliveryTypeCode'];
        } elseif (\array_key_exists('deliveryTypeCode', $data)) {
            $object->deliveryTypeCode = null;
        }
        if (\array_key_exists('estimatedDeliveryDateAndTime', $data) && null !== $data['estimatedDeliveryDateAndTime']) {
            $object->estimatedDeliveryDateAndTime = $data['estimatedDeliveryDateAndTime'];
        } elseif (\array_key_exists('estimatedDeliveryDateAndTime', $data)) {
            $object->estimatedDeliveryDateAndTime = null;
        }
        if (\array_key_exists('destinationServiceAreaCode', $data) && null !== $data['destinationServiceAreaCode']) {
            $object->destinationServiceAreaCode = $data['destinationServiceAreaCode'];
        } elseif (\array_key_exists('destinationServiceAreaCode', $data)) {
            $object->destinationServiceAreaCode = null;
        }
        if (\array_key_exists('destinationFacilityAreaCode', $data) && null !== $data['destinationFacilityAreaCode']) {
            $object->destinationFacilityAreaCode = $data['destinationFacilityAreaCode'];
        } elseif (\array_key_exists('destinationFacilityAreaCode', $data)) {
            $object->destinationFacilityAreaCode = null;
        }
        if (\array_key_exists('deliveryAdditionalDays', $data) && null !== $data['deliveryAdditionalDays']) {
            $object->deliveryAdditionalDays = $data['deliveryAdditionalDays'];
        } elseif (\array_key_exists('deliveryAdditionalDays', $data)) {
            $object->deliveryAdditionalDays = null;
        }
        if (\array_key_exists('deliveryDayOfWeek', $data) && null !== $data['deliveryDayOfWeek']) {
            $object->deliveryDayOfWeek = $data['deliveryDayOfWeek'];
        } elseif (\array_key_exists('deliveryDayOfWeek', $data)) {
            $object->deliveryDayOfWeek = null;
        }
        if (\array_key_exists('totalTransitDays', $data) && null !== $data['totalTransitDays']) {
            $object->totalTransitDays = $data['totalTransitDays'];
        } elseif (\array_key_exists('totalTransitDays', $data)) {
            $object->totalTransitDays = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('deliveryTypeCode', get_object_vars($data)) && null !== ($data->deliveryTypeCode ?? null)) {
            $dataArray['deliveryTypeCode'] = $data->deliveryTypeCode;
        }
        if (\array_key_exists('estimatedDeliveryDateAndTime', get_object_vars($data)) && null !== ($data->estimatedDeliveryDateAndTime ?? null)) {
            $dataArray['estimatedDeliveryDateAndTime'] = $data->estimatedDeliveryDateAndTime;
        }
        if (\array_key_exists('destinationServiceAreaCode', get_object_vars($data)) && null !== ($data->destinationServiceAreaCode ?? null)) {
            $dataArray['destinationServiceAreaCode'] = $data->destinationServiceAreaCode;
        }
        if (\array_key_exists('destinationFacilityAreaCode', get_object_vars($data)) && null !== ($data->destinationFacilityAreaCode ?? null)) {
            $dataArray['destinationFacilityAreaCode'] = $data->destinationFacilityAreaCode;
        }
        if (\array_key_exists('deliveryAdditionalDays', get_object_vars($data)) && null !== ($data->deliveryAdditionalDays ?? null)) {
            $dataArray['deliveryAdditionalDays'] = $data->deliveryAdditionalDays;
        }
        if (\array_key_exists('deliveryDayOfWeek', get_object_vars($data)) && null !== ($data->deliveryDayOfWeek ?? null)) {
            $dataArray['deliveryDayOfWeek'] = $data->deliveryDayOfWeek;
        }
        if (\array_key_exists('totalTransitDays', get_object_vars($data)) && null !== ($data->totalTransitDays ?? null)) {
            $dataArray['totalTransitDays'] = $data->totalTransitDays;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities::class => false];
    }
}
