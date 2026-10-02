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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem();
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
            $object->dependencyRuleName = $data['dependencyRuleName'];
        } elseif (\array_key_exists('dependencyRuleName', $data)) {
            $object->dependencyRuleName = null;
        }
        if (\array_key_exists('dependencyDescription', $data) && null !== $data['dependencyDescription']) {
            $object->dependencyDescription = $data['dependencyDescription'];
        } elseif (\array_key_exists('dependencyDescription', $data)) {
            $object->dependencyDescription = null;
        }
        if (\array_key_exists('dependencyCondition', $data) && null !== $data['dependencyCondition']) {
            $object->dependencyCondition = $data['dependencyCondition'];
        } elseif (\array_key_exists('dependencyCondition', $data)) {
            $object->dependencyCondition = null;
        }
        if (\array_key_exists('requiredServiceCodes', $data) && null !== $data['requiredServiceCodes']) {
            $values = [];
            foreach ($data['requiredServiceCodes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem::class, 'json', $context);
            }
            $object->requiredServiceCodes = $values;
        } elseif (\array_key_exists('requiredServiceCodes', $data)) {
            $object->requiredServiceCodes = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('dependencyRuleName', get_object_vars($data)) && null !== ($data->dependencyRuleName ?? null)) {
            $dataArray['dependencyRuleName'] = $data->dependencyRuleName;
        }
        if (\array_key_exists('dependencyDescription', get_object_vars($data)) && null !== ($data->dependencyDescription ?? null)) {
            $dataArray['dependencyDescription'] = $data->dependencyDescription;
        }
        if (\array_key_exists('dependencyCondition', get_object_vars($data)) && null !== ($data->dependencyCondition ?? null)) {
            $dataArray['dependencyCondition'] = $data->dependencyCondition;
        }
        if (\array_key_exists('requiredServiceCodes', get_object_vars($data)) && null !== ($data->requiredServiceCodes ?? null)) {
            $values = [];
            foreach ($data->requiredServiceCodes as $value) {
                $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['requiredServiceCodes'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class => false];
    }
}
