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

class SupermodelIoLogisticsExpressValueAddedServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressValueAddedServices' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressValueAddedServices' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressValueAddedServices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('serviceCode', $data) && null !== $data['serviceCode']) {
            $object->setServiceCode($data['serviceCode']);
        } elseif (\array_key_exists('serviceCode', $data) && null === $data['serviceCode']) {
            $object->setServiceCode(null);
        }
        if (\array_key_exists('value', $data) && null !== $data['value']) {
            $object->setValue($data['value']);
        } elseif (\array_key_exists('value', $data) && null === $data['value']) {
            $object->setValue(null);
        }
        if (\array_key_exists('currency', $data) && null !== $data['currency']) {
            $object->setCurrency($data['currency']);
        } elseif (\array_key_exists('currency', $data) && null === $data['currency']) {
            $object->setCurrency(null);
        }
        if (\array_key_exists('method', $data) && null !== $data['method']) {
            $object->setMethod($data['method']);
        } elseif (\array_key_exists('method', $data) && null === $data['method']) {
            $object->setMethod(null);
        }
        if (\array_key_exists('dangerousGoods', $data) && null !== $data['dangerousGoods']) {
            $values = [];
            foreach ($data['dangerousGoods'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem', 'json', $context);
            }
            $object->setDangerousGoods($values);
        } elseif (\array_key_exists('dangerousGoods', $data) && null === $data['dangerousGoods']) {
            $object->setDangerousGoods(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['serviceCode'] = $object->getServiceCode();
        if (null !== $object->getValue()) {
            $data['value'] = $object->getValue();
        }
        if (null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        if (null !== $object->getMethod()) {
            $data['method'] = $object->getMethod();
        }
        if (null !== $object->getDangerousGoods()) {
            $values = [];
            foreach ($object->getDangerousGoods() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['dangerousGoods'] = $values;
        }

        return $data;
    }
}
