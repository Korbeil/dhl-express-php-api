<?php

namespace Korbeil\DHLExpress\Api\Model\Common;

class SupermodelIoLogisticsExpressReference
{
    /**
     * Please provide reference.
     */
    public ?string $value;
    /**
     * Please provide reference type<BR>      <BR>      AAO, shipment reference number of receiver<BR>      CU, reference number of consignor - default<BR>      FF, reference number of freight forwarder<BR>      FN, freight bill number for <ex works invoice number><BR>      IBC, inbound center reference number<BR>      LLR, load list reference for <10-digit Shipment ID><BR>      OBC, outbound center reference number for <SHIPMEN IDENTIFIER (COUNTRY OF ORIGIN)><BR>      PRN, pickup request number for <BOOKINGREFERENCE NUMBER><BR>      ACP, local payer account number<BR>      ACS, local shipper account number<BR>      ACR, local receiver account number<BR>      CDN, customs declaration number<BR>      STD, eurolog 15-digit shipment id<BR>      CO, buyers order number.
     */
    public ?string $typeCode = 'CU';
}
