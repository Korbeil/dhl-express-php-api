<?php

namespace Korbeil\DHLExpress\Api\Normalizer\Shipment;

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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressPackage::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressPackage::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressPackage();
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
            $object->typeCode = $data['typeCode'];
        } elseif (\array_key_exists('typeCode', $data)) {
            $object->typeCode = null;
        }
        if (\array_key_exists('weight', $data) && null !== $data['weight']) {
            $object->weight = $data['weight'];
        } elseif (\array_key_exists('weight', $data)) {
            $object->weight = null;
        }
        if (\array_key_exists('dimensions', $data) && null !== $data['dimensions']) {
            $object->dimensions = $this->denormalizer->denormalize($data['dimensions'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageDimensions::class, 'json', $context);
        } elseif (\array_key_exists('dimensions', $data)) {
            $object->dimensions = null;
        }
        if (\array_key_exists('customerReferences', $data) && null !== $data['customerReferences']) {
            $values = [];
            foreach ($data['customerReferences'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressPackageReference::class, 'json', $context);
            }
            $object->customerReferences = $values;
        } elseif (\array_key_exists('customerReferences', $data)) {
            $object->customerReferences = null;
        }
        if (\array_key_exists('identifiers', $data) && null !== $data['identifiers']) {
            $values_1 = [];
            foreach ($data['identifiers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressIdentifier::class, 'json', $context);
            }
            $object->identifiers = $values_1;
        } elseif (\array_key_exists('identifiers', $data)) {
            $object->identifiers = null;
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->description = $data['description'];
        } elseif (\array_key_exists('description', $data)) {
            $object->description = null;
        }
        if (\array_key_exists('labelBarcodes', $data) && null !== $data['labelBarcodes']) {
            $values_2 = [];
            foreach ($data['labelBarcodes'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageLabelBarcodesItem::class, 'json', $context);
            }
            $object->labelBarcodes = $values_2;
        } elseif (\array_key_exists('labelBarcodes', $data)) {
            $object->labelBarcodes = null;
        }
        if (\array_key_exists('labelText', $data) && null !== $data['labelText']) {
            $values_3 = [];
            foreach ($data['labelText'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageLabelTextItem::class, 'json', $context);
            }
            $object->labelText = $values_3;
        } elseif (\array_key_exists('labelText', $data)) {
            $object->labelText = null;
        }
        if (\array_key_exists('labelDescription', $data) && null !== $data['labelDescription']) {
            $object->labelDescription = $data['labelDescription'];
        } elseif (\array_key_exists('labelDescription', $data)) {
            $object->labelDescription = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('typeCode', get_object_vars($data)) && null !== ($data->typeCode ?? null)) {
            $dataArray['typeCode'] = $data->typeCode;
        }
        $dataArray['weight'] = $data->weight;
        $normalized = null === $data->dimensions ? null : $this->normalizer->normalize($data->dimensions, 'json', $context);
        $dataArray['dimensions'] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        if (\array_key_exists('customerReferences', get_object_vars($data)) && null !== ($data->customerReferences ?? null)) {
            $values = [];
            foreach ($data->customerReferences as $value) {
                $normalized_1 = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['customerReferences'] = $values;
        }
        if (\array_key_exists('identifiers', get_object_vars($data)) && null !== ($data->identifiers ?? null)) {
            $values_1 = [];
            foreach ($data->identifiers as $value_1) {
                $normalized_2 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['identifiers'] = $values_1;
        }
        if (\array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description;
        }
        if (\array_key_exists('labelBarcodes', get_object_vars($data)) && null !== ($data->labelBarcodes ?? null)) {
            $values_2 = [];
            foreach ($data->labelBarcodes as $value_2) {
                $normalized_3 = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = is_iterable($normalized_3) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
            }
            $dataArray['labelBarcodes'] = $values_2;
        }
        if (\array_key_exists('labelText', get_object_vars($data)) && null !== ($data->labelText ?? null)) {
            $values_3 = [];
            foreach ($data->labelText as $value_3) {
                $normalized_4 = null === $value_3 ? null : $this->normalizer->normalize($value_3, 'json', $context);
                $values_3[] = is_iterable($normalized_4) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_4) : $normalized_4;
            }
            $dataArray['labelText'] = $values_3;
        }
        if (\array_key_exists('labelDescription', get_object_vars($data)) && null !== ($data->labelDescription ?? null)) {
            $dataArray['labelDescription'] = $data->labelDescription;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressPackage::class => false];
    }
}
