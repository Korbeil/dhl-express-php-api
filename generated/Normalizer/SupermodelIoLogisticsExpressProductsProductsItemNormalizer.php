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

class SupermodelIoLogisticsExpressProductsProductsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isCustomerAgreement', $data) && \is_int($data['isCustomerAgreement'])) {
            $data['isCustomerAgreement'] = (bool) $data['isCustomerAgreement'];
        }
        if (\array_key_exists('productName', $data) && null !== $data['productName']) {
            $object->productName = $data['productName'];
        } elseif (\array_key_exists('productName', $data)) {
            $object->productName = null;
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
        if (\array_key_exists('localProductCountryCode', $data) && null !== $data['localProductCountryCode']) {
            $object->localProductCountryCode = $data['localProductCountryCode'];
        } elseif (\array_key_exists('localProductCountryCode', $data)) {
            $object->localProductCountryCode = null;
        }
        if (\array_key_exists('networkTypeCode', $data) && null !== $data['networkTypeCode']) {
            $object->networkTypeCode = $data['networkTypeCode'];
        } elseif (\array_key_exists('networkTypeCode', $data)) {
            $object->networkTypeCode = null;
        }
        if (\array_key_exists('isCustomerAgreement', $data) && null !== $data['isCustomerAgreement']) {
            $object->isCustomerAgreement = $data['isCustomerAgreement'];
        } elseif (\array_key_exists('isCustomerAgreement', $data)) {
            $object->isCustomerAgreement = null;
        }
        if (\array_key_exists('weight', $data) && null !== $data['weight']) {
            $object->weight = $this->denormalizer->denormalize($data['weight'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemWeight::class, 'json', $context);
        } elseif (\array_key_exists('weight', $data)) {
            $object->weight = null;
        }
        if (\array_key_exists('breakdown', $data) && null !== $data['breakdown']) {
            $values = [];
            foreach ($data['breakdown'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem::class, 'json', $context);
            }
            $object->breakdown = $values;
        } elseif (\array_key_exists('breakdown', $data)) {
            $object->breakdown = null;
        }
        if (\array_key_exists('serviceCodeMutuallyExclusiveGroups', $data) && null !== $data['serviceCodeMutuallyExclusiveGroups']) {
            $values_1 = [];
            foreach ($data['serviceCodeMutuallyExclusiveGroups'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItem::class, 'json', $context);
            }
            $object->serviceCodeMutuallyExclusiveGroups = $values_1;
        } elseif (\array_key_exists('serviceCodeMutuallyExclusiveGroups', $data)) {
            $object->serviceCodeMutuallyExclusiveGroups = null;
        }
        if (\array_key_exists('serviceCodeDependencyRuleGroups', $data) && null !== $data['serviceCodeDependencyRuleGroups']) {
            $values_2 = [];
            foreach ($data['serviceCodeDependencyRuleGroups'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem::class, 'json', $context);
            }
            $object->serviceCodeDependencyRuleGroups = $values_2;
        } elseif (\array_key_exists('serviceCodeDependencyRuleGroups', $data)) {
            $object->serviceCodeDependencyRuleGroups = null;
        }
        if (\array_key_exists('pickupCapabilities', $data) && null !== $data['pickupCapabilities']) {
            $object->pickupCapabilities = $this->denormalizer->denormalize($data['pickupCapabilities'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities::class, 'json', $context);
        } elseif (\array_key_exists('pickupCapabilities', $data)) {
            $object->pickupCapabilities = null;
        }
        if (\array_key_exists('deliveryCapabilities', $data) && null !== $data['deliveryCapabilities']) {
            $object->deliveryCapabilities = $this->denormalizer->denormalize($data['deliveryCapabilities'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities::class, 'json', $context);
        } elseif (\array_key_exists('deliveryCapabilities', $data)) {
            $object->deliveryCapabilities = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('productName', get_object_vars($data)) && null !== ($data->productName ?? null)) {
            $dataArray['productName'] = $data->productName;
        }
        if (\array_key_exists('productCode', get_object_vars($data)) && null !== ($data->productCode ?? null)) {
            $dataArray['productCode'] = $data->productCode;
        }
        if (\array_key_exists('localProductCode', get_object_vars($data)) && null !== ($data->localProductCode ?? null)) {
            $dataArray['localProductCode'] = $data->localProductCode;
        }
        if (\array_key_exists('localProductCountryCode', get_object_vars($data)) && null !== ($data->localProductCountryCode ?? null)) {
            $dataArray['localProductCountryCode'] = $data->localProductCountryCode;
        }
        if (\array_key_exists('networkTypeCode', get_object_vars($data)) && null !== ($data->networkTypeCode ?? null)) {
            $dataArray['networkTypeCode'] = $data->networkTypeCode;
        }
        if (\array_key_exists('isCustomerAgreement', get_object_vars($data)) && null !== ($data->isCustomerAgreement ?? null)) {
            $dataArray['isCustomerAgreement'] = $data->isCustomerAgreement;
        }
        if (\array_key_exists('weight', get_object_vars($data)) && null !== ($data->weight ?? null)) {
            $normalized = $this->normalizer->normalize($data->weight, 'json', $context);
            $dataArray['weight'] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        if (\array_key_exists('breakdown', get_object_vars($data)) && null !== ($data->breakdown ?? null)) {
            $values = [];
            foreach ($data->breakdown as $value) {
                $normalized_1 = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['breakdown'] = $values;
        }
        if (\array_key_exists('serviceCodeMutuallyExclusiveGroups', get_object_vars($data)) && null !== ($data->serviceCodeMutuallyExclusiveGroups ?? null)) {
            $values_1 = [];
            foreach ($data->serviceCodeMutuallyExclusiveGroups as $value_1) {
                $normalized_2 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['serviceCodeMutuallyExclusiveGroups'] = $values_1;
        }
        if (\array_key_exists('serviceCodeDependencyRuleGroups', get_object_vars($data)) && null !== ($data->serviceCodeDependencyRuleGroups ?? null)) {
            $values_2 = [];
            foreach ($data->serviceCodeDependencyRuleGroups as $value_2) {
                $normalized_3 = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = is_iterable($normalized_3) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
            }
            $dataArray['serviceCodeDependencyRuleGroups'] = $values_2;
        }
        if (\array_key_exists('pickupCapabilities', get_object_vars($data)) && null !== ($data->pickupCapabilities ?? null)) {
            $normalized_4 = $this->normalizer->normalize($data->pickupCapabilities, 'json', $context);
            $dataArray['pickupCapabilities'] = is_iterable($normalized_4) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (\array_key_exists('deliveryCapabilities', get_object_vars($data)) && null !== ($data->deliveryCapabilities ?? null)) {
            $normalized_5 = $this->normalizer->normalize($data->deliveryCapabilities, 'json', $context);
            $dataArray['deliveryCapabilities'] = is_iterable($normalized_5) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_5) : $normalized_5;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItem::class => false];
    }
}
