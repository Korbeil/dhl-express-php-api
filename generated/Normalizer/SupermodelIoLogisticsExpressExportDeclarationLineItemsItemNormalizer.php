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

class SupermodelIoLogisticsExpressExportDeclarationLineItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem::class === $type;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem::class === $data::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem();
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
            $object->number = $data['number'];
        } elseif (\array_key_exists('number', $data)) {
            $object->number = null;
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->description = $data['description'];
        } elseif (\array_key_exists('description', $data)) {
            $object->description = null;
        }
        if (\array_key_exists('price', $data) && null !== $data['price']) {
            $object->price = $data['price'];
        } elseif (\array_key_exists('price', $data)) {
            $object->price = null;
        }
        if (\array_key_exists('quantity', $data) && null !== $data['quantity']) {
            $object->quantity = $this->denormalizer->denormalize($data['quantity'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity::class, 'json', $context);
        } elseif (\array_key_exists('quantity', $data)) {
            $object->quantity = null;
        }
        if (\array_key_exists('commodityCodes', $data) && null !== $data['commodityCodes']) {
            $values = [];
            foreach ($data['commodityCodes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem::class, 'json', $context);
            }
            $object->commodityCodes = $values;
        } elseif (\array_key_exists('commodityCodes', $data)) {
            $object->commodityCodes = null;
        }
        if (\array_key_exists('exportReasonType', $data) && null !== $data['exportReasonType']) {
            $object->exportReasonType = $data['exportReasonType'];
        } elseif (\array_key_exists('exportReasonType', $data)) {
            $object->exportReasonType = null;
        }
        if (\array_key_exists('manufacturerCountry', $data) && null !== $data['manufacturerCountry']) {
            $object->manufacturerCountry = $data['manufacturerCountry'];
        } elseif (\array_key_exists('manufacturerCountry', $data)) {
            $object->manufacturerCountry = null;
        }
        if (\array_key_exists('weight', $data) && null !== $data['weight']) {
            $object->weight = $this->denormalizer->denormalize($data['weight'], \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight::class, 'json', $context);
        } elseif (\array_key_exists('weight', $data)) {
            $object->weight = null;
        }
        if (\array_key_exists('isTaxesPaid', $data) && null !== $data['isTaxesPaid']) {
            $object->isTaxesPaid = $data['isTaxesPaid'];
        } elseif (\array_key_exists('isTaxesPaid', $data)) {
            $object->isTaxesPaid = null;
        }
        if (\array_key_exists('customerReferences', $data) && null !== $data['customerReferences']) {
            $values_1 = [];
            foreach ($data['customerReferences'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItem::class, 'json', $context);
            }
            $object->customerReferences = $values_1;
        } elseif (\array_key_exists('customerReferences', $data)) {
            $object->customerReferences = null;
        }
        if (\array_key_exists('customsDocuments', $data) && null !== $data['customsDocuments']) {
            $values_2 = [];
            foreach ($data['customsDocuments'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem::class, 'json', $context);
            }
            $object->customsDocuments = $values_2;
        } elseif (\array_key_exists('customsDocuments', $data)) {
            $object->customsDocuments = null;
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['number'] = $data->number;
        $dataArray['description'] = $data->description;
        $dataArray['price'] = $data->price;
        $normalized = null === $data->quantity ? null : $this->normalizer->normalize($data->quantity, 'json', $context);
        $dataArray['quantity'] = is_iterable($normalized) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized) : $normalized;
        if (\array_key_exists('commodityCodes', get_object_vars($data)) && null !== ($data->commodityCodes ?? null)) {
            $values = [];
            foreach ($data->commodityCodes as $value) {
                $normalized_1 = null === $value ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = is_iterable($normalized_1) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['commodityCodes'] = $values;
        }
        if (\array_key_exists('exportReasonType', get_object_vars($data)) && null !== ($data->exportReasonType ?? null)) {
            $dataArray['exportReasonType'] = $data->exportReasonType;
        }
        $dataArray['manufacturerCountry'] = $data->manufacturerCountry;
        $normalized_2 = null === $data->weight ? null : $this->normalizer->normalize($data->weight, 'json', $context);
        $dataArray['weight'] = is_iterable($normalized_2) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
        if (\array_key_exists('isTaxesPaid', get_object_vars($data)) && null !== ($data->isTaxesPaid ?? null)) {
            $dataArray['isTaxesPaid'] = $data->isTaxesPaid;
        }
        if (\array_key_exists('customerReferences', get_object_vars($data)) && null !== ($data->customerReferences ?? null)) {
            $values_1 = [];
            foreach ($data->customerReferences as $value_1) {
                $normalized_3 = null === $value_1 ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = is_iterable($normalized_3) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
            }
            $dataArray['customerReferences'] = $values_1;
        }
        if (\array_key_exists('customsDocuments', get_object_vars($data)) && null !== ($data->customsDocuments ?? null)) {
            $values_2 = [];
            foreach ($data->customsDocuments as $value_2) {
                $normalized_4 = null === $value_2 ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = is_iterable($normalized_4) ? new \Korbeil\DHLExpress\Api\Runtime\JsonObject($normalized_4) : $normalized_4;
            }
            $dataArray['customsDocuments'] = $values_2;
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem::class => false];
    }
}
