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

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
            $object->deliveryOption = $data['deliveryOption'];
        } elseif (\array_key_exists('deliveryOption', $data)) {
            $object->deliveryOption = null;
        }
        if (\array_key_exists('location', $data) && null !== $data['location']) {
            $object->location = $data['location'];
        } elseif (\array_key_exists('location', $data)) {
            $object->location = null;
        }
        if (\array_key_exists('specialInstructions', $data) && null !== $data['specialInstructions']) {
            $object->specialInstructions = $data['specialInstructions'];
        } elseif (\array_key_exists('specialInstructions', $data)) {
            $object->specialInstructions = null;
        }
        if (\array_key_exists('gateCode', $data) && null !== $data['gateCode']) {
            $object->gateCode = $data['gateCode'];
        } elseif (\array_key_exists('gateCode', $data)) {
            $object->gateCode = null;
        }
        if (\array_key_exists('whereToLeave', $data) && null !== $data['whereToLeave']) {
            $object->whereToLeave = $data['whereToLeave'];
        } elseif (\array_key_exists('whereToLeave', $data)) {
            $object->whereToLeave = null;
        }
        if (\array_key_exists('neighbourName', $data) && null !== $data['neighbourName']) {
            $object->neighbourName = $data['neighbourName'];
        } elseif (\array_key_exists('neighbourName', $data)) {
            $object->neighbourName = null;
        }
        if (\array_key_exists('neighbourHouseNumber', $data) && null !== $data['neighbourHouseNumber']) {
            $object->neighbourHouseNumber = $data['neighbourHouseNumber'];
        } elseif (\array_key_exists('neighbourHouseNumber', $data)) {
            $object->neighbourHouseNumber = null;
        }
        if (\array_key_exists('authorizerName', $data) && null !== $data['authorizerName']) {
            $object->authorizerName = $data['authorizerName'];
        } elseif (\array_key_exists('authorizerName', $data)) {
            $object->authorizerName = null;
        }
        if (\array_key_exists('servicePointId', $data) && null !== $data['servicePointId']) {
            $object->servicePointId = $data['servicePointId'];
        } elseif (\array_key_exists('servicePointId', $data)) {
            $object->servicePointId = null;
        }
        if (\array_key_exists('requestedDeliveryDate', $data) && null !== $data['requestedDeliveryDate']) {
            $object->requestedDeliveryDate = $data['requestedDeliveryDate'];
        } elseif (\array_key_exists('requestedDeliveryDate', $data)) {
            $object->requestedDeliveryDate = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['deliveryOption'] = $data->deliveryOption;
        if (\array_key_exists('location', get_object_vars($data)) && null !== ($data->location ?? null)) {
            $dataArray['location'] = $data->location;
        }
        if (\array_key_exists('specialInstructions', get_object_vars($data)) && null !== ($data->specialInstructions ?? null)) {
            $dataArray['specialInstructions'] = $data->specialInstructions;
        }
        if (\array_key_exists('gateCode', get_object_vars($data)) && null !== ($data->gateCode ?? null)) {
            $dataArray['gateCode'] = $data->gateCode;
        }
        if (\array_key_exists('whereToLeave', get_object_vars($data)) && null !== ($data->whereToLeave ?? null)) {
            $dataArray['whereToLeave'] = $data->whereToLeave;
        }
        if (\array_key_exists('neighbourName', get_object_vars($data)) && null !== ($data->neighbourName ?? null)) {
            $dataArray['neighbourName'] = $data->neighbourName;
        }
        if (\array_key_exists('neighbourHouseNumber', get_object_vars($data)) && null !== ($data->neighbourHouseNumber ?? null)) {
            $dataArray['neighbourHouseNumber'] = $data->neighbourHouseNumber;
        }
        if (\array_key_exists('authorizerName', get_object_vars($data)) && null !== ($data->authorizerName ?? null)) {
            $dataArray['authorizerName'] = $data->authorizerName;
        }
        if (\array_key_exists('servicePointId', get_object_vars($data)) && null !== ($data->servicePointId ?? null)) {
            $dataArray['servicePointId'] = $data->servicePointId;
        }
        if (\array_key_exists('requestedDeliveryDate', get_object_vars($data)) && null !== ($data->requestedDeliveryDate ?? null)) {
            $dataArray['requestedDeliveryDate'] = $data->requestedDeliveryDate;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class => false];
    }
}
