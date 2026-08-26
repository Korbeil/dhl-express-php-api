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

class SupermodelIoLogisticsExpressRatesProductsItemWeightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemWeight::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemWeight::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemWeight();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('volumetric', $data) && \is_int($data['volumetric'])) {
            $data['volumetric'] = (float) $data['volumetric'];
        }
        if (\array_key_exists('provided', $data) && \is_int($data['provided'])) {
            $data['provided'] = (float) $data['provided'];
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

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('volumetric') && null !== $data->getVolumetric()) {
            $dataArray['volumetric'] = $data->getVolumetric();
        }
        if ($data->isInitialized('provided') && null !== $data->getProvided()) {
            $dataArray['provided'] = $data->getProvided();
        }
        if ($data->isInitialized('unitOfMeasurement') && null !== $data->getUnitOfMeasurement()) {
            $dataArray['unitOfMeasurement'] = $data->getUnitOfMeasurement();
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemWeight::class => false];
    }
}
