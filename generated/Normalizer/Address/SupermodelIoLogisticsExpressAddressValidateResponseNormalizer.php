<?php

namespace Korbeil\DHLExpress\Api\Normalizer\Address;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SupermodelIoLogisticsExpressAddressValidateResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Address\SupermodelIoLogisticsExpressAddressValidateResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Address\SupermodelIoLogisticsExpressAddressValidateResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Address\SupermodelIoLogisticsExpressAddressValidateResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('warnings', $data) && null !== $data['warnings']) {
            $values = [];
            foreach ($data['warnings'] as $value) {
                $values[] = $value;
            }
            $object->setWarnings($values);
        } elseif (\array_key_exists('warnings', $data) && null === $data['warnings']) {
            $object->setWarnings(null);
        }
        if (\array_key_exists('address', $data) && null !== $data['address']) {
            $values_1 = [];
            foreach ($data['address'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem::class, 'json', $context);
            }
            $object->setAddress($values_1);
        } elseif (\array_key_exists('address', $data) && null === $data['address']) {
            $object->setAddress(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('warnings') && null !== $data->getWarnings()) {
            $values = [];
            foreach ($data->getWarnings() as $value) {
                $values[] = $value;
            }
            $dataArray['warnings'] = $values;
        }
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $values_1 = [];
            foreach ($data->getAddress() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['address'] = $values_1;
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Address\SupermodelIoLogisticsExpressAddressValidateResponse::class => false];
    }
}
