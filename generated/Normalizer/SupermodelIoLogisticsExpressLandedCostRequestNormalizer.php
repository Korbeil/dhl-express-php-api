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

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isCustomsDeclarable', $data) && \is_int($data['isCustomsDeclarable'])) {
            $data['isCustomsDeclarable'] = (bool) $data['isCustomsDeclarable'];
        }
        if (\array_key_exists('isDTPRequested', $data) && \is_int($data['isDTPRequested'])) {
            $data['isDTPRequested'] = (bool) $data['isDTPRequested'];
        }
        if (\array_key_exists('isInsuranceRequested', $data) && \is_int($data['isInsuranceRequested'])) {
            $data['isInsuranceRequested'] = (bool) $data['isInsuranceRequested'];
        }
        if (\array_key_exists('getCostBreakdown', $data) && \is_int($data['getCostBreakdown'])) {
            $data['getCostBreakdown'] = (bool) $data['getCostBreakdown'];
        }
        if (\array_key_exists('getTariffFormula', $data) && \is_int($data['getTariffFormula'])) {
            $data['getTariffFormula'] = (bool) $data['getTariffFormula'];
        }
        if (\array_key_exists('getQuotationID', $data) && \is_int($data['getQuotationID'])) {
            $data['getQuotationID'] = (bool) $data['getQuotationID'];
        }
        if (\array_key_exists('customerDetails', $data) && null !== $data['customerDetails']) {
            $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails::class, 'json', $context));
        } elseif (\array_key_exists('customerDetails', $data) && null === $data['customerDetails']) {
            $object->setCustomerDetails(null);
        }
        if (\array_key_exists('accounts', $data) && null !== $data['accounts']) {
            $values = [];
            foreach ($data['accounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAccount::class, 'json', $context);
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
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestChargesItem::class, 'json', $context);
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
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageRR::class, 'json', $context);
            }
            $object->setPackages($values_2);
        } elseif (\array_key_exists('packages', $data) && null === $data['packages']) {
            $object->setPackages(null);
        }
        if (\array_key_exists('items', $data) && null !== $data['items']) {
            $values_3 = [];
            foreach ($data['items'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class, 'json', $context);
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

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['customerDetails'] = null === $data->getCustomerDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getCustomerDetails(), 'json', $context));
        $values = [];
        foreach ($data->getAccounts() as $value) {
            $values[] = null === $value ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['accounts'] = $values;
        if ($data->isInitialized('productCode') && null !== $data->getProductCode()) {
            $dataArray['productCode'] = $data->getProductCode();
        }
        if ($data->isInitialized('localProductCode') && null !== $data->getLocalProductCode()) {
            $dataArray['localProductCode'] = $data->getLocalProductCode();
        }
        $dataArray['unitOfMeasurement'] = $data->getUnitOfMeasurement();
        $dataArray['currencyCode'] = $data->getCurrencyCode();
        $dataArray['isCustomsDeclarable'] = $data->getIsCustomsDeclarable();
        if ($data->isInitialized('isDTPRequested') && null !== $data->getIsDTPRequested()) {
            $dataArray['isDTPRequested'] = $data->getIsDTPRequested();
        }
        if ($data->isInitialized('isInsuranceRequested') && null !== $data->getIsInsuranceRequested()) {
            $dataArray['isInsuranceRequested'] = $data->getIsInsuranceRequested();
        }
        $dataArray['getCostBreakdown'] = $data->getGetCostBreakdown();
        if ($data->isInitialized('charges') && null !== $data->getCharges()) {
            $values_1 = [];
            foreach ($data->getCharges() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['charges'] = $values_1;
        }
        if ($data->isInitialized('shipmentPurpose') && null !== $data->getShipmentPurpose()) {
            $dataArray['shipmentPurpose'] = $data->getShipmentPurpose();
        }
        if ($data->isInitialized('transportationMode') && null !== $data->getTransportationMode()) {
            $dataArray['transportationMode'] = $data->getTransportationMode();
        }
        if ($data->isInitialized('merchantSelectedCarrierName') && null !== $data->getMerchantSelectedCarrierName()) {
            $dataArray['merchantSelectedCarrierName'] = $data->getMerchantSelectedCarrierName();
        }
        $values_2 = [];
        foreach ($data->getPackages() as $value_2) {
            $values_2[] = null === $value_2 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
        }
        $dataArray['packages'] = $values_2;
        $values_3 = [];
        foreach ($data->getItems() as $value_3) {
            $values_3[] = null === $value_3 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
        }
        $dataArray['items'] = $values_3;
        if ($data->isInitialized('getTariffFormula') && null !== $data->getGetTariffFormula()) {
            $dataArray['getTariffFormula'] = $data->getGetTariffFormula();
        }
        if ($data->isInitialized('getQuotationID') && null !== $data->getGetQuotationID()) {
            $dataArray['getQuotationID'] = $data->getGetQuotationID();
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest::class => false];
    }
}
