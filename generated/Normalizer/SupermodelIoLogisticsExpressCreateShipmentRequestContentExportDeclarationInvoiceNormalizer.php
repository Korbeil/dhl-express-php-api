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

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('totalNetWeight', $data) && \is_int($data['totalNetWeight'])) {
            $data['totalNetWeight'] = (float) $data['totalNetWeight'];
        }
        if (\array_key_exists('totalGrossWeight', $data) && \is_int($data['totalGrossWeight'])) {
            $data['totalGrossWeight'] = (float) $data['totalGrossWeight'];
        }
        if (\array_key_exists('number', $data) && null !== $data['number']) {
            $object->setNumber($data['number']);
        } elseif (\array_key_exists('number', $data) && null === $data['number']) {
            $object->setNumber(null);
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['date']);
            if (false === $date) {
                throw new \Korbeil\DHLExpress\Api\Runtime\Normalizer\InvalidDateException($data['date'], 'Y-m-d');
            }
            $object->setDate($date->setTime(0, 0, 0));
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
        }
        if (\array_key_exists('signatureName', $data) && null !== $data['signatureName']) {
            $object->setSignatureName($data['signatureName']);
        } elseif (\array_key_exists('signatureName', $data) && null === $data['signatureName']) {
            $object->setSignatureName(null);
        }
        if (\array_key_exists('signatureTitle', $data) && null !== $data['signatureTitle']) {
            $object->setSignatureTitle($data['signatureTitle']);
        } elseif (\array_key_exists('signatureTitle', $data) && null === $data['signatureTitle']) {
            $object->setSignatureTitle(null);
        }
        if (\array_key_exists('signatureImage', $data) && null !== $data['signatureImage']) {
            $object->setSignatureImage($data['signatureImage']);
        } elseif (\array_key_exists('signatureImage', $data) && null === $data['signatureImage']) {
            $object->setSignatureImage(null);
        }
        if (\array_key_exists('instructions', $data) && null !== $data['instructions']) {
            $values = [];
            foreach ($data['instructions'] as $value) {
                $values[] = $value;
            }
            $object->setInstructions($values);
        } elseif (\array_key_exists('instructions', $data) && null === $data['instructions']) {
            $object->setInstructions(null);
        }
        if (\array_key_exists('customerDataTextEntries', $data) && null !== $data['customerDataTextEntries']) {
            $values_1 = [];
            foreach ($data['customerDataTextEntries'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCustomerDataTextEntries($values_1);
        } elseif (\array_key_exists('customerDataTextEntries', $data) && null === $data['customerDataTextEntries']) {
            $object->setCustomerDataTextEntries(null);
        }
        if (\array_key_exists('totalNetWeight', $data) && null !== $data['totalNetWeight']) {
            $object->setTotalNetWeight($data['totalNetWeight']);
        } elseif (\array_key_exists('totalNetWeight', $data) && null === $data['totalNetWeight']) {
            $object->setTotalNetWeight(null);
        }
        if (\array_key_exists('totalGrossWeight', $data) && null !== $data['totalGrossWeight']) {
            $object->setTotalGrossWeight($data['totalGrossWeight']);
        } elseif (\array_key_exists('totalGrossWeight', $data) && null === $data['totalGrossWeight']) {
            $object->setTotalGrossWeight(null);
        }
        if (\array_key_exists('customerReferences', $data) && null !== $data['customerReferences']) {
            $values_2 = [];
            foreach ($data['customerReferences'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItem::class, 'json', $context);
            }
            $object->setCustomerReferences($values_2);
        } elseif (\array_key_exists('customerReferences', $data) && null === $data['customerReferences']) {
            $object->setCustomerReferences(null);
        }
        if (\array_key_exists('termsOfPayment', $data) && null !== $data['termsOfPayment']) {
            $object->setTermsOfPayment($data['termsOfPayment']);
        } elseif (\array_key_exists('termsOfPayment', $data) && null === $data['termsOfPayment']) {
            $object->setTermsOfPayment(null);
        }
        if (\array_key_exists('indicativeCustomsValues', $data) && null !== $data['indicativeCustomsValues']) {
            $object->setIndicativeCustomsValues($this->denormalizer->denormalize($data['indicativeCustomsValues'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues::class, 'json', $context));
        } elseif (\array_key_exists('indicativeCustomsValues', $data) && null === $data['indicativeCustomsValues']) {
            $object->setIndicativeCustomsValues(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['number'] = $data->getNumber();
        $dataArray['date'] = $data->getDate()->format('Y-m-d');
        if ($data->isInitialized('signatureName') && null !== $data->getSignatureName()) {
            $dataArray['signatureName'] = $data->getSignatureName();
        }
        if ($data->isInitialized('signatureTitle') && null !== $data->getSignatureTitle()) {
            $dataArray['signatureTitle'] = $data->getSignatureTitle();
        }
        if ($data->isInitialized('signatureImage') && null !== $data->getSignatureImage()) {
            $dataArray['signatureImage'] = $data->getSignatureImage();
        }
        if ($data->isInitialized('instructions') && null !== $data->getInstructions()) {
            $values = [];
            foreach ($data->getInstructions() as $value) {
                $values[] = $value;
            }
            $dataArray['instructions'] = $values;
        }
        if ($data->isInitialized('customerDataTextEntries') && null !== $data->getCustomerDataTextEntries()) {
            $values_1 = [];
            foreach ($data->getCustomerDataTextEntries() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['customerDataTextEntries'] = $values_1;
        }
        if ($data->isInitialized('totalNetWeight') && null !== $data->getTotalNetWeight()) {
            $dataArray['totalNetWeight'] = $data->getTotalNetWeight();
        }
        if ($data->isInitialized('totalGrossWeight') && null !== $data->getTotalGrossWeight()) {
            $dataArray['totalGrossWeight'] = $data->getTotalGrossWeight();
        }
        if ($data->isInitialized('customerReferences') && null !== $data->getCustomerReferences()) {
            $values_2 = [];
            foreach ($data->getCustomerReferences() as $value_2) {
                $values_2[] = null === $value_2 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['customerReferences'] = $values_2;
        }
        if ($data->isInitialized('termsOfPayment') && null !== $data->getTermsOfPayment()) {
            $dataArray['termsOfPayment'] = $data->getTermsOfPayment();
        }
        if ($data->isInitialized('indicativeCustomsValues') && null !== $data->getIndicativeCustomsValues()) {
            $dataArray['indicativeCustomsValues'] = null === $data->getIndicativeCustomsValues() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getIndicativeCustomsValues(), 'json', $context));
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class => false];
    }
}
