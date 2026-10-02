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

class SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('shipmentIdentificationNumberBarcodeContent', $data) && null !== $data['shipmentIdentificationNumberBarcodeContent']) {
            $object->shipmentIdentificationNumberBarcodeContent = $data['shipmentIdentificationNumberBarcodeContent'];
        } elseif (\array_key_exists('shipmentIdentificationNumberBarcodeContent', $data)) {
            $object->shipmentIdentificationNumberBarcodeContent = null;
        }
        if (\array_key_exists('originDestinationServiceTypeBarcodeContent', $data) && null !== $data['originDestinationServiceTypeBarcodeContent']) {
            $object->originDestinationServiceTypeBarcodeContent = $data['originDestinationServiceTypeBarcodeContent'];
        } elseif (\array_key_exists('originDestinationServiceTypeBarcodeContent', $data)) {
            $object->originDestinationServiceTypeBarcodeContent = null;
        }
        if (\array_key_exists('routingBarcodeContent', $data) && null !== $data['routingBarcodeContent']) {
            $object->routingBarcodeContent = $data['routingBarcodeContent'];
        } elseif (\array_key_exists('routingBarcodeContent', $data)) {
            $object->routingBarcodeContent = null;
        }
        if (\array_key_exists('trackingNumberBarcodes', $data) && null !== $data['trackingNumberBarcodes']) {
            $values = [];
            foreach ($data['trackingNumberBarcodes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem::class, 'json', $context);
            }
            $object->trackingNumberBarcodes = $values;
        } elseif (\array_key_exists('trackingNumberBarcodes', $data)) {
            $object->trackingNumberBarcodes = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('shipmentIdentificationNumberBarcodeContent', get_object_vars($data)) && null !== ($data->shipmentIdentificationNumberBarcodeContent ?? null)) {
            $dataArray['shipmentIdentificationNumberBarcodeContent'] = $data->shipmentIdentificationNumberBarcodeContent;
        }
        if (\array_key_exists('originDestinationServiceTypeBarcodeContent', get_object_vars($data)) && null !== ($data->originDestinationServiceTypeBarcodeContent ?? null)) {
            $dataArray['originDestinationServiceTypeBarcodeContent'] = $data->originDestinationServiceTypeBarcodeContent;
        }
        if (\array_key_exists('routingBarcodeContent', get_object_vars($data)) && null !== ($data->routingBarcodeContent ?? null)) {
            $dataArray['routingBarcodeContent'] = $data->routingBarcodeContent;
        }
        if (\array_key_exists('trackingNumberBarcodes', get_object_vars($data)) && null !== ($data->trackingNumberBarcodes ?? null)) {
            $values = [];
            foreach ($data->trackingNumberBarcodes as $value) {
                $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['trackingNumberBarcodes'] = $values;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo::class => false];
    }
}
