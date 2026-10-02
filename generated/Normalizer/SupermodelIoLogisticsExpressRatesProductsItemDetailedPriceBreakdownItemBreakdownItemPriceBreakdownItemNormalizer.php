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

class SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (\array_key_exists('rate', $data) && \is_int($data['rate'])) {
            $data['rate'] = (float) $data['rate'];
        }
        if (\array_key_exists('basePrice', $data) && \is_int($data['basePrice'])) {
            $data['basePrice'] = (float) $data['basePrice'];
        }
        if (\array_key_exists('priceType', $data) && null !== $data['priceType']) {
            $object->priceType = $data['priceType'];
        } elseif (\array_key_exists('priceType', $data)) {
            $object->priceType = null;
        }
        if (\array_key_exists('typeCode', $data) && null !== $data['typeCode']) {
            $object->typeCode = $data['typeCode'];
        } elseif (\array_key_exists('typeCode', $data)) {
            $object->typeCode = null;
        }
        if (\array_key_exists('price', $data) && null !== $data['price']) {
            $object->price = $data['price'];
        } elseif (\array_key_exists('price', $data)) {
            $object->price = null;
        }
        if (\array_key_exists('rate', $data) && null !== $data['rate']) {
            $object->rate = $data['rate'];
        } elseif (\array_key_exists('rate', $data)) {
            $object->rate = null;
        }
        if (\array_key_exists('basePrice', $data) && null !== $data['basePrice']) {
            $object->basePrice = $data['basePrice'];
        } elseif (\array_key_exists('basePrice', $data)) {
            $object->basePrice = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (\array_key_exists('priceType', get_object_vars($data)) && null !== ($data->priceType ?? null)) {
            $dataArray['priceType'] = $data->priceType;
        }
        if (\array_key_exists('typeCode', get_object_vars($data)) && null !== ($data->typeCode ?? null)) {
            $dataArray['typeCode'] = $data->typeCode;
        }
        if (\array_key_exists('price', get_object_vars($data)) && null !== ($data->price ?? null)) {
            $dataArray['price'] = $data->price;
        }
        if (\array_key_exists('rate', get_object_vars($data)) && null !== ($data->rate ?? null)) {
            $dataArray['rate'] = $data->rate;
        }
        if (\array_key_exists('basePrice', get_object_vars($data)) && null !== ($data->basePrice ?? null)) {
            $dataArray['basePrice'] = $data->basePrice;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItem::class => false];
    }
}
