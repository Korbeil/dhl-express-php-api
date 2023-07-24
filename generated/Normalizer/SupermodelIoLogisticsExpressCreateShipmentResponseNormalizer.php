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

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponse' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponse' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem', 'json', $context);
            }
            $object->setPackages($values);
        } elseif (\array_key_exists('packages', $data) && null === $data['packages']) {
            $object->setPackages(null);
        }
        if (\array_key_exists('documents', $data) && null !== $data['documents']) {
            $values_1 = [];
            foreach ($data['documents'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem', 'json', $context);
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
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem', 'json', $context);
            }
            $object->setShipmentDetails($values_2);
        } elseif (\array_key_exists('shipmentDetails', $data) && null === $data['shipmentDetails']) {
            $object->setShipmentDetails(null);
        }
        if (\array_key_exists('shipmentCharges', $data) && null !== $data['shipmentCharges']) {
            $values_3 = [];
            foreach ($data['shipmentCharges'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem', 'json', $context);
            }
            $object->setShipmentCharges($values_3);
        } elseif (\array_key_exists('shipmentCharges', $data) && null === $data['shipmentCharges']) {
            $object->setShipmentCharges(null);
        }
        if (\array_key_exists('barcodeInfo', $data) && null !== $data['barcodeInfo']) {
            $object->setBarcodeInfo($this->denormalizer->denormalize($data['barcodeInfo'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo', 'json', $context));
        } elseif (\array_key_exists('barcodeInfo', $data) && null === $data['barcodeInfo']) {
            $object->setBarcodeInfo(null);
        }
        if (\array_key_exists('estimatedDeliveryDate', $data) && null !== $data['estimatedDeliveryDate']) {
            $object->setEstimatedDeliveryDate($this->denormalizer->denormalize($data['estimatedDeliveryDate'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate', 'json', $context));
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

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('url') && null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if ($object->isInitialized('shipmentTrackingNumber') && null !== $object->getShipmentTrackingNumber()) {
            $data['shipmentTrackingNumber'] = $object->getShipmentTrackingNumber();
        }
        if ($object->isInitialized('cancelPickupUrl') && null !== $object->getCancelPickupUrl()) {
            $data['cancelPickupUrl'] = $object->getCancelPickupUrl();
        }
        if ($object->isInitialized('trackingUrl') && null !== $object->getTrackingUrl()) {
            $data['trackingUrl'] = $object->getTrackingUrl();
        }
        if ($object->isInitialized('dispatchConfirmationNumber') && null !== $object->getDispatchConfirmationNumber()) {
            $data['dispatchConfirmationNumber'] = $object->getDispatchConfirmationNumber();
        }
        if ($object->isInitialized('packages') && null !== $object->getPackages()) {
            $values = [];
            foreach ($object->getPackages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['packages'] = $values;
        }
        if ($object->isInitialized('documents') && null !== $object->getDocuments()) {
            $values_1 = [];
            foreach ($object->getDocuments() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['documents'] = $values_1;
        }
        if ($object->isInitialized('onDemandDeliveryURL') && null !== $object->getOnDemandDeliveryURL()) {
            $data['onDemandDeliveryURL'] = $object->getOnDemandDeliveryURL();
        }
        if ($object->isInitialized('shipmentDetails') && null !== $object->getShipmentDetails()) {
            $values_2 = [];
            foreach ($object->getShipmentDetails() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['shipmentDetails'] = $values_2;
        }
        if ($object->isInitialized('shipmentCharges') && null !== $object->getShipmentCharges()) {
            $values_3 = [];
            foreach ($object->getShipmentCharges() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['shipmentCharges'] = $values_3;
        }
        if ($object->isInitialized('barcodeInfo') && null !== $object->getBarcodeInfo()) {
            $data['barcodeInfo'] = $this->normalizer->normalize($object->getBarcodeInfo(), 'json', $context);
        }
        if ($object->isInitialized('estimatedDeliveryDate') && null !== $object->getEstimatedDeliveryDate()) {
            $data['estimatedDeliveryDate'] = $this->normalizer->normalize($object->getEstimatedDeliveryDate(), 'json', $context);
        }
        if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
            $values_4 = [];
            foreach ($object->getWarnings() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['warnings'] = $values_4;
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponse' => false];
    }
}
