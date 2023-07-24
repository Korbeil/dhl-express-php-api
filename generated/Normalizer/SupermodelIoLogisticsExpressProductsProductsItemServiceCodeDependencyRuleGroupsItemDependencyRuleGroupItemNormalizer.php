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

class SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem();
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
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem', 'json', $context);
            }
            $object->setRequiredServiceCodes($values);
        } elseif (\array_key_exists('requiredServiceCodes', $data) && null === $data['requiredServiceCodes']) {
            $object->setRequiredServiceCodes(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('dependencyRuleName') && null !== $object->getDependencyRuleName()) {
            $data['dependencyRuleName'] = $object->getDependencyRuleName();
        }
        if ($object->isInitialized('dependencyDescription') && null !== $object->getDependencyDescription()) {
            $data['dependencyDescription'] = $object->getDependencyDescription();
        }
        if ($object->isInitialized('dependencyCondition') && null !== $object->getDependencyCondition()) {
            $data['dependencyCondition'] = $object->getDependencyCondition();
        }
        if ($object->isInitialized('requiredServiceCodes') && null !== $object->getRequiredServiceCodes()) {
            $values = [];
            foreach ($object->getRequiredServiceCodes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['requiredServiceCodes'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem' => false];
    }
}
