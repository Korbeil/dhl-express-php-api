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
        \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressAccount::class => Common\SupermodelIoLogisticsExpressAccountNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressAddress::class => Common\SupermodelIoLogisticsExpressAddressNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentRequest::class => Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentRequestNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentResponse::class => Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Rating\SupermodelIoLogisticsExpressAddressRatesRequest::class => Rating\SupermodelIoLogisticsExpressAddressRatesRequestNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Address\SupermodelIoLogisticsExpressAddressValidateResponse::class => Address\SupermodelIoLogisticsExpressAddressValidateResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItem::class => SupermodelIoLogisticsExpressAddressValidateResponseAddressItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea::class => SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceAreaNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressBankDetailsItem::class => SupermodelIoLogisticsExpressBankDetailsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressContact::class => Common\SupermodelIoLogisticsExpressContactNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressContactBuyer::class => Shipment\SupermodelIoLogisticsExpressContactBuyerNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressContactCreateShipmentResponse::class => Shipment\SupermodelIoLogisticsExpressContactCreateShipmentResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressCreateShipmentRequest::class => Shipment\SupermodelIoLogisticsExpressCreateShipmentRequestNormalizer::class,

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

        \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressCreateShipmentResponse::class => Shipment\SupermodelIoLogisticsExpressCreateShipmentResponseNormalizer::class,

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

        \Korbeil\DHLExpress\Api\Model\Shipment\Documents\SupermodelIoLogisticsExpressDocumentImageResponse::class => Shipment\Documents\SupermodelIoLogisticsExpressDocumentImageResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem::class => SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressDocumentImagesItem::class => SupermodelIoLogisticsExpressDocumentImagesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressErrorResponse::class => Common\SupermodelIoLogisticsExpressErrorResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressExportDeclaration::class => Common\SupermodelIoLogisticsExpressExportDeclarationNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItem::class => SupermodelIoLogisticsExpressExportDeclarationLineItemsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity::class => SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantityNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem::class => SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight::class => SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeightNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeightAnyOf::class => SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeightAnyOfNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItem::class => SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem::class => SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoice::class => SupermodelIoLogisticsExpressExportDeclarationInvoiceNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem::class => SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationRemarksItem::class => SupermodelIoLogisticsExpressExportDeclarationRemarksItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItem::class => SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationExporter::class => SupermodelIoLogisticsExpressExportDeclarationExporterNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItem::class => SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressIdentifier::class => Shipment\SupermodelIoLogisticsExpressIdentifierNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Identifier\SupermodelIoLogisticsExpressIdentifierResponse::class => Identifier\SupermodelIoLogisticsExpressIdentifierResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem::class => SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Shipment\Documents\SupermodelIoLogisticsExpressImageUploadRequest::class => Shipment\Documents\SupermodelIoLogisticsExpressImageUploadRequestNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Rating\SupermodelIoLogisticsExpressLandedCostRequest::class => Rating\SupermodelIoLogisticsExpressLandedCostRequestNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails::class => SupermodelIoLogisticsExpressLandedCostRequestCustomerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestChargesItem::class => SupermodelIoLogisticsExpressLandedCostRequestChargesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItem::class => SupermodelIoLogisticsExpressLandedCostRequestItemsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem::class => SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem::class => SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressPackage::class => Shipment\SupermodelIoLogisticsExpressPackageNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageDimensions::class => SupermodelIoLogisticsExpressPackageDimensionsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageLabelBarcodesItem::class => SupermodelIoLogisticsExpressPackageLabelBarcodesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageLabelTextItem::class => SupermodelIoLogisticsExpressPackageLabelTextItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressPackageRR::class => Common\SupermodelIoLogisticsExpressPackageRRNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPackageRRDimensions::class => SupermodelIoLogisticsExpressPackageRRDimensionsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressPackageReference::class => Shipment\SupermodelIoLogisticsExpressPackageReferenceNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressPickupRequest::class => Pickup\SupermodelIoLogisticsExpressPickupRequestNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsItem::class => SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetails::class => SupermodelIoLogisticsExpressPickupRequestCustomerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetails::class => SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetails::class => SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails::class => SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetails::class => SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItem::class => SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressPickupResponse::class => Pickup\SupermodelIoLogisticsExpressPickupResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Product\SupermodelIoLogisticsExpressProducts::class => Product\SupermodelIoLogisticsExpressProductsNormalizer::class,

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

        \Korbeil\DHLExpress\Api\Model\Rating\SupermodelIoLogisticsExpressRateRequest::class => Rating\SupermodelIoLogisticsExpressRateRequestNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestCustomerDetails::class => SupermodelIoLogisticsExpressRateRequestCustomerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem::class => SupermodelIoLogisticsExpressRateRequestProductsAndServicesItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem::class => SupermodelIoLogisticsExpressRateRequestMonetaryAmountItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate::class => SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDateNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem::class => SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Rating\SupermodelIoLogisticsExpressRates::class => Rating\SupermodelIoLogisticsExpressRatesNormalizer::class,

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

        \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressReference::class => Common\SupermodelIoLogisticsExpressReferenceNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressRegistrationNumbers::class => Common\SupermodelIoLogisticsExpressRegistrationNumbersNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Shipment\Tracking\SupermodelIoLogisticsExpressTrackingResponse::class => Shipment\Tracking\SupermodelIoLogisticsExpressTrackingResponseNormalizer::class,

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

        \Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressUpdatePickupRequest::class => Pickup\SupermodelIoLogisticsExpressUpdatePickupRequestNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItem::class => SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails::class => SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetails::class => SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetails::class => SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails::class => SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails::class => SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem::class => SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Pickup\SupermodelIoLogisticsExpressUpdatePickupResponse::class => Pickup\SupermodelIoLogisticsExpressUpdatePickupResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataRequest::class => Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataRequestNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestContentNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItem::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID::class => Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContent::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContentNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImageProperties::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItem::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails::class => SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetailsNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataResponse::class => Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Shipment\SupermodelIoLogisticsExpressValueAddedServices::class => Shipment\SupermodelIoLogisticsExpressValueAddedServicesNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem::class => SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItemNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Common\SupermodelIoLogisticsExpressValueAddedServicesRates::class => Common\SupermodelIoLogisticsExpressValueAddedServicesRatesNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\Shipment\Tracking\SupermodelIoLogisticsExpressEPODResponse::class => Shipment\Tracking\SupermodelIoLogisticsExpressEPODResponseNormalizer::class,

        \Korbeil\DHLExpress\Api\Model\SupermodelIoLogisticsExpressEPODResponseDocumentsItem::class => SupermodelIoLogisticsExpressEPODResponseDocumentsItemNormalizer::class,

        \Jane\Component\JsonSchemaRuntime\Reference::class => \Korbeil\DHLExpress\Api\Runtime\Normalizer\ReferenceNormalizer::class,
    ];
    protected $normalizersCache = [];

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return \array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return \is_object($data) && \array_key_exists($data::class, $this->normalizers);
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[$data::class];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($data, $format, $context);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
        $normalizer = match ($normalizerClass) {
            Common\SupermodelIoLogisticsExpressAccountNormalizer::class => new Common\SupermodelIoLogisticsExpressAccountNormalizer(),
            Common\SupermodelIoLogisticsExpressAddressNormalizer::class => new Common\SupermodelIoLogisticsExpressAddressNormalizer(),
            Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentRequestNormalizer::class => new Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentRequestNormalizer(),
            Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentResponseNormalizer::class => new Shipment\SupermodelIoLogisticsExpressAddressCreateShipmentResponseNormalizer(),
            Rating\SupermodelIoLogisticsExpressAddressRatesRequestNormalizer::class => new Rating\SupermodelIoLogisticsExpressAddressRatesRequestNormalizer(),
            Address\SupermodelIoLogisticsExpressAddressValidateResponseNormalizer::class => new Address\SupermodelIoLogisticsExpressAddressValidateResponseNormalizer(),
            SupermodelIoLogisticsExpressAddressValidateResponseAddressItemNormalizer::class => new SupermodelIoLogisticsExpressAddressValidateResponseAddressItemNormalizer(),
            SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceAreaNormalizer::class => new SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceAreaNormalizer(),
            SupermodelIoLogisticsExpressBankDetailsItemNormalizer::class => new SupermodelIoLogisticsExpressBankDetailsItemNormalizer(),
            Common\SupermodelIoLogisticsExpressContactNormalizer::class => new Common\SupermodelIoLogisticsExpressContactNormalizer(),
            Shipment\SupermodelIoLogisticsExpressContactBuyerNormalizer::class => new Shipment\SupermodelIoLogisticsExpressContactBuyerNormalizer(),
            Shipment\SupermodelIoLogisticsExpressContactCreateShipmentResponseNormalizer::class => new Shipment\SupermodelIoLogisticsExpressContactCreateShipmentResponseNormalizer(),
            Shipment\SupermodelIoLogisticsExpressCreateShipmentRequestNormalizer::class => new Shipment\SupermodelIoLogisticsExpressCreateShipmentRequestNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestPickupNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestPickupNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetailsNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetailsNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetailsNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetailsNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetailsNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetailsNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetailsNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetailsNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetailsNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetailsNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetailsNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetailsNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetailsNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetailsNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetailsNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetailsNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetailsNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetailsNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetailsNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetailsNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestContentNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestContentNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemQuantityNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemQuantityNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCommodityCodesItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCommodityCodesItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemWeightNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemWeightNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomerReferencesItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomerReferencesItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomsDocumentsItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLineItemsItemCustomsDocumentsItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValuesNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValuesNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationRemarksItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporterNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationExporterNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationDeclarationNotesItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationLicensesItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDeliveryNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDeliveryNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDateNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDateNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentRequestParentShipmentNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentRequestParentShipmentNormalizer(),
            Shipment\SupermodelIoLogisticsExpressCreateShipmentResponseNormalizer::class => new Shipment\SupermodelIoLogisticsExpressCreateShipmentResponseNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsShipperDetailsNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsShipperDetailsNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsReceiverDetailsNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetailsReceiverDetailsNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceAreaNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceAreaNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceAreaNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceAreaNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetailsNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetailsNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItemNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItemNormalizer(),
            SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDateNormalizer::class => new SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDateNormalizer(),
            Shipment\Documents\SupermodelIoLogisticsExpressDocumentImageResponseNormalizer::class => new Shipment\Documents\SupermodelIoLogisticsExpressDocumentImageResponseNormalizer(),
            SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItemNormalizer::class => new SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItemNormalizer(),
            SupermodelIoLogisticsExpressDocumentImagesItemNormalizer::class => new SupermodelIoLogisticsExpressDocumentImagesItemNormalizer(),
            Common\SupermodelIoLogisticsExpressErrorResponseNormalizer::class => new Common\SupermodelIoLogisticsExpressErrorResponseNormalizer(),
            Common\SupermodelIoLogisticsExpressExportDeclarationNormalizer::class => new Common\SupermodelIoLogisticsExpressExportDeclarationNormalizer(),
            SupermodelIoLogisticsExpressExportDeclarationLineItemsItemNormalizer::class => new SupermodelIoLogisticsExpressExportDeclarationLineItemsItemNormalizer(),
            SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantityNormalizer::class => new SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantityNormalizer(),
            SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItemNormalizer::class => new SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItemNormalizer(),
            SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeightNormalizer::class => new SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeightNormalizer(),
            SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeightAnyOfNormalizer::class => new SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeightAnyOfNormalizer(),
            SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItemNormalizer::class => new SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItemNormalizer(),
            SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItemNormalizer::class => new SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItemNormalizer(),
            SupermodelIoLogisticsExpressExportDeclarationInvoiceNormalizer::class => new SupermodelIoLogisticsExpressExportDeclarationInvoiceNormalizer(),
            SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItemNormalizer::class => new SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItemNormalizer(),
            SupermodelIoLogisticsExpressExportDeclarationRemarksItemNormalizer::class => new SupermodelIoLogisticsExpressExportDeclarationRemarksItemNormalizer(),
            SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItemNormalizer::class => new SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItemNormalizer(),
            SupermodelIoLogisticsExpressExportDeclarationExporterNormalizer::class => new SupermodelIoLogisticsExpressExportDeclarationExporterNormalizer(),
            SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItemNormalizer::class => new SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItemNormalizer(),
            Shipment\SupermodelIoLogisticsExpressIdentifierNormalizer::class => new Shipment\SupermodelIoLogisticsExpressIdentifierNormalizer(),
            Identifier\SupermodelIoLogisticsExpressIdentifierResponseNormalizer::class => new Identifier\SupermodelIoLogisticsExpressIdentifierResponseNormalizer(),
            SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItemNormalizer::class => new SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItemNormalizer(),
            Shipment\Documents\SupermodelIoLogisticsExpressImageUploadRequestNormalizer::class => new Shipment\Documents\SupermodelIoLogisticsExpressImageUploadRequestNormalizer(),
            Rating\SupermodelIoLogisticsExpressLandedCostRequestNormalizer::class => new Rating\SupermodelIoLogisticsExpressLandedCostRequestNormalizer(),
            SupermodelIoLogisticsExpressLandedCostRequestCustomerDetailsNormalizer::class => new SupermodelIoLogisticsExpressLandedCostRequestCustomerDetailsNormalizer(),
            SupermodelIoLogisticsExpressLandedCostRequestChargesItemNormalizer::class => new SupermodelIoLogisticsExpressLandedCostRequestChargesItemNormalizer(),
            SupermodelIoLogisticsExpressLandedCostRequestItemsItemNormalizer::class => new SupermodelIoLogisticsExpressLandedCostRequestItemsItemNormalizer(),
            SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItemNormalizer::class => new SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItemNormalizer(),
            SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItemNormalizer::class => new SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItemNormalizer(),
            Shipment\SupermodelIoLogisticsExpressPackageNormalizer::class => new Shipment\SupermodelIoLogisticsExpressPackageNormalizer(),
            SupermodelIoLogisticsExpressPackageDimensionsNormalizer::class => new SupermodelIoLogisticsExpressPackageDimensionsNormalizer(),
            SupermodelIoLogisticsExpressPackageLabelBarcodesItemNormalizer::class => new SupermodelIoLogisticsExpressPackageLabelBarcodesItemNormalizer(),
            SupermodelIoLogisticsExpressPackageLabelTextItemNormalizer::class => new SupermodelIoLogisticsExpressPackageLabelTextItemNormalizer(),
            Common\SupermodelIoLogisticsExpressPackageRRNormalizer::class => new Common\SupermodelIoLogisticsExpressPackageRRNormalizer(),
            SupermodelIoLogisticsExpressPackageRRDimensionsNormalizer::class => new SupermodelIoLogisticsExpressPackageRRDimensionsNormalizer(),
            Shipment\SupermodelIoLogisticsExpressPackageReferenceNormalizer::class => new Shipment\SupermodelIoLogisticsExpressPackageReferenceNormalizer(),
            Pickup\SupermodelIoLogisticsExpressPickupRequestNormalizer::class => new Pickup\SupermodelIoLogisticsExpressPickupRequestNormalizer(),
            SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsItemNormalizer::class => new SupermodelIoLogisticsExpressPickupRequestSpecialInstructionsItemNormalizer(),
            SupermodelIoLogisticsExpressPickupRequestCustomerDetailsNormalizer::class => new SupermodelIoLogisticsExpressPickupRequestCustomerDetailsNormalizer(),
            SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetailsNormalizer::class => new SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetailsNormalizer(),
            SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetailsNormalizer::class => new SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetailsNormalizer(),
            SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetailsNormalizer::class => new SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetailsNormalizer(),
            SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetailsNormalizer::class => new SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetailsNormalizer(),
            SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItemNormalizer::class => new SupermodelIoLogisticsExpressPickupRequestShipmentDetailsItemNormalizer(),
            Pickup\SupermodelIoLogisticsExpressPickupResponseNormalizer::class => new Pickup\SupermodelIoLogisticsExpressPickupResponseNormalizer(),
            Product\SupermodelIoLogisticsExpressProductsNormalizer::class => new Product\SupermodelIoLogisticsExpressProductsNormalizer(),
            SupermodelIoLogisticsExpressProductsProductsItemNormalizer::class => new SupermodelIoLogisticsExpressProductsProductsItemNormalizer(),
            SupermodelIoLogisticsExpressProductsProductsItemWeightNormalizer::class => new SupermodelIoLogisticsExpressProductsProductsItemWeightNormalizer(),
            SupermodelIoLogisticsExpressProductsProductsItemBreakdownItemNormalizer::class => new SupermodelIoLogisticsExpressProductsProductsItemBreakdownItemNormalizer(),
            SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemNormalizer::class => new SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemNormalizer(),
            SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItemNormalizer::class => new SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItemNormalizer(),
            SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemNormalizer::class => new SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemNormalizer(),
            SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemNormalizer::class => new SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemNormalizer(),
            SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItemNormalizer::class => new SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItemNormalizer(),
            SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilitiesNormalizer::class => new SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilitiesNormalizer(),
            SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilitiesNormalizer::class => new SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilitiesNormalizer(),
            Rating\SupermodelIoLogisticsExpressRateRequestNormalizer::class => new Rating\SupermodelIoLogisticsExpressRateRequestNormalizer(),
            SupermodelIoLogisticsExpressRateRequestCustomerDetailsNormalizer::class => new SupermodelIoLogisticsExpressRateRequestCustomerDetailsNormalizer(),
            SupermodelIoLogisticsExpressRateRequestProductsAndServicesItemNormalizer::class => new SupermodelIoLogisticsExpressRateRequestProductsAndServicesItemNormalizer(),
            SupermodelIoLogisticsExpressRateRequestMonetaryAmountItemNormalizer::class => new SupermodelIoLogisticsExpressRateRequestMonetaryAmountItemNormalizer(),
            SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDateNormalizer::class => new SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDateNormalizer(),
            SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItemNormalizer::class => new SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItemNormalizer(),
            Rating\SupermodelIoLogisticsExpressRatesNormalizer::class => new Rating\SupermodelIoLogisticsExpressRatesNormalizer(),
            SupermodelIoLogisticsExpressRatesProductsItemNormalizer::class => new SupermodelIoLogisticsExpressRatesProductsItemNormalizer(),
            SupermodelIoLogisticsExpressRatesProductsItemWeightNormalizer::class => new SupermodelIoLogisticsExpressRatesProductsItemWeightNormalizer(),
            SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItemNormalizer::class => new SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItemNormalizer(),
            SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemNormalizer::class => new SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemNormalizer(),
            SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemPriceBreakdownItemNormalizer::class => new SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemPriceBreakdownItemNormalizer(),
            SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemNormalizer::class => new SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemNormalizer(),
            SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemNormalizer::class => new SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemNormalizer(),
            SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItemNormalizer::class => new SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItemBreakdownItemPriceBreakdownItemNormalizer(),
            SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemNormalizer::class => new SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemNormalizer(),
            SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItemNormalizer::class => new SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItemServiceCodesItemNormalizer(),
            SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemNormalizer::class => new SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemNormalizer(),
            SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemNormalizer::class => new SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemNormalizer(),
            SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItemNormalizer::class => new SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItemDependencyRuleGroupItemRequiredServiceCodesItemNormalizer(),
            SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilitiesNormalizer::class => new SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilitiesNormalizer(),
            SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilitiesNormalizer::class => new SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilitiesNormalizer(),
            SupermodelIoLogisticsExpressRatesProductsItemItemsItemNormalizer::class => new SupermodelIoLogisticsExpressRatesProductsItemItemsItemNormalizer(),
            SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemNormalizer::class => new SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemNormalizer(),
            SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemPriceBreakdownItemNormalizer::class => new SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemPriceBreakdownItemNormalizer(),
            SupermodelIoLogisticsExpressRatesExchangeRatesItemNormalizer::class => new SupermodelIoLogisticsExpressRatesExchangeRatesItemNormalizer(),
            Common\SupermodelIoLogisticsExpressReferenceNormalizer::class => new Common\SupermodelIoLogisticsExpressReferenceNormalizer(),
            Common\SupermodelIoLogisticsExpressRegistrationNumbersNormalizer::class => new Common\SupermodelIoLogisticsExpressRegistrationNumbersNormalizer(),
            Shipment\Tracking\SupermodelIoLogisticsExpressTrackingResponseNormalizer::class => new Shipment\Tracking\SupermodelIoLogisticsExpressTrackingResponseNormalizer(),
            SupermodelIoLogisticsExpressTrackingResponseShipmentsItemNormalizer::class => new SupermodelIoLogisticsExpressTrackingResponseShipmentsItemNormalizer(),
            SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsNormalizer::class => new SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsNormalizer(),
            SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddressNormalizer::class => new SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddressNormalizer(),
            SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItemNormalizer::class => new SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItemNormalizer(),
            SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsNormalizer::class => new SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsNormalizer(),
            SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddressNormalizer::class => new SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddressNormalizer(),
            SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItemNormalizer::class => new SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItemNormalizer(),
            SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemNormalizer::class => new SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemNormalizer(),
            SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemServiceAreaItemNormalizer::class => new SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemServiceAreaItemNormalizer(),
            SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemNormalizer::class => new SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemNormalizer(),
            SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensionsNormalizer::class => new SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensionsNormalizer(),
            SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensionsNormalizer::class => new SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensionsNormalizer(),
            SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemNormalizer::class => new SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemNormalizer(),
            SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemServiceAreaItemNormalizer::class => new SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItemServiceAreaItemNormalizer(),
            Pickup\SupermodelIoLogisticsExpressUpdatePickupRequestNormalizer::class => new Pickup\SupermodelIoLogisticsExpressUpdatePickupRequestNormalizer(),
            SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItemNormalizer::class => new SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItemNormalizer(),
            SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsNormalizer::class => new SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsNormalizer(),
            SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetailsNormalizer::class => new SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetailsNormalizer(),
            SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetailsNormalizer::class => new SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetailsNormalizer(),
            SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetailsNormalizer::class => new SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetailsNormalizer(),
            SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetailsNormalizer::class => new SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetailsNormalizer(),
            SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItemNormalizer::class => new SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItemNormalizer(),
            Pickup\SupermodelIoLogisticsExpressUpdatePickupResponseNormalizer::class => new Pickup\SupermodelIoLogisticsExpressUpdatePickupResponseNormalizer(),
            Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataRequestNormalizer::class => new Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataRequestNormalizer(),
            SupermodelIoLogisticsExpressUploadInvoiceDataRequestContentNormalizer::class => new SupermodelIoLogisticsExpressUploadInvoiceDataRequestContentNormalizer(),
            SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesNormalizer::class => new SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesNormalizer(),
            SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItemNormalizer::class => new SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImagePropertiesImageOptionsItemNormalizer(),
            SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsNormalizer::class => new SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsNormalizer(),
            SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetailsNormalizer::class => new SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetailsNormalizer(),
            SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetailsNormalizer::class => new SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetailsNormalizer(),
            SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetailsNormalizer::class => new SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetailsNormalizer(),
            SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetailsNormalizer::class => new SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetailsNormalizer(),
            SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetailsNormalizer::class => new SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetailsNormalizer(),
            Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDNormalizer::class => new Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDNormalizer(),
            SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContentNormalizer::class => new SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContentNormalizer(),
            SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesNormalizer::class => new SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesNormalizer(),
            SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItemNormalizer::class => new SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItemNormalizer(),
            SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsNormalizer::class => new SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsNormalizer(),
            SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetailsNormalizer::class => new SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetailsNormalizer(),
            SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetailsNormalizer::class => new SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetailsNormalizer(),
            SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetailsNormalizer::class => new SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetailsNormalizer(),
            SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetailsNormalizer::class => new SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetailsNormalizer(),
            SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetailsNormalizer::class => new SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetailsNormalizer(),
            Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataResponseNormalizer::class => new Invoice\SupermodelIoLogisticsExpressUploadInvoiceDataResponseNormalizer(),
            Shipment\SupermodelIoLogisticsExpressValueAddedServicesNormalizer::class => new Shipment\SupermodelIoLogisticsExpressValueAddedServicesNormalizer(),
            SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItemNormalizer::class => new SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItemNormalizer(),
            Common\SupermodelIoLogisticsExpressValueAddedServicesRatesNormalizer::class => new Common\SupermodelIoLogisticsExpressValueAddedServicesRatesNormalizer(),
            Shipment\Tracking\SupermodelIoLogisticsExpressEPODResponseNormalizer::class => new Shipment\Tracking\SupermodelIoLogisticsExpressEPODResponseNormalizer(),
            SupermodelIoLogisticsExpressEPODResponseDocumentsItemNormalizer::class => new SupermodelIoLogisticsExpressEPODResponseDocumentsItemNormalizer(),
            \Korbeil\DHLExpress\Api\Runtime\Normalizer\ReferenceNormalizer::class => new \Korbeil\DHLExpress\Api\Runtime\Normalizer\ReferenceNormalizer(),
            default => throw new \InvalidArgumentException('Unknown normalizer class: '.$normalizerClass),
        };
        if ($normalizer instanceof NormalizerAwareInterface) {
            $normalizer->setNormalizer($this->normalizer);
        }
        if ($normalizer instanceof DenormalizerAwareInterface) {
            $normalizer->setDenormalizer($this->denormalizer);
        }
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, \count($this->normalizers), false));
    }
}
