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

class SupermodelIoLogisticsExpressPickupRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressPickupRequest' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressPickupRequest' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressAccount', 'json', $context);
            }
            $object->setAccounts($values);
        } elseif (\array_key_exists('accounts', $data) && null === $data['accounts']) {
            $object->setAccounts(null);
        }
        if (\array_key_exists('specialInstructions', $data) && null !== $data['specialInstructions']) {
            $values_1 = [];
            foreach ($data['specialInstructions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsItem', 'json', $context);
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
            $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressPickupRequestCustomerDetails', 'json', $context));
        } elseif (\array_key_exists('customerDetails', $data) && null === $data['customerDetails']) {
            $object->setCustomerDetails(null);
        }
        if (\array_key_exists('shipmentDetails', $data) && null !== $data['shipmentDetails']) {
            $values_2 = [];
            foreach ($data['shipmentDetails'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem', 'json', $context);
            }
            $object->setShipmentDetails($values_2);
        } elseif (\array_key_exists('shipmentDetails', $data) && null === $data['shipmentDetails']) {
            $object->setShipmentDetails(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['plannedPickupDateAndTime'] = $object->getPlannedPickupDateAndTime();
        if ($object->isInitialized('closeTime') && null !== $object->getCloseTime()) {
            $data['closeTime'] = $object->getCloseTime();
        }
        if ($object->isInitialized('location') && null !== $object->getLocation()) {
            $data['location'] = $object->getLocation();
        }
        if ($object->isInitialized('locationType') && null !== $object->getLocationType()) {
            $data['locationType'] = $object->getLocationType();
        }
        $values = [];
        foreach ($object->getAccounts() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['accounts'] = $values;
        if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
            $values_1 = [];
            foreach ($object->getSpecialInstructions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['specialInstructions'] = $values_1;
        }
        if ($object->isInitialized('remark') && null !== $object->getRemark()) {
            $data['remark'] = $object->getRemark();
        }
        $data['customerDetails'] = $this->normalizer->normalize($object->getCustomerDetails(), 'json', $context);
        $values_2 = [];
        foreach ($object->getShipmentDetails() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data['shipmentDetails'] = $values_2;

        return $data;
    }
}
