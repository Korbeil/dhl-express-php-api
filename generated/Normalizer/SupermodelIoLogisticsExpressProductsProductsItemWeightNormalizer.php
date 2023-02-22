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

class SupermodelIoLogisticsExpressProductsProductsItemWeightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemWeight' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressProductsProductsItemWeight' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemWeight();
        if (\array_key_exists('volumetric', $data) && \is_int($data['volumetric'])) {
            $data['volumetric'] = (float) $data['volumetric'];
        }
        if (\array_key_exists('provided', $data) && \is_int($data['provided'])) {
            $data['provided'] = (float) $data['provided'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('volumetric', $data) && null !== $data['volumetric']) {
            $object->setVolumetric($data['volumetric']);
        } elseif (\array_key_exists('volumetric', $data) && null === $data['volumetric']) {
            $object->setVolumetric(null);
        }
        if (\array_key_exists('provided', $data) && null !== $data['provided']) {
            $object->setProvided($data['provided']);
        } elseif (\array_key_exists('provided', $data) && null === $data['provided']) {
            $object->setProvided(null);
        }
        if (\array_key_exists('unitOfMeasurement', $data) && null !== $data['unitOfMeasurement']) {
            $object->setUnitOfMeasurement($data['unitOfMeasurement']);
        } elseif (\array_key_exists('unitOfMeasurement', $data) && null === $data['unitOfMeasurement']) {
            $object->setUnitOfMeasurement(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('volumetric') && null !== $object->getVolumetric()) {
            $data['volumetric'] = $object->getVolumetric();
        }
        if ($object->isInitialized('provided') && null !== $object->getProvided()) {
            $data['provided'] = $object->getProvided();
        }
        if ($object->isInitialized('unitOfMeasurement') && null !== $object->getUnitOfMeasurement()) {
            $data['unitOfMeasurement'] = $object->getUnitOfMeasurement();
        }

        return $data;
    }
}
