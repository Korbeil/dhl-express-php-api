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

class SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('netValue', $data) && null !== $data['netValue']) {
            $object->setNetValue($data['netValue']);
        } elseif (\array_key_exists('netValue', $data) && null === $data['netValue']) {
            $object->setNetValue(null);
        }
        if (\array_key_exists('grossValue', $data) && null !== $data['grossValue']) {
            $object->setGrossValue($data['grossValue']);
        } elseif (\array_key_exists('grossValue', $data) && null === $data['grossValue']) {
            $object->setGrossValue(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getNetValue()) {
            $data['netValue'] = $object->getNetValue();
        }
        if (null !== $object->getGrossValue()) {
            $data['grossValue'] = $object->getGrossValue();
        }

        return $data;
    }
}
