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

class SupermodelIoLogisticsExpressCreateShipmentRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequest' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequest' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('plannedShippingDateAndTime', $data) && null !== $data['plannedShippingDateAndTime']) {
            $object->setPlannedShippingDateAndTime($data['plannedShippingDateAndTime']);
        } elseif (\array_key_exists('plannedShippingDateAndTime', $data) && null === $data['plannedShippingDateAndTime']) {
            $object->setPlannedShippingDateAndTime(null);
        }
        if (\array_key_exists('pickup', $data) && null !== $data['pickup']) {
            $object->setPickup($this->denormalizer->denormalize($data['pickup'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestPickup', 'json', $context));
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
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressAccount', 'json', $context);
            }
            $object->setAccounts($values);
        } elseif (\array_key_exists('accounts', $data) && null === $data['accounts']) {
            $object->setAccounts(null);
        }
        if (\array_key_exists('valueAddedServices', $data) && null !== $data['valueAddedServices']) {
            $values_1 = [];
            foreach ($data['valueAddedServices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressValueAddedServices', 'json', $context);
            }
            $object->setValueAddedServices($values_1);
        } elseif (\array_key_exists('valueAddedServices', $data) && null === $data['valueAddedServices']) {
            $object->setValueAddedServices(null);
        }
        if (\array_key_exists('outputImageProperties', $data) && null !== $data['outputImageProperties']) {
            $object->setOutputImageProperties($this->denormalizer->denormalize($data['outputImageProperties'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties', 'json', $context));
        } elseif (\array_key_exists('outputImageProperties', $data) && null === $data['outputImageProperties']) {
            $object->setOutputImageProperties(null);
        }
        if (\array_key_exists('customerReferences', $data) && null !== $data['customerReferences']) {
            $values_2 = [];
            foreach ($data['customerReferences'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressReference', 'json', $context);
            }
            $object->setCustomerReferences($values_2);
        } elseif (\array_key_exists('customerReferences', $data) && null === $data['customerReferences']) {
            $object->setCustomerReferences(null);
        }
        if (\array_key_exists('identifiers', $data) && null !== $data['identifiers']) {
            $values_3 = [];
            foreach ($data['identifiers'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressIdentifier', 'json', $context);
            }
            $object->setIdentifiers($values_3);
        } elseif (\array_key_exists('identifiers', $data) && null === $data['identifiers']) {
            $object->setIdentifiers(null);
        }
        if (\array_key_exists('customerDetails', $data) && null !== $data['customerDetails']) {
            $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails', 'json', $context));
        } elseif (\array_key_exists('customerDetails', $data) && null === $data['customerDetails']) {
            $object->setCustomerDetails(null);
        }
        if (\array_key_exists('content', $data) && null !== $data['content']) {
            $object->setContent($this->denormalizer->denormalize($data['content'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContent', 'json', $context));
        } elseif (\array_key_exists('content', $data) && null === $data['content']) {
            $object->setContent(null);
        }
        if (\array_key_exists('documentImages', $data) && null !== $data['documentImages']) {
            $values_4 = [];
            foreach ($data['documentImages'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressDocumentImagesItem', 'json', $context);
            }
            $object->setDocumentImages($values_4);
        } elseif (\array_key_exists('documentImages', $data) && null === $data['documentImages']) {
            $object->setDocumentImages(null);
        }
        if (\array_key_exists('onDemandDelivery', $data) && null !== $data['onDemandDelivery']) {
            $object->setOnDemandDelivery($this->denormalizer->denormalize($data['onDemandDelivery'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery', 'json', $context));
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
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem', 'json', $context);
            }
            $object->setShipmentNotification($values_5);
        } elseif (\array_key_exists('shipmentNotification', $data) && null === $data['shipmentNotification']) {
            $object->setShipmentNotification(null);
        }
        if (\array_key_exists('prepaidCharges', $data) && null !== $data['prepaidCharges']) {
            $values_6 = [];
            foreach ($data['prepaidCharges'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItem', 'json', $context);
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
            $object->setEstimatedDeliveryDate($this->denormalizer->denormalize($data['estimatedDeliveryDate'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDate', 'json', $context));
        } elseif (\array_key_exists('estimatedDeliveryDate', $data) && null === $data['estimatedDeliveryDate']) {
            $object->setEstimatedDeliveryDate(null);
        }
        if (\array_key_exists('getAdditionalInformation', $data) && null !== $data['getAdditionalInformation']) {
            $values_7 = [];
            foreach ($data['getAdditionalInformation'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItem', 'json', $context);
            }
            $object->setGetAdditionalInformation($values_7);
        } elseif (\array_key_exists('getAdditionalInformation', $data) && null === $data['getAdditionalInformation']) {
            $object->setGetAdditionalInformation(null);
        }
        if (\array_key_exists('parentShipment', $data) && null !== $data['parentShipment']) {
            $object->setParentShipment($this->denormalizer->denormalize($data['parentShipment'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment', 'json', $context));
        } elseif (\array_key_exists('parentShipment', $data) && null === $data['parentShipment']) {
            $object->setParentShipment(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['plannedShippingDateAndTime'] = $object->getPlannedShippingDateAndTime();
        $data['pickup'] = $this->normalizer->normalize($object->getPickup(), 'json', $context);
        $data['productCode'] = $object->getProductCode();
        if ($object->isInitialized('localProductCode') && null !== $object->getLocalProductCode()) {
            $data['localProductCode'] = $object->getLocalProductCode();
        }
        if ($object->isInitialized('getRateEstimates') && null !== $object->getGetRateEstimates()) {
            $data['getRateEstimates'] = $object->getGetRateEstimates();
        }
        $values = [];
        foreach ($object->getAccounts() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['accounts'] = $values;
        if ($object->isInitialized('valueAddedServices') && null !== $object->getValueAddedServices()) {
            $values_1 = [];
            foreach ($object->getValueAddedServices() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['valueAddedServices'] = $values_1;
        }
        if ($object->isInitialized('outputImageProperties') && null !== $object->getOutputImageProperties()) {
            $data['outputImageProperties'] = $this->normalizer->normalize($object->getOutputImageProperties(), 'json', $context);
        }
        if ($object->isInitialized('customerReferences') && null !== $object->getCustomerReferences()) {
            $values_2 = [];
            foreach ($object->getCustomerReferences() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['customerReferences'] = $values_2;
        }
        if ($object->isInitialized('identifiers') && null !== $object->getIdentifiers()) {
            $values_3 = [];
            foreach ($object->getIdentifiers() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['identifiers'] = $values_3;
        }
        $data['customerDetails'] = $this->normalizer->normalize($object->getCustomerDetails(), 'json', $context);
        $data['content'] = $this->normalizer->normalize($object->getContent(), 'json', $context);
        if ($object->isInitialized('documentImages') && null !== $object->getDocumentImages()) {
            $values_4 = [];
            foreach ($object->getDocumentImages() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['documentImages'] = $values_4;
        }
        if ($object->isInitialized('onDemandDelivery') && null !== $object->getOnDemandDelivery()) {
            $data['onDemandDelivery'] = $this->normalizer->normalize($object->getOnDemandDelivery(), 'json', $context);
        }
        if ($object->isInitialized('requestOndemandDeliveryURL') && null !== $object->getRequestOndemandDeliveryURL()) {
            $data['requestOndemandDeliveryURL'] = $object->getRequestOndemandDeliveryURL();
        }
        if ($object->isInitialized('shipmentNotification') && null !== $object->getShipmentNotification()) {
            $values_5 = [];
            foreach ($object->getShipmentNotification() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['shipmentNotification'] = $values_5;
        }
        if ($object->isInitialized('prepaidCharges') && null !== $object->getPrepaidCharges()) {
            $values_6 = [];
            foreach ($object->getPrepaidCharges() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['prepaidCharges'] = $values_6;
        }
        if ($object->isInitialized('getTransliteratedResponse') && null !== $object->getGetTransliteratedResponse()) {
            $data['getTransliteratedResponse'] = $object->getGetTransliteratedResponse();
        }
        if ($object->isInitialized('estimatedDeliveryDate') && null !== $object->getEstimatedDeliveryDate()) {
            $data['estimatedDeliveryDate'] = $this->normalizer->normalize($object->getEstimatedDeliveryDate(), 'json', $context);
        }
        if ($object->isInitialized('getAdditionalInformation') && null !== $object->getGetAdditionalInformation()) {
            $values_7 = [];
            foreach ($object->getGetAdditionalInformation() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['getAdditionalInformation'] = $values_7;
        }
        if ($object->isInitialized('parentShipment') && null !== $object->getParentShipment()) {
            $data['parentShipment'] = $this->normalizer->normalize($object->getParentShipment(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequest' => false];
    }
}
