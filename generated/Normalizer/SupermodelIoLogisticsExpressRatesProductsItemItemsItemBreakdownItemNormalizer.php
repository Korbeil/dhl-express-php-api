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

class SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('serviceCode', $data) && null !== $data['serviceCode']) {
            $object->setServiceCode($data['serviceCode']);
        } elseif (\array_key_exists('serviceCode', $data) && null === $data['serviceCode']) {
            $object->setServiceCode(null);
        }
        if (\array_key_exists('localServiceCode', $data) && null !== $data['localServiceCode']) {
            $object->setLocalServiceCode($data['localServiceCode']);
        } elseif (\array_key_exists('localServiceCode', $data) && null === $data['localServiceCode']) {
            $object->setLocalServiceCode(null);
        }
        if (\array_key_exists('typeCode', $data) && null !== $data['typeCode']) {
            $object->setTypeCode($data['typeCode']);
        } elseif (\array_key_exists('typeCode', $data) && null === $data['typeCode']) {
            $object->setTypeCode(null);
        }
        if (\array_key_exists('serviceTypeCode', $data) && null !== $data['serviceTypeCode']) {
            $object->setServiceTypeCode($data['serviceTypeCode']);
        } elseif (\array_key_exists('serviceTypeCode', $data) && null === $data['serviceTypeCode']) {
            $object->setServiceTypeCode(null);
        }
        if (\array_key_exists('price', $data) && null !== $data['price']) {
            $object->setPrice($data['price']);
        } elseif (\array_key_exists('price', $data) && null === $data['price']) {
            $object->setPrice(null);
        }
        if (\array_key_exists('priceCurrency', $data) && null !== $data['priceCurrency']) {
            $object->setPriceCurrency($data['priceCurrency']);
        } elseif (\array_key_exists('priceCurrency', $data) && null === $data['priceCurrency']) {
            $object->setPriceCurrency(null);
        }
        if (\array_key_exists('isCustomerAgreement', $data) && null !== $data['isCustomerAgreement']) {
            $object->setIsCustomerAgreement($data['isCustomerAgreement']);
        } elseif (\array_key_exists('isCustomerAgreement', $data) && null === $data['isCustomerAgreement']) {
            $object->setIsCustomerAgreement(null);
        }
        if (\array_key_exists('isMarketedService', $data) && null !== $data['isMarketedService']) {
            $object->setIsMarketedService($data['isMarketedService']);
        } elseif (\array_key_exists('isMarketedService', $data) && null === $data['isMarketedService']) {
            $object->setIsMarketedService(null);
        }
        if (\array_key_exists('isBillingServiceIndicator', $data) && null !== $data['isBillingServiceIndicator']) {
            $object->setIsBillingServiceIndicator($data['isBillingServiceIndicator']);
        } elseif (\array_key_exists('isBillingServiceIndicator', $data) && null === $data['isBillingServiceIndicator']) {
            $object->setIsBillingServiceIndicator(null);
        }
        if (\array_key_exists('priceBreakdown', $data) && null !== $data['priceBreakdown']) {
            $values = [];
            foreach ($data['priceBreakdown'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemPriceBreakdownItem', 'json', $context);
            }
            $object->setPriceBreakdown($values);
        } elseif (\array_key_exists('priceBreakdown', $data) && null === $data['priceBreakdown']) {
            $object->setPriceBreakdown(null);
        }
        if (\array_key_exists('tariffRateFormula', $data) && null !== $data['tariffRateFormula']) {
            $object->setTariffRateFormula($data['tariffRateFormula']);
        } elseif (\array_key_exists('tariffRateFormula', $data) && null === $data['tariffRateFormula']) {
            $object->setTariffRateFormula(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getServiceCode()) {
            $data['serviceCode'] = $object->getServiceCode();
        }
        if (null !== $object->getLocalServiceCode()) {
            $data['localServiceCode'] = $object->getLocalServiceCode();
        }
        $data['typeCode'] = $object->getTypeCode();
        if (null !== $object->getServiceTypeCode()) {
            $data['serviceTypeCode'] = $object->getServiceTypeCode();
        }
        $data['price'] = $object->getPrice();
        if (null !== $object->getPriceCurrency()) {
            $data['priceCurrency'] = $object->getPriceCurrency();
        }
        if (null !== $object->getIsCustomerAgreement()) {
            $data['isCustomerAgreement'] = $object->getIsCustomerAgreement();
        }
        if (null !== $object->getIsMarketedService()) {
            $data['isMarketedService'] = $object->getIsMarketedService();
        }
        if (null !== $object->getIsBillingServiceIndicator()) {
            $data['isBillingServiceIndicator'] = $object->getIsBillingServiceIndicator();
        }
        if (null !== $object->getPriceBreakdown()) {
            $values = [];
            foreach ($object->getPriceBreakdown() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['priceBreakdown'] = $values;
        }
        if (null !== $object->getTariffRateFormula()) {
            $data['tariffRateFormula'] = $object->getTariffRateFormula();
        }

        return $data;
    }
}
