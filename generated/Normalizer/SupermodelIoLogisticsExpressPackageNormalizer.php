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

class SupermodelIoLogisticsExpressPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackage::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackage::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
            $data['weight'] = (float) $data['weight'];
        }
        if (\array_key_exists('typeCode', $data) && null !== $data['typeCode']) {
            $object->setTypeCode($data['typeCode']);
        } elseif (\array_key_exists('typeCode', $data) && null === $data['typeCode']) {
            $object->setTypeCode(null);
        }
        if (\array_key_exists('weight', $data) && null !== $data['weight']) {
            $object->setWeight($data['weight']);
        } elseif (\array_key_exists('weight', $data) && null === $data['weight']) {
            $object->setWeight(null);
        }
        if (\array_key_exists('dimensions', $data) && null !== $data['dimensions']) {
            $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageDimensions::class, 'json', $context));
        } elseif (\array_key_exists('dimensions', $data) && null === $data['dimensions']) {
            $object->setDimensions(null);
        }
        if (\array_key_exists('customerReferences', $data) && null !== $data['customerReferences']) {
            $values = [];
            foreach ($data['customerReferences'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageReference::class, 'json', $context);
            }
            $object->setCustomerReferences($values);
        } elseif (\array_key_exists('customerReferences', $data) && null === $data['customerReferences']) {
            $object->setCustomerReferences(null);
        }
        if (\array_key_exists('identifiers', $data) && null !== $data['identifiers']) {
            $values_1 = [];
            foreach ($data['identifiers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressIdentifier::class, 'json', $context);
            }
            $object->setIdentifiers($values_1);
        } elseif (\array_key_exists('identifiers', $data) && null === $data['identifiers']) {
            $object->setIdentifiers(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('labelBarcodes', $data) && null !== $data['labelBarcodes']) {
            $values_2 = [];
            foreach ($data['labelBarcodes'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageLabelBarcodesItem::class, 'json', $context);
            }
            $object->setLabelBarcodes($values_2);
        } elseif (\array_key_exists('labelBarcodes', $data) && null === $data['labelBarcodes']) {
            $object->setLabelBarcodes(null);
        }
        if (\array_key_exists('labelText', $data) && null !== $data['labelText']) {
            $values_3 = [];
            foreach ($data['labelText'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageLabelTextItem::class, 'json', $context);
            }
            $object->setLabelText($values_3);
        } elseif (\array_key_exists('labelText', $data) && null === $data['labelText']) {
            $object->setLabelText(null);
        }
        if (\array_key_exists('labelDescription', $data) && null !== $data['labelDescription']) {
            $object->setLabelDescription($data['labelDescription']);
        } elseif (\array_key_exists('labelDescription', $data) && null === $data['labelDescription']) {
            $object->setLabelDescription(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('typeCode') && null !== $data->getTypeCode()) {
            $dataArray['typeCode'] = $data->getTypeCode();
        }
        $dataArray['weight'] = $data->getWeight();
        $dataArray['dimensions'] = null === $data->getDimensions() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getDimensions(), 'json', $context));
        if ($data->isInitialized('customerReferences') && null !== $data->getCustomerReferences()) {
            $values = [];
            foreach ($data->getCustomerReferences() as $value) {
                $values[] = null === $value ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['customerReferences'] = $values;
        }
        if ($data->isInitialized('identifiers') && null !== $data->getIdentifiers()) {
            $values_1 = [];
            foreach ($data->getIdentifiers() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['identifiers'] = $values_1;
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('labelBarcodes') && null !== $data->getLabelBarcodes()) {
            $values_2 = [];
            foreach ($data->getLabelBarcodes() as $value_2) {
                $values_2[] = null === $value_2 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['labelBarcodes'] = $values_2;
        }
        if ($data->isInitialized('labelText') && null !== $data->getLabelText()) {
            $values_3 = [];
            foreach ($data->getLabelText() as $value_3) {
                $values_3[] = null === $value_3 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['labelText'] = $values_3;
        }
        if ($data->isInitialized('labelDescription') && null !== $data->getLabelDescription()) {
            $dataArray['labelDescription'] = $data->getLabelDescription();
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackage::class => false];
    }
}
