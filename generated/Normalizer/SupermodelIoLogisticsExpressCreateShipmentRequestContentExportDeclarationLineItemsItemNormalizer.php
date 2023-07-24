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

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem' === $type;
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return \is_object($data) && 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem' === $data::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem();
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
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
            $object->setQuantity($this->denormalizer->denormalize($data['quantity'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemQuantity', 'json', $context));
        } elseif (\array_key_exists('quantity', $data) && null === $data['quantity']) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('commodityCodes', $data) && null !== $data['commodityCodes']) {
            $values = [];
            foreach ($data['commodityCodes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCommodityCodesItem', 'json', $context);
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
        if (\array_key_exists('exportControlClassificationNumber', $data) && null !== $data['exportControlClassificationNumber']) {
            $object->setExportControlClassificationNumber($data['exportControlClassificationNumber']);
        } elseif (\array_key_exists('exportControlClassificationNumber', $data) && null === $data['exportControlClassificationNumber']) {
            $object->setExportControlClassificationNumber(null);
        }
        if (\array_key_exists('weight', $data) && null !== $data['weight']) {
            $object->setWeight($this->denormalizer->denormalize($data['weight'], 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemWeight', 'json', $context));
        } elseif (\array_key_exists('weight', $data) && null === $data['weight']) {
            $object->setWeight(null);
        }
        if (\array_key_exists('isTaxesPaid', $data) && null !== $data['isTaxesPaid']) {
            $object->setIsTaxesPaid($data['isTaxesPaid']);
        } elseif (\array_key_exists('isTaxesPaid', $data) && null === $data['isTaxesPaid']) {
            $object->setIsTaxesPaid(null);
        }
        if (\array_key_exists('additionalInformation', $data) && null !== $data['additionalInformation']) {
            $values_1 = [];
            foreach ($data['additionalInformation'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAdditionalInformation($values_1);
        } elseif (\array_key_exists('additionalInformation', $data) && null === $data['additionalInformation']) {
            $object->setAdditionalInformation(null);
        }
        if (\array_key_exists('customerReferences', $data) && null !== $data['customerReferences']) {
            $values_2 = [];
            foreach ($data['customerReferences'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomerReferencesItem', 'json', $context);
            }
            $object->setCustomerReferences($values_2);
        } elseif (\array_key_exists('customerReferences', $data) && null === $data['customerReferences']) {
            $object->setCustomerReferences(null);
        }
        if (\array_key_exists('customsDocuments', $data) && null !== $data['customsDocuments']) {
            $values_3 = [];
            foreach ($data['customsDocuments'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomsDocumentsItem', 'json', $context);
            }
            $object->setCustomsDocuments($values_3);
        } elseif (\array_key_exists('customsDocuments', $data) && null === $data['customsDocuments']) {
            $object->setCustomsDocuments(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['number'] = $object->getNumber();
        $data['description'] = $object->getDescription();
        $data['price'] = $object->getPrice();
        $data['quantity'] = $this->normalizer->normalize($object->getQuantity(), 'json', $context);
        if ($object->isInitialized('commodityCodes') && null !== $object->getCommodityCodes()) {
            $values = [];
            foreach ($object->getCommodityCodes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['commodityCodes'] = $values;
        }
        if ($object->isInitialized('exportReasonType') && null !== $object->getExportReasonType()) {
            $data['exportReasonType'] = $object->getExportReasonType();
        }
        $data['manufacturerCountry'] = $object->getManufacturerCountry();
        if ($object->isInitialized('exportControlClassificationNumber') && null !== $object->getExportControlClassificationNumber()) {
            $data['exportControlClassificationNumber'] = $object->getExportControlClassificationNumber();
        }
        $data['weight'] = $this->normalizer->normalize($object->getWeight(), 'json', $context);
        if ($object->isInitialized('isTaxesPaid') && null !== $object->getIsTaxesPaid()) {
            $data['isTaxesPaid'] = $object->getIsTaxesPaid();
        }
        if ($object->isInitialized('additionalInformation') && null !== $object->getAdditionalInformation()) {
            $values_1 = [];
            foreach ($object->getAdditionalInformation() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['additionalInformation'] = $values_1;
        }
        if ($object->isInitialized('customerReferences') && null !== $object->getCustomerReferences()) {
            $values_2 = [];
            foreach ($object->getCustomerReferences() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['customerReferences'] = $values_2;
        }
        if ($object->isInitialized('customsDocuments') && null !== $object->getCustomsDocuments()) {
            $values_3 = [];
            foreach ($object->getCustomsDocuments() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['customsDocuments'] = $values_3;
        }

        return $data;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return ['Korbeil\\DHLExpress\\Api\\Model\\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem' => false];
    }
}
