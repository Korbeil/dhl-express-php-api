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

class SupermodelIoLogisticsExpressErrorResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressErrorResponse::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressErrorResponse::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressErrorResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('instance', $data) && null !== $data['instance']) {
            $object->instance = $data['instance'];
        } elseif (\array_key_exists('instance', $data)) {
            $object->instance = null;
        }
        if (\array_key_exists('detail', $data) && null !== $data['detail']) {
            $object->detail = $data['detail'];
        } elseif (\array_key_exists('detail', $data)) {
            $object->detail = null;
        }
        if (\array_key_exists('title', $data) && null !== $data['title']) {
            $object->title = $data['title'];
        } elseif (\array_key_exists('title', $data)) {
            $object->title = null;
        }
        if (\array_key_exists('message', $data) && null !== $data['message']) {
            $object->message = $data['message'];
        } elseif (\array_key_exists('message', $data)) {
            $object->message = null;
        }
        if (\array_key_exists('additionalDetails', $data) && null !== $data['additionalDetails']) {
            $values = [];
            foreach ($data['additionalDetails'] as $value) {
                $values[] = $value;
            }
            $object->additionalDetails = $values;
        } elseif (\array_key_exists('additionalDetails', $data)) {
            $object->additionalDetails = null;
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->status = $data['status'];
        } elseif (\array_key_exists('status', $data)) {
            $object->status = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('instance', get_object_vars($data)) && null !== ($data->instance ?? null)) {
            $dataArray['instance'] = $data->instance;
        }
        if (\array_key_exists('detail', get_object_vars($data)) && null !== ($data->detail ?? null)) {
            $dataArray['detail'] = $data->detail;
        }
        if (\array_key_exists('title', get_object_vars($data)) && null !== ($data->title ?? null)) {
            $dataArray['title'] = $data->title;
        }
        if (\array_key_exists('message', get_object_vars($data)) && null !== ($data->message ?? null)) {
            $dataArray['message'] = $data->message;
        }
        if (\array_key_exists('additionalDetails', get_object_vars($data)) && null !== ($data->additionalDetails ?? null)) {
            $values = [];
            foreach ($data->additionalDetails as $value) {
                $values[] = $value;
            }
            $dataArray['additionalDetails'] = $values;
        }
        if (\array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressErrorResponse::class => false];
    }
}
