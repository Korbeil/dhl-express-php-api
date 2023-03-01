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

class SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('deliveryOption', $data) && null !== $data['deliveryOption']) {
            $object->setDeliveryOption($data['deliveryOption']);
        } elseif (\array_key_exists('deliveryOption', $data) && null === $data['deliveryOption']) {
            $object->setDeliveryOption(null);
        }
        if (\array_key_exists('location', $data) && null !== $data['location']) {
            $object->setLocation($data['location']);
        } elseif (\array_key_exists('location', $data) && null === $data['location']) {
            $object->setLocation(null);
        }
        if (\array_key_exists('specialInstructions', $data) && null !== $data['specialInstructions']) {
            $object->setSpecialInstructions($data['specialInstructions']);
        } elseif (\array_key_exists('specialInstructions', $data) && null === $data['specialInstructions']) {
            $object->setSpecialInstructions(null);
        }
        if (\array_key_exists('gateCode', $data) && null !== $data['gateCode']) {
            $object->setGateCode($data['gateCode']);
        } elseif (\array_key_exists('gateCode', $data) && null === $data['gateCode']) {
            $object->setGateCode(null);
        }
        if (\array_key_exists('whereToLeave', $data) && null !== $data['whereToLeave']) {
            $object->setWhereToLeave($data['whereToLeave']);
        } elseif (\array_key_exists('whereToLeave', $data) && null === $data['whereToLeave']) {
            $object->setWhereToLeave(null);
        }
        if (\array_key_exists('neighbourName', $data) && null !== $data['neighbourName']) {
            $object->setNeighbourName($data['neighbourName']);
        } elseif (\array_key_exists('neighbourName', $data) && null === $data['neighbourName']) {
            $object->setNeighbourName(null);
        }
        if (\array_key_exists('neighbourHouseNumber', $data) && null !== $data['neighbourHouseNumber']) {
            $object->setNeighbourHouseNumber($data['neighbourHouseNumber']);
        } elseif (\array_key_exists('neighbourHouseNumber', $data) && null === $data['neighbourHouseNumber']) {
            $object->setNeighbourHouseNumber(null);
        }
        if (\array_key_exists('authorizerName', $data) && null !== $data['authorizerName']) {
            $object->setAuthorizerName($data['authorizerName']);
        } elseif (\array_key_exists('authorizerName', $data) && null === $data['authorizerName']) {
            $object->setAuthorizerName(null);
        }
        if (\array_key_exists('servicePointId', $data) && null !== $data['servicePointId']) {
            $object->setServicePointId($data['servicePointId']);
        } elseif (\array_key_exists('servicePointId', $data) && null === $data['servicePointId']) {
            $object->setServicePointId(null);
        }
        if (\array_key_exists('requestedDeliveryDate', $data) && null !== $data['requestedDeliveryDate']) {
            $object->setRequestedDeliveryDate($data['requestedDeliveryDate']);
        } elseif (\array_key_exists('requestedDeliveryDate', $data) && null === $data['requestedDeliveryDate']) {
            $object->setRequestedDeliveryDate(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['deliveryOption'] = $object->getDeliveryOption();
        if ($object->isInitialized('location') && null !== $object->getLocation()) {
            $data['location'] = $object->getLocation();
        }
        if ($object->isInitialized('specialInstructions') && null !== $object->getSpecialInstructions()) {
            $data['specialInstructions'] = $object->getSpecialInstructions();
        }
        if ($object->isInitialized('gateCode') && null !== $object->getGateCode()) {
            $data['gateCode'] = $object->getGateCode();
        }
        if ($object->isInitialized('whereToLeave') && null !== $object->getWhereToLeave()) {
            $data['whereToLeave'] = $object->getWhereToLeave();
        }
        if ($object->isInitialized('neighbourName') && null !== $object->getNeighbourName()) {
            $data['neighbourName'] = $object->getNeighbourName();
        }
        if ($object->isInitialized('neighbourHouseNumber') && null !== $object->getNeighbourHouseNumber()) {
            $data['neighbourHouseNumber'] = $object->getNeighbourHouseNumber();
        }
        if ($object->isInitialized('authorizerName') && null !== $object->getAuthorizerName()) {
            $data['authorizerName'] = $object->getAuthorizerName();
        }
        if ($object->isInitialized('servicePointId') && null !== $object->getServicePointId()) {
            $data['servicePointId'] = $object->getServicePointId();
        }
        if ($object->isInitialized('requestedDeliveryDate') && null !== $object->getRequestedDeliveryDate()) {
            $data['requestedDeliveryDate'] = $object->getRequestedDeliveryDate();
        }

        return $data;
    }
}
