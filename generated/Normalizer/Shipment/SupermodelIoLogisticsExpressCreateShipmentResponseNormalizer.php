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

class SupermodelIoLogisticsExpressCreateShipmentResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressCreateShipmentResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressCreateShipmentResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressCreateShipmentResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('url', $data) && null !== $data['url']) {
            $object->url = $data['url'];
        } elseif (\array_key_exists('url', $data)) {
            $object->url = null;
        }
        if (\array_key_exists('shipmentTrackingNumber', $data) && null !== $data['shipmentTrackingNumber']) {
            $object->shipmentTrackingNumber = $data['shipmentTrackingNumber'];
        } elseif (\array_key_exists('shipmentTrackingNumber', $data)) {
            $object->shipmentTrackingNumber = null;
        }
        if (\array_key_exists('cancelPickupUrl', $data) && null !== $data['cancelPickupUrl']) {
            $object->cancelPickupUrl = $data['cancelPickupUrl'];
        } elseif (\array_key_exists('cancelPickupUrl', $data)) {
            $object->cancelPickupUrl = null;
        }
        if (\array_key_exists('trackingUrl', $data) && null !== $data['trackingUrl']) {
            $object->trackingUrl = $data['trackingUrl'];
        } elseif (\array_key_exists('trackingUrl', $data)) {
            $object->trackingUrl = null;
        }
        if (\array_key_exists('dispatchConfirmationNumber', $data) && null !== $data['dispatchConfirmationNumber']) {
            $object->dispatchConfirmationNumber = $data['dispatchConfirmationNumber'];
        } elseif (\array_key_exists('dispatchConfirmationNumber', $data)) {
            $object->dispatchConfirmationNumber = null;
        }
        if (\array_key_exists('packages', $data) && null !== $data['packages']) {
            $values = [];
            foreach ($data['packages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem::class, 'json', $context);
            }
            $object->packages = $values;
        } elseif (\array_key_exists('packages', $data)) {
            $object->packages = null;
        }
        if (\array_key_exists('documents', $data) && null !== $data['documents']) {
            $values_1 = [];
            foreach ($data['documents'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem::class, 'json', $context);
            }
            $object->documents = $values_1;
        } elseif (\array_key_exists('documents', $data)) {
            $object->documents = null;
        }
        if (\array_key_exists('onDemandDeliveryURL', $data) && null !== $data['onDemandDeliveryURL']) {
            $object->onDemandDeliveryURL = $data['onDemandDeliveryURL'];
        } elseif (\array_key_exists('onDemandDeliveryURL', $data)) {
            $object->onDemandDeliveryURL = null;
        }
        if (\array_key_exists('shipmentDetails', $data) && null !== $data['shipmentDetails']) {
            $values_2 = [];
            foreach ($data['shipmentDetails'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class, 'json', $context);
            }
            $object->shipmentDetails = $values_2;
        } elseif (\array_key_exists('shipmentDetails', $data)) {
            $object->shipmentDetails = null;
        }
        if (\array_key_exists('shipmentCharges', $data) && null !== $data['shipmentCharges']) {
            $values_3 = [];
            foreach ($data['shipmentCharges'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem::class, 'json', $context);
            }
            $object->shipmentCharges = $values_3;
        } elseif (\array_key_exists('shipmentCharges', $data)) {
            $object->shipmentCharges = null;
        }
        if (\array_key_exists('barcodeInfo', $data) && null !== $data['barcodeInfo']) {
            $object->barcodeInfo = $this->denormalizer->denormalize($data['barcodeInfo'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo::class, 'json', $context);
        } elseif (\array_key_exists('barcodeInfo', $data)) {
            $object->barcodeInfo = null;
        }
        if (\array_key_exists('estimatedDeliveryDate', $data) && null !== $data['estimatedDeliveryDate']) {
            $object->estimatedDeliveryDate = $this->denormalizer->denormalize($data['estimatedDeliveryDate'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate::class, 'json', $context);
        } elseif (\array_key_exists('estimatedDeliveryDate', $data)) {
            $object->estimatedDeliveryDate = null;
        }
        if (\array_key_exists('warnings', $data) && null !== $data['warnings']) {
            $values_4 = [];
            foreach ($data['warnings'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->warnings = $values_4;
        } elseif (\array_key_exists('warnings', $data)) {
            $object->warnings = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('url', get_object_vars($data)) && null !== ($data->url ?? null)) {
            $dataArray['url'] = $data->url;
        }
        if (\array_key_exists('shipmentTrackingNumber', get_object_vars($data)) && null !== ($data->shipmentTrackingNumber ?? null)) {
            $dataArray['shipmentTrackingNumber'] = $data->shipmentTrackingNumber;
        }
        if (\array_key_exists('cancelPickupUrl', get_object_vars($data)) && null !== ($data->cancelPickupUrl ?? null)) {
            $dataArray['cancelPickupUrl'] = $data->cancelPickupUrl;
        }
        if (\array_key_exists('trackingUrl', get_object_vars($data)) && null !== ($data->trackingUrl ?? null)) {
            $dataArray['trackingUrl'] = $data->trackingUrl;
        }
        if (\array_key_exists('dispatchConfirmationNumber', get_object_vars($data)) && null !== ($data->dispatchConfirmationNumber ?? null)) {
            $dataArray['dispatchConfirmationNumber'] = $data->dispatchConfirmationNumber;
        }
        if (\array_key_exists('packages', get_object_vars($data)) && null !== ($data->packages ?? null)) {
            $values = [];
            foreach ($data->packages as $value) {
                $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['packages'] = $values;
        }
        if (\array_key_exists('documents', get_object_vars($data)) && null !== ($data->documents ?? null)) {
            $values_1 = [];
            foreach ($data->documents as $value_1) {
                $normalized_1 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['documents'] = $values_1;
        }
        if (\array_key_exists('onDemandDeliveryURL', get_object_vars($data)) && null !== ($data->onDemandDeliveryURL ?? null)) {
            $dataArray['onDemandDeliveryURL'] = $data->onDemandDeliveryURL;
        }
        if (\array_key_exists('shipmentDetails', get_object_vars($data)) && null !== ($data->shipmentDetails ?? null)) {
            $values_2 = [];
            foreach ($data->shipmentDetails as $value_2) {
                $normalized_2 = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['shipmentDetails'] = $values_2;
        }
        if (\array_key_exists('shipmentCharges', get_object_vars($data)) && null !== ($data->shipmentCharges ?? null)) {
            $values_3 = [];
            foreach ($data->shipmentCharges as $value_3) {
                $normalized_3 = null === $value_3 ? null : $this->normalizer->normalize($value_3, 'json', $context);
                $values_3[] = is_iterable($normalized_3) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
            }
            $dataArray['shipmentCharges'] = $values_3;
        }
        if (\array_key_exists('barcodeInfo', get_object_vars($data)) && null !== ($data->barcodeInfo ?? null)) {
            $normalized_4 = $this->normalizer->normalize($data->barcodeInfo, 'json', $context);
            $dataArray['barcodeInfo'] = is_iterable($normalized_4) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (\array_key_exists('estimatedDeliveryDate', get_object_vars($data)) && null !== ($data->estimatedDeliveryDate ?? null)) {
            $normalized_5 = $this->normalizer->normalize($data->estimatedDeliveryDate, 'json', $context);
            $dataArray['estimatedDeliveryDate'] = is_iterable($normalized_5) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_5) : $normalized_5;
        }
        if (\array_key_exists('warnings', get_object_vars($data)) && null !== ($data->warnings ?? null)) {
            $values_4 = [];
            foreach ($data->warnings as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['warnings'] = $values_4;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressCreateShipmentResponse::class => false];
    }
}
