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

class SupermodelIoLogisticsExpressCreateShipmentRequestContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContent' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContent' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('packages', $data) && null !== $data['packages']) {
            $values = [];
            foreach ($data['packages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressPackage', 'json', $context);
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
            $object->setExportDeclaration($this->denormalizer->denormalize($data['exportDeclaration'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration', 'json', $context));
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

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $values = [];
        foreach ($object->getPackages() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['packages'] = $values;
        $data['isCustomsDeclarable'] = $object->getIsCustomsDeclarable();
        if (null !== $object->getDeclaredValue()) {
            $data['declaredValue'] = $object->getDeclaredValue();
        }
        if (null !== $object->getDeclaredValueCurrency()) {
            $data['declaredValueCurrency'] = $object->getDeclaredValueCurrency();
        }
        if (null !== $object->getExportDeclaration()) {
            $data['exportDeclaration'] = $this->normalizer->normalize($object->getExportDeclaration(), 'json', $context);
        }
        $data['description'] = $object->getDescription();
        if (null !== $object->getUSFilingTypeValue()) {
            $data['USFilingTypeValue'] = $object->getUSFilingTypeValue();
        }
        $data['incoterm'] = $object->getIncoterm();
        $data['unitOfMeasurement'] = $object->getUnitOfMeasurement();

        return $data;
    }
}
