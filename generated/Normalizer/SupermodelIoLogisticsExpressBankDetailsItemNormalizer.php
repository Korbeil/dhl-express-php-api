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

class SupermodelIoLogisticsExpressBankDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressBankDetailsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressBankDetailsItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressBankDetailsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('settlementLocalCurrency', $data) && null !== $data['settlementLocalCurrency']) {
            $object->setSettlementLocalCurrency($data['settlementLocalCurrency']);
        } elseif (\array_key_exists('settlementLocalCurrency', $data) && null === $data['settlementLocalCurrency']) {
            $object->setSettlementLocalCurrency(null);
        }
        if (\array_key_exists('settlementForeignCurrency', $data) && null !== $data['settlementForeignCurrency']) {
            $object->setSettlementForeignCurrency($data['settlementForeignCurrency']);
        } elseif (\array_key_exists('settlementForeignCurrency', $data) && null === $data['settlementForeignCurrency']) {
            $object->setSettlementForeignCurrency(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getSettlementLocalCurrency()) {
            $data['settlementLocalCurrency'] = $object->getSettlementLocalCurrency();
        }
        if (null !== $object->getSettlementForeignCurrency()) {
            $data['settlementForeignCurrency'] = $object->getSettlementForeignCurrency();
        }

        return $data;
    }
}
