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

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('postalAddress', $data) && null !== $data['postalAddress']) {
            $object->setPostalAddress($this->denormalizer->denormalize($data['postalAddress'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddress', 'json', $context));
        } elseif (\array_key_exists('postalAddress', $data) && null === $data['postalAddress']) {
            $object->setPostalAddress(null);
        }
        if (\array_key_exists('serviceArea', $data) && null !== $data['serviceArea']) {
            $values = [];
            foreach ($data['serviceArea'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItem', 'json', $context);
            }
            $object->setServiceArea($values);
        } elseif (\array_key_exists('serviceArea', $data) && null === $data['serviceArea']) {
            $object->setServiceArea(null);
        }
        if (\array_key_exists('accountNumber', $data) && null !== $data['accountNumber']) {
            $object->setAccountNumber($data['accountNumber']);
        } elseif (\array_key_exists('accountNumber', $data) && null === $data['accountNumber']) {
            $object->setAccountNumber(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('postalAddress') && null !== $object->getPostalAddress()) {
            $data['postalAddress'] = $this->normalizer->normalize($object->getPostalAddress(), 'json', $context);
        }
        if ($object->isInitialized('serviceArea') && null !== $object->getServiceArea()) {
            $values = [];
            foreach ($object->getServiceArea() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['serviceArea'] = $values;
        }
        if ($object->isInitialized('accountNumber') && null !== $object->getAccountNumber()) {
            $data['accountNumber'] = $object->getAccountNumber();
        }

        return $data;
    }
}
