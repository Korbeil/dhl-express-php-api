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

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem();
        if (\array_key_exists('referenceNumber', $data) && \is_int($data['referenceNumber'])) {
            $data['referenceNumber'] = (float) $data['referenceNumber'];
        }
        if (\array_key_exists('volumetricWeight', $data) && \is_int($data['volumetricWeight'])) {
            $data['volumetricWeight'] = (float) $data['volumetricWeight'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('referenceNumber', $data) && null !== $data['referenceNumber']) {
            $object->setReferenceNumber($data['referenceNumber']);
        } elseif (\array_key_exists('referenceNumber', $data) && null === $data['referenceNumber']) {
            $object->setReferenceNumber(null);
        }
        if (\array_key_exists('trackingNumber', $data) && null !== $data['trackingNumber']) {
            $object->setTrackingNumber($data['trackingNumber']);
        } elseif (\array_key_exists('trackingNumber', $data) && null === $data['trackingNumber']) {
            $object->setTrackingNumber(null);
        }
        if (\array_key_exists('trackingUrl', $data) && null !== $data['trackingUrl']) {
            $object->setTrackingUrl($data['trackingUrl']);
        } elseif (\array_key_exists('trackingUrl', $data) && null === $data['trackingUrl']) {
            $object->setTrackingUrl(null);
        }
        if (\array_key_exists('volumetricWeight', $data) && null !== $data['volumetricWeight']) {
            $object->setVolumetricWeight($data['volumetricWeight']);
        } elseif (\array_key_exists('volumetricWeight', $data) && null === $data['volumetricWeight']) {
            $object->setVolumetricWeight(null);
        }
        if (\array_key_exists('documents', $data) && null !== $data['documents']) {
            $values = [];
            foreach ($data['documents'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem', 'json', $context);
            }
            $object->setDocuments($values);
        } elseif (\array_key_exists('documents', $data) && null === $data['documents']) {
            $object->setDocuments(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('referenceNumber') && null !== $object->getReferenceNumber()) {
            $data['referenceNumber'] = $object->getReferenceNumber();
        }
        $data['trackingNumber'] = $object->getTrackingNumber();
        if ($object->isInitialized('trackingUrl') && null !== $object->getTrackingUrl()) {
            $data['trackingUrl'] = $object->getTrackingUrl();
        }
        if ($object->isInitialized('volumetricWeight') && null !== $object->getVolumetricWeight()) {
            $data['volumetricWeight'] = $object->getVolumetricWeight();
        }
        if ($object->isInitialized('documents') && null !== $object->getDocuments()) {
            $values = [];
            foreach ($object->getDocuments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['documents'] = $values;
        }

        return $data;
    }
}
