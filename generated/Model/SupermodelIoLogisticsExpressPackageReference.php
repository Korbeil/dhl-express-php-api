<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressPackageReference
{
    /**
     * Please provide reference.
     *
     * @var string|null
     */
    protected $value;
    /**
     * Please provide reference type<BR>      <BR>      AAO, shipment reference number of receiver<BR>      CU, reference number of consignor - default<BR>      FF, reference number of freight forwarder<BR>      FN, freight bill number for <ex works invoice number><BR>      IBC, inbound center reference number<BR>      LLR, load list reference for <10-digit Shipment ID><BR>      OBC, outbound center reference number for <SHIPMEN IDENTIFIER (COUNTRY OF ORIGIN)><BR>      PRN, pickup request number for <BOOKINGREFERENCE NUMBER><BR>      ACP, local payer account number<BR>      ACS, local shipper account number<BR>      ACR, local receiver account number<BR>      CDN, customs declaration number<BR>      STD, eurolog 15-digit shipment id<BR>      CO, buyers order number.
     *
     * @var string|null
     */
    protected $typeCode = 'CU';

    /**
     * Please provide reference.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Please provide reference.
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Please provide reference type<BR>      <BR>      AAO, shipment reference number of receiver<BR>      CU, reference number of consignor - default<BR>      FF, reference number of freight forwarder<BR>      FN, freight bill number for <ex works invoice number><BR>      IBC, inbound center reference number<BR>      LLR, load list reference for <10-digit Shipment ID><BR>      OBC, outbound center reference number for <SHIPMEN IDENTIFIER (COUNTRY OF ORIGIN)><BR>      PRN, pickup request number for <BOOKINGREFERENCE NUMBER><BR>      ACP, local payer account number<BR>      ACS, local shipper account number<BR>      ACR, local receiver account number<BR>      CDN, customs declaration number<BR>      STD, eurolog 15-digit shipment id<BR>      CO, buyers order number.
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * Please provide reference type<BR>      <BR>      AAO, shipment reference number of receiver<BR>      CU, reference number of consignor - default<BR>      FF, reference number of freight forwarder<BR>      FN, freight bill number for <ex works invoice number><BR>      IBC, inbound center reference number<BR>      LLR, load list reference for <10-digit Shipment ID><BR>      OBC, outbound center reference number for <SHIPMEN IDENTIFIER (COUNTRY OF ORIGIN)><BR>      PRN, pickup request number for <BOOKINGREFERENCE NUMBER><BR>      ACP, local payer account number<BR>      ACS, local shipper account number<BR>      ACR, local receiver account number<BR>      CDN, customs declaration number<BR>      STD, eurolog 15-digit shipment id<BR>      CO, buyers order number.
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }
}
