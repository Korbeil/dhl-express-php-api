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

class SupermodelIoLogisticsExpressRateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRateRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRateRequest' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('customerDetails', $data) && null !== $data['customerDetails']) {
            $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRateRequestCustomerDetails', 'json', $context));
        } elseif (\array_key_exists('customerDetails', $data) && null === $data['customerDetails']) {
            $object->setCustomerDetails(null);
        }
        if (\array_key_exists('accounts', $data) && null !== $data['accounts']) {
            $values = [];
            foreach ($data['accounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressAccount', 'json', $context);
            }
            $object->setAccounts($values);
        } elseif (\array_key_exists('accounts', $data) && null === $data['accounts']) {
            $object->setAccounts(null);
        }
        if (\array_key_exists('productCode', $data) && null !== $data['productCode']) {
            $object->setProductCode($data['productCode']);
        } elseif (\array_key_exists('productCode', $data) && null === $data['productCode']) {
            $object->setProductCode(null);
        }
        if (\array_key_exists('localProductCode', $data) && null !== $data['localProductCode']) {
            $object->setLocalProductCode($data['localProductCode']);
        } elseif (\array_key_exists('localProductCode', $data) && null === $data['localProductCode']) {
            $object->setLocalProductCode(null);
        }
        if (\array_key_exists('valueAddedServices', $data) && null !== $data['valueAddedServices']) {
            $values_1 = [];
            foreach ($data['valueAddedServices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressValueAddedServicesRates', 'json', $context);
            }
            $object->setValueAddedServices($values_1);
        } elseif (\array_key_exists('valueAddedServices', $data) && null === $data['valueAddedServices']) {
            $object->setValueAddedServices(null);
        }
        if (\array_key_exists('productsAndServices', $data) && null !== $data['productsAndServices']) {
            $values_2 = [];
            foreach ($data['productsAndServices'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem', 'json', $context);
            }
            $object->setProductsAndServices($values_2);
        } elseif (\array_key_exists('productsAndServices', $data) && null === $data['productsAndServices']) {
            $object->setProductsAndServices(null);
        }
        if (\array_key_exists('payerCountryCode', $data) && null !== $data['payerCountryCode']) {
            $object->setPayerCountryCode($data['payerCountryCode']);
        } elseif (\array_key_exists('payerCountryCode', $data) && null === $data['payerCountryCode']) {
            $object->setPayerCountryCode(null);
        }
        if (\array_key_exists('plannedShippingDateAndTime', $data) && null !== $data['plannedShippingDateAndTime']) {
            $object->setPlannedShippingDateAndTime($data['plannedShippingDateAndTime']);
        } elseif (\array_key_exists('plannedShippingDateAndTime', $data) && null === $data['plannedShippingDateAndTime']) {
            $object->setPlannedShippingDateAndTime(null);
        }
        if (\array_key_exists('unitOfMeasurement', $data) && null !== $data['unitOfMeasurement']) {
            $object->setUnitOfMeasurement($data['unitOfMeasurement']);
        } elseif (\array_key_exists('unitOfMeasurement', $data) && null === $data['unitOfMeasurement']) {
            $object->setUnitOfMeasurement(null);
        }
        if (\array_key_exists('isCustomsDeclarable', $data) && null !== $data['isCustomsDeclarable']) {
            $object->setIsCustomsDeclarable($data['isCustomsDeclarable']);
        } elseif (\array_key_exists('isCustomsDeclarable', $data) && null === $data['isCustomsDeclarable']) {
            $object->setIsCustomsDeclarable(null);
        }
        if (\array_key_exists('monetaryAmount', $data) && null !== $data['monetaryAmount']) {
            $values_3 = [];
            foreach ($data['monetaryAmount'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem', 'json', $context);
            }
            $object->setMonetaryAmount($values_3);
        } elseif (\array_key_exists('monetaryAmount', $data) && null === $data['monetaryAmount']) {
            $object->setMonetaryAmount(null);
        }
        if (\array_key_exists('requestAllValueAddedServices', $data) && null !== $data['requestAllValueAddedServices']) {
            $object->setRequestAllValueAddedServices($data['requestAllValueAddedServices']);
        } elseif (\array_key_exists('requestAllValueAddedServices', $data) && null === $data['requestAllValueAddedServices']) {
            $object->setRequestAllValueAddedServices(null);
        }
        if (\array_key_exists('estimatedDeliveryDate', $data) && null !== $data['estimatedDeliveryDate']) {
            $object->setEstimatedDeliveryDate($this->denormalizer->denormalize($data['estimatedDeliveryDate'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate', 'json', $context));
        } elseif (\array_key_exists('estimatedDeliveryDate', $data) && null === $data['estimatedDeliveryDate']) {
            $object->setEstimatedDeliveryDate(null);
        }
        if (\array_key_exists('getAdditionalInformation', $data) && null !== $data['getAdditionalInformation']) {
            $values_4 = [];
            foreach ($data['getAdditionalInformation'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem', 'json', $context);
            }
            $object->setGetAdditionalInformation($values_4);
        } elseif (\array_key_exists('getAdditionalInformation', $data) && null === $data['getAdditionalInformation']) {
            $object->setGetAdditionalInformation(null);
        }
        if (\array_key_exists('returnStandardProductsOnly', $data) && null !== $data['returnStandardProductsOnly']) {
            $object->setReturnStandardProductsOnly($data['returnStandardProductsOnly']);
        } elseif (\array_key_exists('returnStandardProductsOnly', $data) && null === $data['returnStandardProductsOnly']) {
            $object->setReturnStandardProductsOnly(null);
        }
        if (\array_key_exists('nextBusinessDay', $data) && null !== $data['nextBusinessDay']) {
            $object->setNextBusinessDay($data['nextBusinessDay']);
        } elseif (\array_key_exists('nextBusinessDay', $data) && null === $data['nextBusinessDay']) {
            $object->setNextBusinessDay(null);
        }
        if (\array_key_exists('productTypeCode', $data) && null !== $data['productTypeCode']) {
            $object->setProductTypeCode($data['productTypeCode']);
        } elseif (\array_key_exists('productTypeCode', $data) && null === $data['productTypeCode']) {
            $object->setProductTypeCode(null);
        }
        if (\array_key_exists('packages', $data) && null !== $data['packages']) {
            $values_5 = [];
            foreach ($data['packages'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressPackageRR', 'json', $context);
            }
            $object->setPackages($values_5);
        } elseif (\array_key_exists('packages', $data) && null === $data['packages']) {
            $object->setPackages(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['customerDetails'] = $this->normalizer->normalize($object->getCustomerDetails(), 'json', $context);
        if (null !== $object->getAccounts()) {
            $values = [];
            foreach ($object->getAccounts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['accounts'] = $values;
        }
        if (null !== $object->getProductCode()) {
            $data['productCode'] = $object->getProductCode();
        }
        if (null !== $object->getLocalProductCode()) {
            $data['localProductCode'] = $object->getLocalProductCode();
        }
        if (null !== $object->getValueAddedServices()) {
            $values_1 = [];
            foreach ($object->getValueAddedServices() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['valueAddedServices'] = $values_1;
        }
        if (null !== $object->getProductsAndServices()) {
            $values_2 = [];
            foreach ($object->getProductsAndServices() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['productsAndServices'] = $values_2;
        }
        if (null !== $object->getPayerCountryCode()) {
            $data['payerCountryCode'] = $object->getPayerCountryCode();
        }
        $data['plannedShippingDateAndTime'] = $object->getPlannedShippingDateAndTime();
        $data['unitOfMeasurement'] = $object->getUnitOfMeasurement();
        $data['isCustomsDeclarable'] = $object->getIsCustomsDeclarable();
        if (null !== $object->getMonetaryAmount()) {
            $values_3 = [];
            foreach ($object->getMonetaryAmount() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['monetaryAmount'] = $values_3;
        }
        if (null !== $object->getRequestAllValueAddedServices()) {
            $data['requestAllValueAddedServices'] = $object->getRequestAllValueAddedServices();
        }
        if (null !== $object->getEstimatedDeliveryDate()) {
            $data['estimatedDeliveryDate'] = $this->normalizer->normalize($object->getEstimatedDeliveryDate(), 'json', $context);
        }
        if (null !== $object->getGetAdditionalInformation()) {
            $values_4 = [];
            foreach ($object->getGetAdditionalInformation() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['getAdditionalInformation'] = $values_4;
        }
        if (null !== $object->getReturnStandardProductsOnly()) {
            $data['returnStandardProductsOnly'] = $object->getReturnStandardProductsOnly();
        }
        if (null !== $object->getNextBusinessDay()) {
            $data['nextBusinessDay'] = $object->getNextBusinessDay();
        }
        if (null !== $object->getProductTypeCode()) {
            $data['productTypeCode'] = $object->getProductTypeCode();
        }
        $values_5 = [];
        foreach ($object->getPackages() as $value_5) {
            $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
        }
        $data['packages'] = $values_5;

        return $data;
    }
}
