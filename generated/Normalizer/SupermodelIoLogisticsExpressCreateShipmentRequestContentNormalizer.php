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

class SupermodelIoLogisticsExpressCreateShipmentRequestContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('declaredValue', $data) && \is_int($data['declaredValue'])) {
            $data['declaredValue'] = (float) $data['declaredValue'];
        }
        if (\array_key_exists('isCustomsDeclarable', $data) && \is_int($data['isCustomsDeclarable'])) {
            $data['isCustomsDeclarable'] = (bool) $data['isCustomsDeclarable'];
        }
        if (\array_key_exists('packages', $data) && null !== $data['packages']) {
            $values = [];
            foreach ($data['packages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressPackage::class, 'json', $context);
            }
            $object->packages = $values;
        } elseif (\array_key_exists('packages', $data)) {
            $object->packages = null;
        }
        if (\array_key_exists('isCustomsDeclarable', $data) && null !== $data['isCustomsDeclarable']) {
            $object->isCustomsDeclarable = $data['isCustomsDeclarable'];
        } elseif (\array_key_exists('isCustomsDeclarable', $data)) {
            $object->isCustomsDeclarable = null;
        }
        if (\array_key_exists('declaredValue', $data) && null !== $data['declaredValue']) {
            $object->declaredValue = $data['declaredValue'];
        } elseif (\array_key_exists('declaredValue', $data)) {
            $object->declaredValue = null;
        }
        if (\array_key_exists('declaredValueCurrency', $data) && null !== $data['declaredValueCurrency']) {
            $object->declaredValueCurrency = $data['declaredValueCurrency'];
        } elseif (\array_key_exists('declaredValueCurrency', $data)) {
            $object->declaredValueCurrency = null;
        }
        if (\array_key_exists('exportDeclaration', $data) && null !== $data['exportDeclaration']) {
            $object->exportDeclaration = $this->denormalizer->denormalize($data['exportDeclaration'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class, 'json', $context);
        } elseif (\array_key_exists('exportDeclaration', $data)) {
            $object->exportDeclaration = null;
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->description = $data['description'];
        } elseif (\array_key_exists('description', $data)) {
            $object->description = null;
        }
        if (\array_key_exists('USFilingTypeValue', $data) && null !== $data['USFilingTypeValue']) {
            $object->uSFilingTypeValue = $data['USFilingTypeValue'];
        } elseif (\array_key_exists('USFilingTypeValue', $data)) {
            $object->uSFilingTypeValue = null;
        }
        if (\array_key_exists('incoterm', $data) && null !== $data['incoterm']) {
            $object->incoterm = $data['incoterm'];
        } elseif (\array_key_exists('incoterm', $data)) {
            $object->incoterm = null;
        }
        if (\array_key_exists('unitOfMeasurement', $data) && null !== $data['unitOfMeasurement']) {
            $object->unitOfMeasurement = $data['unitOfMeasurement'];
        } elseif (\array_key_exists('unitOfMeasurement', $data)) {
            $object->unitOfMeasurement = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->packages as $value) {
            $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
            $values[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        $dataArray['packages'] = $values;
        $dataArray['isCustomsDeclarable'] = $data->isCustomsDeclarable;
        if (\array_key_exists('declaredValue', get_object_vars($data)) && null !== ($data->declaredValue ?? null)) {
            $dataArray['declaredValue'] = $data->declaredValue;
        }
        if (\array_key_exists('declaredValueCurrency', get_object_vars($data)) && null !== ($data->declaredValueCurrency ?? null)) {
            $dataArray['declaredValueCurrency'] = $data->declaredValueCurrency;
        }
        if (\array_key_exists('exportDeclaration', get_object_vars($data)) && null !== ($data->exportDeclaration ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->exportDeclaration, 'json', $context);
            $dataArray['exportDeclaration'] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        $dataArray['description'] = $data->description;
        if (\array_key_exists('uSFilingTypeValue', get_object_vars($data)) && null !== ($data->uSFilingTypeValue ?? null)) {
            $dataArray['USFilingTypeValue'] = $data->uSFilingTypeValue;
        }
        $dataArray['incoterm'] = $data->incoterm;
        $dataArray['unitOfMeasurement'] = $data->unitOfMeasurement;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class => false];
    }
}
