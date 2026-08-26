<?php

namespace Korbeil\DHLExpress\Api\Normalizer\Shipment;

use Jane\Component\JsonSchemaRuntime\Reference;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SupermodelIoLogisticsExpressCreateShipmentRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressCreateShipmentRequest::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressCreateShipmentRequest::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressCreateShipmentRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('getRateEstimates', $data) && \is_int($data['getRateEstimates'])) {
            $data['getRateEstimates'] = (bool) $data['getRateEstimates'];
        }
        if (\array_key_exists('requestOndemandDeliveryURL', $data) && \is_int($data['requestOndemandDeliveryURL'])) {
            $data['requestOndemandDeliveryURL'] = (bool) $data['requestOndemandDeliveryURL'];
        }
        if (\array_key_exists('getTransliteratedResponse', $data) && \is_int($data['getTransliteratedResponse'])) {
            $data['getTransliteratedResponse'] = (bool) $data['getTransliteratedResponse'];
        }
        if (\array_key_exists('plannedShippingDateAndTime', $data) && null !== $data['plannedShippingDateAndTime']) {
            $object->setPlannedShippingDateAndTime($data['plannedShippingDateAndTime']);
        } elseif (\array_key_exists('plannedShippingDateAndTime', $data) && null === $data['plannedShippingDateAndTime']) {
            $object->setPlannedShippingDateAndTime(null);
        }
        if (\array_key_exists('pickup', $data) && null !== $data['pickup']) {
            $object->setPickup($this->denormalizer->denormalize($data['pickup'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class, 'json', $context));
        } elseif (\array_key_exists('pickup', $data) && null === $data['pickup']) {
            $object->setPickup(null);
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
        if (\array_key_exists('getRateEstimates', $data) && null !== $data['getRateEstimates']) {
            $object->setGetRateEstimates($data['getRateEstimates']);
        } elseif (\array_key_exists('getRateEstimates', $data) && null === $data['getRateEstimates']) {
            $object->setGetRateEstimates(null);
        }
        if (\array_key_exists('accounts', $data) && null !== $data['accounts']) {
            $values = [];
            foreach ($data['accounts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressAccount::class, 'json', $context);
            }
            $object->setAccounts($values);
        } elseif (\array_key_exists('accounts', $data) && null === $data['accounts']) {
            $object->setAccounts(null);
        }
        if (\array_key_exists('valueAddedServices', $data) && null !== $data['valueAddedServices']) {
            $values_1 = [];
            foreach ($data['valueAddedServices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressValueAddedServices::class, 'json', $context);
            }
            $object->setValueAddedServices($values_1);
        } elseif (\array_key_exists('valueAddedServices', $data) && null === $data['valueAddedServices']) {
            $object->setValueAddedServices(null);
        }
        if (\array_key_exists('outputImageProperties', $data) && null !== $data['outputImageProperties']) {
            $object->setOutputImageProperties($this->denormalizer->denormalize($data['outputImageProperties'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class, 'json', $context));
        } elseif (\array_key_exists('outputImageProperties', $data) && null === $data['outputImageProperties']) {
            $object->setOutputImageProperties(null);
        }
        if (\array_key_exists('customerReferences', $data) && null !== $data['customerReferences']) {
            $values_2 = [];
            foreach ($data['customerReferences'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressReference::class, 'json', $context);
            }
            $object->setCustomerReferences($values_2);
        } elseif (\array_key_exists('customerReferences', $data) && null === $data['customerReferences']) {
            $object->setCustomerReferences(null);
        }
        if (\array_key_exists('identifiers', $data) && null !== $data['identifiers']) {
            $values_3 = [];
            foreach ($data['identifiers'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressIdentifier::class, 'json', $context);
            }
            $object->setIdentifiers($values_3);
        } elseif (\array_key_exists('identifiers', $data) && null === $data['identifiers']) {
            $object->setIdentifiers(null);
        }
        if (\array_key_exists('customerDetails', $data) && null !== $data['customerDetails']) {
            $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails::class, 'json', $context));
        } elseif (\array_key_exists('customerDetails', $data) && null === $data['customerDetails']) {
            $object->setCustomerDetails(null);
        }
        if (\array_key_exists('content', $data) && null !== $data['content']) {
            $object->setContent($this->denormalizer->denormalize($data['content'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class, 'json', $context));
        } elseif (\array_key_exists('content', $data) && null === $data['content']) {
            $object->setContent(null);
        }
        if (\array_key_exists('documentImages', $data) && null !== $data['documentImages']) {
            $values_4 = [];
            foreach ($data['documentImages'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressDocumentImagesItem::class, 'json', $context);
            }
            $object->setDocumentImages($values_4);
        } elseif (\array_key_exists('documentImages', $data) && null === $data['documentImages']) {
            $object->setDocumentImages(null);
        }
        if (\array_key_exists('onDemandDelivery', $data) && null !== $data['onDemandDelivery']) {
            $object->setOnDemandDelivery($this->denormalizer->denormalize($data['onDemandDelivery'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class, 'json', $context));
        } elseif (\array_key_exists('onDemandDelivery', $data) && null === $data['onDemandDelivery']) {
            $object->setOnDemandDelivery(null);
        }
        if (\array_key_exists('requestOndemandDeliveryURL', $data) && null !== $data['requestOndemandDeliveryURL']) {
            $object->setRequestOndemandDeliveryURL($data['requestOndemandDeliveryURL']);
        } elseif (\array_key_exists('requestOndemandDeliveryURL', $data) && null === $data['requestOndemandDeliveryURL']) {
            $object->setRequestOndemandDeliveryURL(null);
        }
        if (\array_key_exists('shipmentNotification', $data) && null !== $data['shipmentNotification']) {
            $values_5 = [];
            foreach ($data['shipmentNotification'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem::class, 'json', $context);
            }
            $object->setShipmentNotification($values_5);
        } elseif (\array_key_exists('shipmentNotification', $data) && null === $data['shipmentNotification']) {
            $object->setShipmentNotification(null);
        }
        if (\array_key_exists('prepaidCharges', $data) && null !== $data['prepaidCharges']) {
            $values_6 = [];
            foreach ($data['prepaidCharges'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItem::class, 'json', $context);
            }
            $object->setPrepaidCharges($values_6);
        } elseif (\array_key_exists('prepaidCharges', $data) && null === $data['prepaidCharges']) {
            $object->setPrepaidCharges(null);
        }
        if (\array_key_exists('getTransliteratedResponse', $data) && null !== $data['getTransliteratedResponse']) {
            $object->setGetTransliteratedResponse($data['getTransliteratedResponse']);
        } elseif (\array_key_exists('getTransliteratedResponse', $data) && null === $data['getTransliteratedResponse']) {
            $object->setGetTransliteratedResponse(null);
        }
        if (\array_key_exists('estimatedDeliveryDate', $data) && null !== $data['estimatedDeliveryDate']) {
            $object->setEstimatedDeliveryDate($this->denormalizer->denormalize($data['estimatedDeliveryDate'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDate::class, 'json', $context));
        } elseif (\array_key_exists('estimatedDeliveryDate', $data) && null === $data['estimatedDeliveryDate']) {
            $object->setEstimatedDeliveryDate(null);
        }
        if (\array_key_exists('getAdditionalInformation', $data) && null !== $data['getAdditionalInformation']) {
            $values_7 = [];
            foreach ($data['getAdditionalInformation'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItem::class, 'json', $context);
            }
            $object->setGetAdditionalInformation($values_7);
        } elseif (\array_key_exists('getAdditionalInformation', $data) && null === $data['getAdditionalInformation']) {
            $object->setGetAdditionalInformation(null);
        }
        if (\array_key_exists('parentShipment', $data) && null !== $data['parentShipment']) {
            $object->setParentShipment($this->denormalizer->denormalize($data['parentShipment'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment::class, 'json', $context));
        } elseif (\array_key_exists('parentShipment', $data) && null === $data['parentShipment']) {
            $object->setParentShipment(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['plannedShippingDateAndTime'] = $data->getPlannedShippingDateAndTime();
        $dataArray['pickup'] = null === $data->getPickup() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPickup(), 'json', $context));
        $dataArray['productCode'] = $data->getProductCode();
        if ($data->isInitialized('localProductCode') && null !== $data->getLocalProductCode()) {
            $dataArray['localProductCode'] = $data->getLocalProductCode();
        }
        if ($data->isInitialized('getRateEstimates') && null !== $data->getGetRateEstimates()) {
            $dataArray['getRateEstimates'] = $data->getGetRateEstimates();
        }
        $values = [];
        foreach ($data->getAccounts() as $value) {
            $values[] = null === $value ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['accounts'] = $values;
        if ($data->isInitialized('valueAddedServices') && null !== $data->getValueAddedServices()) {
            $values_1 = [];
            foreach ($data->getValueAddedServices() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['valueAddedServices'] = $values_1;
        }
        if ($data->isInitialized('outputImageProperties') && null !== $data->getOutputImageProperties()) {
            $dataArray['outputImageProperties'] = null === $data->getOutputImageProperties() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getOutputImageProperties(), 'json', $context));
        }
        if ($data->isInitialized('customerReferences') && null !== $data->getCustomerReferences()) {
            $values_2 = [];
            foreach ($data->getCustomerReferences() as $value_2) {
                $values_2[] = null === $value_2 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['customerReferences'] = $values_2;
        }
        if ($data->isInitialized('identifiers') && null !== $data->getIdentifiers()) {
            $values_3 = [];
            foreach ($data->getIdentifiers() as $value_3) {
                $values_3[] = null === $value_3 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['identifiers'] = $values_3;
        }
        $dataArray['customerDetails'] = null === $data->getCustomerDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getCustomerDetails(), 'json', $context));
        $dataArray['content'] = null === $data->getContent() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getContent(), 'json', $context));
        if ($data->isInitialized('documentImages') && null !== $data->getDocumentImages()) {
            $values_4 = [];
            foreach ($data->getDocumentImages() as $value_4) {
                $values_4[] = null === $value_4 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['documentImages'] = $values_4;
        }
        if ($data->isInitialized('onDemandDelivery') && null !== $data->getOnDemandDelivery()) {
            $dataArray['onDemandDelivery'] = null === $data->getOnDemandDelivery() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getOnDemandDelivery(), 'json', $context));
        }
        if ($data->isInitialized('requestOndemandDeliveryURL') && null !== $data->getRequestOndemandDeliveryURL()) {
            $dataArray['requestOndemandDeliveryURL'] = $data->getRequestOndemandDeliveryURL();
        }
        if ($data->isInitialized('shipmentNotification') && null !== $data->getShipmentNotification()) {
            $values_5 = [];
            foreach ($data->getShipmentNotification() as $value_5) {
                $values_5[] = null === $value_5 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['shipmentNotification'] = $values_5;
        }
        if ($data->isInitialized('prepaidCharges') && null !== $data->getPrepaidCharges()) {
            $values_6 = [];
            foreach ($data->getPrepaidCharges() as $value_6) {
                $values_6[] = null === $value_6 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
            }
            $dataArray['prepaidCharges'] = $values_6;
        }
        if ($data->isInitialized('getTransliteratedResponse') && null !== $data->getGetTransliteratedResponse()) {
            $dataArray['getTransliteratedResponse'] = $data->getGetTransliteratedResponse();
        }
        if ($data->isInitialized('estimatedDeliveryDate') && null !== $data->getEstimatedDeliveryDate()) {
            $dataArray['estimatedDeliveryDate'] = null === $data->getEstimatedDeliveryDate() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getEstimatedDeliveryDate(), 'json', $context));
        }
        if ($data->isInitialized('getAdditionalInformation') && null !== $data->getGetAdditionalInformation()) {
            $values_7 = [];
            foreach ($data->getGetAdditionalInformation() as $value_7) {
                $values_7[] = null === $value_7 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_7, 'json', $context));
            }
            $dataArray['getAdditionalInformation'] = $values_7;
        }
        if ($data->isInitialized('parentShipment') && null !== $data->getParentShipment()) {
            $dataArray['parentShipment'] = null === $data->getParentShipment() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getParentShipment(), 'json', $context));
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressCreateShipmentRequest::class => false];
    }
}
