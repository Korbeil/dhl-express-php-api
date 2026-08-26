<?php

namespace Korbeil\DHLExpress\Api\Normalizer\Common;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SupermodelIoLogisticsExpressContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressContact::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressContact::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressContact();
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
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
        }
        if (\array_key_exists('phone', $data) && null !== $data['phone']) {
            $object->setPhone($data['phone']);
        } elseif (\array_key_exists('phone', $data) && null === $data['phone']) {
            $object->setPhone(null);
        }
        if (\array_key_exists('mobilePhone', $data) && null !== $data['mobilePhone']) {
            $object->setMobilePhone($data['mobilePhone']);
        } elseif (\array_key_exists('mobilePhone', $data) && null === $data['mobilePhone']) {
            $object->setMobilePhone(null);
        }
        if (\array_key_exists('companyName', $data) && null !== $data['companyName']) {
            $object->setCompanyName($data['companyName']);
        } elseif (\array_key_exists('companyName', $data) && null === $data['companyName']) {
            $object->setCompanyName(null);
        }
        if (\array_key_exists('fullName', $data) && null !== $data['fullName']) {
            $object->setFullName($data['fullName']);
        } elseif (\array_key_exists('fullName', $data) && null === $data['fullName']) {
            $object->setFullName(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('email') && null !== $data->getEmail()) {
            $dataArray['email'] = $data->getEmail();
        }
        $dataArray['phone'] = $data->getPhone();
        if ($data->isInitialized('mobilePhone') && null !== $data->getMobilePhone()) {
            $dataArray['mobilePhone'] = $data->getMobilePhone();
        }
        $dataArray['companyName'] = $data->getCompanyName();
        $dataArray['fullName'] = $data->getFullName();

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressContact::class => false];
    }
}
