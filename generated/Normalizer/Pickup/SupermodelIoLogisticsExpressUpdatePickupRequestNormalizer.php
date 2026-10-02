<?php

namespace Korbeil\DHLExpress\Api\Normalizer\Pickup;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SupermodelIoLogisticsExpressUpdatePickupRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressUpdatePickupRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressUpdatePickupRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressUpdatePickupRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dispatchConfirmationNumber', $data) && null !== $data['dispatchConfirmationNumber']) {
            $object->dispatchConfirmationNumber = $data['dispatchConfirmationNumber'];
        } elseif (\array_key_exists('dispatchConfirmationNumber', $data)) {
            $object->dispatchConfirmationNumber = null;
        }
        if (\array_key_exists('originalShipperAccountNumber', $data) && null !== $data['originalShipperAccountNumber']) {
            $object->originalShipperAccountNumber = $data['originalShipperAccountNumber'];
        } elseif (\array_key_exists('originalShipperAccountNumber', $data)) {
            $object->originalShipperAccountNumber = null;
        }
        if (\array_key_exists('plannedPickupDateAndTime', $data) && null !== $data['plannedPickupDateAndTime']) {
            $object->plannedPickupDateAndTime = $data['plannedPickupDateAndTime'];
        } elseif (\array_key_exists('plannedPickupDateAndTime', $data)) {
            $object->plannedPickupDateAndTime = null;
        }
        if (\array_key_exists('closeTime', $data) && null !== $data['closeTime']) {
            $object->closeTime = $data['closeTime'];
        } elseif (\array_key_exists('closeTime', $data)) {
            $object->closeTime = null;
        }
        if (\array_key_exists('location', $data) && null !== $data['location']) {
            $object->location = $data['location'];
        } elseif (\array_key_exists('location', $data)) {
            $object->location = null;
        }
        if (\array_key_exists('locationType', $data) && null !== $data['locationType']) {
            $object->locationType = $data['locationType'];
        } elseif (\array_key_exists('locationType', $data)) {
            $object->locationType = null;
        }
        if (\array_key_exists('accounts', $data) && null !== $data['accounts']) {
            $values = [];
            foreach ($data['accounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressAccount::class, 'json', $context);
            }
            $object->accounts = $values;
        } elseif (\array_key_exists('accounts', $data)) {
            $object->accounts = null;
        }
        if (\array_key_exists('specialInstructions', $data) && null !== $data['specialInstructions']) {
            $values_1 = [];
            foreach ($data['specialInstructions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItem::class, 'json', $context);
            }
            $object->specialInstructions = $values_1;
        } elseif (\array_key_exists('specialInstructions', $data)) {
            $object->specialInstructions = null;
        }
        if (\array_key_exists('remark', $data) && null !== $data['remark']) {
            $object->remark = $data['remark'];
        } elseif (\array_key_exists('remark', $data)) {
            $object->remark = null;
        }
        if (\array_key_exists('customerDetails', $data) && null !== $data['customerDetails']) {
            $object->customerDetails = $this->denormalizer->denormalize($data['customerDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails::class, 'json', $context);
        } elseif (\array_key_exists('customerDetails', $data)) {
            $object->customerDetails = null;
        }
        if (\array_key_exists('shipmentDetails', $data) && null !== $data['shipmentDetails']) {
            $values_2 = [];
            foreach ($data['shipmentDetails'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem::class, 'json', $context);
            }
            $object->shipmentDetails = $values_2;
        } elseif (\array_key_exists('shipmentDetails', $data)) {
            $object->shipmentDetails = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['dispatchConfirmationNumber'] = $data->dispatchConfirmationNumber;
        $dataArray['originalShipperAccountNumber'] = $data->originalShipperAccountNumber;
        $dataArray['plannedPickupDateAndTime'] = $data->plannedPickupDateAndTime;
        if (\array_key_exists('closeTime', get_object_vars($data)) && null !== ($data->closeTime ?? null)) {
            $dataArray['closeTime'] = $data->closeTime;
        }
        if (\array_key_exists('location', get_object_vars($data)) && null !== ($data->location ?? null)) {
            $dataArray['location'] = $data->location;
        }
        if (\array_key_exists('locationType', get_object_vars($data)) && null !== ($data->locationType ?? null)) {
            $dataArray['locationType'] = $data->locationType;
        }
        $values = [];
        foreach ($data->accounts as $value) {
            $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
            $values[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        $dataArray['accounts'] = $values;
        if (\array_key_exists('specialInstructions', get_object_vars($data)) && null !== ($data->specialInstructions ?? null)) {
            $values_1 = [];
            foreach ($data->specialInstructions as $value_1) {
                $normalized_1 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['specialInstructions'] = $values_1;
        }
        if (\array_key_exists('remark', get_object_vars($data)) && null !== ($data->remark ?? null)) {
            $dataArray['remark'] = $data->remark;
        }
        $normalized_2 = null === $data->customerDetails ? null : $this->normalizer->normalize($data->customerDetails, 'json', $context);
        $dataArray['customerDetails'] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
        if (\array_key_exists('shipmentDetails', get_object_vars($data)) && null !== ($data->shipmentDetails ?? null)) {
            $values_2 = [];
            foreach ($data->shipmentDetails as $value_2) {
                $normalized_3 = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = is_iterable($normalized_3) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
            }
            $dataArray['shipmentDetails'] = $values_2;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressUpdatePickupRequest::class => false];
    }
}
