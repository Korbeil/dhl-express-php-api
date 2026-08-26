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

class SupermodelIoLogisticsExpressPickupRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressPickupRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressPickupRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressPickupRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('plannedPickupDateAndTime', $data) && null !== $data['plannedPickupDateAndTime']) {
            $object->setPlannedPickupDateAndTime($data['plannedPickupDateAndTime']);
        } elseif (\array_key_exists('plannedPickupDateAndTime', $data) && null === $data['plannedPickupDateAndTime']) {
            $object->setPlannedPickupDateAndTime(null);
        }
        if (\array_key_exists('closeTime', $data) && null !== $data['closeTime']) {
            $object->setCloseTime($data['closeTime']);
        } elseif (\array_key_exists('closeTime', $data) && null === $data['closeTime']) {
            $object->setCloseTime(null);
        }
        if (\array_key_exists('location', $data) && null !== $data['location']) {
            $object->setLocation($data['location']);
        } elseif (\array_key_exists('location', $data) && null === $data['location']) {
            $object->setLocation(null);
        }
        if (\array_key_exists('locationType', $data) && null !== $data['locationType']) {
            $object->setLocationType($data['locationType']);
        } elseif (\array_key_exists('locationType', $data) && null === $data['locationType']) {
            $object->setLocationType(null);
        }
        if (\array_key_exists('accounts', $data) && null !== $data['accounts']) {
            $values = [];
            foreach ($data['accounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressAccount::class, 'json', $context);
            }
            $object->setAccounts($values);
        } elseif (\array_key_exists('accounts', $data) && null === $data['accounts']) {
            $object->setAccounts(null);
        }
        if (\array_key_exists('specialInstructions', $data) && null !== $data['specialInstructions']) {
            $values_1 = [];
            foreach ($data['specialInstructions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsItem::class, 'json', $context);
            }
            $object->setSpecialInstructions($values_1);
        } elseif (\array_key_exists('specialInstructions', $data) && null === $data['specialInstructions']) {
            $object->setSpecialInstructions(null);
        }
        if (\array_key_exists('remark', $data) && null !== $data['remark']) {
            $object->setRemark($data['remark']);
        } elseif (\array_key_exists('remark', $data) && null === $data['remark']) {
            $object->setRemark(null);
        }
        if (\array_key_exists('customerDetails', $data) && null !== $data['customerDetails']) {
            $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetails::class, 'json', $context));
        } elseif (\array_key_exists('customerDetails', $data) && null === $data['customerDetails']) {
            $object->setCustomerDetails(null);
        }
        if (\array_key_exists('shipmentDetails', $data) && null !== $data['shipmentDetails']) {
            $values_2 = [];
            foreach ($data['shipmentDetails'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem::class, 'json', $context);
            }
            $object->setShipmentDetails($values_2);
        } elseif (\array_key_exists('shipmentDetails', $data) && null === $data['shipmentDetails']) {
            $object->setShipmentDetails(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['plannedPickupDateAndTime'] = $data->getPlannedPickupDateAndTime();
        if ($data->isInitialized('closeTime') && null !== $data->getCloseTime()) {
            $dataArray['closeTime'] = $data->getCloseTime();
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $data->getLocation();
        }
        if ($data->isInitialized('locationType') && null !== $data->getLocationType()) {
            $dataArray['locationType'] = $data->getLocationType();
        }
        $values = [];
        foreach ($data->getAccounts() as $value) {
            $values[] = null === $value ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['accounts'] = $values;
        if ($data->isInitialized('specialInstructions') && null !== $data->getSpecialInstructions()) {
            $values_1 = [];
            foreach ($data->getSpecialInstructions() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['specialInstructions'] = $values_1;
        }
        if ($data->isInitialized('remark') && null !== $data->getRemark()) {
            $dataArray['remark'] = $data->getRemark();
        }
        $dataArray['customerDetails'] = null === $data->getCustomerDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getCustomerDetails(), 'json', $context));
        $values_2 = [];
        foreach ($data->getShipmentDetails() as $value_2) {
            $values_2[] = null === $value_2 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
        }
        $dataArray['shipmentDetails'] = $values_2;

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressPickupRequest::class => false];
    }
}
