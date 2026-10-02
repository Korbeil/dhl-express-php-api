<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem
{
    /**
     * Please enter valid DHL Express Dangerous good content id (please contact your DHL Express IT representative for the relevant content ID code if you are shipping Dan.
     */
    public ?string $contentId;
    /**
     * Please enter dry ice total net weight when shipping dry ice.
     */
    public ?float $dryIceTotalNetWeight;
    /**
     * Please enter comma separated UN code(s).
     */
    public ?string $unCode;
    /**
     * The customDescription node contains the customized Dangerous Goods statement to declare contents accurately. The customDescription node value will be displayed in the Transport Label and Waybill Document, replacing the default IATA Dangerous Goods statement constructed based on contentId node.<BR>            Multiple customDescription nodes from multiple dangerousGoods nodes will be concatenated using comma separator with combined maximum limit of 200 characters.<BR>            <BR>            It is recommended to use customDescription for entire shipment for each dangerousGoods to fully utilize customDescription printout in Transport Label and Waybill Document.<BR>            <BR>            Note: For 'customDescription' usage, ensure all 'dangerousGoods' segments are including the 'customDescription' field value. Any of the dangerousGoods does not provide with customDescription field value will be ignored from printing in Transport Label and Waybill Document.
     */
    public ?string $customDescription;
}
