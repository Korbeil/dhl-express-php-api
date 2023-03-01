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

class SupermodelIoLogisticsExpressExportDeclarationLineItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('number', $data) && null !== $data['number']) {
            $object->setNumber($data['number']);
        } elseif (\array_key_exists('number', $data) && null === $data['number']) {
            $object->setNumber(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('price', $data) && null !== $data['price']) {
            $object->setPrice($data['price']);
        } elseif (\array_key_exists('price', $data) && null === $data['price']) {
            $object->setPrice(null);
        }
        if (\array_key_exists('quantity', $data) && null !== $data['quantity']) {
            $object->setQuantity($this->denormalizer->denormalize($data['quantity'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity', 'json', $context));
        } elseif (\array_key_exists('quantity', $data) && null === $data['quantity']) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('commodityCodes', $data) && null !== $data['commodityCodes']) {
            $values = [];
            foreach ($data['commodityCodes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem', 'json', $context);
            }
            $object->setCommodityCodes($values);
        } elseif (\array_key_exists('commodityCodes', $data) && null === $data['commodityCodes']) {
            $object->setCommodityCodes(null);
        }
        if (\array_key_exists('exportReasonType', $data) && null !== $data['exportReasonType']) {
            $object->setExportReasonType($data['exportReasonType']);
        } elseif (\array_key_exists('exportReasonType', $data) && null === $data['exportReasonType']) {
            $object->setExportReasonType(null);
        }
        if (\array_key_exists('manufacturerCountry', $data) && null !== $data['manufacturerCountry']) {
            $object->setManufacturerCountry($data['manufacturerCountry']);
        } elseif (\array_key_exists('manufacturerCountry', $data) && null === $data['manufacturerCountry']) {
            $object->setManufacturerCountry(null);
        }
        if (\array_key_exists('weight', $data) && null !== $data['weight']) {
            $object->setWeight($this->denormalizer->denormalize($data['weight'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight', 'json', $context));
        } elseif (\array_key_exists('weight', $data) && null === $data['weight']) {
            $object->setWeight(null);
        }
        if (\array_key_exists('isTaxesPaid', $data) && null !== $data['isTaxesPaid']) {
            $object->setIsTaxesPaid($data['isTaxesPaid']);
        } elseif (\array_key_exists('isTaxesPaid', $data) && null === $data['isTaxesPaid']) {
            $object->setIsTaxesPaid(null);
        }
        if (\array_key_exists('customerReferences', $data) && null !== $data['customerReferences']) {
            $values_1 = [];
            foreach ($data['customerReferences'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItem', 'json', $context);
            }
            $object->setCustomerReferences($values_1);
        } elseif (\array_key_exists('customerReferences', $data) && null === $data['customerReferences']) {
            $object->setCustomerReferences(null);
        }
        if (\array_key_exists('customsDocuments', $data) && null !== $data['customsDocuments']) {
            $values_2 = [];
            foreach ($data['customsDocuments'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem', 'json', $context);
            }
            $object->setCustomsDocuments($values_2);
        } elseif (\array_key_exists('customsDocuments', $data) && null === $data['customsDocuments']) {
            $object->setCustomsDocuments(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['number'] = $object->getNumber();
        $data['description'] = $object->getDescription();
        $data['price'] = $object->getPrice();
        $data['quantity'] = $this->normalizer->normalize($object->getQuantity(), 'json', $context);
        if (null !== $object->getCommodityCodes()) {
            $values = [];
            foreach ($object->getCommodityCodes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['commodityCodes'] = $values;
        }
        if (null !== $object->getExportReasonType()) {
            $data['exportReasonType'] = $object->getExportReasonType();
        }
        $data['manufacturerCountry'] = $object->getManufacturerCountry();
        $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
        if (null !== $object->getIsTaxesPaid()) {
            $data['isTaxesPaid'] = $object->getIsTaxesPaid();
        }
        if (null !== $object->getCustomerReferences()) {
            $values_1 = [];
            foreach ($object->getCustomerReferences() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['customerReferences'] = $values_1;
        }
        if (null !== $object->getCustomsDocuments()) {
            $values_2 = [];
            foreach ($object->getCustomsDocuments() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['customsDocuments'] = $values_2;
        }

        return $data;
    }
}
