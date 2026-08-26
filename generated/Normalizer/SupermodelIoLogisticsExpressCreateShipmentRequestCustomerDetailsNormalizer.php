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

class SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('shipperDetails', $data) && null !== $data['shipperDetails']) {
            $object->setShipperDetails($this->denormalizer->denormalize($data['shipperDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetails::class, 'json', $context));
        } elseif (\array_key_exists('shipperDetails', $data) && null === $data['shipperDetails']) {
            $object->setShipperDetails(null);
        }
        if (\array_key_exists('receiverDetails', $data) && null !== $data['receiverDetails']) {
            $object->setReceiverDetails($this->denormalizer->denormalize($data['receiverDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails::class, 'json', $context));
        } elseif (\array_key_exists('receiverDetails', $data) && null === $data['receiverDetails']) {
            $object->setReceiverDetails(null);
        }
        if (\array_key_exists('buyerDetails', $data) && null !== $data['buyerDetails']) {
            $object->setBuyerDetails($this->denormalizer->denormalize($data['buyerDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails::class, 'json', $context));
        } elseif (\array_key_exists('buyerDetails', $data) && null === $data['buyerDetails']) {
            $object->setBuyerDetails(null);
        }
        if (\array_key_exists('importerDetails', $data) && null !== $data['importerDetails']) {
            $object->setImporterDetails($this->denormalizer->denormalize($data['importerDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails::class, 'json', $context));
        } elseif (\array_key_exists('importerDetails', $data) && null === $data['importerDetails']) {
            $object->setImporterDetails(null);
        }
        if (\array_key_exists('exporterDetails', $data) && null !== $data['exporterDetails']) {
            $object->setExporterDetails($this->denormalizer->denormalize($data['exporterDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetails::class, 'json', $context));
        } elseif (\array_key_exists('exporterDetails', $data) && null === $data['exporterDetails']) {
            $object->setExporterDetails(null);
        }
        if (\array_key_exists('sellerDetails', $data) && null !== $data['sellerDetails']) {
            $object->setSellerDetails($this->denormalizer->denormalize($data['sellerDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails::class, 'json', $context));
        } elseif (\array_key_exists('sellerDetails', $data) && null === $data['sellerDetails']) {
            $object->setSellerDetails(null);
        }
        if (\array_key_exists('payerDetails', $data) && null !== $data['payerDetails']) {
            $object->setPayerDetails($this->denormalizer->denormalize($data['payerDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails::class, 'json', $context));
        } elseif (\array_key_exists('payerDetails', $data) && null === $data['payerDetails']) {
            $object->setPayerDetails(null);
        }
        if (\array_key_exists('ultimateConsigneeDetails', $data) && null !== $data['ultimateConsigneeDetails']) {
            $object->setUltimateConsigneeDetails($this->denormalizer->denormalize($data['ultimateConsigneeDetails'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails::class, 'json', $context));
        } elseif (\array_key_exists('ultimateConsigneeDetails', $data) && null === $data['ultimateConsigneeDetails']) {
            $object->setUltimateConsigneeDetails(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['shipperDetails'] = null === $data->getShipperDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getShipperDetails(), 'json', $context));
        $dataArray['receiverDetails'] = null === $data->getReceiverDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getReceiverDetails(), 'json', $context));
        if ($data->isInitialized('buyerDetails') && null !== $data->getBuyerDetails()) {
            $dataArray['buyerDetails'] = null === $data->getBuyerDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getBuyerDetails(), 'json', $context));
        }
        if ($data->isInitialized('importerDetails') && null !== $data->getImporterDetails()) {
            $dataArray['importerDetails'] = null === $data->getImporterDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getImporterDetails(), 'json', $context));
        }
        if ($data->isInitialized('exporterDetails') && null !== $data->getExporterDetails()) {
            $dataArray['exporterDetails'] = null === $data->getExporterDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getExporterDetails(), 'json', $context));
        }
        if ($data->isInitialized('sellerDetails') && null !== $data->getSellerDetails()) {
            $dataArray['sellerDetails'] = null === $data->getSellerDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getSellerDetails(), 'json', $context));
        }
        if ($data->isInitialized('payerDetails') && null !== $data->getPayerDetails()) {
            $dataArray['payerDetails'] = null === $data->getPayerDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getPayerDetails(), 'json', $context));
        }
        if ($data->isInitialized('ultimateConsigneeDetails') && null !== $data->getUltimateConsigneeDetails()) {
            $dataArray['ultimateConsigneeDetails'] = null === $data->getUltimateConsigneeDetails() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getUltimateConsigneeDetails(), 'json', $context));
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails::class => false];
    }
}
