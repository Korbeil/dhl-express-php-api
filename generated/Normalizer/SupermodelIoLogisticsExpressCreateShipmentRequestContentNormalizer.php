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

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
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
            $object->setPackages($values);
        } elseif (\array_key_exists('packages', $data) && null === $data['packages']) {
            $object->setPackages(null);
        }
        if (\array_key_exists('isCustomsDeclarable', $data) && null !== $data['isCustomsDeclarable']) {
            $object->setIsCustomsDeclarable($data['isCustomsDeclarable']);
        } elseif (\array_key_exists('isCustomsDeclarable', $data) && null === $data['isCustomsDeclarable']) {
            $object->setIsCustomsDeclarable(null);
        }
        if (\array_key_exists('declaredValue', $data) && null !== $data['declaredValue']) {
            $object->setDeclaredValue($data['declaredValue']);
        } elseif (\array_key_exists('declaredValue', $data) && null === $data['declaredValue']) {
            $object->setDeclaredValue(null);
        }
        if (\array_key_exists('declaredValueCurrency', $data) && null !== $data['declaredValueCurrency']) {
            $object->setDeclaredValueCurrency($data['declaredValueCurrency']);
        } elseif (\array_key_exists('declaredValueCurrency', $data) && null === $data['declaredValueCurrency']) {
            $object->setDeclaredValueCurrency(null);
        }
        if (\array_key_exists('exportDeclaration', $data) && null !== $data['exportDeclaration']) {
            $object->setExportDeclaration($this->denormalizer->denormalize($data['exportDeclaration'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class, 'json', $context));
        } elseif (\array_key_exists('exportDeclaration', $data) && null === $data['exportDeclaration']) {
            $object->setExportDeclaration(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('USFilingTypeValue', $data) && null !== $data['USFilingTypeValue']) {
            $object->setUSFilingTypeValue($data['USFilingTypeValue']);
        } elseif (\array_key_exists('USFilingTypeValue', $data) && null === $data['USFilingTypeValue']) {
            $object->setUSFilingTypeValue(null);
        }
        if (\array_key_exists('incoterm', $data) && null !== $data['incoterm']) {
            $object->setIncoterm($data['incoterm']);
        } elseif (\array_key_exists('incoterm', $data) && null === $data['incoterm']) {
            $object->setIncoterm(null);
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
        $values = [];
        foreach ($data->getPackages() as $value) {
            $values[] = null === $value ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['packages'] = $values;
        $dataArray['isCustomsDeclarable'] = $data->getIsCustomsDeclarable();
        if ($data->isInitialized('declaredValue') && null !== $data->getDeclaredValue()) {
            $dataArray['declaredValue'] = $data->getDeclaredValue();
        }
        if ($data->isInitialized('declaredValueCurrency') && null !== $data->getDeclaredValueCurrency()) {
            $dataArray['declaredValueCurrency'] = $data->getDeclaredValueCurrency();
        }
        if ($data->isInitialized('exportDeclaration') && null !== $data->getExportDeclaration()) {
            $dataArray['exportDeclaration'] = null === $data->getExportDeclaration() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getExportDeclaration(), 'json', $context));
        }
        $dataArray['description'] = $data->getDescription();
        if ($data->isInitialized('uSFilingTypeValue') && null !== $data->getUSFilingTypeValue()) {
            $dataArray['USFilingTypeValue'] = $data->getUSFilingTypeValue();
        }
        $dataArray['incoterm'] = $data->getIncoterm();
        $dataArray['unitOfMeasurement'] = $data->getUnitOfMeasurement();

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class => false];
    }
}
