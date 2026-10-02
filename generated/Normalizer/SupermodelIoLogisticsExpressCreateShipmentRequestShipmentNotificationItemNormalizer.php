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

class SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('typeCode', $data) && null !== $data['typeCode']) {
            $object->typeCode = $data['typeCode'];
        } elseif (\array_key_exists('typeCode', $data)) {
            $object->typeCode = null;
        }
        if (\array_key_exists('receiverId', $data) && null !== $data['receiverId']) {
            $object->receiverId = $data['receiverId'];
        } elseif (\array_key_exists('receiverId', $data)) {
            $object->receiverId = null;
        }
        if (\array_key_exists('languageCode', $data) && null !== $data['languageCode']) {
            $object->languageCode = $data['languageCode'];
        } elseif (\array_key_exists('languageCode', $data)) {
            $object->languageCode = null;
        }
        if (\array_key_exists('languageCountryCode', $data) && null !== $data['languageCountryCode']) {
            $object->languageCountryCode = $data['languageCountryCode'];
        } elseif (\array_key_exists('languageCountryCode', $data)) {
            $object->languageCountryCode = null;
        }
        if (\array_key_exists('bespokeMessage', $data) && null !== $data['bespokeMessage']) {
            $object->bespokeMessage = $data['bespokeMessage'];
        } elseif (\array_key_exists('bespokeMessage', $data)) {
            $object->bespokeMessage = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['typeCode'] = $data->typeCode;
        $dataArray['receiverId'] = $data->receiverId;
        if (\array_key_exists('languageCode', get_object_vars($data)) && null !== ($data->languageCode ?? null)) {
            $dataArray['languageCode'] = $data->languageCode;
        }
        if (\array_key_exists('languageCountryCode', get_object_vars($data)) && null !== ($data->languageCountryCode ?? null)) {
            $dataArray['languageCountryCode'] = $data->languageCountryCode;
        }
        if (\array_key_exists('bespokeMessage', get_object_vars($data)) && null !== ($data->bespokeMessage ?? null)) {
            $dataArray['bespokeMessage'] = $data->bespokeMessage;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem::class => false];
    }
}
