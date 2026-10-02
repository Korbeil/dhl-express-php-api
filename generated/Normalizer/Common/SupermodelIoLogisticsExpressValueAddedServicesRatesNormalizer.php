<?php

namespace Korbeil\DHLExpress\Api\Normalizer\Common;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SupermodelIoLogisticsExpressValueAddedServicesRatesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressValueAddedServicesRates::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressValueAddedServicesRates::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressValueAddedServicesRates();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('value', $data) && \is_int($data['value'])) {
            $data['value'] = (float) $data['value'];
        }
        if (\array_key_exists('serviceCode', $data) && null !== $data['serviceCode']) {
            $object->serviceCode = $data['serviceCode'];
        } elseif (\array_key_exists('serviceCode', $data)) {
            $object->serviceCode = null;
        }
        if (\array_key_exists('localServiceCode', $data) && null !== $data['localServiceCode']) {
            $object->localServiceCode = $data['localServiceCode'];
        } elseif (\array_key_exists('localServiceCode', $data)) {
            $object->localServiceCode = null;
        }
        if (\array_key_exists('value', $data) && null !== $data['value']) {
            $object->value = $data['value'];
        } elseif (\array_key_exists('value', $data)) {
            $object->value = null;
        }
        if (\array_key_exists('currency', $data) && null !== $data['currency']) {
            $object->currency = $data['currency'];
        } elseif (\array_key_exists('currency', $data)) {
            $object->currency = null;
        }
        if (\array_key_exists('method', $data) && null !== $data['method']) {
            $object->method = $data['method'];
        } elseif (\array_key_exists('method', $data)) {
            $object->method = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['serviceCode'] = $data->serviceCode;
        if (\array_key_exists('localServiceCode', get_object_vars($data)) && null !== ($data->localServiceCode ?? null)) {
            $dataArray['localServiceCode'] = $data->localServiceCode;
        }
        if (\array_key_exists('value', get_object_vars($data)) && null !== ($data->value ?? null)) {
            $dataArray['value'] = $data->value;
        }
        if (\array_key_exists('currency', get_object_vars($data)) && null !== ($data->currency ?? null)) {
            $dataArray['currency'] = $data->currency;
        }
        if (\array_key_exists('method', get_object_vars($data)) && null !== ($data->method ?? null)) {
            $dataArray['method'] = $data->method;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressValueAddedServicesRates::class => false];
    }
}
