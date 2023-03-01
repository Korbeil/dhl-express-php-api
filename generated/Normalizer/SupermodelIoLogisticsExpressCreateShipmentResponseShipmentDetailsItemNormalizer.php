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

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
            $object->setCustomerDetails($this->denormalizer->denormalize($data['customerDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails', 'json', $context));
        } elseif (\array_key_exists('customerDetails', $data) && null === $data['customerDetails']) {
            $object->setCustomerDetails(null);
        }
        if (\array_key_exists('originServiceArea', $data) && null !== $data['originServiceArea']) {
            $object->setOriginServiceArea($this->denormalizer->denormalize($data['originServiceArea'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea', 'json', $context));
        } elseif (\array_key_exists('originServiceArea', $data) && null === $data['originServiceArea']) {
            $object->setOriginServiceArea(null);
        }
        if (\array_key_exists('destinationServiceArea', $data) && null !== $data['destinationServiceArea']) {
            $object->setDestinationServiceArea($this->denormalizer->denormalize($data['destinationServiceArea'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea', 'json', $context));
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
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItem', 'json', $context);
            }
            $object->setValueAddedServices($values_1);
        } elseif (\array_key_exists('valueAddedServices', $data) && null === $data['valueAddedServices']) {
            $object->setValueAddedServices(null);
        }
        if (\array_key_exists('pickupDetails', $data) && null !== $data['pickupDetails']) {
            $object->setPickupDetails($this->denormalizer->denormalize($data['pickupDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails', 'json', $context));
        } elseif (\array_key_exists('pickupDetails', $data) && null === $data['pickupDetails']) {
            $object->setPickupDetails(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getServiceHandlingFeatureCodes()) {
            $values = [];
            foreach ($object->getServiceHandlingFeatureCodes() as $value) {
                $values[] = $value;
            }
            $data['serviceHandlingFeatureCodes'] = $values;
        }
        if (null !== $object->getVolumetricWeight()) {
            $data['volumetricWeight'] = $object->getVolumetricWeight();
        }
        if (null !== $object->getBillingCode()) {
            $data['billingCode'] = $object->getBillingCode();
        }
        if (null !== $object->getServiceContentCode()) {
            $data['serviceContentCode'] = $object->getServiceContentCode();
        }
        if (null !== $object->getCustomerDetails()) {
            $data['customerDetails'] = $this->normalizer->normalize($object->getCustomerDetails(), 'json', $context);
        }
        if (null !== $object->getOriginServiceArea()) {
            $data['originServiceArea'] = $this->normalizer->normalize($object->getOriginServiceArea(), 'json', $context);
        }
        if (null !== $object->getDestinationServiceArea()) {
            $data['destinationServiceArea'] = $this->normalizer->normalize($object->getDestinationServiceArea(), 'json', $context);
        }
        if (null !== $object->getDhlRoutingCode()) {
            $data['dhlRoutingCode'] = $object->getDhlRoutingCode();
        }
        if (null !== $object->getDhlRoutingDataId()) {
            $data['dhlRoutingDataId'] = $object->getDhlRoutingDataId();
        }
        if (null !== $object->getDeliveryDateCode()) {
            $data['deliveryDateCode'] = $object->getDeliveryDateCode();
        }
        if (null !== $object->getDeliveryTimeCode()) {
            $data['deliveryTimeCode'] = $object->getDeliveryTimeCode();
        }
        if (null !== $object->getProductShortName()) {
            $data['productShortName'] = $object->getProductShortName();
        }
        if (null !== $object->getValueAddedServices()) {
            $values_1 = [];
            foreach ($object->getValueAddedServices() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['valueAddedServices'] = $values_1;
        }
        if (null !== $object->getPickupDetails()) {
            $data['pickupDetails'] = $this->normalizer->normalize($object->getPickupDetails(), 'json', $context);
        }

        return $data;
    }
}
