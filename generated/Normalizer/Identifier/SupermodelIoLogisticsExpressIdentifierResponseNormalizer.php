<?php

namespace Korbeil\DHLExpress\Api\Normalizer\Identifier;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SupermodelIoLogisticsExpressIdentifierResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Identifier\SupermodelIoLogisticsExpressIdentifierResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Identifier\SupermodelIoLogisticsExpressIdentifierResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Identifier\SupermodelIoLogisticsExpressIdentifierResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('warnings', $data) && null !== $data['warnings']) {
            $values = [];
            foreach ($data['warnings'] as $value) {
                $values[] = $value;
            }
            $object->warnings = $values;
        } elseif (\array_key_exists('warnings', $data)) {
            $object->warnings = null;
        }
        if (\array_key_exists('identifiers', $data) && null !== $data['identifiers']) {
            $values_1 = [];
            foreach ($data['identifiers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem::class, 'json', $context);
            }
            $object->identifiers = $values_1;
        } elseif (\array_key_exists('identifiers', $data)) {
            $object->identifiers = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('warnings', get_object_vars($data)) && null !== ($data->warnings ?? null)) {
            $values = [];
            foreach ($data->warnings as $value) {
                $values[] = $value;
            }
            $dataArray['warnings'] = $values;
        }
        if (\array_key_exists('identifiers', get_object_vars($data)) && null !== ($data->identifiers ?? null)) {
            $values_1 = [];
            foreach ($data->identifiers as $value_1) {
                $normalized = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['identifiers'] = $values_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Identifier\SupermodelIoLogisticsExpressIdentifierResponse::class => false];
    }
}
