<?php

namespace Korbeil\DHLExpress\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('currencyType', $data) && null !== $data['currencyType']) {
            $object->setCurrencyType($data['currencyType']);
        } elseif (\array_key_exists('currencyType', $data) && null === $data['currencyType']) {
            $object->setCurrencyType(null);
        }
        if (\array_key_exists('priceCurrency', $data) && null !== $data['priceCurrency']) {
            $object->setPriceCurrency($data['priceCurrency']);
        } elseif (\array_key_exists('priceCurrency', $data) && null === $data['priceCurrency']) {
            $object->setPriceCurrency(null);
        }
        if (\array_key_exists('price', $data) && null !== $data['price']) {
            $object->setPrice($data['price']);
        } elseif (\array_key_exists('price', $data) && null === $data['price']) {
            $object->setPrice(null);
        }
        if (\array_key_exists('serviceBreakdown', $data) && null !== $data['serviceBreakdown']) {
            $values = [];
            foreach ($data['serviceBreakdown'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem', 'json', $context);
            }
            $object->setServiceBreakdown($values);
        } elseif (\array_key_exists('serviceBreakdown', $data) && null === $data['serviceBreakdown']) {
            $object->setServiceBreakdown(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['currencyType'] = $object->getCurrencyType();
        $data['priceCurrency'] = $object->getPriceCurrency();
        $data['price'] = $object->getPrice();
        if (null !== $object->getServiceBreakdown()) {
            $values = [];
            foreach ($object->getServiceBreakdown() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['serviceBreakdown'] = $values;
        }

        return $data;
    }
}
