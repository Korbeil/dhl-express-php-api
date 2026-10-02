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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails();
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
            $object->shipperDetails = $this->denormalizer->denormalize($data['shipperDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetails::class, 'json', $context);
        } elseif (\array_key_exists('shipperDetails', $data)) {
            $object->shipperDetails = null;
        }
        if (\array_key_exists('receiverDetails', $data) && null !== $data['receiverDetails']) {
            $object->receiverDetails = $this->denormalizer->denormalize($data['receiverDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetails::class, 'json', $context);
        } elseif (\array_key_exists('receiverDetails', $data)) {
            $object->receiverDetails = null;
        }
        if (\array_key_exists('bookingRequestorDetails', $data) && null !== $data['bookingRequestorDetails']) {
            $object->bookingRequestorDetails = $this->denormalizer->denormalize($data['bookingRequestorDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails::class, 'json', $context);
        } elseif (\array_key_exists('bookingRequestorDetails', $data)) {
            $object->bookingRequestorDetails = null;
        }
        if (\array_key_exists('pickupDetails', $data) && null !== $data['pickupDetails']) {
            $object->pickupDetails = $this->denormalizer->denormalize($data['pickupDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails::class, 'json', $context);
        } elseif (\array_key_exists('pickupDetails', $data)) {
            $object->pickupDetails = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $normalized = null === $data->shipperDetails ? null : $this->normalizer->normalize($data->shipperDetails, 'json', $context);
        $dataArray['shipperDetails'] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        if (\array_key_exists('receiverDetails', get_object_vars($data)) && null !== ($data->receiverDetails ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->receiverDetails, 'json', $context);
            $dataArray['receiverDetails'] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (\array_key_exists('bookingRequestorDetails', get_object_vars($data)) && null !== ($data->bookingRequestorDetails ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->bookingRequestorDetails, 'json', $context);
            $dataArray['bookingRequestorDetails'] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (\array_key_exists('pickupDetails', get_object_vars($data)) && null !== ($data->pickupDetails ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->pickupDetails, 'json', $context);
            $dataArray['pickupDetails'] = is_iterable($normalized_3) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails::class => false];
    }
}
