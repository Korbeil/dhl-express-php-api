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

class SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('referenceNumber', $data) && \is_int($data['referenceNumber'])) {
            $data['referenceNumber'] = (float) $data['referenceNumber'];
        }
        if (\array_key_exists('volumetricWeight', $data) && \is_int($data['volumetricWeight'])) {
            $data['volumetricWeight'] = (float) $data['volumetricWeight'];
        }
        if (\array_key_exists('referenceNumber', $data) && null !== $data['referenceNumber']) {
            $object->referenceNumber = $data['referenceNumber'];
        } elseif (\array_key_exists('referenceNumber', $data)) {
            $object->referenceNumber = null;
        }
        if (\array_key_exists('trackingNumber', $data) && null !== $data['trackingNumber']) {
            $object->trackingNumber = $data['trackingNumber'];
        } elseif (\array_key_exists('trackingNumber', $data)) {
            $object->trackingNumber = null;
        }
        if (\array_key_exists('trackingUrl', $data) && null !== $data['trackingUrl']) {
            $object->trackingUrl = $data['trackingUrl'];
        } elseif (\array_key_exists('trackingUrl', $data)) {
            $object->trackingUrl = null;
        }
        if (\array_key_exists('volumetricWeight', $data) && null !== $data['volumetricWeight']) {
            $object->volumetricWeight = $data['volumetricWeight'];
        } elseif (\array_key_exists('volumetricWeight', $data)) {
            $object->volumetricWeight = null;
        }
        if (\array_key_exists('documents', $data) && null !== $data['documents']) {
            $values = [];
            foreach ($data['documents'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem::class, 'json', $context);
            }
            $object->documents = $values;
        } elseif (\array_key_exists('documents', $data)) {
            $object->documents = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('referenceNumber', get_object_vars($data)) && null !== ($data->referenceNumber ?? null)) {
            $dataArray['referenceNumber'] = $data->referenceNumber;
        }
        $dataArray['trackingNumber'] = $data->trackingNumber;
        if (\array_key_exists('trackingUrl', get_object_vars($data)) && null !== ($data->trackingUrl ?? null)) {
            $dataArray['trackingUrl'] = $data->trackingUrl;
        }
        if (\array_key_exists('volumetricWeight', get_object_vars($data)) && null !== ($data->volumetricWeight ?? null)) {
            $dataArray['volumetricWeight'] = $data->volumetricWeight;
        }
        if (\array_key_exists('documents', get_object_vars($data)) && null !== ($data->documents ?? null)) {
            $values = [];
            foreach ($data->documents as $value) {
                $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['documents'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem::class => false];
    }
}
