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

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sellerDetails', $data) && null !== $data['sellerDetails']) {
            $object->setSellerDetails($this->denormalizer->denormalize($data['sellerDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails', 'json', $context));
        } elseif (\array_key_exists('sellerDetails', $data) && null === $data['sellerDetails']) {
            $object->setSellerDetails(null);
        }
        if (\array_key_exists('buyerDetails', $data) && null !== $data['buyerDetails']) {
            $object->setBuyerDetails($this->denormalizer->denormalize($data['buyerDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails', 'json', $context));
        } elseif (\array_key_exists('buyerDetails', $data) && null === $data['buyerDetails']) {
            $object->setBuyerDetails(null);
        }
        if (\array_key_exists('importerDetails', $data) && null !== $data['importerDetails']) {
            $object->setImporterDetails($this->denormalizer->denormalize($data['importerDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails', 'json', $context));
        } elseif (\array_key_exists('importerDetails', $data) && null === $data['importerDetails']) {
            $object->setImporterDetails(null);
        }
        if (\array_key_exists('exporterDetails', $data) && null !== $data['exporterDetails']) {
            $object->setExporterDetails($this->denormalizer->denormalize($data['exporterDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails', 'json', $context));
        } elseif (\array_key_exists('exporterDetails', $data) && null === $data['exporterDetails']) {
            $object->setExporterDetails(null);
        }
        if (\array_key_exists('ultimateConsigneeDetails', $data) && null !== $data['ultimateConsigneeDetails']) {
            $object->setUltimateConsigneeDetails($this->denormalizer->denormalize($data['ultimateConsigneeDetails'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails', 'json', $context));
        } elseif (\array_key_exists('ultimateConsigneeDetails', $data) && null === $data['ultimateConsigneeDetails']) {
            $object->setUltimateConsigneeDetails(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('sellerDetails') && null !== $object->getSellerDetails()) {
            $data['sellerDetails'] = $this->normalizer->normalize($object->getSellerDetails(), 'json', $context);
        }
        if ($object->isInitialized('buyerDetails') && null !== $object->getBuyerDetails()) {
            $data['buyerDetails'] = $this->normalizer->normalize($object->getBuyerDetails(), 'json', $context);
        }
        if ($object->isInitialized('importerDetails') && null !== $object->getImporterDetails()) {
            $data['importerDetails'] = $this->normalizer->normalize($object->getImporterDetails(), 'json', $context);
        }
        if ($object->isInitialized('exporterDetails') && null !== $object->getExporterDetails()) {
            $data['exporterDetails'] = $this->normalizer->normalize($object->getExporterDetails(), 'json', $context);
        }
        if ($object->isInitialized('ultimateConsigneeDetails') && null !== $object->getUltimateConsigneeDetails()) {
            $data['ultimateConsigneeDetails'] = $this->normalizer->normalize($object->getUltimateConsigneeDetails(), 'json', $context);
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails' => false];
    }
}
