<?php

namespace Korbeil\DHLExpress\Api\Normalizer\Shipment;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SupermodelIoLogisticsExpressContactBuyerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressContactBuyer::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressContactBuyer::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressContactBuyer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $object->email = $data['email'];
        } elseif (\array_key_exists('email', $data)) {
            $object->email = null;
        }
        if (\array_key_exists('phone', $data) && null !== $data['phone']) {
            $object->phone = $data['phone'];
        } elseif (\array_key_exists('phone', $data)) {
            $object->phone = null;
        }
        if (\array_key_exists('mobilePhone', $data) && null !== $data['mobilePhone']) {
            $object->mobilePhone = $data['mobilePhone'];
        } elseif (\array_key_exists('mobilePhone', $data)) {
            $object->mobilePhone = null;
        }
        if (\array_key_exists('companyName', $data) && null !== $data['companyName']) {
            $object->companyName = $data['companyName'];
        } elseif (\array_key_exists('companyName', $data)) {
            $object->companyName = null;
        }
        if (\array_key_exists('fullName', $data) && null !== $data['fullName']) {
            $object->fullName = $data['fullName'];
        } elseif (\array_key_exists('fullName', $data)) {
            $object->fullName = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('email', get_object_vars($data)) && null !== ($data->email ?? null)) {
            $dataArray['email'] = $data->email;
        }
        $dataArray['phone'] = $data->phone;
        if (\array_key_exists('mobilePhone', get_object_vars($data)) && null !== ($data->mobilePhone ?? null)) {
            $dataArray['mobilePhone'] = $data->mobilePhone;
        }
        $dataArray['companyName'] = $data->companyName;
        $dataArray['fullName'] = $data->fullName;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressContactBuyer::class => false];
    }
}
