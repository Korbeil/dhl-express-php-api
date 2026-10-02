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

class SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('shipmentTrackingNumber', $data) && null !== $data['shipmentTrackingNumber']) {
            $object->shipmentTrackingNumber = $data['shipmentTrackingNumber'];
        } elseif (\array_key_exists('shipmentTrackingNumber', $data)) {
            $object->shipmentTrackingNumber = null;
        }
        if (\array_key_exists('typeCode', $data) && null !== $data['typeCode']) {
            $object->typeCode = $data['typeCode'];
        } elseif (\array_key_exists('typeCode', $data)) {
            $object->typeCode = null;
        }
        if (\array_key_exists('function', $data) && null !== $data['function']) {
            $object->function = $data['function'];
        } elseif (\array_key_exists('function', $data)) {
            $object->function = null;
        }
        if (\array_key_exists('encodingFormat', $data) && null !== $data['encodingFormat']) {
            $object->encodingFormat = $data['encodingFormat'];
        } elseif (\array_key_exists('encodingFormat', $data)) {
            $object->encodingFormat = null;
        }
        if (\array_key_exists('content', $data) && null !== $data['content']) {
            $object->content = $data['content'];
        } elseif (\array_key_exists('content', $data)) {
            $object->content = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['shipmentTrackingNumber'] = $data->shipmentTrackingNumber;
        $dataArray['typeCode'] = $data->typeCode;
        if (\array_key_exists('function', get_object_vars($data)) && null !== ($data->function ?? null)) {
            $dataArray['function'] = $data->function;
        }
        $dataArray['encodingFormat'] = $data->encodingFormat;
        $dataArray['content'] = $data->content;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem::class => false];
    }
}
