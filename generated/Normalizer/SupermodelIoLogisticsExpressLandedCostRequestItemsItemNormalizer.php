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

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
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
            $object->setNumber($data['number']);
        } elseif (\array_key_exists('number', $data) && null === $data['number']) {
            $object->setNumber(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('manufacturerCountry', $data) && null !== $data['manufacturerCountry']) {
            $object->setManufacturerCountry($data['manufacturerCountry']);
        } elseif (\array_key_exists('manufacturerCountry', $data) && null === $data['manufacturerCountry']) {
            $object->setManufacturerCountry(null);
        }
        if (\array_key_exists('partNumber', $data) && null !== $data['partNumber']) {
            $object->setPartNumber($data['partNumber']);
        } elseif (\array_key_exists('partNumber', $data) && null === $data['partNumber']) {
            $object->setPartNumber(null);
        }
        if (\array_key_exists('quantity', $data) && null !== $data['quantity']) {
            $object->setQuantity($data['quantity']);
        } elseif (\array_key_exists('quantity', $data) && null === $data['quantity']) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('quantityType', $data) && null !== $data['quantityType']) {
            $object->setQuantityType($data['quantityType']);
        } elseif (\array_key_exists('quantityType', $data) && null === $data['quantityType']) {
            $object->setQuantityType(null);
        }
        if (\array_key_exists('unitPrice', $data) && null !== $data['unitPrice']) {
            $object->setUnitPrice($data['unitPrice']);
        } elseif (\array_key_exists('unitPrice', $data) && null === $data['unitPrice']) {
            $object->setUnitPrice(null);
        }
        if (\array_key_exists('unitPriceCurrencyCode', $data) && null !== $data['unitPriceCurrencyCode']) {
            $object->setUnitPriceCurrencyCode($data['unitPriceCurrencyCode']);
        } elseif (\array_key_exists('unitPriceCurrencyCode', $data) && null === $data['unitPriceCurrencyCode']) {
            $object->setUnitPriceCurrencyCode(null);
        }
        if (\array_key_exists('customsValue', $data) && null !== $data['customsValue']) {
            $object->setCustomsValue($data['customsValue']);
        } elseif (\array_key_exists('customsValue', $data) && null === $data['customsValue']) {
            $object->setCustomsValue(null);
        }
        if (\array_key_exists('customsValueCurrencyCode', $data) && null !== $data['customsValueCurrencyCode']) {
            $object->setCustomsValueCurrencyCode($data['customsValueCurrencyCode']);
        } elseif (\array_key_exists('customsValueCurrencyCode', $data) && null === $data['customsValueCurrencyCode']) {
            $object->setCustomsValueCurrencyCode(null);
        }
        if (\array_key_exists('commodityCode', $data) && null !== $data['commodityCode']) {
            $object->setCommodityCode($data['commodityCode']);
        } elseif (\array_key_exists('commodityCode', $data) && null === $data['commodityCode']) {
            $object->setCommodityCode(null);
        }
        if (\array_key_exists('weight', $data) && null !== $data['weight']) {
            $object->setWeight($data['weight']);
        } elseif (\array_key_exists('weight', $data) && null === $data['weight']) {
            $object->setWeight(null);
        }
        if (\array_key_exists('weightUnitOfMeasurement', $data) && null !== $data['weightUnitOfMeasurement']) {
            $object->setWeightUnitOfMeasurement($data['weightUnitOfMeasurement']);
        } elseif (\array_key_exists('weightUnitOfMeasurement', $data) && null === $data['weightUnitOfMeasurement']) {
            $object->setWeightUnitOfMeasurement(null);
        }
        if (\array_key_exists('category', $data) && null !== $data['category']) {
            $object->setCategory($data['category']);
        } elseif (\array_key_exists('category', $data) && null === $data['category']) {
            $object->setCategory(null);
        }
        if (\array_key_exists('brand', $data) && null !== $data['brand']) {
            $object->setBrand($data['brand']);
        } elseif (\array_key_exists('brand', $data) && null === $data['brand']) {
            $object->setBrand(null);
        }
        if (\array_key_exists('goodsCharacteristics', $data) && null !== $data['goodsCharacteristics']) {
            $values = [];
            foreach ($data['goodsCharacteristics'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem::class, 'json', $context);
            }
            $object->setGoodsCharacteristics($values);
        } elseif (\array_key_exists('goodsCharacteristics', $data) && null === $data['goodsCharacteristics']) {
            $object->setGoodsCharacteristics(null);
        }
        if (\array_key_exists('additionalQuantityDefinitions', $data) && null !== $data['additionalQuantityDefinitions']) {
            $values_1 = [];
            foreach ($data['additionalQuantityDefinitions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem::class, 'json', $context);
            }
            $object->setAdditionalQuantityDefinitions($values_1);
        } elseif (\array_key_exists('additionalQuantityDefinitions', $data) && null === $data['additionalQuantityDefinitions']) {
            $object->setAdditionalQuantityDefinitions(null);
        }
        if (\array_key_exists('estimatedTariffRateType', $data) && null !== $data['estimatedTariffRateType']) {
            $object->setEstimatedTariffRateType($data['estimatedTariffRateType']);
        } elseif (\array_key_exists('estimatedTariffRateType', $data) && null === $data['estimatedTariffRateType']) {
            $object->setEstimatedTariffRateType(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['number'] = $data->getNumber();
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('manufacturerCountry') && null !== $data->getManufacturerCountry()) {
            $dataArray['manufacturerCountry'] = $data->getManufacturerCountry();
        }
        if ($data->isInitialized('partNumber') && null !== $data->getPartNumber()) {
            $dataArray['partNumber'] = $data->getPartNumber();
        }
        $dataArray['quantity'] = $data->getQuantity();
        if ($data->isInitialized('quantityType') && null !== $data->getQuantityType()) {
            $dataArray['quantityType'] = $data->getQuantityType();
        }
        $dataArray['unitPrice'] = $data->getUnitPrice();
        $dataArray['unitPriceCurrencyCode'] = $data->getUnitPriceCurrencyCode();
        if ($data->isInitialized('customsValue') && null !== $data->getCustomsValue()) {
            $dataArray['customsValue'] = $data->getCustomsValue();
        }
        if ($data->isInitialized('customsValueCurrencyCode') && null !== $data->getCustomsValueCurrencyCode()) {
            $dataArray['customsValueCurrencyCode'] = $data->getCustomsValueCurrencyCode();
        }
        if ($data->isInitialized('commodityCode') && null !== $data->getCommodityCode()) {
            $dataArray['commodityCode'] = $data->getCommodityCode();
        }
        if ($data->isInitialized('weight') && null !== $data->getWeight()) {
            $dataArray['weight'] = $data->getWeight();
        }
        if ($data->isInitialized('weightUnitOfMeasurement') && null !== $data->getWeightUnitOfMeasurement()) {
            $dataArray['weightUnitOfMeasurement'] = $data->getWeightUnitOfMeasurement();
        }
        if ($data->isInitialized('category') && null !== $data->getCategory()) {
            $dataArray['category'] = $data->getCategory();
        }
        if ($data->isInitialized('brand') && null !== $data->getBrand()) {
            $dataArray['brand'] = $data->getBrand();
        }
        if ($data->isInitialized('goodsCharacteristics') && null !== $data->getGoodsCharacteristics()) {
            $values = [];
            foreach ($data->getGoodsCharacteristics() as $value) {
                $values[] = null === $value ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['goodsCharacteristics'] = $values;
        }
        if ($data->isInitialized('additionalQuantityDefinitions') && null !== $data->getAdditionalQuantityDefinitions()) {
            $values_1 = [];
            foreach ($data->getAdditionalQuantityDefinitions() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['additionalQuantityDefinitions'] = $values_1;
        }
        if ($data->isInitialized('estimatedTariffRateType') && null !== $data->getEstimatedTariffRateType()) {
            $dataArray['estimatedTariffRateType'] = $data->getEstimatedTariffRateType();
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class => false];
    }
}
