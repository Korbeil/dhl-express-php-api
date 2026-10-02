<?php

namespace Korbeil\DHLExpress\Api\Model\Common;

class SupermodelIoLogisticsExpressRegistrationNumbers
{
    /**
     * VAT, Value-Added tax<BR>      EIN, Employer Identification Number<BR>      GST, Goods and Service Tax<BR>      SSN, Social Security Number<BR>      EOR, European Union Registration and Identification<BR>      DUN, Data Universal Numberin System<BR> FED, Federal Tax ID<BR>      STA, State Tax ID<BR>      CNP, Brazil CNPJ/CPF Federal Tax<BR>      IE, Brazil type IE/RG Federal Tax<BR> INN, Russia bank details section INN<BR>      KPP, Russia bank details section KPP<BR>      OGR, Russia bank details section OGRN<BR>      OKP, Russia bank details sectionOKPO<BR>      SDT, Overseas Registered Supplier or Import One-Stop-Shop or GB VAT (foreign) registration or AUSid GST Registration or VAT on E-Commerce<BR>      FTZ, Free Trade Zone ID<BR>      DAN, Deferment Account Duties Only<BR>      TAN, Deferment Account Tax Only<BR>      DTF, Deferment Account Duties, Taxes and Fees Only<BR>      RGP, EU Registered Exporters registration ID<BR>       DLI,Driver's License <BR>      NID,National Identity Card<BR>      ,PAS:Passport<BR>      ,MID:Manufacturer ID.
     */
    public ?string $typeCode = 'VAT';
    /**
     * Please enter registration number.
     */
    public ?string $number;
    /**
     * Please enter 2 character code of the country where the Registration Number has been issued by.
     */
    public ?string $issuerCountryCode;
}
