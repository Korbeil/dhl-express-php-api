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

class SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('declaredValue', $data) && \is_int($data['declaredValue'])) {
            $data['declaredValue'] = (float) $data['declaredValue'];
        }
        if (\array_key_exists('isCustomsDeclarable', $data) && \is_int($data['isCustomsDeclarable'])) {
            $data['isCustomsDeclarable'] = (bool) $data['isCustomsDeclarable'];
        }
        if (\array_key_exists('productCode', $data) && null !== $data['productCode']) {
            $object->productCode = $data['productCode'];
        } elseif (\array_key_exists('productCode', $data)) {
            $object->productCode = null;
        }
        if (\array_key_exists('localProductCode', $data) && null !== $data['localProductCode']) {
            $object->localProductCode = $data['localProductCode'];
        } elseif (\array_key_exists('localProductCode', $data)) {
            $object->localProductCode = null;
        }
        if (\array_key_exists('accounts', $data) && null !== $data['accounts']) {
            $values = [];
            foreach ($data['accounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressAccount::class, 'json', $context);
            }
            $object->accounts = $values;
        } elseif (\array_key_exists('accounts', $data)) {
            $object->accounts = null;
        }
        if (\array_key_exists('valueAddedServices', $data) && null !== $data['valueAddedServices']) {
            $values_1 = [];
            foreach ($data['valueAddedServices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressValueAddedServicesRates::class, 'json', $context);
            }
            $object->valueAddedServices = $values_1;
        } elseif (\array_key_exists('valueAddedServices', $data)) {
            $object->valueAddedServices = null;
        }
        if (\array_key_exists('isCustomsDeclarable', $data) && null !== $data['isCustomsDeclarable']) {
            $object->isCustomsDeclarable = $data['isCustomsDeclarable'];
        } elseif (\array_key_exists('isCustomsDeclarable', $data)) {
            $object->isCustomsDeclarable = null;
        }
        if (\array_key_exists('declaredValue', $data) && null !== $data['declaredValue']) {
            $object->declaredValue = $data['declaredValue'];
        } elseif (\array_key_exists('declaredValue', $data)) {
            $object->declaredValue = null;
        }
        if (\array_key_exists('declaredValueCurrency', $data) && null !== $data['declaredValueCurrency']) {
            $object->declaredValueCurrency = $data['declaredValueCurrency'];
        } elseif (\array_key_exists('declaredValueCurrency', $data)) {
            $object->declaredValueCurrency = null;
        }
        if (\array_key_exists('unitOfMeasurement', $data) && null !== $data['unitOfMeasurement']) {
            $object->unitOfMeasurement = $data['unitOfMeasurement'];
        } elseif (\array_key_exists('unitOfMeasurement', $data)) {
            $object->unitOfMeasurement = null;
        }
        if (\array_key_exists('shipmentTrackingNumber', $data) && null !== $data['shipmentTrackingNumber']) {
            $object->shipmentTrackingNumber = $data['shipmentTrackingNumber'];
        } elseif (\array_key_exists('shipmentTrackingNumber', $data)) {
            $object->shipmentTrackingNumber = null;
        }
        if (\array_key_exists('packages', $data) && null !== $data['packages']) {
            $values_2 = [];
            foreach ($data['packages'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressPackageRR::class, 'json', $context);
            }
            $object->packages = $values_2;
        } elseif (\array_key_exists('packages', $data)) {
            $object->packages = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['productCode'] = $data->productCode;
        if (\array_key_exists('localProductCode', get_object_vars($data)) && null !== ($data->localProductCode ?? null)) {
            $dataArray['localProductCode'] = $data->localProductCode;
        }
        if (\array_key_exists('accounts', get_object_vars($data)) && null !== ($data->accounts ?? null)) {
            $values = [];
            foreach ($data->accounts as $value) {
                $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['accounts'] = $values;
        }
        if (\array_key_exists('valueAddedServices', get_object_vars($data)) && null !== ($data->valueAddedServices ?? null)) {
            $values_1 = [];
            foreach ($data->valueAddedServices as $value_1) {
                $normalized_1 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['valueAddedServices'] = $values_1;
        }
        $dataArray['isCustomsDeclarable'] = $data->isCustomsDeclarable;
        if (\array_key_exists('declaredValue', get_object_vars($data)) && null !== ($data->declaredValue ?? null)) {
            $dataArray['declaredValue'] = $data->declaredValue;
        }
        if (\array_key_exists('declaredValueCurrency', get_object_vars($data)) && null !== ($data->declaredValueCurrency ?? null)) {
            $dataArray['declaredValueCurrency'] = $data->declaredValueCurrency;
        }
        $dataArray['unitOfMeasurement'] = $data->unitOfMeasurement;
        if (\array_key_exists('shipmentTrackingNumber', get_object_vars($data)) && null !== ($data->shipmentTrackingNumber ?? null)) {
            $dataArray['shipmentTrackingNumber'] = $data->shipmentTrackingNumber;
        }
        $values_2 = [];
        foreach ($data->packages as $value_2) {
            $normalized_2 = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
            $values_2[] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        $dataArray['packages'] = $values_2;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem::class => false];
    }
}
