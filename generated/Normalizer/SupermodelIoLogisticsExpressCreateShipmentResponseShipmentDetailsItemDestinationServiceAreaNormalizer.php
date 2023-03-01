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

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceAreaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea();
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
        if (\array_key_exists('inboundSortCode', $data) && null !== $data['inboundSortCode']) {
            $object->setInboundSortCode($data['inboundSortCode']);
        } elseif (\array_key_exists('inboundSortCode', $data) && null === $data['inboundSortCode']) {
            $object->setInboundSortCode(null);
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
        if (null !== $object->getInboundSortCode()) {
            $data['inboundSortCode'] = $object->getInboundSortCode();
        }

        return $data;
    }
}
