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

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('number', $data) && null !== $data['number']) {
            $object->setNumber($data['number']);
        } elseif (\array_key_exists('number', $data) && null === $data['number']) {
            $object->setNumber(null);
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d', $data['date'])->setTime(0, 0, 0));
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
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItem', 'json', $context);
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
            $object->setIndicativeCustomsValues($this->denormalizer->denormalize($data['indicativeCustomsValues'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues', 'json', $context));
        } elseif (\array_key_exists('indicativeCustomsValues', $data) && null === $data['indicativeCustomsValues']) {
            $object->setIndicativeCustomsValues(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['number'] = $object->getNumber();
        $data['date'] = $object->getDate()->format('Y-m-d');
        if (null !== $object->getSignatureName()) {
            $data['signatureName'] = $object->getSignatureName();
        }
        if (null !== $object->getSignatureTitle()) {
            $data['signatureTitle'] = $object->getSignatureTitle();
        }
        if (null !== $object->getSignatureImage()) {
            $data['signatureImage'] = $object->getSignatureImage();
        }
        if (null !== $object->getInstructions()) {
            $values = [];
            foreach ($object->getInstructions() as $value) {
                $values[] = $value;
            }
            $data['instructions'] = $values;
        }
        if (null !== $object->getCustomerDataTextEntries()) {
            $values_1 = [];
            foreach ($object->getCustomerDataTextEntries() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['customerDataTextEntries'] = $values_1;
        }
        if (null !== $object->getTotalNetWeight()) {
            $data['totalNetWeight'] = $object->getTotalNetWeight();
        }
        if (null !== $object->getTotalGrossWeight()) {
            $data['totalGrossWeight'] = $object->getTotalGrossWeight();
        }
        if (null !== $object->getCustomerReferences()) {
            $values_2 = [];
            foreach ($object->getCustomerReferences() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['customerReferences'] = $values_2;
        }
        if (null !== $object->getTermsOfPayment()) {
            $data['termsOfPayment'] = $object->getTermsOfPayment();
        }
        if (null !== $object->getIndicativeCustomsValues()) {
            $data['indicativeCustomsValues'] = $this->normalizer->normalize($object->getIndicativeCustomsValues(), 'json', $context);
        }

        return $data;
    }
}
