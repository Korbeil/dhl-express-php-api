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

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('volumetricWeight', $data) && \is_int($data['volumetricWeight'])) {
            $data['volumetricWeight'] = (float) $data['volumetricWeight'];
        }
        if (\array_key_exists('serviceHandlingFeatureCodes', $data) && null !== $data['serviceHandlingFeatureCodes']) {
            $values = [];
            foreach ($data['serviceHandlingFeatureCodes'] as $value) {
                $values[] = $value;
            }
            $object->setServiceHandlingFeatureCodes($values);
        } elseif (\array_key_exists('serviceHandlingFeatureCodes', $data) && null === $data['serviceHandlingFeatureCodes']) {
            $object->setServiceHandlingFeatureCodes(null);
        }
        if (\array_key_exists('volumetricWeight', $data) && null !== $data['volumetricWeight']) {
            $object->setVolumetricWeight($data['volumetricWeight']);
        } elseif (\array_key_exists('volumetricWeight', $data) && null === $data['volumetricWeight']) {
            $object->setVolumetricWeight(null);
        }
        if (\array_key_exists('billingCode', $data) && null !== $data['billingCode']) {
            $object->setBillingCode($data['billingCode']);
        } elseif (\array_key_exists('billingCode', $data) && null === $data['billingCode']) {
            $object->setBillingCode(null);
        }
        if (\array_key_exists('serviceContentCode', $data) && null !== $data['serviceContentCode']) {
            $object->setServiceContentCode($data['serviceContentCode']);
        } elseif (\array_key_exists('serviceContentCode', $data) && null === $data['serviceContentCode']) {
            $object->setServiceContentCode(null);
        }
        if (\array_key_exists('customerDetails', $data) && null !== $data['customerDetails']) {
            $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails::class, 'json', $context));
        } elseif (\array_key_exists('customerDetails', $data) && null === $data['customerDetails']) {
            $object->setCustomerDetails(null);
        }
        if (\array_key_exists('originServiceArea', $data) && null !== $data['originServiceArea']) {
            $object->setOriginServiceArea($this->denormalizer->denormalize($data['originServiceArea'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea::class, 'json', $context));
        } elseif (\array_key_exists('originServiceArea', $data) && null === $data['originServiceArea']) {
            $object->setOriginServiceArea(null);
        }
        if (\array_key_exists('destinationServiceArea', $data) && null !== $data['destinationServiceArea']) {
            $object->setDestinationServiceArea($this->denormalizer->denormalize($data['destinationServiceArea'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea::class, 'json', $context));
        } elseif (\array_key_exists('destinationServiceArea', $data) && null === $data['destinationServiceArea']) {
            $object->setDestinationServiceArea(null);
        }
        if (\array_key_exists('dhlRoutingCode', $data) && null !== $data['dhlRoutingCode']) {
            $object->setDhlRoutingCode($data['dhlRoutingCode']);
        } elseif (\array_key_exists('dhlRoutingCode', $data) && null === $data['dhlRoutingCode']) {
            $object->setDhlRoutingCode(null);
        }
        if (\array_key_exists('dhlRoutingDataId', $data) && null !== $data['dhlRoutingDataId']) {
            $object->setDhlRoutingDataId($data['dhlRoutingDataId']);
        } elseif (\array_key_exists('dhlRoutingDataId', $data) && null === $data['dhlRoutingDataId']) {
            $object->setDhlRoutingDataId(null);
        }
        if (\array_key_exists('deliveryDateCode', $data) && null !== $data['deliveryDateCode']) {
            $object->setDeliveryDateCode($data['deliveryDateCode']);
        } elseif (\array_key_exists('deliveryDateCode', $data) && null === $data['deliveryDateCode']) {
            $object->setDeliveryDateCode(null);
        }
        if (\array_key_exists('deliveryTimeCode', $data) && null !== $data['deliveryTimeCode']) {
            $object->setDeliveryTimeCode($data['deliveryTimeCode']);
        } elseif (\array_key_exists('deliveryTimeCode', $data) && null === $data['deliveryTimeCode']) {
            $object->setDeliveryTimeCode(null);
        }
        if (\array_key_exists('productShortName', $data) && null !== $data['productShortName']) {
            $object->setProductShortName($data['productShortName']);
        } elseif (\array_key_exists('productShortName', $data) && null === $data['productShortName']) {
            $object->setProductShortName(null);
        }
        if (\array_key_exists('valueAddedServices', $data) && null !== $data['valueAddedServices']) {
            $values_1 = [];
            foreach ($data['valueAddedServices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItem::class, 'json', $context);
            }
            $object->setValueAddedServices($values_1);
        } elseif (\array_key_exists('valueAddedServices', $data) && null === $data['valueAddedServices']) {
            $object->setValueAddedServices(null);
        }
        if (\array_key_exists('pickupDetails', $data) && null !== $data['pickupDetails']) {
            $object->setPickupDetails($this->denormalizer->denormalize($data['pickupDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails::class, 'json', $context));
        } elseif (\array_key_exists('pickupDetails', $data) && null === $data['pickupDetails']) {
            $object->setPickupDetails(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('serviceHandlingFeatureCodes') && null !== $data->getServiceHandlingFeatureCodes()) {
            $values = [];
            foreach ($data->getServiceHandlingFeatureCodes() as $value) {
                $values[] = $value;
            }
            $dataArray['serviceHandlingFeatureCodes'] = $values;
        }
        if ($data->isInitialized('volumetricWeight') && null !== $data->getVolumetricWeight()) {
            $dataArray['volumetricWeight'] = $data->getVolumetricWeight();
        }
        if ($data->isInitialized('billingCode') && null !== $data->getBillingCode()) {
            $dataArray['billingCode'] = $data->getBillingCode();
        }
        if ($data->isInitialized('serviceContentCode') && null !== $data->getServiceContentCode()) {
            $dataArray['serviceContentCode'] = $data->getServiceContentCode();
        }
        if ($data->isInitialized('customerDetails') && null !== $data->getCustomerDetails()) {
            $dataArray['customerDetails'] = null === $data->getCustomerDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getCustomerDetails(), 'json', $context));
        }
        if ($data->isInitialized('originServiceArea') && null !== $data->getOriginServiceArea()) {
            $dataArray['originServiceArea'] = null === $data->getOriginServiceArea() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getOriginServiceArea(), 'json', $context));
        }
        if ($data->isInitialized('destinationServiceArea') && null !== $data->getDestinationServiceArea()) {
            $dataArray['destinationServiceArea'] = null === $data->getDestinationServiceArea() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getDestinationServiceArea(), 'json', $context));
        }
        if ($data->isInitialized('dhlRoutingCode') && null !== $data->getDhlRoutingCode()) {
            $dataArray['dhlRoutingCode'] = $data->getDhlRoutingCode();
        }
        if ($data->isInitialized('dhlRoutingDataId') && null !== $data->getDhlRoutingDataId()) {
            $dataArray['dhlRoutingDataId'] = $data->getDhlRoutingDataId();
        }
        if ($data->isInitialized('deliveryDateCode') && null !== $data->getDeliveryDateCode()) {
            $dataArray['deliveryDateCode'] = $data->getDeliveryDateCode();
        }
        if ($data->isInitialized('deliveryTimeCode') && null !== $data->getDeliveryTimeCode()) {
            $dataArray['deliveryTimeCode'] = $data->getDeliveryTimeCode();
        }
        if ($data->isInitialized('productShortName') && null !== $data->getProductShortName()) {
            $dataArray['productShortName'] = $data->getProductShortName();
        }
        if ($data->isInitialized('valueAddedServices') && null !== $data->getValueAddedServices()) {
            $values_1 = [];
            foreach ($data->getValueAddedServices() as $value_1) {
                $values_1[] = null === $value_1 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['valueAddedServices'] = $values_1;
        }
        if ($data->isInitialized('pickupDetails') && null !== $data->getPickupDetails()) {
            $dataArray['pickupDetails'] = null === $data->getPickupDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPickupDetails(), 'json', $context));
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class => false];
    }
}
