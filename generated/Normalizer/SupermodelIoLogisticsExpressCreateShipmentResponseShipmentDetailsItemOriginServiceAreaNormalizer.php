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

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceAreaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('facilityCode', $data) && null !== $data['facilityCode']) {
            $object->setFacilityCode($data['facilityCode']);
        } elseif (\array_key_exists('facilityCode', $data) && null === $data['facilityCode']) {
            $object->setFacilityCode(null);
        }
        if (\array_key_exists('serviceAreaCode', $data) && null !== $data['serviceAreaCode']) {
            $object->setServiceAreaCode($data['serviceAreaCode']);
        } elseif (\array_key_exists('serviceAreaCode', $data) && null === $data['serviceAreaCode']) {
            $object->setServiceAreaCode(null);
        }
        if (\array_key_exists('outboundSortCode', $data) && null !== $data['outboundSortCode']) {
            $object->setOutboundSortCode($data['outboundSortCode']);
        } elseif (\array_key_exists('outboundSortCode', $data) && null === $data['outboundSortCode']) {
            $object->setOutboundSortCode(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getFacilityCode()) {
            $data['facilityCode'] = $object->getFacilityCode();
        }
        if (null !== $object->getServiceAreaCode()) {
            $data['serviceAreaCode'] = $object->getServiceAreaCode();
        }
        if (null !== $object->getOutboundSortCode()) {
            $data['outboundSortCode'] = $object->getOutboundSortCode();
        }

        return $data;
    }
}
