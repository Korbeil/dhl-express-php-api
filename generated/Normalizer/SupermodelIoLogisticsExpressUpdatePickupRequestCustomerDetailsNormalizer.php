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

class SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shipperDetails', $data) && null !== $data['shipperDetails']) {
            $object->setShipperDetails($this->denormalizer->denormalize($data['shipperDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetails', 'json', $context));
        } elseif (\array_key_exists('shipperDetails', $data) && null === $data['shipperDetails']) {
            $object->setShipperDetails(null);
        }
        if (\array_key_exists('receiverDetails', $data) && null !== $data['receiverDetails']) {
            $object->setReceiverDetails($this->denormalizer->denormalize($data['receiverDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetails', 'json', $context));
        } elseif (\array_key_exists('receiverDetails', $data) && null === $data['receiverDetails']) {
            $object->setReceiverDetails(null);
        }
        if (\array_key_exists('bookingRequestorDetails', $data) && null !== $data['bookingRequestorDetails']) {
            $object->setBookingRequestorDetails($this->denormalizer->denormalize($data['bookingRequestorDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails', 'json', $context));
        } elseif (\array_key_exists('bookingRequestorDetails', $data) && null === $data['bookingRequestorDetails']) {
            $object->setBookingRequestorDetails(null);
        }
        if (\array_key_exists('pickupDetails', $data) && null !== $data['pickupDetails']) {
            $object->setPickupDetails($this->denormalizer->denormalize($data['pickupDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails', 'json', $context));
        } elseif (\array_key_exists('pickupDetails', $data) && null === $data['pickupDetails']) {
            $object->setPickupDetails(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['shipperDetails'] = $this->normalizer->normalize($object->getShipperDetails(), 'json', $context);
        if ($object->isInitialized('receiverDetails') && null !== $object->getReceiverDetails()) {
            $data['receiverDetails'] = $this->normalizer->normalize($object->getReceiverDetails(), 'json', $context);
        }
        if ($object->isInitialized('bookingRequestorDetails') && null !== $object->getBookingRequestorDetails()) {
            $data['bookingRequestorDetails'] = $this->normalizer->normalize($object->getBookingRequestorDetails(), 'json', $context);
        }
        if ($object->isInitialized('pickupDetails') && null !== $object->getPickupDetails()) {
            $data['pickupDetails'] = $this->normalizer->normalize($object->getPickupDetails(), 'json', $context);
        }

        return $data;
    }
}
