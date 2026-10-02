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

class SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem();
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
        if (\array_key_exists('referenceNumber', $data) && null !== $data['referenceNumber']) {
            $object->referenceNumber = $data['referenceNumber'];
        } elseif (\array_key_exists('referenceNumber', $data)) {
            $object->referenceNumber = null;
        }
        if (\array_key_exists('trackingNumberBarcodeContent', $data) && null !== $data['trackingNumberBarcodeContent']) {
            $object->trackingNumberBarcodeContent = $data['trackingNumberBarcodeContent'];
        } elseif (\array_key_exists('trackingNumberBarcodeContent', $data)) {
            $object->trackingNumberBarcodeContent = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('referenceNumber', get_object_vars($data)) && null !== ($data->referenceNumber ?? null)) {
            $dataArray['referenceNumber'] = $data->referenceNumber;
        }
        if (\array_key_exists('trackingNumberBarcodeContent', get_object_vars($data)) && null !== ($data->trackingNumberBarcodeContent ?? null)) {
            $dataArray['trackingNumberBarcodeContent'] = $data->trackingNumberBarcodeContent;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem::class => false];
    }
}
