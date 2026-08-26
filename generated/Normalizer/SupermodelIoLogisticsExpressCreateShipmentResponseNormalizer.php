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

class SupermodelIoLogisticsExpressCreateShipmentResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse();
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
            $object->setUrl($data['url']);
        } elseif (\array_key_exists('url', $data) && null === $data['url']) {
            $object->setUrl(null);
        }
        if (\array_key_exists('shipmentTrackingNumber', $data) && null !== $data['shipmentTrackingNumber']) {
            $object->setShipmentTrackingNumber($data['shipmentTrackingNumber']);
        } elseif (\array_key_exists('shipmentTrackingNumber', $data) && null === $data['shipmentTrackingNumber']) {
            $object->setShipmentTrackingNumber(null);
        }
        if (\array_key_exists('cancelPickupUrl', $data) && null !== $data['cancelPickupUrl']) {
            $object->setCancelPickupUrl($data['cancelPickupUrl']);
        } elseif (\array_key_exists('cancelPickupUrl', $data) && null === $data['cancelPickupUrl']) {
            $object->setCancelPickupUrl(null);
        }
        if (\array_key_exists('trackingUrl', $data) && null !== $data['trackingUrl']) {
            $object->setTrackingUrl($data['trackingUrl']);
        } elseif (\array_key_exists('trackingUrl', $data) && null === $data['trackingUrl']) {
            $object->setTrackingUrl(null);
        }
        if (\array_key_exists('dispatchConfirmationNumber', $data) && null !== $data['dispatchConfirmationNumber']) {
            $object->setDispatchConfirmationNumber($data['dispatchConfirmationNumber']);
        } elseif (\array_key_exists('dispatchConfirmationNumber', $data) && null === $data['dispatchConfirmationNumber']) {
            $object->setDispatchConfirmationNumber(null);
        }
        if (\array_key_exists('packages', $data) && null !== $data['packages']) {
            $values = [];
            foreach ($data['packages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem::class, 'json', $context);
            }
            $object->setPackages($values);
        } elseif (\array_key_exists('packages', $data) && null === $data['packages']) {
            $object->setPackages(null);
        }
        if (\array_key_exists('documents', $data) && null !== $data['documents']) {
            $values_1 = [];
            foreach ($data['documents'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem::class, 'json', $context);
            }
            $object->setDocuments($values_1);
        } elseif (\array_key_exists('documents', $data) && null === $data['documents']) {
            $object->setDocuments(null);
        }
        if (\array_key_exists('onDemandDeliveryURL', $data) && null !== $data['onDemandDeliveryURL']) {
            $object->setOnDemandDeliveryURL($data['onDemandDeliveryURL']);
        } elseif (\array_key_exists('onDemandDeliveryURL', $data) && null === $data['onDemandDeliveryURL']) {
            $object->setOnDemandDeliveryURL(null);
        }
        if (\array_key_exists('shipmentDetails', $data) && null !== $data['shipmentDetails']) {
            $values_2 = [];
            foreach ($data['shipmentDetails'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class, 'json', $context);
            }
            $object->setShipmentDetails($values_2);
        } elseif (\array_key_exists('shipmentDetails', $data) && null === $data['shipmentDetails']) {
            $object->setShipmentDetails(null);
        }
        if (\array_key_exists('shipmentCharges', $data) && null !== $data['shipmentCharges']) {
            $values_3 = [];
            foreach ($data['shipmentCharges'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem::class, 'json', $context);
            }
            $object->setShipmentCharges($values_3);
        } elseif (\array_key_exists('shipmentCharges', $data) && null === $data['shipmentCharges']) {
            $object->setShipmentCharges(null);
        }
        if (\array_key_exists('barcodeInfo', $data) && null !== $data['barcodeInfo']) {
            $object->setBarcodeInfo($this->denormalizer->denormalize($data['barcodeInfo'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo::class, 'json', $context));
        } elseif (\array_key_exists('barcodeInfo', $data) && null === $data['barcodeInfo']) {
            $object->setBarcodeInfo(null);
        }
        if (\array_key_exists('estimatedDeliveryDate', $data) && null !== $data['estimatedDeliveryDate']) {
            $object->setEstimatedDeliveryDate($this->denormalizer->denormalize($data['estimatedDeliveryDate'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate::class, 'json', $context));
        } elseif (\array_key_exists('estimatedDeliveryDate', $data) && null === $data['estimatedDeliveryDate']) {
            $object->setEstimatedDeliveryDate(null);
        }
        if (\array_key_exists('warnings', $data) && null !== $data['warnings']) {
            $values_4 = [];
            foreach ($data['warnings'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setWarnings($values_4);
        } elseif (\array_key_exists('warnings', $data) && null === $data['warnings']) {
            $object->setWarnings(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('url') && null !== $data->getUrl()) {
            $dataArray['url'] = $data->getUrl();
        }
        if ($data->isInitialized('shipmentTrackingNumber') && null !== $data->getShipmentTrackingNumber()) {
            $dataArray['shipmentTrackingNumber'] = $data->getShipmentTrackingNumber();
        }
        if ($data->isInitialized('cancelPickupUrl') && null !== $data->getCancelPickupUrl()) {
            $dataArray['cancelPickupUrl'] = $data->getCancelPickupUrl();
        }
        if ($data->isInitialized('trackingUrl') && null !== $data->getTrackingUrl()) {
            $dataArray['trackingUrl'] = $data->getTrackingUrl();
        }
        if ($data->isInitialized('dispatchConfirmationNumber') && null !== $data->getDispatchConfirmationNumber()) {
            $dataArray['dispatchConfirmationNumber'] = $data->getDispatchConfirmationNumber();
        }
        if ($data->isInitialized('packages') && null !== $data->getPackages()) {
            $values = [];
            foreach ($data->getPackages() as $value) {
                $values[] = null === $value ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['packages'] = $values;
        }
        if ($data->isInitialized('documents') && null !== $data->getDocuments()) {
            $values_1 = [];
            foreach ($data->getDocuments() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['documents'] = $values_1;
        }
        if ($data->isInitialized('onDemandDeliveryURL') && null !== $data->getOnDemandDeliveryURL()) {
            $dataArray['onDemandDeliveryURL'] = $data->getOnDemandDeliveryURL();
        }
        if ($data->isInitialized('shipmentDetails') && null !== $data->getShipmentDetails()) {
            $values_2 = [];
            foreach ($data->getShipmentDetails() as $value_2) {
                $values_2[] = null === $value_2 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['shipmentDetails'] = $values_2;
        }
        if ($data->isInitialized('shipmentCharges') && null !== $data->getShipmentCharges()) {
            $values_3 = [];
            foreach ($data->getShipmentCharges() as $value_3) {
                $values_3[] = null === $value_3 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['shipmentCharges'] = $values_3;
        }
        if ($data->isInitialized('barcodeInfo') && null !== $data->getBarcodeInfo()) {
            $dataArray['barcodeInfo'] = null === $data->getBarcodeInfo() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getBarcodeInfo(), 'json', $context));
        }
        if ($data->isInitialized('estimatedDeliveryDate') && null !== $data->getEstimatedDeliveryDate()) {
            $dataArray['estimatedDeliveryDate'] = null === $data->getEstimatedDeliveryDate() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getEstimatedDeliveryDate(), 'json', $context));
        }
        if ($data->isInitialized('warnings') && null !== $data->getWarnings()) {
            $values_4 = [];
            foreach ($data->getWarnings() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['warnings'] = $values_4;
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse::class => false];
    }
}
