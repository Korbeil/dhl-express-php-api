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

class SupermodelIoLogisticsExpressExportDeclarationExporterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationExporter::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationExporter::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationExporter();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('code', $data) && null !== $data['code']) {
            $object->setCode($data['code']);
        } elseif (\array_key_exists('code', $data) && null === $data['code']) {
            $object->setCode(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('code') && null !== $data->getCode()) {
            $dataArray['code'] = $data->getCode();
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationExporter::class => false];
    }
}
