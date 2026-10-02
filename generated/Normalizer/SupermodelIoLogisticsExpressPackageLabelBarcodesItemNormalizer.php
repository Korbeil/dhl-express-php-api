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

class SupermodelIoLogisticsExpressPackageLabelBarcodesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageLabelBarcodesItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageLabelBarcodesItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageLabelBarcodesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('position', $data) && null !== $data['position']) {
            $object->position = $data['position'];
        } elseif (\array_key_exists('position', $data)) {
            $object->position = null;
        }
        if (\array_key_exists('symbologyCode', $data) && null !== $data['symbologyCode']) {
            $object->symbologyCode = $data['symbologyCode'];
        } elseif (\array_key_exists('symbologyCode', $data)) {
            $object->symbologyCode = null;
        }
        if (\array_key_exists('content', $data) && null !== $data['content']) {
            $object->content = $data['content'];
        } elseif (\array_key_exists('content', $data)) {
            $object->content = null;
        }
        if (\array_key_exists('textBelowBarcode', $data) && null !== $data['textBelowBarcode']) {
            $object->textBelowBarcode = $data['textBelowBarcode'];
        } elseif (\array_key_exists('textBelowBarcode', $data)) {
            $object->textBelowBarcode = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['position'] = $data->position;
        $dataArray['symbologyCode'] = $data->symbologyCode;
        $dataArray['content'] = $data->content;
        $dataArray['textBelowBarcode'] = $data->textBelowBarcode;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageLabelBarcodesItem::class => false];
    }
}
