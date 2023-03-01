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

class SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dependentServiceCode', $data) && null !== $data['dependentServiceCode']) {
            $object->setDependentServiceCode($data['dependentServiceCode']);
        } elseif (\array_key_exists('dependentServiceCode', $data) && null === $data['dependentServiceCode']) {
            $object->setDependentServiceCode(null);
        }
        if (\array_key_exists('dependencyRuleGroup', $data) && null !== $data['dependencyRuleGroup']) {
            $values = [];
            foreach ($data['dependencyRuleGroup'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem', 'json', $context);
            }
            $object->setDependencyRuleGroup($values);
        } elseif (\array_key_exists('dependencyRuleGroup', $data) && null === $data['dependencyRuleGroup']) {
            $object->setDependencyRuleGroup(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDependentServiceCode()) {
            $data['dependentServiceCode'] = $object->getDependentServiceCode();
        }
        if (null !== $object->getDependencyRuleGroup()) {
            $values = [];
            foreach ($object->getDependencyRuleGroup() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['dependencyRuleGroup'] = $values;
        }

        return $data;
    }
}
