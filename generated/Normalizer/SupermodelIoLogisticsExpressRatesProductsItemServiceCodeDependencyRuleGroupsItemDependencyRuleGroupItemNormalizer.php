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

class SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dependencyRuleName', $data) && null !== $data['dependencyRuleName']) {
            $object->setDependencyRuleName($data['dependencyRuleName']);
        } elseif (\array_key_exists('dependencyRuleName', $data) && null === $data['dependencyRuleName']) {
            $object->setDependencyRuleName(null);
        }
        if (\array_key_exists('dependencyDescription', $data) && null !== $data['dependencyDescription']) {
            $object->setDependencyDescription($data['dependencyDescription']);
        } elseif (\array_key_exists('dependencyDescription', $data) && null === $data['dependencyDescription']) {
            $object->setDependencyDescription(null);
        }
        if (\array_key_exists('dependencyCondition', $data) && null !== $data['dependencyCondition']) {
            $object->setDependencyCondition($data['dependencyCondition']);
        } elseif (\array_key_exists('dependencyCondition', $data) && null === $data['dependencyCondition']) {
            $object->setDependencyCondition(null);
        }
        if (\array_key_exists('requiredServiceCodes', $data) && null !== $data['requiredServiceCodes']) {
            $values = [];
            foreach ($data['requiredServiceCodes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem', 'json', $context);
            }
            $object->setRequiredServiceCodes($values);
        } elseif (\array_key_exists('requiredServiceCodes', $data) && null === $data['requiredServiceCodes']) {
            $object->setRequiredServiceCodes(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDependencyRuleName()) {
            $data['dependencyRuleName'] = $object->getDependencyRuleName();
        }
        if (null !== $object->getDependencyDescription()) {
            $data['dependencyDescription'] = $object->getDependencyDescription();
        }
        if (null !== $object->getDependencyCondition()) {
            $data['dependencyCondition'] = $object->getDependencyCondition();
        }
        if (null !== $object->getRequiredServiceCodes()) {
            $values = [];
            foreach ($object->getRequiredServiceCodes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['requiredServiceCodes'] = $values;
        }

        return $data;
    }
}
