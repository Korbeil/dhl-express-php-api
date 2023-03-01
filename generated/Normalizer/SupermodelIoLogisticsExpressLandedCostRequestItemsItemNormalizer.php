<?php

namespace Korbeil\DHLExpress\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
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

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressLandedCostRequestItemsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressLandedCostRequestItemsItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem', 'json', $context);
            }
            $object->setGoodsCharacteristics($values);
        } elseif (\array_key_exists('goodsCharacteristics', $data) && null === $data['goodsCharacteristics']) {
            $object->setGoodsCharacteristics(null);
        }
        if (\array_key_exists('additionalQuantityDefinitions', $data) && null !== $data['additionalQuantityDefinitions']) {
            $values_1 = [];
            foreach ($data['additionalQuantityDefinitions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem', 'json', $context);
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

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['number'] = $object->getNumber();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getManufacturerCountry()) {
            $data['manufacturerCountry'] = $object->getManufacturerCountry();
        }
        if (null !== $object->getPartNumber()) {
            $data['partNumber'] = $object->getPartNumber();
        }
        $data['quantity'] = $object->getQuantity();
        if (null !== $object->getQuantityType()) {
            $data['quantityType'] = $object->getQuantityType();
        }
        $data['unitPrice'] = $object->getUnitPrice();
        $data['unitPriceCurrencyCode'] = $object->getUnitPriceCurrencyCode();
        if (null !== $object->getCustomsValue()) {
            $data['customsValue'] = $object->getCustomsValue();
        }
        if (null !== $object->getCustomsValueCurrencyCode()) {
            $data['customsValueCurrencyCode'] = $object->getCustomsValueCurrencyCode();
        }
        if (null !== $object->getCommodityCode()) {
            $data['commodityCode'] = $object->getCommodityCode();
        }
        if (null !== $object->getWeight()) {
            $data['weight'] = $object->getWeight();
        }
        if (null !== $object->getWeightUnitOfMeasurement()) {
            $data['weightUnitOfMeasurement'] = $object->getWeightUnitOfMeasurement();
        }
        if (null !== $object->getCategory()) {
            $data['category'] = $object->getCategory();
        }
        if (null !== $object->getBrand()) {
            $data['brand'] = $object->getBrand();
        }
        if (null !== $object->getGoodsCharacteristics()) {
            $values = [];
            foreach ($object->getGoodsCharacteristics() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['goodsCharacteristics'] = $values;
        }
        if (null !== $object->getAdditionalQuantityDefinitions()) {
            $values_1 = [];
            foreach ($object->getAdditionalQuantityDefinitions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['additionalQuantityDefinitions'] = $values_1;
        }
        if (null !== $object->getEstimatedTariffRateType()) {
            $data['estimatedTariffRateType'] = $object->getEstimatedTariffRateType();
        }

        return $data;
    }
}
