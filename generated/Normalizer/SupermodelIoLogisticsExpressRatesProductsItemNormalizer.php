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

class SupermodelIoLogisticsExpressRatesProductsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
            $object->setWeight($this->denormalizer->denormalize($data['weight'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemWeight', 'json', $context));
        } elseif (\array_key_exists('weight', $data) && null === $data['weight']) {
            $object->setWeight(null);
        }
        if (\array_key_exists('totalPrice', $data) && null !== $data['totalPrice']) {
            $values = [];
            foreach ($data['totalPrice'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem', 'json', $context);
            }
            $object->setTotalPrice($values);
        } elseif (\array_key_exists('totalPrice', $data) && null === $data['totalPrice']) {
            $object->setTotalPrice(null);
        }
        if (\array_key_exists('totalPriceBreakdown', $data) && null !== $data['totalPriceBreakdown']) {
            $values_1 = [];
            foreach ($data['totalPriceBreakdown'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem', 'json', $context);
            }
            $object->setTotalPriceBreakdown($values_1);
        } elseif (\array_key_exists('totalPriceBreakdown', $data) && null === $data['totalPriceBreakdown']) {
            $object->setTotalPriceBreakdown(null);
        }
        if (\array_key_exists('detailedPriceBreakdown', $data) && null !== $data['detailedPriceBreakdown']) {
            $values_2 = [];
            foreach ($data['detailedPriceBreakdown'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItem', 'json', $context);
            }
            $object->setDetailedPriceBreakdown($values_2);
        } elseif (\array_key_exists('detailedPriceBreakdown', $data) && null === $data['detailedPriceBreakdown']) {
            $object->setDetailedPriceBreakdown(null);
        }
        if (\array_key_exists('serviceCodeMutuallyExclusiveGroups', $data) && null !== $data['serviceCodeMutuallyExclusiveGroups']) {
            $values_3 = [];
            foreach ($data['serviceCodeMutuallyExclusiveGroups'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem', 'json', $context);
            }
            $object->setServiceCodeMutuallyExclusiveGroups($values_3);
        } elseif (\array_key_exists('serviceCodeMutuallyExclusiveGroups', $data) && null === $data['serviceCodeMutuallyExclusiveGroups']) {
            $object->setServiceCodeMutuallyExclusiveGroups(null);
        }
        if (\array_key_exists('serviceCodeDependencyRuleGroups', $data) && null !== $data['serviceCodeDependencyRuleGroups']) {
            $values_4 = [];
            foreach ($data['serviceCodeDependencyRuleGroups'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem', 'json', $context);
            }
            $object->setServiceCodeDependencyRuleGroups($values_4);
        } elseif (\array_key_exists('serviceCodeDependencyRuleGroups', $data) && null === $data['serviceCodeDependencyRuleGroups']) {
            $object->setServiceCodeDependencyRuleGroups(null);
        }
        if (\array_key_exists('pickupCapabilities', $data) && null !== $data['pickupCapabilities']) {
            $object->setPickupCapabilities($this->denormalizer->denormalize($data['pickupCapabilities'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities', 'json', $context));
        } elseif (\array_key_exists('pickupCapabilities', $data) && null === $data['pickupCapabilities']) {
            $object->setPickupCapabilities(null);
        }
        if (\array_key_exists('deliveryCapabilities', $data) && null !== $data['deliveryCapabilities']) {
            $object->setDeliveryCapabilities($this->denormalizer->denormalize($data['deliveryCapabilities'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities', 'json', $context));
        } elseif (\array_key_exists('deliveryCapabilities', $data) && null === $data['deliveryCapabilities']) {
            $object->setDeliveryCapabilities(null);
        }
        if (\array_key_exists('items', $data) && null !== $data['items']) {
            $values_5 = [];
            foreach ($data['items'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemItemsItem', 'json', $context);
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

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getProductName()) {
            $data['productName'] = $object->getProductName();
        }
        if (null !== $object->getProductCode()) {
            $data['productCode'] = $object->getProductCode();
        }
        if (null !== $object->getLocalProductCode()) {
            $data['localProductCode'] = $object->getLocalProductCode();
        }
        if (null !== $object->getLocalProductCountryCode()) {
            $data['localProductCountryCode'] = $object->getLocalProductCountryCode();
        }
        if (null !== $object->getNetworkTypeCode()) {
            $data['networkTypeCode'] = $object->getNetworkTypeCode();
        }
        if (null !== $object->getIsCustomerAgreement()) {
            $data['isCustomerAgreement'] = $object->getIsCustomerAgreement();
        }
        $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
        $values = [];
        foreach ($object->getTotalPrice() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['totalPrice'] = $values;
        if (null !== $object->getTotalPriceBreakdown()) {
            $values_1 = [];
            foreach ($object->getTotalPriceBreakdown() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['totalPriceBreakdown'] = $values_1;
        }
        if (null !== $object->getDetailedPriceBreakdown()) {
            $values_2 = [];
            foreach ($object->getDetailedPriceBreakdown() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['detailedPriceBreakdown'] = $values_2;
        }
        if (null !== $object->getServiceCodeMutuallyExclusiveGroups()) {
            $values_3 = [];
            foreach ($object->getServiceCodeMutuallyExclusiveGroups() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['serviceCodeMutuallyExclusiveGroups'] = $values_3;
        }
        if (null !== $object->getServiceCodeDependencyRuleGroups()) {
            $values_4 = [];
            foreach ($object->getServiceCodeDependencyRuleGroups() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['serviceCodeDependencyRuleGroups'] = $values_4;
        }
        if (null !== $object->getPickupCapabilities()) {
            $data['pickupCapabilities'] = $this->normalizer->normalize($object->getPickupCapabilities(), 'json', $context);
        }
        if (null !== $object->getDeliveryCapabilities()) {
            $data['deliveryCapabilities'] = $this->normalizer->normalize($object->getDeliveryCapabilities(), 'json', $context);
        }
        if (null !== $object->getItems()) {
            $values_5 = [];
            foreach ($object->getItems() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['items'] = $values_5;
        }
        if (null !== $object->getPricingDate()) {
            $data['pricingDate'] = $object->getPricingDate();
        }

        return $data;
    }
}
