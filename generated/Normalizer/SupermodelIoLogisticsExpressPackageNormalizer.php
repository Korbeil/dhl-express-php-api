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

class SupermodelIoLogisticsExpressPackageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressPackage' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressPackage' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackage();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
            $object->setDimensions($this->denormalizer->denormalize($data['dimensions'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressPackageDimensions', 'json', $context));
        } elseif (\array_key_exists('dimensions', $data) && null === $data['dimensions']) {
            $object->setDimensions(null);
        }
        if (\array_key_exists('customerReferences', $data) && null !== $data['customerReferences']) {
            $values = [];
            foreach ($data['customerReferences'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressPackageReference', 'json', $context);
            }
            $object->setCustomerReferences($values);
        } elseif (\array_key_exists('customerReferences', $data) && null === $data['customerReferences']) {
            $object->setCustomerReferences(null);
        }
        if (\array_key_exists('identifiers', $data) && null !== $data['identifiers']) {
            $values_1 = [];
            foreach ($data['identifiers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressIdentifier', 'json', $context);
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
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressPackageLabelBarcodesItem', 'json', $context);
            }
            $object->setLabelBarcodes($values_2);
        } elseif (\array_key_exists('labelBarcodes', $data) && null === $data['labelBarcodes']) {
            $object->setLabelBarcodes(null);
        }
        if (\array_key_exists('labelText', $data) && null !== $data['labelText']) {
            $values_3 = [];
            foreach ($data['labelText'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressPackageLabelTextItem', 'json', $context);
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

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getTypeCode()) {
            $data['typeCode'] = $object->getTypeCode();
        }
        $data['weight'] = $object->getWeight();
        $data['dimensions'] = $this->normalizer->normalize($object->getDimensions(), 'json', $context);
        if (null !== $object->getCustomerReferences()) {
            $values = [];
            foreach ($object->getCustomerReferences() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['customerReferences'] = $values;
        }
        if (null !== $object->getIdentifiers()) {
            $values_1 = [];
            foreach ($object->getIdentifiers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['identifiers'] = $values_1;
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getLabelBarcodes()) {
            $values_2 = [];
            foreach ($object->getLabelBarcodes() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['labelBarcodes'] = $values_2;
        }
        if (null !== $object->getLabelText()) {
            $values_3 = [];
            foreach ($object->getLabelText() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['labelText'] = $values_3;
        }
        if (null !== $object->getLabelDescription()) {
            $data['labelDescription'] = $object->getLabelDescription();
        }

        return $data;
    }
}
