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

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItem' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItem();
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
            $object->setWeight($this->denormalizer->denormalize($data['weight'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemWeight', 'json', $context));
        } elseif (\array_key_exists('weight', $data) && null === $data['weight']) {
            $object->setWeight(null);
        }
        if (\array_key_exists('breakdown', $data) && null !== $data['breakdown']) {
            $values = [];
            foreach ($data['breakdown'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem', 'json', $context);
            }
            $object->setBreakdown($values);
        } elseif (\array_key_exists('breakdown', $data) && null === $data['breakdown']) {
            $object->setBreakdown(null);
        }
        if (\array_key_exists('serviceCodeMutuallyExclusiveGroups', $data) && null !== $data['serviceCodeMutuallyExclusiveGroups']) {
            $values_1 = [];
            foreach ($data['serviceCodeMutuallyExclusiveGroups'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItem', 'json', $context);
            }
            $object->setServiceCodeMutuallyExclusiveGroups($values_1);
        } elseif (\array_key_exists('serviceCodeMutuallyExclusiveGroups', $data) && null === $data['serviceCodeMutuallyExclusiveGroups']) {
            $object->setServiceCodeMutuallyExclusiveGroups(null);
        }
        if (\array_key_exists('serviceCodeDependencyRuleGroups', $data) && null !== $data['serviceCodeDependencyRuleGroups']) {
            $values_2 = [];
            foreach ($data['serviceCodeDependencyRuleGroups'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem', 'json', $context);
            }
            $object->setServiceCodeDependencyRuleGroups($values_2);
        } elseif (\array_key_exists('serviceCodeDependencyRuleGroups', $data) && null === $data['serviceCodeDependencyRuleGroups']) {
            $object->setServiceCodeDependencyRuleGroups(null);
        }
        if (\array_key_exists('pickupCapabilities', $data) && null !== $data['pickupCapabilities']) {
            $object->setPickupCapabilities($this->denormalizer->denormalize($data['pickupCapabilities'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities', 'json', $context));
        } elseif (\array_key_exists('pickupCapabilities', $data) && null === $data['pickupCapabilities']) {
            $object->setPickupCapabilities(null);
        }
        if (\array_key_exists('deliveryCapabilities', $data) && null !== $data['deliveryCapabilities']) {
            $object->setDeliveryCapabilities($this->denormalizer->denormalize($data['deliveryCapabilities'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities', 'json', $context));
        } elseif (\array_key_exists('deliveryCapabilities', $data) && null === $data['deliveryCapabilities']) {
            $object->setDeliveryCapabilities(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('productName') && null !== $object->getProductName()) {
            $data['productName'] = $object->getProductName();
        }
        if ($object->isInitialized('productCode') && null !== $object->getProductCode()) {
            $data['productCode'] = $object->getProductCode();
        }
        if ($object->isInitialized('localProductCode') && null !== $object->getLocalProductCode()) {
            $data['localProductCode'] = $object->getLocalProductCode();
        }
        if ($object->isInitialized('localProductCountryCode') && null !== $object->getLocalProductCountryCode()) {
            $data['localProductCountryCode'] = $object->getLocalProductCountryCode();
        }
        if ($object->isInitialized('networkTypeCode') && null !== $object->getNetworkTypeCode()) {
            $data['networkTypeCode'] = $object->getNetworkTypeCode();
        }
        if ($object->isInitialized('isCustomerAgreement') && null !== $object->getIsCustomerAgreement()) {
            $data['isCustomerAgreement'] = $object->getIsCustomerAgreement();
        }
        if ($object->isInitialized('weight') && null !== $object->getWeight()) {
            $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
        }
        if ($object->isInitialized('breakdown') && null !== $object->getBreakdown()) {
            $values = [];
            foreach ($object->getBreakdown() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['breakdown'] = $values;
        }
        if ($object->isInitialized('serviceCodeMutuallyExclusiveGroups') && null !== $object->getServiceCodeMutuallyExclusiveGroups()) {
            $values_1 = [];
            foreach ($object->getServiceCodeMutuallyExclusiveGroups() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['serviceCodeMutuallyExclusiveGroups'] = $values_1;
        }
        if ($object->isInitialized('serviceCodeDependencyRuleGroups') && null !== $object->getServiceCodeDependencyRuleGroups()) {
            $values_2 = [];
            foreach ($object->getServiceCodeDependencyRuleGroups() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['serviceCodeDependencyRuleGroups'] = $values_2;
        }
        if ($object->isInitialized('pickupCapabilities') && null !== $object->getPickupCapabilities()) {
            $data['pickupCapabilities'] = $this->normalizer->normalize($object->getPickupCapabilities(), 'json', $context);
        }
        if ($object->isInitialized('deliveryCapabilities') && null !== $object->getDeliveryCapabilities()) {
            $data['deliveryCapabilities'] = $this->normalizer->normalize($object->getDeliveryCapabilities(), 'json', $context);
        }

        return $data;
    }
}
