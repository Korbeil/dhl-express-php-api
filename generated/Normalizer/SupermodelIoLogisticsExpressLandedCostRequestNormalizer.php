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

class SupermodelIoLogisticsExpressLandedCostRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressLandedCostRequest' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressLandedCostRequest' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('customerDetails', $data) && null !== $data['customerDetails']) {
            $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails', 'json', $context));
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
        if (\array_key_exists('unitOfMeasurement', $data) && null !== $data['unitOfMeasurement']) {
            $object->setUnitOfMeasurement($data['unitOfMeasurement']);
        } elseif (\array_key_exists('unitOfMeasurement', $data) && null === $data['unitOfMeasurement']) {
            $object->setUnitOfMeasurement(null);
        }
        if (\array_key_exists('currencyCode', $data) && null !== $data['currencyCode']) {
            $object->setCurrencyCode($data['currencyCode']);
        } elseif (\array_key_exists('currencyCode', $data) && null === $data['currencyCode']) {
            $object->setCurrencyCode(null);
        }
        if (\array_key_exists('isCustomsDeclarable', $data) && null !== $data['isCustomsDeclarable']) {
            $object->setIsCustomsDeclarable($data['isCustomsDeclarable']);
        } elseif (\array_key_exists('isCustomsDeclarable', $data) && null === $data['isCustomsDeclarable']) {
            $object->setIsCustomsDeclarable(null);
        }
        if (\array_key_exists('isDTPRequested', $data) && null !== $data['isDTPRequested']) {
            $object->setIsDTPRequested($data['isDTPRequested']);
        } elseif (\array_key_exists('isDTPRequested', $data) && null === $data['isDTPRequested']) {
            $object->setIsDTPRequested(null);
        }
        if (\array_key_exists('isInsuranceRequested', $data) && null !== $data['isInsuranceRequested']) {
            $object->setIsInsuranceRequested($data['isInsuranceRequested']);
        } elseif (\array_key_exists('isInsuranceRequested', $data) && null === $data['isInsuranceRequested']) {
            $object->setIsInsuranceRequested(null);
        }
        if (\array_key_exists('getCostBreakdown', $data) && null !== $data['getCostBreakdown']) {
            $object->setGetCostBreakdown($data['getCostBreakdown']);
        } elseif (\array_key_exists('getCostBreakdown', $data) && null === $data['getCostBreakdown']) {
            $object->setGetCostBreakdown(null);
        }
        if (\array_key_exists('charges', $data) && null !== $data['charges']) {
            $values_1 = [];
            foreach ($data['charges'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressLandedCostRequestChargesItem', 'json', $context);
            }
            $object->setCharges($values_1);
        } elseif (\array_key_exists('charges', $data) && null === $data['charges']) {
            $object->setCharges(null);
        }
        if (\array_key_exists('shipmentPurpose', $data) && null !== $data['shipmentPurpose']) {
            $object->setShipmentPurpose($data['shipmentPurpose']);
        } elseif (\array_key_exists('shipmentPurpose', $data) && null === $data['shipmentPurpose']) {
            $object->setShipmentPurpose(null);
        }
        if (\array_key_exists('transportationMode', $data) && null !== $data['transportationMode']) {
            $object->setTransportationMode($data['transportationMode']);
        } elseif (\array_key_exists('transportationMode', $data) && null === $data['transportationMode']) {
            $object->setTransportationMode(null);
        }
        if (\array_key_exists('merchantSelectedCarrierName', $data) && null !== $data['merchantSelectedCarrierName']) {
            $object->setMerchantSelectedCarrierName($data['merchantSelectedCarrierName']);
        } elseif (\array_key_exists('merchantSelectedCarrierName', $data) && null === $data['merchantSelectedCarrierName']) {
            $object->setMerchantSelectedCarrierName(null);
        }
        if (\array_key_exists('packages', $data) && null !== $data['packages']) {
            $values_2 = [];
            foreach ($data['packages'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressPackageRR', 'json', $context);
            }
            $object->setPackages($values_2);
        } elseif (\array_key_exists('packages', $data) && null === $data['packages']) {
            $object->setPackages(null);
        }
        if (\array_key_exists('items', $data) && null !== $data['items']) {
            $values_3 = [];
            foreach ($data['items'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressLandedCostRequestItemsItem', 'json', $context);
            }
            $object->setItems($values_3);
        } elseif (\array_key_exists('items', $data) && null === $data['items']) {
            $object->setItems(null);
        }
        if (\array_key_exists('getTariffFormula', $data) && null !== $data['getTariffFormula']) {
            $object->setGetTariffFormula($data['getTariffFormula']);
        } elseif (\array_key_exists('getTariffFormula', $data) && null === $data['getTariffFormula']) {
            $object->setGetTariffFormula(null);
        }
        if (\array_key_exists('getQuotationID', $data) && null !== $data['getQuotationID']) {
            $object->setGetQuotationID($data['getQuotationID']);
        } elseif (\array_key_exists('getQuotationID', $data) && null === $data['getQuotationID']) {
            $object->setGetQuotationID(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['customerDetails'] = $this->normalizer->normalize($object->getCustomerDetails(), 'json', $context);
        $values = [];
        foreach ($object->getAccounts() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['accounts'] = $values;
        if ($object->isInitialized('productCode') && null !== $object->getProductCode()) {
            $data['productCode'] = $object->getProductCode();
        }
        if ($object->isInitialized('localProductCode') && null !== $object->getLocalProductCode()) {
            $data['localProductCode'] = $object->getLocalProductCode();
        }
        $data['unitOfMeasurement'] = $object->getUnitOfMeasurement();
        $data['currencyCode'] = $object->getCurrencyCode();
        $data['isCustomsDeclarable'] = $object->getIsCustomsDeclarable();
        if ($object->isInitialized('isDTPRequested') && null !== $object->getIsDTPRequested()) {
            $data['isDTPRequested'] = $object->getIsDTPRequested();
        }
        if ($object->isInitialized('isInsuranceRequested') && null !== $object->getIsInsuranceRequested()) {
            $data['isInsuranceRequested'] = $object->getIsInsuranceRequested();
        }
        $data['getCostBreakdown'] = $object->getGetCostBreakdown();
        if ($object->isInitialized('charges') && null !== $object->getCharges()) {
            $values_1 = [];
            foreach ($object->getCharges() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['charges'] = $values_1;
        }
        if ($object->isInitialized('shipmentPurpose') && null !== $object->getShipmentPurpose()) {
            $data['shipmentPurpose'] = $object->getShipmentPurpose();
        }
        if ($object->isInitialized('transportationMode') && null !== $object->getTransportationMode()) {
            $data['transportationMode'] = $object->getTransportationMode();
        }
        if ($object->isInitialized('merchantSelectedCarrierName') && null !== $object->getMerchantSelectedCarrierName()) {
            $data['merchantSelectedCarrierName'] = $object->getMerchantSelectedCarrierName();
        }
        $values_2 = [];
        foreach ($object->getPackages() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data['packages'] = $values_2;
        $values_3 = [];
        foreach ($object->getItems() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $data['items'] = $values_3;
        if ($object->isInitialized('getTariffFormula') && null !== $object->getGetTariffFormula()) {
            $data['getTariffFormula'] = $object->getGetTariffFormula();
        }
        if ($object->isInitialized('getQuotationID') && null !== $object->getGetQuotationID()) {
            $data['getQuotationID'] = $object->getGetQuotationID();
        }

        return $data;
    }
}
