<?php

namespace Korbeil\DHLExpress\Api\Normalizer;

use Korbeil\DHLExpress\Api\Runtime\Normalizer\CheckArray;
use Korbeil\DHLExpress\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;
    protected $normalizers = [
        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAccount::class => SupermodelIoLogisticsExpressAccountNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddress::class => SupermodelIoLogisticsExpressAddressNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressCreateShipmentRequest::class => SupermodelIoLogisticsExpressAddressCreateShipmentRequestNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressCreateShipmentResponse::class => SupermodelIoLogisticsExpressAddressCreateShipmentResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressRatesRequest::class => SupermodelIoLogisticsExpressAddressRatesRequestNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponse::class => SupermodelIoLogisticsExpressAddressValidateResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem::class => SupermodelIoLogisticsExpressAddressValidateResponseAddressItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea::class => SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceAreaNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressBankDetailsItem::class => SupermodelIoLogisticsExpressBankDetailsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressContact::class => SupermodelIoLogisticsExpressContactNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressContactBuyer::class => SupermodelIoLogisticsExpressContactBuyerNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressContactCreateShipmentResponse::class => SupermodelIoLogisticsExpressContactCreateShipmentResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest::class => SupermodelIoLogisticsExpressCreateShipmentRequestNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickup::class => SupermodelIoLogisticsExpressCreateShipmentRequestPickupNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItem::class => SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails::class => SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails::class => SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties::class => SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem::class => SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem::class => SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem::class => SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails::class => SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetails::class => SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails::class => SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails::class => SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails::class => SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetails::class => SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails::class => SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails::class => SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails::class => SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContent::class => SupermodelIoLogisticsExpressCreateShipmentRequestContentNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclaration::class => SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItem::class => SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemQuantity::class => SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemQuantityNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCommodityCodesItem::class => SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCommodityCodesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemWeight::class => SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemWeightNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomerReferencesItem::class => SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomerReferencesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomsDocumentsItem::class => SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomsDocumentsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice::class => SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItem::class => SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues::class => SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValuesNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItem::class => SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItem::class => SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporter::class => SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporterNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItem::class => SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItem::class => SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItem::class => SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery::class => SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDeliveryNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem::class => SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItem::class => SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDate::class => SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDateNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItem::class => SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment::class => SupermodelIoLogisticsExpressCreateShipmentRequestParentShipmentNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse::class => SupermodelIoLogisticsExpressCreateShipmentResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem::class => SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem::class => SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem::class => SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem::class => SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails::class => SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsShipperDetails::class => SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsShipperDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsReceiverDetails::class => SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsReceiverDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea::class => SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceAreaNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea::class => SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceAreaNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItem::class => SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails::class => SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem::class => SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem::class => SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo::class => SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem::class => SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate::class => SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDateNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressDocumentImageResponse::class => SupermodelIoLogisticsExpressDocumentImageResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem::class => SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressDocumentImagesItem::class => SupermodelIoLogisticsExpressDocumentImagesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressErrorResponse::class => SupermodelIoLogisticsExpressErrorResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclaration::class => SupermodelIoLogisticsExpressExportDeclarationNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem::class => SupermodelIoLogisticsExpressExportDeclarationLineItemsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity::class => SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantityNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem::class => SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight::class => SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeightNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItem::class => SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem::class => SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice::class => SupermodelIoLogisticsExpressExportDeclarationInvoiceNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem::class => SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationRemarksItem::class => SupermodelIoLogisticsExpressExportDeclarationRemarksItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItem::class => SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationExporter::class => SupermodelIoLogisticsExpressExportDeclarationExporterNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItem::class => SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressIdentifier::class => SupermodelIoLogisticsExpressIdentifierNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressIdentifierResponse::class => SupermodelIoLogisticsExpressIdentifierResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem::class => SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressImageUploadRequest::class => SupermodelIoLogisticsExpressImageUploadRequestNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest::class => SupermodelIoLogisticsExpressLandedCostRequestNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails::class => SupermodelIoLogisticsExpressLandedCostRequestCustomerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestChargesItem::class => SupermodelIoLogisticsExpressLandedCostRequestChargesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class => SupermodelIoLogisticsExpressLandedCostRequestItemsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem::class => SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem::class => SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackage::class => SupermodelIoLogisticsExpressPackageNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageDimensions::class => SupermodelIoLogisticsExpressPackageDimensionsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageLabelBarcodesItem::class => SupermodelIoLogisticsExpressPackageLabelBarcodesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageLabelTextItem::class => SupermodelIoLogisticsExpressPackageLabelTextItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageRR::class => SupermodelIoLogisticsExpressPackageRRNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageRRDimensions::class => SupermodelIoLogisticsExpressPackageRRDimensionsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageReference::class => SupermodelIoLogisticsExpressPackageReferenceNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequest::class => SupermodelIoLogisticsExpressPickupRequestNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsItem::class => SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetails::class => SupermodelIoLogisticsExpressPickupRequestCustomerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetails::class => SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetails::class => SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails::class => SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetails::class => SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem::class => SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupResponse::class => SupermodelIoLogisticsExpressPickupResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProducts::class => SupermodelIoLogisticsExpressProductsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItem::class => SupermodelIoLogisticsExpressProductsProductsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemWeight::class => SupermodelIoLogisticsExpressProductsProductsItemWeightNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem::class => SupermodelIoLogisticsExpressProductsProductsItemBreakdownItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItem::class => SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem::class => SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem::class => SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class => SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem::class => SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities::class => SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilitiesNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities::class => SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilitiesNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequest::class => SupermodelIoLogisticsExpressRateRequestNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestCustomerDetails::class => SupermodelIoLogisticsExpressRateRequestCustomerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem::class => SupermodelIoLogisticsExpressRateRequestProductsAndServicesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem::class => SupermodelIoLogisticsExpressRateRequestMonetaryAmountItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate::class => SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDateNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem::class => SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRates::class => SupermodelIoLogisticsExpressRatesNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItem::class => SupermodelIoLogisticsExpressRatesProductsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemWeight::class => SupermodelIoLogisticsExpressRatesProductsItemWeightNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem::class => SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem::class => SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemPriceBreakdownItem::class => SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemPriceBreakdownItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItem::class => SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItem::class => SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItem::class => SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem::class => SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItem::class => SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem::class => SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItem::class => SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItem::class => SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities::class => SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilitiesNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities::class => SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilitiesNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItem::class => SupermodelIoLogisticsExpressRatesProductsItemItemsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItem::class => SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemPriceBreakdownItem::class => SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemPriceBreakdownItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRatesExchangeRatesItem::class => SupermodelIoLogisticsExpressRatesExchangeRatesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressReference::class => SupermodelIoLogisticsExpressReferenceNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRegistrationNumbers::class => SupermodelIoLogisticsExpressRegistrationNumbersNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponse::class => SupermodelIoLogisticsExpressTrackingResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItem::class => SupermodelIoLogisticsExpressTrackingResponseShipmentsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails::class => SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddress::class => SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddressNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItem::class => SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails::class => SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddress::class => SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddressNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItem::class => SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem::class => SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemServiceAreaItem::class => SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemServiceAreaItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem::class => SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions::class => SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensionsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions::class => SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensionsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem::class => SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemServiceAreaItem::class => SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemServiceAreaItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest::class => SupermodelIoLogisticsExpressUpdatePickupRequestNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItem::class => SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails::class => SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetails::class => SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetails::class => SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails::class => SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails::class => SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem::class => SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupResponse::class => SupermodelIoLogisticsExpressUpdatePickupResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequest::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestContentNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItem::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContent::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContentNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImageProperties::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItem::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataResponse::class => SupermodelIoLogisticsExpressUploadInvoiceDataResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressValueAddedServices::class => SupermodelIoLogisticsExpressValueAddedServicesNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class => SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesRates::class => SupermodelIoLogisticsExpressValueAddedServicesRatesNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressEPODResponse::class => SupermodelIoLogisticsExpressEPODResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressEPODResponseDocumentsItem::class => SupermodelIoLogisticsExpressEPODResponseDocumentsItemNormalizer::class,

        \Jane\Component\JsonSchemaRuntime\Reference::class => \Korbeil\DHLExpress\Api\Runtime\Normalizer\ReferenceNormalizer::class,
    ];
    protected $normalizersCache = [];

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        return \array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
    {
        return \is_object($data) && \array_key_exists($data::class, $this->normalizers);
    }

    public function normalize(mixed $data, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[$data::class];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($data, $format, $context);
    }

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $type, $format, $context);
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }

    public function getSupportedTypes(string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, \count($this->normalizers), false));
    }
}
