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

class SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails();
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
            $object->postalAddress = $this->denormalizer->denormalize($data['postalAddress'], \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentRequest::class, 'json', $context);
        } elseif (\array_key_exists('postalAddress', $data)) {
            $object->postalAddress = null;
        }
        if (\array_key_exists('contactInformation', $data) && null !== $data['contactInformation']) {
            $object->contactInformation = $this->denormalizer->denormalize($data['contactInformation'], \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressContact::class, 'json', $context);
        } elseif (\array_key_exists('contactInformation', $data)) {
            $object->contactInformation = null;
        }
        if (\array_key_exists('registrationNumbers', $data) && null !== $data['registrationNumbers']) {
            $values = [];
            foreach ($data['registrationNumbers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressRegistrationNumbers::class, 'json', $context);
            }
            $object->registrationNumbers = $values;
        } elseif (\array_key_exists('registrationNumbers', $data)) {
            $object->registrationNumbers = null;
        }
        if (\array_key_exists('bankDetails', $data) && null !== $data['bankDetails']) {
            $values_1 = [];
            foreach ($data['bankDetails'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressBankDetailsItem::class, 'json', $context);
            }
            $object->bankDetails = $values_1;
        } elseif (\array_key_exists('bankDetails', $data)) {
            $object->bankDetails = null;
        }
        if (\array_key_exists('typeCode', $data) && null !== $data['typeCode']) {
            $object->typeCode = $data['typeCode'];
        } elseif (\array_key_exists('typeCode', $data)) {
            $object->typeCode = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $normalized = null === $data->postalAddress ? null : $this->normalizer->normalize($data->postalAddress, 'json', $context);
        $dataArray['postalAddress'] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        $normalized_1 = null === $data->contactInformation ? null : $this->normalizer->normalize($data->contactInformation, 'json', $context);
        $dataArray['contactInformation'] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        if (\array_key_exists('registrationNumbers', get_object_vars($data)) && null !== ($data->registrationNumbers ?? null)) {
            $values = [];
            foreach ($data->registrationNumbers as $value) {
                $normalized_2 = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['registrationNumbers'] = $values;
        }
        if (\array_key_exists('bankDetails', get_object_vars($data)) && null !== ($data->bankDetails ?? null)) {
            $values_1 = [];
            foreach ($data->bankDetails as $value_1) {
                $normalized_3 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized_3) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
            }
            $dataArray['bankDetails'] = $values_1;
        }
        if (\array_key_exists('typeCode', get_object_vars($data)) && null !== ($data->typeCode ?? null)) {
            $dataArray['typeCode'] = $data->typeCode;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails::class => false];
    }
}
