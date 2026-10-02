<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressLandedCostRequestItemsItem
{
    /**
     * Line item number.
     */
    public ?float $number;
    /**
     * Name of the item.
     */
    public ?string $name;
    /**
     * Item full description.
     */
    public ?string $description;
    /**
     * ISO Country code of the goods manufacturer.
     */
    public ?string $manufacturerCountry;
    /**
     * SKU number.
     */
    public ?string $partNumber;
    /**
     * Total quantity of the item(s) to be shipped.
     */
    public ?float $quantity;
    /**
     * Please provide quantitiy type. prt - part, box - box.
     */
    public ?string $quantityType;
    /**
     * Product Unit price.
     */
    public ?float $unitPrice;
    /**
     * Currency code of the Unit Price.
     */
    public ?string $unitPriceCurrencyCode;
    /**
     * not used.
     */
    public ?float $customsValue;
    /**
     * not used.
     */
    public ?string $customsValueCurrencyCode;
    /**
     * commodityCode is mandatory if estimatedTariffRateType ('derived_rate' or 'highest_rate' or 'lowest_rate' or 'center_rate') not provided in the request otherwise it is considered as Optional.<BR> 'highest_rate' or 'lowest_rate' or 'center_rate') not provided in the request otherwise it is considered as Optional.<BR> Can be provided with or without dots.
     */
    public ?string $commodityCode;
    /**
     * Weight of the item.
     */
    public ?float $weight;
    /**
     * Unit of measurement.
     */
    public ?string $weightUnitOfMeasurement;
    /**
     * Category code of the Item.<BR>            101 - Coats & Jacket<BR>            102 - Blazers<BR>            103 - Suits<BR>            104 - Ensembles<BR>            105 - Trousers<BR>            106 - Shirts & Blouses<BR>            107 - Dresses<BR>            108 - Skirts<BR>            109 - Jerseys, Sweatshirts & Pullovers<BR>            110 - Sports & Swimwear<BR>            111 - Night & Underwear<BR>            112 - T-Shirts<BR>            113 - Tights & Leggings<BR> 114 - Socks <BR>            115 - Baby Clothes<BR>            116 - Clothing Accessories<BR>            201 - Sneakers<BR>            202 - Athletic Footwear<BR>            203 - Leather Footwear<BR>            204 - Textile & Other Footwear<BR>            301 - Spectacle Lenses<BR>            302 - Sunglasses<BR>            303 - Eyewear Frames<BR> 304 - Contact Lenses<BR>            401 - Watches<BR> 402 - Jewelry<BR>            403 - Suitcases & Briefcases<BR>            404 - Handbags<BR>            405 - Wallets & Little Cases<BR>            406 - Bags & Containers<BR>            501 - Beer<BR>            502 - Spirits<BR>            503 - Wine<BR>            504 - Cider, Perry & Rice Wine<BR>            601 - Bottled Water<BR>            602 - Soft Drinks<BR>            603 - Juices<BR>            604 - Coffee<BR>            605 - Tea<BR>            606 - Cocoa<BR>            701 - Dairy Products & Eggs<BR>            702 - Meat<BR>            703 - Fish & Seafood<BR>            704 - Fruits & Nuts<BR>            705 - Vegetables<BR>            706 - Bread & Cereal Products<BR>            707 - Oils & Fats<BR>            708 - Sauces & Spices<BR>            709 - Convenience Food<BR>            710 - Spreads & Sweeteners<BR>            711 - Baby Food<BR>            712 - Pet Food<BR>            801 - Cigarettes<BR>            802 - Smoking Tobacco<BR>            803 - Cigars<BR>            804 - E-Cigarettes<BR>            901 - Household Cleaners<BR>            902 - Dishwashing Detergents<BR>            903 - Polishes<BR>            904 - Room Scents<BR>            905 - Insecticides<BR>            1001 - Cosmetics<BR>            1002 - Skin Care<BR>            1003 - Personal Care<BR>            1004 - Fragrances<BR>            1101 - Toilet Paper<BR>            1102 - Paper Tissues<BR> 1103 - Household Paper<BR>            1104 - Feminine Hygiene<BR>            1105 - Baby Diapers<BR>            1106 - Incontinence<BR>            1202 - TV, Radio & Multimedia<BR>            1203 - TV Peripheral Devices<BR>            1204 - Telephony<BR>            1205 - Computing<BR>            1206 - Drones<BR>            1301 - Refrigerators<BR>            1302 - Freezers<BR>            1303 - Dishwashing Machines<BR>            1304 - Washing Machines<BR>            1305 - Cookers & Oven<BR>            1306 - Vacuum Cleaners<BR>            1307 - Small Kitchen Appliances<BR>            1308 - Hair Clippers<BR>            1309 - Irons<BR>            1310 - Toasters<BR>            1311 - Grills & Roasters<BR>            1312 - Hair Dryers<BR> 1313 - Coffee Machines<BR>            1314 - Microwave Ovens<BR>            1315 - Electric Kettles<BR>            1401 - Seats & Sofas<BR>            1402 - Beds<BR>            1403 - Mattresses<BR>            1404 - Closets, Nightstands & Dressers<BR>            1405 - Lamps & Lighting<BR> 1406 - Floor Covering<BR>            1407 - Kitchen Furniture<BR>            1408 - Plastic & Other Furniture<BR>            1501 - Analgesics<BR>            1502 - Cold & Cough Remedies<BR>            1503 - Digestives & Intestinal Remedies<BR>            1504 - Skin Treatment<BR>            1505 - Vitamins & Minerals<BR> 1506 - Hand Sanitizer <BR>            1601 - Toys & Games<BR>            1602 - Musical Instruments<BR> 1603 - Sports Equipment.
     */
    public ?string $category;
    /**
     * Item's brand.
     */
    public ?string $brand;
    /**
     * @var list<SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem>|null
     */
    public ?array $goodsCharacteristics;
    /**
     * @var list<SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem>|null
     */
    public ?array $additionalQuantityDefinitions;
    /**
     * Please enter Tariff Rate Type - default_rate,derived_rate,highest_rate,center_rate,lowest_rate.
     */
    public ?string $estimatedTariffRateType;
}
