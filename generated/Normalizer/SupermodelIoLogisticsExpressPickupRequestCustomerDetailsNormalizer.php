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

class SupermodelIoLogisticsExpressPickupRequestCustomerDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetails::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetails::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('shipperDetails', $data) && null !== $data['shipperDetails']) {
            $object->setShipperDetails($this->denormalizer->denormalize($data['shipperDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetails::class, 'json', $context));
        } elseif (\array_key_exists('shipperDetails', $data) && null === $data['shipperDetails']) {
            $object->setShipperDetails(null);
        }
        if (\array_key_exists('receiverDetails', $data) && null !== $data['receiverDetails']) {
            $object->setReceiverDetails($this->denormalizer->denormalize($data['receiverDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetails::class, 'json', $context));
        } elseif (\array_key_exists('receiverDetails', $data) && null === $data['receiverDetails']) {
            $object->setReceiverDetails(null);
        }
        if (\array_key_exists('bookingRequestorDetails', $data) && null !== $data['bookingRequestorDetails']) {
            $object->setBookingRequestorDetails($this->denormalizer->denormalize($data['bookingRequestorDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails::class, 'json', $context));
        } elseif (\array_key_exists('bookingRequestorDetails', $data) && null === $data['bookingRequestorDetails']) {
            $object->setBookingRequestorDetails(null);
        }
        if (\array_key_exists('pickupDetails', $data) && null !== $data['pickupDetails']) {
            $object->setPickupDetails($this->denormalizer->denormalize($data['pickupDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetails::class, 'json', $context));
        } elseif (\array_key_exists('pickupDetails', $data) && null === $data['pickupDetails']) {
            $object->setPickupDetails(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['shipperDetails'] = null === $data->getShipperDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getShipperDetails(), 'json', $context));
        if ($data->isInitialized('receiverDetails') && null !== $data->getReceiverDetails()) {
            $dataArray['receiverDetails'] = null === $data->getReceiverDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getReceiverDetails(), 'json', $context));
        }
        if ($data->isInitialized('bookingRequestorDetails') && null !== $data->getBookingRequestorDetails()) {
            $dataArray['bookingRequestorDetails'] = null === $data->getBookingRequestorDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getBookingRequestorDetails(), 'json', $context));
        }
        if ($data->isInitialized('pickupDetails') && null !== $data->getPickupDetails()) {
            $dataArray['pickupDetails'] = null === $data->getPickupDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPickupDetails(), 'json', $context));
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetails::class => false];
    }
}
