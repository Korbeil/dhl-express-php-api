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

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shipmentIdentificationNumberBarcodeContent', $data) && null !== $data['shipmentIdentificationNumberBarcodeContent']) {
            $object->setShipmentIdentificationNumberBarcodeContent($data['shipmentIdentificationNumberBarcodeContent']);
        } elseif (\array_key_exists('shipmentIdentificationNumberBarcodeContent', $data) && null === $data['shipmentIdentificationNumberBarcodeContent']) {
            $object->setShipmentIdentificationNumberBarcodeContent(null);
        }
        if (\array_key_exists('originDestinationServiceTypeBarcodeContent', $data) && null !== $data['originDestinationServiceTypeBarcodeContent']) {
            $object->setOriginDestinationServiceTypeBarcodeContent($data['originDestinationServiceTypeBarcodeContent']);
        } elseif (\array_key_exists('originDestinationServiceTypeBarcodeContent', $data) && null === $data['originDestinationServiceTypeBarcodeContent']) {
            $object->setOriginDestinationServiceTypeBarcodeContent(null);
        }
        if (\array_key_exists('routingBarcodeContent', $data) && null !== $data['routingBarcodeContent']) {
            $object->setRoutingBarcodeContent($data['routingBarcodeContent']);
        } elseif (\array_key_exists('routingBarcodeContent', $data) && null === $data['routingBarcodeContent']) {
            $object->setRoutingBarcodeContent(null);
        }
        if (\array_key_exists('trackingNumberBarcodes', $data) && null !== $data['trackingNumberBarcodes']) {
            $values = [];
            foreach ($data['trackingNumberBarcodes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem', 'json', $context);
            }
            $object->setTrackingNumberBarcodes($values);
        } elseif (\array_key_exists('trackingNumberBarcodes', $data) && null === $data['trackingNumberBarcodes']) {
            $object->setTrackingNumberBarcodes(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('shipmentIdentificationNumberBarcodeContent') && null !== $object->getShipmentIdentificationNumberBarcodeContent()) {
            $data['shipmentIdentificationNumberBarcodeContent'] = $object->getShipmentIdentificationNumberBarcodeContent();
        }
        if ($object->isInitialized('originDestinationServiceTypeBarcodeContent') && null !== $object->getOriginDestinationServiceTypeBarcodeContent()) {
            $data['originDestinationServiceTypeBarcodeContent'] = $object->getOriginDestinationServiceTypeBarcodeContent();
        }
        if ($object->isInitialized('routingBarcodeContent') && null !== $object->getRoutingBarcodeContent()) {
            $data['routingBarcodeContent'] = $object->getRoutingBarcodeContent();
        }
        if ($object->isInitialized('trackingNumberBarcodes') && null !== $object->getTrackingNumberBarcodes()) {
            $values = [];
            foreach ($object->getTrackingNumberBarcodes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['trackingNumberBarcodes'] = $values;
        }

        return $data;
    }
}
