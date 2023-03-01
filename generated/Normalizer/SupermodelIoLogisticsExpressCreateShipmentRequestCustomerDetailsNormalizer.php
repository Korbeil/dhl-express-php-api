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

class SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shipperDetails', $data) && null !== $data['shipperDetails']) {
            $object->setShipperDetails($this->denormalizer->denormalize($data['shipperDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetails', 'json', $context));
        } elseif (\array_key_exists('shipperDetails', $data) && null === $data['shipperDetails']) {
            $object->setShipperDetails(null);
        }
        if (\array_key_exists('receiverDetails', $data) && null !== $data['receiverDetails']) {
            $object->setReceiverDetails($this->denormalizer->denormalize($data['receiverDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails', 'json', $context));
        } elseif (\array_key_exists('receiverDetails', $data) && null === $data['receiverDetails']) {
            $object->setReceiverDetails(null);
        }
        if (\array_key_exists('buyerDetails', $data) && null !== $data['buyerDetails']) {
            $object->setBuyerDetails($this->denormalizer->denormalize($data['buyerDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails', 'json', $context));
        } elseif (\array_key_exists('buyerDetails', $data) && null === $data['buyerDetails']) {
            $object->setBuyerDetails(null);
        }
        if (\array_key_exists('importerDetails', $data) && null !== $data['importerDetails']) {
            $object->setImporterDetails($this->denormalizer->denormalize($data['importerDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails', 'json', $context));
        } elseif (\array_key_exists('importerDetails', $data) && null === $data['importerDetails']) {
            $object->setImporterDetails(null);
        }
        if (\array_key_exists('exporterDetails', $data) && null !== $data['exporterDetails']) {
            $object->setExporterDetails($this->denormalizer->denormalize($data['exporterDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetails', 'json', $context));
        } elseif (\array_key_exists('exporterDetails', $data) && null === $data['exporterDetails']) {
            $object->setExporterDetails(null);
        }
        if (\array_key_exists('sellerDetails', $data) && null !== $data['sellerDetails']) {
            $object->setSellerDetails($this->denormalizer->denormalize($data['sellerDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails', 'json', $context));
        } elseif (\array_key_exists('sellerDetails', $data) && null === $data['sellerDetails']) {
            $object->setSellerDetails(null);
        }
        if (\array_key_exists('payerDetails', $data) && null !== $data['payerDetails']) {
            $object->setPayerDetails($this->denormalizer->denormalize($data['payerDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails', 'json', $context));
        } elseif (\array_key_exists('payerDetails', $data) && null === $data['payerDetails']) {
            $object->setPayerDetails(null);
        }
        if (\array_key_exists('ultimateConsigneeDetails', $data) && null !== $data['ultimateConsigneeDetails']) {
            $object->setUltimateConsigneeDetails($this->denormalizer->denormalize($data['ultimateConsigneeDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails', 'json', $context));
        } elseif (\array_key_exists('ultimateConsigneeDetails', $data) && null === $data['ultimateConsigneeDetails']) {
            $object->setUltimateConsigneeDetails(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['shipperDetails'] = $this->normalizer->normalize($object->getShipperDetails(), 'json', $context);
        $data['receiverDetails'] = $this->normalizer->normalize($object->getReceiverDetails(), 'json', $context);
        if (null !== $object->getBuyerDetails()) {
            $data['buyerDetails'] = $this->normalizer->normalize($object->getBuyerDetails(), 'json', $context);
        }
        if (null !== $object->getImporterDetails()) {
            $data['importerDetails'] = $this->normalizer->normalize($object->getImporterDetails(), 'json', $context);
        }
        if (null !== $object->getExporterDetails()) {
            $data['exporterDetails'] = $this->normalizer->normalize($object->getExporterDetails(), 'json', $context);
        }
        if (null !== $object->getSellerDetails()) {
            $data['sellerDetails'] = $this->normalizer->normalize($object->getSellerDetails(), 'json', $context);
        }
        if (null !== $object->getPayerDetails()) {
            $data['payerDetails'] = $this->normalizer->normalize($object->getPayerDetails(), 'json', $context);
        }
        if (null !== $object->getUltimateConsigneeDetails()) {
            $data['ultimateConsigneeDetails'] = $this->normalizer->normalize($object->getUltimateConsigneeDetails(), 'json', $context);
        }

        return $data;
    }
}
