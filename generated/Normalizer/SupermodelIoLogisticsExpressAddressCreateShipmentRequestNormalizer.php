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

class SupermodelIoLogisticsExpressAddressCreateShipmentRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressAddressCreateShipmentRequest' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressAddressCreateShipmentRequest' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressCreateShipmentRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('countyName', $data) && null !== $data['countyName']) {
            $object->setCountyName($data['countyName']);
        } elseif (\array_key_exists('countyName', $data) && null === $data['countyName']) {
            $object->setCountyName(null);
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

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['postalCode'] = $object->getPostalCode();
        $data['cityName'] = $object->getCityName();
        $data['countryCode'] = $object->getCountryCode();
        if ($object->isInitialized('provinceCode') && null !== $object->getProvinceCode()) {
            $data['provinceCode'] = $object->getProvinceCode();
        }
        $data['addressLine1'] = $object->getAddressLine1();
        if ($object->isInitialized('addressLine2') && null !== $object->getAddressLine2()) {
            $data['addressLine2'] = $object->getAddressLine2();
        }
        if ($object->isInitialized('addressLine3') && null !== $object->getAddressLine3()) {
            $data['addressLine3'] = $object->getAddressLine3();
        }
        if ($object->isInitialized('countyName') && null !== $object->getCountyName()) {
            $data['countyName'] = $object->getCountyName();
        }
        if ($object->isInitialized('provinceName') && null !== $object->getProvinceName()) {
            $data['provinceName'] = $object->getProvinceName();
        }
        if ($object->isInitialized('countryName') && null !== $object->getCountryName()) {
            $data['countryName'] = $object->getCountryName();
        }

        return $data;
    }
}
