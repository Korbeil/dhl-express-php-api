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

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
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
            $object->setProductName($data['productName']);
        } elseif (\array_key_exists('productName', $data) && null === $data['productName']) {
            $object->setProductName(null);
        }
        if (\array_key_exists('productCode', $data) && null !== $data['productCode']) {
            $object->setProductCode($data['productCode']);
        } elseif (\array_key_exists('productCode', $data) && null === $data['productCode']) {
            $object->setProductCode(null);
        }
        if (\array_key_exists('localProductCode', $data) && null !== $data['localProductCode']) {
            $object->setLocalProductCode($data['localProductCode']);
        } elseif (\array_key_exists('localProductCode', $data) && null === $data['localProductCode']) {
            $object->setLocalProductCode(null);
        }
        if (\array_key_exists('localProductCountryCode', $data) && null !== $data['localProductCountryCode']) {
            $object->setLocalProductCountryCode($data['localProductCountryCode']);
        } elseif (\array_key_exists('localProductCountryCode', $data) && null === $data['localProductCountryCode']) {
            $object->setLocalProductCountryCode(null);
        }
        if (\array_key_exists('networkTypeCode', $data) && null !== $data['networkTypeCode']) {
            $object->setNetworkTypeCode($data['networkTypeCode']);
        } elseif (\array_key_exists('networkTypeCode', $data) && null === $data['networkTypeCode']) {
            $object->setNetworkTypeCode(null);
        }
        if (\array_key_exists('isCustomerAgreement', $data) && null !== $data['isCustomerAgreement']) {
            $object->setIsCustomerAgreement($data['isCustomerAgreement']);
        } elseif (\array_key_exists('isCustomerAgreement', $data) && null === $data['isCustomerAgreement']) {
            $object->setIsCustomerAgreement(null);
        }
        if (\array_key_exists('weight', $data) && null !== $data['weight']) {
            $object->setWeight($this->denormalizer->denormalize($data['weight'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemWeight::class, 'json', $context));
        } elseif (\array_key_exists('weight', $data) && null === $data['weight']) {
            $object->setWeight(null);
        }
        if (\array_key_exists('totalPrice', $data) && null !== $data['totalPrice']) {
            $values = [];
            foreach ($data['totalPrice'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem::class, 'json', $context);
            }
            $object->setTotalPrice($values);
        } elseif (\array_key_exists('totalPrice', $data) && null === $data['totalPrice']) {
            $object->setTotalPrice(null);
        }
        if (\array_key_exists('totalPriceBreakdown', $data) && null !== $data['totalPriceBreakdown']) {
            $values_1 = [];
            foreach ($data['totalPriceBreakdown'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem::class, 'json', $context);
            }
            $object->setTotalPriceBreakdown($values_1);
        } elseif (\array_key_exists('totalPriceBreakdown', $data) && null === $data['totalPriceBreakdown']) {
            $object->setTotalPriceBreakdown(null);
        }
        if (\array_key_exists('detailedPriceBreakdown', $data) && null !== $data['detailedPriceBreakdown']) {
            $values_2 = [];
            foreach ($data['detailedPriceBreakdown'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItem::class, 'json', $context);
            }
            $object->setDetailedPriceBreakdown($values_2);
        } elseif (\array_key_exists('detailedPriceBreakdown', $data) && null === $data['detailedPriceBreakdown']) {
            $object->setDetailedPriceBreakdown(null);
        }
        if (\array_key_exists('serviceCodeMutuallyExclusiveGroups', $data) && null !== $data['serviceCodeMutuallyExclusiveGroups']) {
            $values_3 = [];
            foreach ($data['serviceCodeMutuallyExclusiveGroups'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem::class, 'json', $context);
            }
            $object->setServiceCodeMutuallyExclusiveGroups($values_3);
        } elseif (\array_key_exists('serviceCodeMutuallyExclusiveGroups', $data) && null === $data['serviceCodeMutuallyExclusiveGroups']) {
            $object->setServiceCodeMutuallyExclusiveGroups(null);
        }
        if (\array_key_exists('serviceCodeDependencyRuleGroups', $data) && null !== $data['serviceCodeDependencyRuleGroups']) {
            $values_4 = [];
            foreach ($data['serviceCodeDependencyRuleGroups'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem::class, 'json', $context);
            }
            $object->setServiceCodeDependencyRuleGroups($values_4);
        } elseif (\array_key_exists('serviceCodeDependencyRuleGroups', $data) && null === $data['serviceCodeDependencyRuleGroups']) {
            $object->setServiceCodeDependencyRuleGroups(null);
        }
        if (\array_key_exists('pickupCapabilities', $data) && null !== $data['pickupCapabilities']) {
            $object->setPickupCapabilities($this->denormalizer->denormalize($data['pickupCapabilities'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class, 'json', $context));
        } elseif (\array_key_exists('pickupCapabilities', $data) && null === $data['pickupCapabilities']) {
            $object->setPickupCapabilities(null);
        }
        if (\array_key_exists('deliveryCapabilities', $data) && null !== $data['deliveryCapabilities']) {
            $object->setDeliveryCapabilities($this->denormalizer->denormalize($data['deliveryCapabilities'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities::class, 'json', $context));
        } elseif (\array_key_exists('deliveryCapabilities', $data) && null === $data['deliveryCapabilities']) {
            $object->setDeliveryCapabilities(null);
        }
        if (\array_key_exists('items', $data) && null !== $data['items']) {
            $values_5 = [];
            foreach ($data['items'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItem::class, 'json', $context);
            }
            $object->setItems($values_5);
        } elseif (\array_key_exists('items', $data) && null === $data['items']) {
            $object->setItems(null);
        }
        if (\array_key_exists('pricingDate', $data) && null !== $data['pricingDate']) {
            $object->setPricingDate($data['pricingDate']);
        } elseif (\array_key_exists('pricingDate', $data) && null === $data['pricingDate']) {
            $object->setPricingDate(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('productName') && null !== $data->getProductName()) {
            $dataArray['productName'] = $data->getProductName();
        }
        if ($data->isInitialized('productCode') && null !== $data->getProductCode()) {
            $dataArray['productCode'] = $data->getProductCode();
        }
        if ($data->isInitialized('localProductCode') && null !== $data->getLocalProductCode()) {
            $dataArray['localProductCode'] = $data->getLocalProductCode();
        }
        if ($data->isInitialized('localProductCountryCode') && null !== $data->getLocalProductCountryCode()) {
            $dataArray['localProductCountryCode'] = $data->getLocalProductCountryCode();
        }
        if ($data->isInitialized('networkTypeCode') && null !== $data->getNetworkTypeCode()) {
            $dataArray['networkTypeCode'] = $data->getNetworkTypeCode();
        }
        if ($data->isInitialized('isCustomerAgreement') && null !== $data->getIsCustomerAgreement()) {
            $dataArray['isCustomerAgreement'] = $data->getIsCustomerAgreement();
        }
        $dataArray['weight'] = null === $data->getWeight() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getWeight(), 'json', $context));
        $values = [];
        foreach ($data->getTotalPrice() as $value) {
            $values[] = null === $value ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['totalPrice'] = $values;
        if ($data->isInitialized('totalPriceBreakdown') && null !== $data->getTotalPriceBreakdown()) {
            $values_1 = [];
            foreach ($data->getTotalPriceBreakdown() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['totalPriceBreakdown'] = $values_1;
        }
        if ($data->isInitialized('detailedPriceBreakdown') && null !== $data->getDetailedPriceBreakdown()) {
            $values_2 = [];
            foreach ($data->getDetailedPriceBreakdown() as $value_2) {
                $values_2[] = null === $value_2 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['detailedPriceBreakdown'] = $values_2;
        }
        if ($data->isInitialized('serviceCodeMutuallyExclusiveGroups') && null !== $data->getServiceCodeMutuallyExclusiveGroups()) {
            $values_3 = [];
            foreach ($data->getServiceCodeMutuallyExclusiveGroups() as $value_3) {
                $values_3[] = null === $value_3 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['serviceCodeMutuallyExclusiveGroups'] = $values_3;
        }
        if ($data->isInitialized('serviceCodeDependencyRuleGroups') && null !== $data->getServiceCodeDependencyRuleGroups()) {
            $values_4 = [];
            foreach ($data->getServiceCodeDependencyRuleGroups() as $value_4) {
                $values_4[] = null === $value_4 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['serviceCodeDependencyRuleGroups'] = $values_4;
        }
        if ($data->isInitialized('pickupCapabilities') && null !== $data->getPickupCapabilities()) {
            $dataArray['pickupCapabilities'] = null === $data->getPickupCapabilities() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPickupCapabilities(), 'json', $context));
        }
        if ($data->isInitialized('deliveryCapabilities') && null !== $data->getDeliveryCapabilities()) {
            $dataArray['deliveryCapabilities'] = null === $data->getDeliveryCapabilities() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getDeliveryCapabilities(), 'json', $context));
        }
        if ($data->isInitialized('items') && null !== $data->getItems()) {
            $values_5 = [];
            foreach ($data->getItems() as $value_5) {
                $values_5[] = null === $value_5 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['items'] = $values_5;
        }
        if ($data->isInitialized('pricingDate') && null !== $data->getPricingDate()) {
            $dataArray['pricingDate'] = $data->getPricingDate();
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class => false];
    }
}
