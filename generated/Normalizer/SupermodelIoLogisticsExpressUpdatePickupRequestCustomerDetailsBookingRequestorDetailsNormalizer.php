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

class SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('postalAddress', $data) && null !== $data['postalAddress']) {
            $object->postalAddress = $this->denormalizer->denormalize($data['postalAddress'], \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressAddress::class, 'json', $context);
        } elseif (\array_key_exists('postalAddress', $data)) {
            $object->postalAddress = null;
        }
        if (\array_key_exists('contactInformation', $data) && null !== $data['contactInformation']) {
            $object->contactInformation = $this->denormalizer->denormalize($data['contactInformation'], \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressContact::class, 'json', $context);
        } elseif (\array_key_exists('contactInformation', $data)) {
            $object->contactInformation = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('postalAddress', get_object_vars($data)) && null !== ($data->postalAddress ?? null)) {
            $normalized = $this->normalizer->normalize($data->postalAddress, 'json', $context);
            $dataArray['postalAddress'] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        $normalized_1 = null === $data->contactInformation ? null : $this->normalizer->normalize($data->contactInformation, 'json', $context);
        $dataArray['contactInformation'] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails::class => false];
    }
}
