<?php

namespace Korbeil\DHLExpress\Api\Model;

class SupermodelIoLogisticsExpressLandedCostRequestItemsItem
{
    /**
     * Line item number.
     *
     * @var float|null
     */
    protected $number;
    /**
     * Name of the item.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Item full description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * ISO Country code of the goods manufacturer.
     *
     * @var string|null
     */
    protected $manufacturerCountry;
    /**
     * SKU number.
     *
     * @var string|null
     */
    protected $partNumber;
    /**
     * Total quantity of the item(s) to be shipped.
     *
     * @var float|null
     */
    protected $quantity;
    /**
     * Please provide quantitiy type. prt - part, box - box.
     *
     * @var string|null
     */
    protected $quantityType;
    /**
     * Product Unit price.
     *
     * @var float|null
     */
    protected $unitPrice;
    /**
     * Currency code of the Unit Price.
     *
     * @var string|null
     */
    protected $unitPriceCurrencyCode;
    /**
     * not used.
     *
     * @var float|null
     */
    protected $customsValue;
    /**
     * not used.
     *
     * @var string|null
     */
    protected $customsValueCurrencyCode;
    /**
     * commodityCode is mandatory if estimatedTariffRateType ('derived_rate' or 'highest_rate' or 'lowest_rate' or 'center_rate') not provided in the request otherwise it is considered as Optional.<BR> 'highest_rate' or 'lowest_rate' or 'center_rate') not provided in the request otherwise it is considered as Optional.<BR> Can be provided with or without dots.
     *
     * @var string|null
     */
    protected $commodityCode;
    /**
     * Weight of the item.
     *
     * @var float|null
     */
    protected $weight;
    /**
     * Unit of measurement.
     *
     * @var string|null
     */
    protected $weightUnitOfMeasurement;
    /**
     * Category code of the Item.<BR>            101 - Coats & Jacket<BR>            102 - Blazers<BR>            103 - Suits<BR>            104 - Ensembles<BR>            105 - Trousers<BR>            106 - Shirts & Blouses<BR>            107 - Dresses<BR>            108 - Skirts<BR>            109 - Jerseys, Sweatshirts & Pullovers<BR>            110 - Sports & Swimwear<BR>            111 - Night & Underwear<BR>            112 - T-Shirts<BR>            113 - Tights & Leggings<BR> 114 - Socks <BR>            115 - Baby Clothes<BR>            116 - Clothing Accessories<BR>            201 - Sneakers<BR>            202 - Athletic Footwear<BR>            203 - Leather Footwear<BR>            204 - Textile & Other Footwear<BR>            301 - Spectacle Lenses<BR>            302 - Sunglasses<BR>            303 - Eyewear Frames<BR> 304 - Contact Lenses<BR>            401 - Watches<BR> 402 - Jewelry<BR>            403 - Suitcases & Briefcases<BR>            404 - Handbags<BR>            405 - Wallets & Little Cases<BR>            406 - Bags & Containers<BR>            501 - Beer<BR>            502 - Spirits<BR>            503 - Wine<BR>            504 - Cider, Perry & Rice Wine<BR>            601 - Bottled Water<BR>            602 - Soft Drinks<BR>            603 - Juices<BR>            604 - Coffee<BR>            605 - Tea<BR>            606 - Cocoa<BR>            701 - Dairy Products & Eggs<BR>            702 - Meat<BR>            703 - Fish & Seafood<BR>            704 - Fruits & Nuts<BR>            705 - Vegetables<BR>            706 - Bread & Cereal Products<BR>            707 - Oils & Fats<BR>            708 - Sauces & Spices<BR>            709 - Convenience Food<BR>            710 - Spreads & Sweeteners<BR>            711 - Baby Food<BR>            712 - Pet Food<BR>            801 - Cigarettes<BR>            802 - Smoking Tobacco<BR>            803 - Cigars<BR>            804 - E-Cigarettes<BR>            901 - Household Cleaners<BR>            902 - Dishwashing Detergents<BR>            903 - Polishes<BR>            904 - Room Scents<BR>            905 - Insecticides<BR>            1001 - Cosmetics<BR>            1002 - Skin Care<BR>            1003 - Personal Care<BR>            1004 - Fragrances<BR>            1101 - Toilet Paper<BR>            1102 - Paper Tissues<BR> 1103 - Household Paper<BR>            1104 - Feminine Hygiene<BR>            1105 - Baby Diapers<BR>            1106 - Incontinence<BR>            1202 - TV, Radio & Multimedia<BR>            1203 - TV Peripheral Devices<BR>            1204 - Telephony<BR>            1205 - Computing<BR>            1206 - Drones<BR>            1301 - Refrigerators<BR>            1302 - Freezers<BR>            1303 - Dishwashing Machines<BR>            1304 - Washing Machines<BR>            1305 - Cookers & Oven<BR>            1306 - Vacuum Cleaners<BR>            1307 - Small Kitchen Appliances<BR>            1308 - Hair Clippers<BR>            1309 - Irons<BR>            1310 - Toasters<BR>            1311 - Grills & Roasters<BR>            1312 - Hair Dryers<BR> 1313 - Coffee Machines<BR>            1314 - Microwave Ovens<BR>            1315 - Electric Kettles<BR>            1401 - Seats & Sofas<BR>            1402 - Beds<BR>            1403 - Mattresses<BR>            1404 - Closets, Nightstands & Dressers<BR>            1405 - Lamps & Lighting<BR> 1406 - Floor Covering<BR>            1407 - Kitchen Furniture<BR>            1408 - Plastic & Other Furniture<BR>            1501 - Analgesics<BR>            1502 - Cold & Cough Remedies<BR>            1503 - Digestives & Intestinal Remedies<BR>            1504 - Skin Treatment<BR>            1505 - Vitamins & Minerals<BR> 1506 - Hand Sanitizer <BR>            1601 - Toys & Games<BR>            1602 - Musical Instruments<BR> 1603 - Sports Equipment.
     *
     * @var string|null
     */
    protected $category;
    /**
     * Item's brand.
     *
     * @var string|null
     */
    protected $brand;
    /**
     * @var SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem[]|null
     */
    protected $goodsCharacteristics;
    /**
     * @var SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem[]|null
     */
    protected $additionalQuantityDefinitions;
    /**
     * Please enter Tariff Rate Type - default_rate,derived_rate,highest_rate,center_rate,lowest_rate.
     *
     * @var string|null
     */
    protected $estimatedTariffRateType;

    /**
     * Line item number.
     */
    public function getNumber(): ?float
    {
        return $this->number;
    }

    /**
     * Line item number.
     */
    public function setNumber(?float $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Name of the item.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the item.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Item full description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Item full description.
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * ISO Country code of the goods manufacturer.
     */
    public function getManufacturerCountry(): ?string
    {
        return $this->manufacturerCountry;
    }

    /**
     * ISO Country code of the goods manufacturer.
     */
    public function setManufacturerCountry(?string $manufacturerCountry): self
    {
        $this->manufacturerCountry = $manufacturerCountry;

        return $this;
    }

    /**
     * SKU number.
     */
    public function getPartNumber(): ?string
    {
        return $this->partNumber;
    }

    /**
     * SKU number.
     */
    public function setPartNumber(?string $partNumber): self
    {
        $this->partNumber = $partNumber;

        return $this;
    }

    /**
     * Total quantity of the item(s) to be shipped.
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    /**
     * Total quantity of the item(s) to be shipped.
     */
    public function setQuantity(?float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Please provide quantitiy type. prt - part, box - box.
     */
    public function getQuantityType(): ?string
    {
        return $this->quantityType;
    }

    /**
     * Please provide quantitiy type. prt - part, box - box.
     */
    public function setQuantityType(?string $quantityType): self
    {
        $this->quantityType = $quantityType;

        return $this;
    }

    /**
     * Product Unit price.
     */
    public function getUnitPrice(): ?float
    {
        return $this->unitPrice;
    }

    /**
     * Product Unit price.
     */
    public function setUnitPrice(?float $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Currency code of the Unit Price.
     */
    public function getUnitPriceCurrencyCode(): ?string
    {
        return $this->unitPriceCurrencyCode;
    }

    /**
     * Currency code of the Unit Price.
     */
    public function setUnitPriceCurrencyCode(?string $unitPriceCurrencyCode): self
    {
        $this->unitPriceCurrencyCode = $unitPriceCurrencyCode;

        return $this;
    }

    /**
     * not used.
     */
    public function getCustomsValue(): ?float
    {
        return $this->customsValue;
    }

    /**
     * not used.
     */
    public function setCustomsValue(?float $customsValue): self
    {
        $this->customsValue = $customsValue;

        return $this;
    }

    /**
     * not used.
     */
    public function getCustomsValueCurrencyCode(): ?string
    {
        return $this->customsValueCurrencyCode;
    }

    /**
     * not used.
     */
    public function setCustomsValueCurrencyCode(?string $customsValueCurrencyCode): self
    {
        $this->customsValueCurrencyCode = $customsValueCurrencyCode;

        return $this;
    }

    /**
     * commodityCode is mandatory if estimatedTariffRateType ('derived_rate' or 'highest_rate' or 'lowest_rate' or 'center_rate') not provided in the request otherwise it is considered as Optional.<BR> 'highest_rate' or 'lowest_rate' or 'center_rate') not provided in the request otherwise it is considered as Optional.<BR> Can be provided with or without dots.
     */
    public function getCommodityCode(): ?string
    {
        return $this->commodityCode;
    }

    /**
     * commodityCode is mandatory if estimatedTariffRateType ('derived_rate' or 'highest_rate' or 'lowest_rate' or 'center_rate') not provided in the request otherwise it is considered as Optional.<BR> 'highest_rate' or 'lowest_rate' or 'center_rate') not provided in the request otherwise it is considered as Optional.<BR> Can be provided with or without dots.
     */
    public function setCommodityCode(?string $commodityCode): self
    {
        $this->commodityCode = $commodityCode;

        return $this;
    }

    /**
     * Weight of the item.
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * Weight of the item.
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Unit of measurement.
     */
    public function getWeightUnitOfMeasurement(): ?string
    {
        return $this->weightUnitOfMeasurement;
    }

    /**
     * Unit of measurement.
     */
    public function setWeightUnitOfMeasurement(?string $weightUnitOfMeasurement): self
    {
        $this->weightUnitOfMeasurement = $weightUnitOfMeasurement;

        return $this;
    }

    /**
     * Category code of the Item.<BR>            101 - Coats & Jacket<BR>            102 - Blazers<BR>            103 - Suits<BR>            104 - Ensembles<BR>            105 - Trousers<BR>            106 - Shirts & Blouses<BR>            107 - Dresses<BR>            108 - Skirts<BR>            109 - Jerseys, Sweatshirts & Pullovers<BR>            110 - Sports & Swimwear<BR>            111 - Night & Underwear<BR>            112 - T-Shirts<BR>            113 - Tights & Leggings<BR> 114 - Socks <BR>            115 - Baby Clothes<BR>            116 - Clothing Accessories<BR>            201 - Sneakers<BR>            202 - Athletic Footwear<BR>            203 - Leather Footwear<BR>            204 - Textile & Other Footwear<BR>            301 - Spectacle Lenses<BR>            302 - Sunglasses<BR>            303 - Eyewear Frames<BR> 304 - Contact Lenses<BR>            401 - Watches<BR> 402 - Jewelry<BR>            403 - Suitcases & Briefcases<BR>            404 - Handbags<BR>            405 - Wallets & Little Cases<BR>            406 - Bags & Containers<BR>            501 - Beer<BR>            502 - Spirits<BR>            503 - Wine<BR>            504 - Cider, Perry & Rice Wine<BR>            601 - Bottled Water<BR>            602 - Soft Drinks<BR>            603 - Juices<BR>            604 - Coffee<BR>            605 - Tea<BR>            606 - Cocoa<BR>            701 - Dairy Products & Eggs<BR>            702 - Meat<BR>            703 - Fish & Seafood<BR>            704 - Fruits & Nuts<BR>            705 - Vegetables<BR>            706 - Bread & Cereal Products<BR>            707 - Oils & Fats<BR>            708 - Sauces & Spices<BR>            709 - Convenience Food<BR>            710 - Spreads & Sweeteners<BR>            711 - Baby Food<BR>            712 - Pet Food<BR>            801 - Cigarettes<BR>            802 - Smoking Tobacco<BR>            803 - Cigars<BR>            804 - E-Cigarettes<BR>            901 - Household Cleaners<BR>            902 - Dishwashing Detergents<BR>            903 - Polishes<BR>            904 - Room Scents<BR>            905 - Insecticides<BR>            1001 - Cosmetics<BR>            1002 - Skin Care<BR>            1003 - Personal Care<BR>            1004 - Fragrances<BR>            1101 - Toilet Paper<BR>            1102 - Paper Tissues<BR> 1103 - Household Paper<BR>            1104 - Feminine Hygiene<BR>            1105 - Baby Diapers<BR>            1106 - Incontinence<BR>            1202 - TV, Radio & Multimedia<BR>            1203 - TV Peripheral Devices<BR>            1204 - Telephony<BR>            1205 - Computing<BR>            1206 - Drones<BR>            1301 - Refrigerators<BR>            1302 - Freezers<BR>            1303 - Dishwashing Machines<BR>            1304 - Washing Machines<BR>            1305 - Cookers & Oven<BR>            1306 - Vacuum Cleaners<BR>            1307 - Small Kitchen Appliances<BR>            1308 - Hair Clippers<BR>            1309 - Irons<BR>            1310 - Toasters<BR>            1311 - Grills & Roasters<BR>            1312 - Hair Dryers<BR> 1313 - Coffee Machines<BR>            1314 - Microwave Ovens<BR>            1315 - Electric Kettles<BR>            1401 - Seats & Sofas<BR>            1402 - Beds<BR>            1403 - Mattresses<BR>            1404 - Closets, Nightstands & Dressers<BR>            1405 - Lamps & Lighting<BR> 1406 - Floor Covering<BR>            1407 - Kitchen Furniture<BR>            1408 - Plastic & Other Furniture<BR>            1501 - Analgesics<BR>            1502 - Cold & Cough Remedies<BR>            1503 - Digestives & Intestinal Remedies<BR>            1504 - Skin Treatment<BR>            1505 - Vitamins & Minerals<BR> 1506 - Hand Sanitizer <BR>            1601 - Toys & Games<BR>            1602 - Musical Instruments<BR> 1603 - Sports Equipment.
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * Category code of the Item.<BR>            101 - Coats & Jacket<BR>            102 - Blazers<BR>            103 - Suits<BR>            104 - Ensembles<BR>            105 - Trousers<BR>            106 - Shirts & Blouses<BR>            107 - Dresses<BR>            108 - Skirts<BR>            109 - Jerseys, Sweatshirts & Pullovers<BR>            110 - Sports & Swimwear<BR>            111 - Night & Underwear<BR>            112 - T-Shirts<BR>            113 - Tights & Leggings<BR> 114 - Socks <BR>            115 - Baby Clothes<BR>            116 - Clothing Accessories<BR>            201 - Sneakers<BR>            202 - Athletic Footwear<BR>            203 - Leather Footwear<BR>            204 - Textile & Other Footwear<BR>            301 - Spectacle Lenses<BR>            302 - Sunglasses<BR>            303 - Eyewear Frames<BR> 304 - Contact Lenses<BR>            401 - Watches<BR> 402 - Jewelry<BR>            403 - Suitcases & Briefcases<BR>            404 - Handbags<BR>            405 - Wallets & Little Cases<BR>            406 - Bags & Containers<BR>            501 - Beer<BR>            502 - Spirits<BR>            503 - Wine<BR>            504 - Cider, Perry & Rice Wine<BR>            601 - Bottled Water<BR>            602 - Soft Drinks<BR>            603 - Juices<BR>            604 - Coffee<BR>            605 - Tea<BR>            606 - Cocoa<BR>            701 - Dairy Products & Eggs<BR>            702 - Meat<BR>            703 - Fish & Seafood<BR>            704 - Fruits & Nuts<BR>            705 - Vegetables<BR>            706 - Bread & Cereal Products<BR>            707 - Oils & Fats<BR>            708 - Sauces & Spices<BR>            709 - Convenience Food<BR>            710 - Spreads & Sweeteners<BR>            711 - Baby Food<BR>            712 - Pet Food<BR>            801 - Cigarettes<BR>            802 - Smoking Tobacco<BR>            803 - Cigars<BR>            804 - E-Cigarettes<BR>            901 - Household Cleaners<BR>            902 - Dishwashing Detergents<BR>            903 - Polishes<BR>            904 - Room Scents<BR>            905 - Insecticides<BR>            1001 - Cosmetics<BR>            1002 - Skin Care<BR>            1003 - Personal Care<BR>            1004 - Fragrances<BR>            1101 - Toilet Paper<BR>            1102 - Paper Tissues<BR> 1103 - Household Paper<BR>            1104 - Feminine Hygiene<BR>            1105 - Baby Diapers<BR>            1106 - Incontinence<BR>            1202 - TV, Radio & Multimedia<BR>            1203 - TV Peripheral Devices<BR>            1204 - Telephony<BR>            1205 - Computing<BR>            1206 - Drones<BR>            1301 - Refrigerators<BR>            1302 - Freezers<BR>            1303 - Dishwashing Machines<BR>            1304 - Washing Machines<BR>            1305 - Cookers & Oven<BR>            1306 - Vacuum Cleaners<BR>            1307 - Small Kitchen Appliances<BR>            1308 - Hair Clippers<BR>            1309 - Irons<BR>            1310 - Toasters<BR>            1311 - Grills & Roasters<BR>            1312 - Hair Dryers<BR> 1313 - Coffee Machines<BR>            1314 - Microwave Ovens<BR>            1315 - Electric Kettles<BR>            1401 - Seats & Sofas<BR>            1402 - Beds<BR>            1403 - Mattresses<BR>            1404 - Closets, Nightstands & Dressers<BR>            1405 - Lamps & Lighting<BR> 1406 - Floor Covering<BR>            1407 - Kitchen Furniture<BR>            1408 - Plastic & Other Furniture<BR>            1501 - Analgesics<BR>            1502 - Cold & Cough Remedies<BR>            1503 - Digestives & Intestinal Remedies<BR>            1504 - Skin Treatment<BR>            1505 - Vitamins & Minerals<BR> 1506 - Hand Sanitizer <BR>            1601 - Toys & Games<BR>            1602 - Musical Instruments<BR> 1603 - Sports Equipment.
     */
    public function setCategory(?string $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Item's brand.
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * Item's brand.
     */
    public function setBrand(?string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem[]|null
     */
    public function getGoodsCharacteristics(): ?array
    {
        return $this->goodsCharacteristics;
    }

    /**
     * @param SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem[]|null $goodsCharacteristics
     */
    public function setGoodsCharacteristics(?array $goodsCharacteristics): self
    {
        $this->goodsCharacteristics = $goodsCharacteristics;

        return $this;
    }

    /**
     * @return SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem[]|null
     */
    public function getAdditionalQuantityDefinitions(): ?array
    {
        return $this->additionalQuantityDefinitions;
    }

    /**
     * @param SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem[]|null $additionalQuantityDefinitions
     */
    public function setAdditionalQuantityDefinitions(?array $additionalQuantityDefinitions): self
    {
        $this->additionalQuantityDefinitions = $additionalQuantityDefinitions;

        return $this;
    }

    /**
     * Please enter Tariff Rate Type - default_rate,derived_rate,highest_rate,center_rate,lowest_rate.
     */
    public function getEstimatedTariffRateType(): ?string
    {
        return $this->estimatedTariffRateType;
    }

    /**
     * Please enter Tariff Rate Type - default_rate,derived_rate,highest_rate,center_rate,lowest_rate.
     */
    public function setEstimatedTariffRateType(?string $estimatedTariffRateType): self
    {
        $this->estimatedTariffRateType = $estimatedTariffRateType;

        return $this;
    }
}
