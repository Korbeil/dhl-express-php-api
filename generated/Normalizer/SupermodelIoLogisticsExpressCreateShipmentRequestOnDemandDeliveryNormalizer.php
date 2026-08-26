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

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
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

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['deliveryOption'] = $data->getDeliveryOption();
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $data->getLocation();
        }
        if ($data->isInitialized('specialInstructions') && null !== $data->getSpecialInstructions()) {
            $dataArray['specialInstructions'] = $data->getSpecialInstructions();
        }
        if ($data->isInitialized('gateCode') && null !== $data->getGateCode()) {
            $dataArray['gateCode'] = $data->getGateCode();
        }
        if ($data->isInitialized('whereToLeave') && null !== $data->getWhereToLeave()) {
            $dataArray['whereToLeave'] = $data->getWhereToLeave();
        }
        if ($data->isInitialized('neighbourName') && null !== $data->getNeighbourName()) {
            $dataArray['neighbourName'] = $data->getNeighbourName();
        }
        if ($data->isInitialized('neighbourHouseNumber') && null !== $data->getNeighbourHouseNumber()) {
            $dataArray['neighbourHouseNumber'] = $data->getNeighbourHouseNumber();
        }
        if ($data->isInitialized('authorizerName') && null !== $data->getAuthorizerName()) {
            $dataArray['authorizerName'] = $data->getAuthorizerName();
        }
        if ($data->isInitialized('servicePointId') && null !== $data->getServicePointId()) {
            $dataArray['servicePointId'] = $data->getServicePointId();
        }
        if ($data->isInitialized('requestedDeliveryDate') && null !== $data->getRequestedDeliveryDate()) {
            $dataArray['requestedDeliveryDate'] = $data->getRequestedDeliveryDate();
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class => false];
    }
}
