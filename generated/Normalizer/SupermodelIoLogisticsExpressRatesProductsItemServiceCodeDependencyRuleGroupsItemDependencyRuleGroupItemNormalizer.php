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

class SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
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
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem::class, 'json', $context);
            }
            $object->setRequiredServiceCodes($values);
        } elseif (\array_key_exists('requiredServiceCodes', $data) && null === $data['requiredServiceCodes']) {
            $object->setRequiredServiceCodes(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dependencyRuleName') && null !== $data->getDependencyRuleName()) {
            $dataArray['dependencyRuleName'] = $data->getDependencyRuleName();
        }
        if ($data->isInitialized('dependencyDescription') && null !== $data->getDependencyDescription()) {
            $dataArray['dependencyDescription'] = $data->getDependencyDescription();
        }
        if ($data->isInitialized('dependencyCondition') && null !== $data->getDependencyCondition()) {
            $dataArray['dependencyCondition'] = $data->getDependencyCondition();
        }
        if ($data->isInitialized('requiredServiceCodes') && null !== $data->getRequiredServiceCodes()) {
            $values = [];
            foreach ($data->getRequiredServiceCodes() as $value) {
                $values[] = null === $value ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['requiredServiceCodes'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class => false];
    }
}
