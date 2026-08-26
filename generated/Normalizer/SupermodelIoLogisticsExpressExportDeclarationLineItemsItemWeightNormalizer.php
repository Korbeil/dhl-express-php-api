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

class SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('netValue', $data) && \is_int($data['netValue'])) {
            $data['netValue'] = (float) $data['netValue'];
        }
        if (\array_key_exists('grossValue', $data) && \is_int($data['grossValue'])) {
            $data['grossValue'] = (float) $data['grossValue'];
        }
        if (\array_key_exists('netValue', $data) && null !== $data['netValue']) {
            $object->setNetValue($data['netValue']);
        } elseif (\array_key_exists('netValue', $data) && null === $data['netValue']) {
            $object->setNetValue(null);
        }
        if (\array_key_exists('grossValue', $data) && null !== $data['grossValue']) {
            $object->setGrossValue($data['grossValue']);
        } elseif (\array_key_exists('grossValue', $data) && null === $data['grossValue']) {
            $object->setGrossValue(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('netValue') && null !== $data->getNetValue()) {
            $dataArray['netValue'] = $data->getNetValue();
        }
        if ($data->isInitialized('grossValue') && null !== $data->getGrossValue()) {
            $dataArray['grossValue'] = $data->getGrossValue();
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight::class => false];
    }
}
