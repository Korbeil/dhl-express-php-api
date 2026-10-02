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

class SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('serviceCodeRuleName', $data) && null !== $data['serviceCodeRuleName']) {
            $object->serviceCodeRuleName = $data['serviceCodeRuleName'];
        } elseif (\array_key_exists('serviceCodeRuleName', $data)) {
            $object->serviceCodeRuleName = null;
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->description = $data['description'];
        } elseif (\array_key_exists('description', $data)) {
            $object->description = null;
        }
        if (\array_key_exists('serviceCodes', $data) && null !== $data['serviceCodes']) {
            $values = [];
            foreach ($data['serviceCodes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem::class, 'json', $context);
            }
            $object->serviceCodes = $values;
        } elseif (\array_key_exists('serviceCodes', $data)) {
            $object->serviceCodes = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('serviceCodeRuleName', get_object_vars($data)) && null !== ($data->serviceCodeRuleName ?? null)) {
            $dataArray['serviceCodeRuleName'] = $data->serviceCodeRuleName;
        }
        if (\array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description;
        }
        if (\array_key_exists('serviceCodes', get_object_vars($data)) && null !== ($data->serviceCodes ?? null)) {
            $values = [];
            foreach ($data->serviceCodes as $value) {
                $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['serviceCodes'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem::class => false];
    }
}
