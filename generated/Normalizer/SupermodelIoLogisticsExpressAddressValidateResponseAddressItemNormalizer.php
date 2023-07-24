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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('countryCode', $data) && null !== $data['countryCode']) {
            $object->setCountryCode($data['countryCode']);
        } elseif (\array_key_exists('countryCode', $data) && null === $data['countryCode']) {
            $object->setCountryCode(null);
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
        if (\array_key_exists('countyName', $data) && null !== $data['countyName']) {
            $object->setCountyName($data['countyName']);
        } elseif (\array_key_exists('countyName', $data) && null === $data['countyName']) {
            $object->setCountyName(null);
        }
        if (\array_key_exists('serviceArea', $data) && null !== $data['serviceArea']) {
            $object->setServiceArea($this->denormalizer->denormalize($data['serviceArea'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea', 'json', $context));
        } elseif (\array_key_exists('serviceArea', $data) && null === $data['serviceArea']) {
            $object->setServiceArea(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['countryCode'] = $object->getCountryCode();
        $data['postalCode'] = $object->getPostalCode();
        if ($object->isInitialized('cityName') && null !== $object->getCityName()) {
            $data['cityName'] = $object->getCityName();
        }
        if ($object->isInitialized('countyName') && null !== $object->getCountyName()) {
            $data['countyName'] = $object->getCountyName();
        }
        if ($object->isInitialized('serviceArea') && null !== $object->getServiceArea()) {
            $data['serviceArea'] = $this->normalizer->normalize($object->getServiceArea(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem' => false];
    }
}
