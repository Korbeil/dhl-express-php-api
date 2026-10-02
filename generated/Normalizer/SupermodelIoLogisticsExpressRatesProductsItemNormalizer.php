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

class SupermodelIoLogisticsExpressRatesProductsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem();
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
            $object->weight = $this->denormalizer->denormalize($data['weight'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemWeight::class, 'json', $context);
        } elseif (\array_key_exists('weight', $data)) {
            $object->weight = null;
        }
        if (\array_key_exists('totalPrice', $data) && null !== $data['totalPrice']) {
            $values = [];
            foreach ($data['totalPrice'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem::class, 'json', $context);
            }
            $object->totalPrice = $values;
        } elseif (\array_key_exists('totalPrice', $data)) {
            $object->totalPrice = null;
        }
        if (\array_key_exists('totalPriceBreakdown', $data) && null !== $data['totalPriceBreakdown']) {
            $values_1 = [];
            foreach ($data['totalPriceBreakdown'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem::class, 'json', $context);
            }
            $object->totalPriceBreakdown = $values_1;
        } elseif (\array_key_exists('totalPriceBreakdown', $data)) {
            $object->totalPriceBreakdown = null;
        }
        if (\array_key_exists('detailedPriceBreakdown', $data) && null !== $data['detailedPriceBreakdown']) {
            $values_2 = [];
            foreach ($data['detailedPriceBreakdown'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItem::class, 'json', $context);
            }
            $object->detailedPriceBreakdown = $values_2;
        } elseif (\array_key_exists('detailedPriceBreakdown', $data)) {
            $object->detailedPriceBreakdown = null;
        }
        if (\array_key_exists('serviceCodeMutuallyExclusiveGroups', $data) && null !== $data['serviceCodeMutuallyExclusiveGroups']) {
            $values_3 = [];
            foreach ($data['serviceCodeMutuallyExclusiveGroups'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem::class, 'json', $context);
            }
            $object->serviceCodeMutuallyExclusiveGroups = $values_3;
        } elseif (\array_key_exists('serviceCodeMutuallyExclusiveGroups', $data)) {
            $object->serviceCodeMutuallyExclusiveGroups = null;
        }
        if (\array_key_exists('serviceCodeDependencyRuleGroups', $data) && null !== $data['serviceCodeDependencyRuleGroups']) {
            $values_4 = [];
            foreach ($data['serviceCodeDependencyRuleGroups'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem::class, 'json', $context);
            }
            $object->serviceCodeDependencyRuleGroups = $values_4;
        } elseif (\array_key_exists('serviceCodeDependencyRuleGroups', $data)) {
            $object->serviceCodeDependencyRuleGroups = null;
        }
        if (\array_key_exists('pickupCapabilities', $data) && null !== $data['pickupCapabilities']) {
            $object->pickupCapabilities = $this->denormalizer->denormalize($data['pickupCapabilities'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class, 'json', $context);
        } elseif (\array_key_exists('pickupCapabilities', $data)) {
            $object->pickupCapabilities = null;
        }
        if (\array_key_exists('deliveryCapabilities', $data) && null !== $data['deliveryCapabilities']) {
            $object->deliveryCapabilities = $this->denormalizer->denormalize($data['deliveryCapabilities'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities::class, 'json', $context);
        } elseif (\array_key_exists('deliveryCapabilities', $data)) {
            $object->deliveryCapabilities = null;
        }
        if (\array_key_exists('items', $data) && null !== $data['items']) {
            $values_5 = [];
            foreach ($data['items'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItem::class, 'json', $context);
            }
            $object->items = $values_5;
        } elseif (\array_key_exists('items', $data)) {
            $object->items = null;
        }
        if (\array_key_exists('pricingDate', $data) && null !== $data['pricingDate']) {
            $object->pricingDate = $data['pricingDate'];
        } elseif (\array_key_exists('pricingDate', $data)) {
            $object->pricingDate = null;
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
        $normalized = null === $data->weight ? null : $this->normalizer->normalize($data->weight, 'json', $context);
        $dataArray['weight'] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        $values = [];
        foreach ($data->totalPrice as $value) {
            $normalized_1 = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
            $values[] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        $dataArray['totalPrice'] = $values;
        if (\array_key_exists('totalPriceBreakdown', get_object_vars($data)) && null !== ($data->totalPriceBreakdown ?? null)) {
            $values_1 = [];
            foreach ($data->totalPriceBreakdown as $value_1) {
                $normalized_2 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['totalPriceBreakdown'] = $values_1;
        }
        if (\array_key_exists('detailedPriceBreakdown', get_object_vars($data)) && null !== ($data->detailedPriceBreakdown ?? null)) {
            $values_2 = [];
            foreach ($data->detailedPriceBreakdown as $value_2) {
                $normalized_3 = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = is_iterable($normalized_3) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
            }
            $dataArray['detailedPriceBreakdown'] = $values_2;
        }
        if (\array_key_exists('serviceCodeMutuallyExclusiveGroups', get_object_vars($data)) && null !== ($data->serviceCodeMutuallyExclusiveGroups ?? null)) {
            $values_3 = [];
            foreach ($data->serviceCodeMutuallyExclusiveGroups as $value_3) {
                $normalized_4 = null === $value_3 ? null : $this->normalizer->normalize($value_3, 'json', $context);
                $values_3[] = is_iterable($normalized_4) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_4) : $normalized_4;
            }
            $dataArray['serviceCodeMutuallyExclusiveGroups'] = $values_3;
        }
        if (\array_key_exists('serviceCodeDependencyRuleGroups', get_object_vars($data)) && null !== ($data->serviceCodeDependencyRuleGroups ?? null)) {
            $values_4 = [];
            foreach ($data->serviceCodeDependencyRuleGroups as $value_4) {
                $normalized_5 = null === $value_4 ? null : $this->normalizer->normalize($value_4, 'json', $context);
                $values_4[] = is_iterable($normalized_5) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_5) : $normalized_5;
            }
            $dataArray['serviceCodeDependencyRuleGroups'] = $values_4;
        }
        if (\array_key_exists('pickupCapabilities', get_object_vars($data)) && null !== ($data->pickupCapabilities ?? null)) {
            $normalized_6 = $this->normalizer->normalize($data->pickupCapabilities, 'json', $context);
            $dataArray['pickupCapabilities'] = is_iterable($normalized_6) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_6) : $normalized_6;
        }
        if (\array_key_exists('deliveryCapabilities', get_object_vars($data)) && null !== ($data->deliveryCapabilities ?? null)) {
            $normalized_7 = $this->normalizer->normalize($data->deliveryCapabilities, 'json', $context);
            $dataArray['deliveryCapabilities'] = is_iterable($normalized_7) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_7) : $normalized_7;
        }
        if (\array_key_exists('items', get_object_vars($data)) && null !== ($data->items ?? null)) {
            $values_5 = [];
            foreach ($data->items as $value_5) {
                $normalized_8 = null === $value_5 ? null : $this->normalizer->normalize($value_5, 'json', $context);
                $values_5[] = is_iterable($normalized_8) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_8) : $normalized_8;
            }
            $dataArray['items'] = $values_5;
        }
        if (\array_key_exists('pricingDate', get_object_vars($data)) && null !== ($data->pricingDate ?? null)) {
            $dataArray['pricingDate'] = $data->pricingDate;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class => false];
    }
}
