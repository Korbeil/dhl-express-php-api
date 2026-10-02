<?php

namespace Korbeil\DHLExpress\Api\Normalizer\Shipment;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SupermodelIoLogisticsExpressAddressCreateShipmentRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
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
        if (\array_key_exists('countryCode', $data) && null !== $data['countryCode']) {
            $object->countryCode = $data['countryCode'];
        } elseif (\array_key_exists('countryCode', $data)) {
            $object->countryCode = null;
        }
        if (\array_key_exists('provinceCode', $data) && null !== $data['provinceCode']) {
            $object->provinceCode = $data['provinceCode'];
        } elseif (\array_key_exists('provinceCode', $data)) {
            $object->provinceCode = null;
        }
        if (\array_key_exists('addressLine1', $data) && null !== $data['addressLine1']) {
            $object->addressLine1 = $data['addressLine1'];
        } elseif (\array_key_exists('addressLine1', $data)) {
            $object->addressLine1 = null;
        }
        if (\array_key_exists('addressLine2', $data) && null !== $data['addressLine2']) {
            $object->addressLine2 = $data['addressLine2'];
        } elseif (\array_key_exists('addressLine2', $data)) {
            $object->addressLine2 = null;
        }
        if (\array_key_exists('addressLine3', $data) && null !== $data['addressLine3']) {
            $object->addressLine3 = $data['addressLine3'];
        } elseif (\array_key_exists('addressLine3', $data)) {
            $object->addressLine3 = null;
        }
        if (\array_key_exists('countyName', $data) && null !== $data['countyName']) {
            $object->countyName = $data['countyName'];
        } elseif (\array_key_exists('countyName', $data)) {
            $object->countyName = null;
        }
        if (\array_key_exists('provinceName', $data) && null !== $data['provinceName']) {
            $object->provinceName = $data['provinceName'];
        } elseif (\array_key_exists('provinceName', $data)) {
            $object->provinceName = null;
        }
        if (\array_key_exists('countryName', $data) && null !== $data['countryName']) {
            $object->countryName = $data['countryName'];
        } elseif (\array_key_exists('countryName', $data)) {
            $object->countryName = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['postalCode'] = $data->postalCode;
        $dataArray['cityName'] = $data->cityName;
        $dataArray['countryCode'] = $data->countryCode;
        if (\array_key_exists('provinceCode', get_object_vars($data)) && null !== ($data->provinceCode ?? null)) {
            $dataArray['provinceCode'] = $data->provinceCode;
        }
        $dataArray['addressLine1'] = $data->addressLine1;
        if (\array_key_exists('addressLine2', get_object_vars($data)) && null !== ($data->addressLine2 ?? null)) {
            $dataArray['addressLine2'] = $data->addressLine2;
        }
        if (\array_key_exists('addressLine3', get_object_vars($data)) && null !== ($data->addressLine3 ?? null)) {
            $dataArray['addressLine3'] = $data->addressLine3;
        }
        if (\array_key_exists('countyName', get_object_vars($data)) && null !== ($data->countyName ?? null)) {
            $dataArray['countyName'] = $data->countyName;
        }
        if (\array_key_exists('provinceName', get_object_vars($data)) && null !== ($data->provinceName ?? null)) {
            $dataArray['provinceName'] = $data->provinceName;
        }
        if (\array_key_exists('countryName', get_object_vars($data)) && null !== ($data->countryName ?? null)) {
            $dataArray['countryName'] = $data->countryName;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentRequest::class => false];
    }
}
