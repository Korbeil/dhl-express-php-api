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

class SupermodelIoLogisticsExpressAddressValidateResponseAddressItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('countryCode', $data) && null !== $data['countryCode']) {
            $object->countryCode = $data['countryCode'];
        } elseif (\array_key_exists('countryCode', $data)) {
            $object->countryCode = null;
        }
        if (\array_key_exists('postalCode', $data) && null !== $data['postalCode']) {
            $object->postalCode = $data['postalCode'];
        } elseif (\array_key_exists('postalCode', $data)) {
            $object->postalCode = null;
        }
        if (\array_key_exists('cityName', $data) && null !== $data['cityName']) {
            $object->cityName = $data['cityName'];
        } elseif (\array_key_exists('cityName', $data)) {
            $object->cityName = null;
        }
        if (\array_key_exists('countyName', $data) && null !== $data['countyName']) {
            $object->countyName = $data['countyName'];
        } elseif (\array_key_exists('countyName', $data)) {
            $object->countyName = null;
        }
        if (\array_key_exists('serviceArea', $data) && null !== $data['serviceArea']) {
            $object->serviceArea = $this->denormalizer->denormalize($data['serviceArea'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea::class, 'json', $context);
        } elseif (\array_key_exists('serviceArea', $data)) {
            $object->serviceArea = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['countryCode'] = $data->countryCode;
        $dataArray['postalCode'] = $data->postalCode;
        if (\array_key_exists('cityName', get_object_vars($data)) && null !== ($data->cityName ?? null)) {
            $dataArray['cityName'] = $data->cityName;
        }
        if (\array_key_exists('countyName', get_object_vars($data)) && null !== ($data->countyName ?? null)) {
            $dataArray['countyName'] = $data->countyName;
        }
        if (\array_key_exists('serviceArea', get_object_vars($data)) && null !== ($data->serviceArea ?? null)) {
            $normalized = $this->normalizer->normalize($data->serviceArea, 'json', $context);
            $dataArray['serviceArea'] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem::class => false];
    }
}
