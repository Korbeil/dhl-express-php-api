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

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (\array_key_exists('isTaxesPaid', $data) && \is_int($data['isTaxesPaid'])) {
            $data['isTaxesPaid'] = (bool) $data['isTaxesPaid'];
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
            $object->setQuantity($this->denormalizer->denormalize($data['quantity'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemQuantity::class, 'json', $context));
        } elseif (\array_key_exists('quantity', $data) && null === $data['quantity']) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('commodityCodes', $data) && null !== $data['commodityCodes']) {
            $values = [];
            foreach ($data['commodityCodes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCommodityCodesItem::class, 'json', $context);
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
            $object->setWeight($this->denormalizer->denormalize($data['weight'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemWeight::class, 'json', $context));
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
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomerReferencesItem::class, 'json', $context);
            }
            $object->setCustomerReferences($values_2);
        } elseif (\array_key_exists('customerReferences', $data) && null === $data['customerReferences']) {
            $object->setCustomerReferences(null);
        }
        if (\array_key_exists('customsDocuments', $data) && null !== $data['customsDocuments']) {
            $values_3 = [];
            foreach ($data['customsDocuments'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomsDocumentsItem::class, 'json', $context);
            }
            $object->setCustomsDocuments($values_3);
        } elseif (\array_key_exists('customsDocuments', $data) && null === $data['customsDocuments']) {
            $object->setCustomsDocuments(null);
        }

        return $object;
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['number'] = $data->getNumber();
        $dataArray['description'] = $data->getDescription();
        $dataArray['price'] = $data->getPrice();
        $dataArray['quantity'] = null === $data->getQuantity() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getQuantity(), 'json', $context));
        if ($data->isInitialized('commodityCodes') && null !== $data->getCommodityCodes()) {
            $values = [];
            foreach ($data->getCommodityCodes() as $value) {
                $values[] = null === $value ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['commodityCodes'] = $values;
        }
        if ($data->isInitialized('exportReasonType') && null !== $data->getExportReasonType()) {
            $dataArray['exportReasonType'] = $data->getExportReasonType();
        }
        $dataArray['manufacturerCountry'] = $data->getManufacturerCountry();
        if ($data->isInitialized('exportControlClassificationNumber') && null !== $data->getExportControlClassificationNumber()) {
            $dataArray['exportControlClassificationNumber'] = $data->getExportControlClassificationNumber();
        }
        $dataArray['weight'] = null === $data->getWeight() ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($data->getWeight(), 'json', $context));
        if ($data->isInitialized('isTaxesPaid') && null !== $data->getIsTaxesPaid()) {
            $dataArray['isTaxesPaid'] = $data->getIsTaxesPaid();
        }
        if ($data->isInitialized('additionalInformation') && null !== $data->getAdditionalInformation()) {
            $values_1 = [];
            foreach ($data->getAdditionalInformation() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['additionalInformation'] = $values_1;
        }
        if ($data->isInitialized('customerReferences') && null !== $data->getCustomerReferences()) {
            $values_2 = [];
            foreach ($data->getCustomerReferences() as $value_2) {
                $values_2[] = null === $value_2 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['customerReferences'] = $values_2;
        }
        if ($data->isInitialized('customsDocuments') && null !== $data->getCustomsDocuments()) {
            $values_3 = [];
            foreach ($data->getCustomsDocuments() as $value_3) {
                $values_3[] = null === $value_3 ? null : new \Korbeil\DHLExpress\Api\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['customsDocuments'] = $values_3;
        }

        return $dataArray;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem::class => false];
    }
}
