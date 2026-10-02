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

class SupermodelIoLogisticsExpressBankDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressBankDetailsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressBankDetailsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressBankDetailsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->name = $data['name'];
        } elseif (\array_key_exists('name', $data)) {
            $object->name = null;
        }
        if (\array_key_exists('settlementLocalCurrency', $data) && null !== $data['settlementLocalCurrency']) {
            $object->settlementLocalCurrency = $data['settlementLocalCurrency'];
        } elseif (\array_key_exists('settlementLocalCurrency', $data)) {
            $object->settlementLocalCurrency = null;
        }
        if (\array_key_exists('settlementForeignCurrency', $data) && null !== $data['settlementForeignCurrency']) {
            $object->settlementForeignCurrency = $data['settlementForeignCurrency'];
        } elseif (\array_key_exists('settlementForeignCurrency', $data)) {
            $object->settlementForeignCurrency = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name;
        }
        if (\array_key_exists('settlementLocalCurrency', get_object_vars($data)) && null !== ($data->settlementLocalCurrency ?? null)) {
            $dataArray['settlementLocalCurrency'] = $data->settlementLocalCurrency;
        }
        if (\array_key_exists('settlementForeignCurrency', get_object_vars($data)) && null !== ($data->settlementForeignCurrency ?? null)) {
            $dataArray['settlementForeignCurrency'] = $data->settlementForeignCurrency;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressBankDetailsItem::class => false];
    }
}
