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

class SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails();
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
            $object->setPostalAddress($this->denormalizer->denormalize($data['postalAddress'], \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentRequest::class, 'json', $context));
        } elseif (\array_key_exists('postalAddress', $data) && null === $data['postalAddress']) {
            $object->setPostalAddress(null);
        }
        if (\array_key_exists('contactInformation', $data) && null !== $data['contactInformation']) {
            $object->setContactInformation($this->denormalizer->denormalize($data['contactInformation'], \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressContact::class, 'json', $context));
        } elseif (\array_key_exists('contactInformation', $data) && null === $data['contactInformation']) {
            $object->setContactInformation(null);
        }
        if (\array_key_exists('registrationNumbers', $data) && null !== $data['registrationNumbers']) {
            $values = [];
            foreach ($data['registrationNumbers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressRegistrationNumbers::class, 'json', $context);
            }
            $object->setRegistrationNumbers($values);
        } elseif (\array_key_exists('registrationNumbers', $data) && null === $data['registrationNumbers']) {
            $object->setRegistrationNumbers(null);
        }
        if (\array_key_exists('bankDetails', $data) && null !== $data['bankDetails']) {
            $object->setBankDetails($this->denormalizer->denormalize($data['bankDetails'], \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressRegistrationNumbers::class, 'json', $context));
        } elseif (\array_key_exists('bankDetails', $data) && null === $data['bankDetails']) {
            $object->setBankDetails(null);
        }
        if (\array_key_exists('typeCode', $data) && null !== $data['typeCode']) {
            $object->setTypeCode($data['typeCode']);
        } elseif (\array_key_exists('typeCode', $data) && null === $data['typeCode']) {
            $object->setTypeCode(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['postalAddress'] = null === $data->getPostalAddress() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPostalAddress(), 'json', $context));
        $dataArray['contactInformation'] = null === $data->getContactInformation() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getContactInformation(), 'json', $context));
        if ($data->isInitialized('registrationNumbers') && null !== $data->getRegistrationNumbers()) {
            $values = [];
            foreach ($data->getRegistrationNumbers() as $value) {
                $values[] = null === $value ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['registrationNumbers'] = $values;
        }
        if ($data->isInitialized('bankDetails') && null !== $data->getBankDetails()) {
            $dataArray['bankDetails'] = null === $data->getBankDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getBankDetails(), 'json', $context));
        }
        if ($data->isInitialized('typeCode') && null !== $data->getTypeCode()) {
            $dataArray['typeCode'] = $data->getTypeCode();
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails::class => false];
    }
}
