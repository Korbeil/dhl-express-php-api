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

class SupermodelIoLogisticsExpressLandedCostRequestItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('number', $data) && \is_int($data['number'])) {
            $data['number'] = (float) $data['number'];
        }
        if (\array_key_exists('quantity', $data) && \is_int($data['quantity'])) {
            $data['quantity'] = (float) $data['quantity'];
        }
        if (\array_key_exists('unitPrice', $data) && \is_int($data['unitPrice'])) {
            $data['unitPrice'] = (float) $data['unitPrice'];
        }
        if (\array_key_exists('customsValue', $data) && \is_int($data['customsValue'])) {
            $data['customsValue'] = (float) $data['customsValue'];
        }
        if (\array_key_exists('weight', $data) && \is_int($data['weight'])) {
            $data['weight'] = (float) $data['weight'];
        }
        if (\array_key_exists('number', $data) && null !== $data['number']) {
            $object->number = $data['number'];
        } elseif (\array_key_exists('number', $data)) {
            $object->number = null;
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->name = $data['name'];
        } elseif (\array_key_exists('name', $data)) {
            $object->name = null;
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->description = $data['description'];
        } elseif (\array_key_exists('description', $data)) {
            $object->description = null;
        }
        if (\array_key_exists('manufacturerCountry', $data) && null !== $data['manufacturerCountry']) {
            $object->manufacturerCountry = $data['manufacturerCountry'];
        } elseif (\array_key_exists('manufacturerCountry', $data)) {
            $object->manufacturerCountry = null;
        }
        if (\array_key_exists('partNumber', $data) && null !== $data['partNumber']) {
            $object->partNumber = $data['partNumber'];
        } elseif (\array_key_exists('partNumber', $data)) {
            $object->partNumber = null;
        }
        if (\array_key_exists('quantity', $data) && null !== $data['quantity']) {
            $object->quantity = $data['quantity'];
        } elseif (\array_key_exists('quantity', $data)) {
            $object->quantity = null;
        }
        if (\array_key_exists('quantityType', $data) && null !== $data['quantityType']) {
            $object->quantityType = $data['quantityType'];
        } elseif (\array_key_exists('quantityType', $data)) {
            $object->quantityType = null;
        }
        if (\array_key_exists('unitPrice', $data) && null !== $data['unitPrice']) {
            $object->unitPrice = $data['unitPrice'];
        } elseif (\array_key_exists('unitPrice', $data)) {
            $object->unitPrice = null;
        }
        if (\array_key_exists('unitPriceCurrencyCode', $data) && null !== $data['unitPriceCurrencyCode']) {
            $object->unitPriceCurrencyCode = $data['unitPriceCurrencyCode'];
        } elseif (\array_key_exists('unitPriceCurrencyCode', $data)) {
            $object->unitPriceCurrencyCode = null;
        }
        if (\array_key_exists('customsValue', $data) && null !== $data['customsValue']) {
            $object->customsValue = $data['customsValue'];
        } elseif (\array_key_exists('customsValue', $data)) {
            $object->customsValue = null;
        }
        if (\array_key_exists('customsValueCurrencyCode', $data) && null !== $data['customsValueCurrencyCode']) {
            $object->customsValueCurrencyCode = $data['customsValueCurrencyCode'];
        } elseif (\array_key_exists('customsValueCurrencyCode', $data)) {
            $object->customsValueCurrencyCode = null;
        }
        if (\array_key_exists('commodityCode', $data) && null !== $data['commodityCode']) {
            $object->commodityCode = $data['commodityCode'];
        } elseif (\array_key_exists('commodityCode', $data)) {
            $object->commodityCode = null;
        }
        if (\array_key_exists('weight', $data) && null !== $data['weight']) {
            $object->weight = $data['weight'];
        } elseif (\array_key_exists('weight', $data)) {
            $object->weight = null;
        }
        if (\array_key_exists('weightUnitOfMeasurement', $data) && null !== $data['weightUnitOfMeasurement']) {
            $object->weightUnitOfMeasurement = $data['weightUnitOfMeasurement'];
        } elseif (\array_key_exists('weightUnitOfMeasurement', $data)) {
            $object->weightUnitOfMeasurement = null;
        }
        if (\array_key_exists('category', $data) && null !== $data['category']) {
            $object->category = $data['category'];
        } elseif (\array_key_exists('category', $data)) {
            $object->category = null;
        }
        if (\array_key_exists('brand', $data) && null !== $data['brand']) {
            $object->brand = $data['brand'];
        } elseif (\array_key_exists('brand', $data)) {
            $object->brand = null;
        }
        if (\array_key_exists('goodsCharacteristics', $data) && null !== $data['goodsCharacteristics']) {
            $values = [];
            foreach ($data['goodsCharacteristics'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem::class, 'json', $context);
            }
            $object->goodsCharacteristics = $values;
        } elseif (\array_key_exists('goodsCharacteristics', $data)) {
            $object->goodsCharacteristics = null;
        }
        if (\array_key_exists('additionalQuantityDefinitions', $data) && null !== $data['additionalQuantityDefinitions']) {
            $values_1 = [];
            foreach ($data['additionalQuantityDefinitions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem::class, 'json', $context);
            }
            $object->additionalQuantityDefinitions = $values_1;
        } elseif (\array_key_exists('additionalQuantityDefinitions', $data)) {
            $object->additionalQuantityDefinitions = null;
        }
        if (\array_key_exists('estimatedTariffRateType', $data) && null !== $data['estimatedTariffRateType']) {
            $object->estimatedTariffRateType = $data['estimatedTariffRateType'];
        } elseif (\array_key_exists('estimatedTariffRateType', $data)) {
            $object->estimatedTariffRateType = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['number'] = $data->number;
        if (\array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name;
        }
        if (\array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description;
        }
        if (\array_key_exists('manufacturerCountry', get_object_vars($data)) && null !== ($data->manufacturerCountry ?? null)) {
            $dataArray['manufacturerCountry'] = $data->manufacturerCountry;
        }
        if (\array_key_exists('partNumber', get_object_vars($data)) && null !== ($data->partNumber ?? null)) {
            $dataArray['partNumber'] = $data->partNumber;
        }
        $dataArray['quantity'] = $data->quantity;
        if (\array_key_exists('quantityType', get_object_vars($data)) && null !== ($data->quantityType ?? null)) {
            $dataArray['quantityType'] = $data->quantityType;
        }
        $dataArray['unitPrice'] = $data->unitPrice;
        $dataArray['unitPriceCurrencyCode'] = $data->unitPriceCurrencyCode;
        if (\array_key_exists('customsValue', get_object_vars($data)) && null !== ($data->customsValue ?? null)) {
            $dataArray['customsValue'] = $data->customsValue;
        }
        if (\array_key_exists('customsValueCurrencyCode', get_object_vars($data)) && null !== ($data->customsValueCurrencyCode ?? null)) {
            $dataArray['customsValueCurrencyCode'] = $data->customsValueCurrencyCode;
        }
        if (\array_key_exists('commodityCode', get_object_vars($data)) && null !== ($data->commodityCode ?? null)) {
            $dataArray['commodityCode'] = $data->commodityCode;
        }
        if (\array_key_exists('weight', get_object_vars($data)) && null !== ($data->weight ?? null)) {
            $dataArray['weight'] = $data->weight;
        }
        if (\array_key_exists('weightUnitOfMeasurement', get_object_vars($data)) && null !== ($data->weightUnitOfMeasurement ?? null)) {
            $dataArray['weightUnitOfMeasurement'] = $data->weightUnitOfMeasurement;
        }
        if (\array_key_exists('category', get_object_vars($data)) && null !== ($data->category ?? null)) {
            $dataArray['category'] = $data->category;
        }
        if (\array_key_exists('brand', get_object_vars($data)) && null !== ($data->brand ?? null)) {
            $dataArray['brand'] = $data->brand;
        }
        if (\array_key_exists('goodsCharacteristics', get_object_vars($data)) && null !== ($data->goodsCharacteristics ?? null)) {
            $values = [];
            foreach ($data->goodsCharacteristics as $value) {
                $normalized = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['goodsCharacteristics'] = $values;
        }
        if (\array_key_exists('additionalQuantityDefinitions', get_object_vars($data)) && null !== ($data->additionalQuantityDefinitions ?? null)) {
            $values_1 = [];
            foreach ($data->additionalQuantityDefinitions as $value_1) {
                $normalized_1 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['additionalQuantityDefinitions'] = $values_1;
        }
        if (\array_key_exists('estimatedTariffRateType', get_object_vars($data)) && null !== ($data->estimatedTariffRateType ?? null)) {
            $dataArray['estimatedTariffRateType'] = $data->estimatedTariffRateType;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class => false];
    }
}
