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

class SupermodelIoLogisticsExpressAddressCreateShipmentResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentResponse();
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
            $object->setPostalCode($data['postalCode']);
        } elseif (\array_key_exists('postalCode', $data) && null === $data['postalCode']) {
            $object->setPostalCode(null);
        }
        if (\array_key_exists('cityName', $data) && null !== $data['cityName']) {
            $object->setCityName($data['cityName']);
        } elseif (\array_key_exists('cityName', $data) && null === $data['cityName']) {
            $object->setCityName(null);
        }
        if (\array_key_exists('countryCode', $data) && null !== $data['countryCode']) {
            $object->setCountryCode($data['countryCode']);
        } elseif (\array_key_exists('countryCode', $data) && null === $data['countryCode']) {
            $object->setCountryCode(null);
        }
        if (\array_key_exists('provinceCode', $data) && null !== $data['provinceCode']) {
            $object->setProvinceCode($data['provinceCode']);
        } elseif (\array_key_exists('provinceCode', $data) && null === $data['provinceCode']) {
            $object->setProvinceCode(null);
        }
        if (\array_key_exists('addressLine1', $data) && null !== $data['addressLine1']) {
            $object->setAddressLine1($data['addressLine1']);
        } elseif (\array_key_exists('addressLine1', $data) && null === $data['addressLine1']) {
            $object->setAddressLine1(null);
        }
        if (\array_key_exists('addressLine2', $data) && null !== $data['addressLine2']) {
            $object->setAddressLine2($data['addressLine2']);
        } elseif (\array_key_exists('addressLine2', $data) && null === $data['addressLine2']) {
            $object->setAddressLine2(null);
        }
        if (\array_key_exists('addressLine3', $data) && null !== $data['addressLine3']) {
            $object->setAddressLine3($data['addressLine3']);
        } elseif (\array_key_exists('addressLine3', $data) && null === $data['addressLine3']) {
            $object->setAddressLine3(null);
        }
        if (\array_key_exists('cityDistrictName', $data) && null !== $data['cityDistrictName']) {
            $object->setCityDistrictName($data['cityDistrictName']);
        } elseif (\array_key_exists('cityDistrictName', $data) && null === $data['cityDistrictName']) {
            $object->setCityDistrictName(null);
        }
        if (\array_key_exists('provinceName', $data) && null !== $data['provinceName']) {
            $object->setProvinceName($data['provinceName']);
        } elseif (\array_key_exists('provinceName', $data) && null === $data['provinceName']) {
            $object->setProvinceName(null);
        }
        if (\array_key_exists('countryName', $data) && null !== $data['countryName']) {
            $object->setCountryName($data['countryName']);
        } elseif (\array_key_exists('countryName', $data) && null === $data['countryName']) {
            $object->setCountryName(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['postalCode'] = $data->getPostalCode();
        $dataArray['cityName'] = $data->getCityName();
        $dataArray['countryCode'] = $data->getCountryCode();
        if ($data->isInitialized('provinceCode') && null !== $data->getProvinceCode()) {
            $dataArray['provinceCode'] = $data->getProvinceCode();
        }
        $dataArray['addressLine1'] = $data->getAddressLine1();
        if ($data->isInitialized('addressLine2') && null !== $data->getAddressLine2()) {
            $dataArray['addressLine2'] = $data->getAddressLine2();
        }
        if ($data->isInitialized('addressLine3') && null !== $data->getAddressLine3()) {
            $dataArray['addressLine3'] = $data->getAddressLine3();
        }
        if ($data->isInitialized('cityDistrictName') && null !== $data->getCityDistrictName()) {
            $dataArray['cityDistrictName'] = $data->getCityDistrictName();
        }
        if ($data->isInitialized('provinceName') && null !== $data->getProvinceName()) {
            $dataArray['provinceName'] = $data->getProvinceName();
        }
        if ($data->isInitialized('countryName') && null !== $data->getCountryName()) {
            $dataArray['countryName'] = $data->getCountryName();
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentResponse::class => false];
    }
}
