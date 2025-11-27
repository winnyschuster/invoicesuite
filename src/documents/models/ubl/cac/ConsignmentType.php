<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\BrokerAssignedID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CarrierAssignedID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CarrierServiceInstructions;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ChargeableWeightMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ChildConsignmentQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ConsigneeAssignedID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ConsignmentQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ConsignorAssignedID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ContractedCarrierAssignedID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CustomsClearanceServiceInstructions;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DeclaredCustomsValueAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DeclaredForCarriageValueAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DeclaredStatisticsValueAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\DeliveryInstructions;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ForwarderServiceInstructions;
use horstoeko\invoicesuite\documents\models\ubl\cbc\FreeOnBoardValueAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\FreightForwarderAssignedID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\GrossVolumeMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\GrossWeightMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\HandlingCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\HandlingInstructions;
use horstoeko\invoicesuite\documents\models\ubl\cbc\HaulageInstructions;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Information;
use horstoeko\invoicesuite\documents\models\ubl\cbc\InsurancePremiumAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\InsuranceValueAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LoadingLengthMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LoadingSequenceID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\NetNetWeightMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\NetVolumeMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\NetWeightMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PerformingCarrierAssignedID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Remarks;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SequenceID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ShippingPriorityLevelCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SpecialInstructions;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SpecialServiceInstructions;
use horstoeko\invoicesuite\documents\models\ubl\cbc\SummaryDescription;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TariffCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TariffDescription;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TotalGoodsItemQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TotalInvoiceAmount;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TotalPackagesQuantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TotalTransportHandlingUnitQuantity;

class ConsignmentType
{
    use HandlesObjectFlags;

    /**
     * @var ID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ID")
     * @JMS\Expose
     * @JMS\SerializedName("ID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getID", setter="setID")
     */
    private $iD;

    /**
     * @var CarrierAssignedID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CarrierAssignedID")
     * @JMS\Expose
     * @JMS\SerializedName("CarrierAssignedID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCarrierAssignedID", setter="setCarrierAssignedID")
     */
    private $carrierAssignedID;

    /**
     * @var ConsigneeAssignedID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ConsigneeAssignedID")
     * @JMS\Expose
     * @JMS\SerializedName("ConsigneeAssignedID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsigneeAssignedID", setter="setConsigneeAssignedID")
     */
    private $consigneeAssignedID;

    /**
     * @var ConsignorAssignedID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ConsignorAssignedID")
     * @JMS\Expose
     * @JMS\SerializedName("ConsignorAssignedID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsignorAssignedID", setter="setConsignorAssignedID")
     */
    private $consignorAssignedID;

    /**
     * @var FreightForwarderAssignedID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\FreightForwarderAssignedID")
     * @JMS\Expose
     * @JMS\SerializedName("FreightForwarderAssignedID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFreightForwarderAssignedID", setter="setFreightForwarderAssignedID")
     */
    private $freightForwarderAssignedID;

    /**
     * @var BrokerAssignedID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\BrokerAssignedID")
     * @JMS\Expose
     * @JMS\SerializedName("BrokerAssignedID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBrokerAssignedID", setter="setBrokerAssignedID")
     */
    private $brokerAssignedID;

    /**
     * @var ContractedCarrierAssignedID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ContractedCarrierAssignedID")
     * @JMS\Expose
     * @JMS\SerializedName("ContractedCarrierAssignedID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContractedCarrierAssignedID", setter="setContractedCarrierAssignedID")
     */
    private $contractedCarrierAssignedID;

    /**
     * @var PerformingCarrierAssignedID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PerformingCarrierAssignedID")
     * @JMS\Expose
     * @JMS\SerializedName("PerformingCarrierAssignedID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPerformingCarrierAssignedID", setter="setPerformingCarrierAssignedID")
     */
    private $performingCarrierAssignedID;

    /**
     * @var array<SummaryDescription>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\SummaryDescription>")
     * @JMS\Expose
     * @JMS\SerializedName("SummaryDescription")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SummaryDescription", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getSummaryDescription", setter="setSummaryDescription")
     */
    private $summaryDescription;

    /**
     * @var TotalInvoiceAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TotalInvoiceAmount")
     * @JMS\Expose
     * @JMS\SerializedName("TotalInvoiceAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTotalInvoiceAmount", setter="setTotalInvoiceAmount")
     */
    private $totalInvoiceAmount;

    /**
     * @var DeclaredCustomsValueAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\DeclaredCustomsValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("DeclaredCustomsValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDeclaredCustomsValueAmount", setter="setDeclaredCustomsValueAmount")
     */
    private $declaredCustomsValueAmount;

    /**
     * @var array<TariffDescription>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\TariffDescription>")
     * @JMS\Expose
     * @JMS\SerializedName("TariffDescription")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TariffDescription", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getTariffDescription", setter="setTariffDescription")
     */
    private $tariffDescription;

    /**
     * @var TariffCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TariffCode")
     * @JMS\Expose
     * @JMS\SerializedName("TariffCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTariffCode", setter="setTariffCode")
     */
    private $tariffCode;

    /**
     * @var InsurancePremiumAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\InsurancePremiumAmount")
     * @JMS\Expose
     * @JMS\SerializedName("InsurancePremiumAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getInsurancePremiumAmount", setter="setInsurancePremiumAmount")
     */
    private $insurancePremiumAmount;

    /**
     * @var GrossWeightMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\GrossWeightMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("GrossWeightMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getGrossWeightMeasure", setter="setGrossWeightMeasure")
     */
    private $grossWeightMeasure;

    /**
     * @var NetWeightMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\NetWeightMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("NetWeightMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNetWeightMeasure", setter="setNetWeightMeasure")
     */
    private $netWeightMeasure;

    /**
     * @var NetNetWeightMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\NetNetWeightMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("NetNetWeightMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNetNetWeightMeasure", setter="setNetNetWeightMeasure")
     */
    private $netNetWeightMeasure;

    /**
     * @var ChargeableWeightMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ChargeableWeightMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("ChargeableWeightMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getChargeableWeightMeasure", setter="setChargeableWeightMeasure")
     */
    private $chargeableWeightMeasure;

    /**
     * @var GrossVolumeMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\GrossVolumeMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("GrossVolumeMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getGrossVolumeMeasure", setter="setGrossVolumeMeasure")
     */
    private $grossVolumeMeasure;

    /**
     * @var NetVolumeMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\NetVolumeMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("NetVolumeMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNetVolumeMeasure", setter="setNetVolumeMeasure")
     */
    private $netVolumeMeasure;

    /**
     * @var LoadingLengthMeasure|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LoadingLengthMeasure")
     * @JMS\Expose
     * @JMS\SerializedName("LoadingLengthMeasure")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLoadingLengthMeasure", setter="setLoadingLengthMeasure")
     */
    private $loadingLengthMeasure;

    /**
     * @var array<Remarks>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Remarks>")
     * @JMS\Expose
     * @JMS\SerializedName("Remarks")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Remarks", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getRemarks", setter="setRemarks")
     */
    private $remarks;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("HazardousRiskIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getHazardousRiskIndicator", setter="setHazardousRiskIndicator")
     */
    private $hazardousRiskIndicator;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("AnimalFoodIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAnimalFoodIndicator", setter="setAnimalFoodIndicator")
     */
    private $animalFoodIndicator;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("HumanFoodIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getHumanFoodIndicator", setter="setHumanFoodIndicator")
     */
    private $humanFoodIndicator;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("LivestockIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLivestockIndicator", setter="setLivestockIndicator")
     */
    private $livestockIndicator;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("BulkCargoIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBulkCargoIndicator", setter="setBulkCargoIndicator")
     */
    private $bulkCargoIndicator;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("ContainerizedIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContainerizedIndicator", setter="setContainerizedIndicator")
     */
    private $containerizedIndicator;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("GeneralCargoIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getGeneralCargoIndicator", setter="setGeneralCargoIndicator")
     */
    private $generalCargoIndicator;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("SpecialSecurityIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSpecialSecurityIndicator", setter="setSpecialSecurityIndicator")
     */
    private $specialSecurityIndicator;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("ThirdPartyPayerIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getThirdPartyPayerIndicator", setter="setThirdPartyPayerIndicator")
     */
    private $thirdPartyPayerIndicator;

    /**
     * @var array<CarrierServiceInstructions>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\CarrierServiceInstructions>")
     * @JMS\Expose
     * @JMS\SerializedName("CarrierServiceInstructions")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="CarrierServiceInstructions", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getCarrierServiceInstructions", setter="setCarrierServiceInstructions")
     */
    private $carrierServiceInstructions;

    /**
     * @var array<CustomsClearanceServiceInstructions>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\CustomsClearanceServiceInstructions>")
     * @JMS\Expose
     * @JMS\SerializedName("CustomsClearanceServiceInstructions")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="CustomsClearanceServiceInstructions", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getCustomsClearanceServiceInstructions", setter="setCustomsClearanceServiceInstructions")
     */
    private $customsClearanceServiceInstructions;

    /**
     * @var array<ForwarderServiceInstructions>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\ForwarderServiceInstructions>")
     * @JMS\Expose
     * @JMS\SerializedName("ForwarderServiceInstructions")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ForwarderServiceInstructions", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getForwarderServiceInstructions", setter="setForwarderServiceInstructions")
     */
    private $forwarderServiceInstructions;

    /**
     * @var array<SpecialServiceInstructions>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\SpecialServiceInstructions>")
     * @JMS\Expose
     * @JMS\SerializedName("SpecialServiceInstructions")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SpecialServiceInstructions", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getSpecialServiceInstructions", setter="setSpecialServiceInstructions")
     */
    private $specialServiceInstructions;

    /**
     * @var SequenceID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\SequenceID")
     * @JMS\Expose
     * @JMS\SerializedName("SequenceID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSequenceID", setter="setSequenceID")
     */
    private $sequenceID;

    /**
     * @var ShippingPriorityLevelCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ShippingPriorityLevelCode")
     * @JMS\Expose
     * @JMS\SerializedName("ShippingPriorityLevelCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getShippingPriorityLevelCode", setter="setShippingPriorityLevelCode")
     */
    private $shippingPriorityLevelCode;

    /**
     * @var HandlingCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\HandlingCode")
     * @JMS\Expose
     * @JMS\SerializedName("HandlingCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getHandlingCode", setter="setHandlingCode")
     */
    private $handlingCode;

    /**
     * @var array<HandlingInstructions>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\HandlingInstructions>")
     * @JMS\Expose
     * @JMS\SerializedName("HandlingInstructions")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="HandlingInstructions", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getHandlingInstructions", setter="setHandlingInstructions")
     */
    private $handlingInstructions;

    /**
     * @var array<Information>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\Information>")
     * @JMS\Expose
     * @JMS\SerializedName("Information")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Information", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getInformation", setter="setInformation")
     */
    private $information;

    /**
     * @var TotalGoodsItemQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TotalGoodsItemQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("TotalGoodsItemQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTotalGoodsItemQuantity", setter="setTotalGoodsItemQuantity")
     */
    private $totalGoodsItemQuantity;

    /**
     * @var TotalTransportHandlingUnitQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TotalTransportHandlingUnitQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("TotalTransportHandlingUnitQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTotalTransportHandlingUnitQuantity", setter="setTotalTransportHandlingUnitQuantity")
     */
    private $totalTransportHandlingUnitQuantity;

    /**
     * @var InsuranceValueAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\InsuranceValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("InsuranceValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getInsuranceValueAmount", setter="setInsuranceValueAmount")
     */
    private $insuranceValueAmount;

    /**
     * @var DeclaredForCarriageValueAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\DeclaredForCarriageValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("DeclaredForCarriageValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDeclaredForCarriageValueAmount", setter="setDeclaredForCarriageValueAmount")
     */
    private $declaredForCarriageValueAmount;

    /**
     * @var DeclaredStatisticsValueAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\DeclaredStatisticsValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("DeclaredStatisticsValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDeclaredStatisticsValueAmount", setter="setDeclaredStatisticsValueAmount")
     */
    private $declaredStatisticsValueAmount;

    /**
     * @var FreeOnBoardValueAmount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\FreeOnBoardValueAmount")
     * @JMS\Expose
     * @JMS\SerializedName("FreeOnBoardValueAmount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFreeOnBoardValueAmount", setter="setFreeOnBoardValueAmount")
     */
    private $freeOnBoardValueAmount;

    /**
     * @var array<SpecialInstructions>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\SpecialInstructions>")
     * @JMS\Expose
     * @JMS\SerializedName("SpecialInstructions")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SpecialInstructions", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getSpecialInstructions", setter="setSpecialInstructions")
     */
    private $specialInstructions;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("SplitConsignmentIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSplitConsignmentIndicator", setter="setSplitConsignmentIndicator")
     */
    private $splitConsignmentIndicator;

    /**
     * @var array<DeliveryInstructions>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\DeliveryInstructions>")
     * @JMS\Expose
     * @JMS\SerializedName("DeliveryInstructions")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="DeliveryInstructions", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getDeliveryInstructions", setter="setDeliveryInstructions")
     */
    private $deliveryInstructions;

    /**
     * @var ConsignmentQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ConsignmentQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ConsignmentQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsignmentQuantity", setter="setConsignmentQuantity")
     */
    private $consignmentQuantity;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("ConsolidatableIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsolidatableIndicator", setter="setConsolidatableIndicator")
     */
    private $consolidatableIndicator;

    /**
     * @var array<HaulageInstructions>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\HaulageInstructions>")
     * @JMS\Expose
     * @JMS\SerializedName("HaulageInstructions")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="HaulageInstructions", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getHaulageInstructions", setter="setHaulageInstructions")
     */
    private $haulageInstructions;

    /**
     * @var LoadingSequenceID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LoadingSequenceID")
     * @JMS\Expose
     * @JMS\SerializedName("LoadingSequenceID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLoadingSequenceID", setter="setLoadingSequenceID")
     */
    private $loadingSequenceID;

    /**
     * @var ChildConsignmentQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\ChildConsignmentQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("ChildConsignmentQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getChildConsignmentQuantity", setter="setChildConsignmentQuantity")
     */
    private $childConsignmentQuantity;

    /**
     * @var TotalPackagesQuantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TotalPackagesQuantity")
     * @JMS\Expose
     * @JMS\SerializedName("TotalPackagesQuantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTotalPackagesQuantity", setter="setTotalPackagesQuantity")
     */
    private $totalPackagesQuantity;

    /**
     * @var array<ConsolidatedShipment>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ConsolidatedShipment>")
     * @JMS\Expose
     * @JMS\SerializedName("ConsolidatedShipment")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ConsolidatedShipment", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getConsolidatedShipment", setter="setConsolidatedShipment")
     */
    private $consolidatedShipment;

    /**
     * @var array<CustomsDeclaration>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\CustomsDeclaration>")
     * @JMS\Expose
     * @JMS\SerializedName("CustomsDeclaration")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="CustomsDeclaration", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getCustomsDeclaration", setter="setCustomsDeclaration")
     */
    private $customsDeclaration;

    /**
     * @var RequestedPickupTransportEvent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\RequestedPickupTransportEvent")
     * @JMS\Expose
     * @JMS\SerializedName("RequestedPickupTransportEvent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRequestedPickupTransportEvent", setter="setRequestedPickupTransportEvent")
     */
    private $requestedPickupTransportEvent;

    /**
     * @var RequestedDeliveryTransportEvent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\RequestedDeliveryTransportEvent")
     * @JMS\Expose
     * @JMS\SerializedName("RequestedDeliveryTransportEvent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getRequestedDeliveryTransportEvent", setter="setRequestedDeliveryTransportEvent")
     */
    private $requestedDeliveryTransportEvent;

    /**
     * @var PlannedPickupTransportEvent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PlannedPickupTransportEvent")
     * @JMS\Expose
     * @JMS\SerializedName("PlannedPickupTransportEvent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPlannedPickupTransportEvent", setter="setPlannedPickupTransportEvent")
     */
    private $plannedPickupTransportEvent;

    /**
     * @var PlannedDeliveryTransportEvent|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PlannedDeliveryTransportEvent")
     * @JMS\Expose
     * @JMS\SerializedName("PlannedDeliveryTransportEvent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPlannedDeliveryTransportEvent", setter="setPlannedDeliveryTransportEvent")
     */
    private $plannedDeliveryTransportEvent;

    /**
     * @var array<Status>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\Status>")
     * @JMS\Expose
     * @JMS\SerializedName("Status")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Status", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getStatus", setter="setStatus")
     */
    private $status;

    /**
     * @var array<ChildConsignment>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ChildConsignment>")
     * @JMS\Expose
     * @JMS\SerializedName("ChildConsignment")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ChildConsignment", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getChildConsignment", setter="setChildConsignment")
     */
    private $childConsignment;

    /**
     * @var ConsigneeParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ConsigneeParty")
     * @JMS\Expose
     * @JMS\SerializedName("ConsigneeParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsigneeParty", setter="setConsigneeParty")
     */
    private $consigneeParty;

    /**
     * @var ExporterParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ExporterParty")
     * @JMS\Expose
     * @JMS\SerializedName("ExporterParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getExporterParty", setter="setExporterParty")
     */
    private $exporterParty;

    /**
     * @var ConsignorParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ConsignorParty")
     * @JMS\Expose
     * @JMS\SerializedName("ConsignorParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getConsignorParty", setter="setConsignorParty")
     */
    private $consignorParty;

    /**
     * @var ImporterParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ImporterParty")
     * @JMS\Expose
     * @JMS\SerializedName("ImporterParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getImporterParty", setter="setImporterParty")
     */
    private $importerParty;

    /**
     * @var CarrierParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\CarrierParty")
     * @JMS\Expose
     * @JMS\SerializedName("CarrierParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCarrierParty", setter="setCarrierParty")
     */
    private $carrierParty;

    /**
     * @var FreightForwarderParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\FreightForwarderParty")
     * @JMS\Expose
     * @JMS\SerializedName("FreightForwarderParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFreightForwarderParty", setter="setFreightForwarderParty")
     */
    private $freightForwarderParty;

    /**
     * @var NotifyParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\NotifyParty")
     * @JMS\Expose
     * @JMS\SerializedName("NotifyParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getNotifyParty", setter="setNotifyParty")
     */
    private $notifyParty;

    /**
     * @var OriginalDespatchParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\OriginalDespatchParty")
     * @JMS\Expose
     * @JMS\SerializedName("OriginalDespatchParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOriginalDespatchParty", setter="setOriginalDespatchParty")
     */
    private $originalDespatchParty;

    /**
     * @var FinalDeliveryParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\FinalDeliveryParty")
     * @JMS\Expose
     * @JMS\SerializedName("FinalDeliveryParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFinalDeliveryParty", setter="setFinalDeliveryParty")
     */
    private $finalDeliveryParty;

    /**
     * @var PerformingCarrierParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PerformingCarrierParty")
     * @JMS\Expose
     * @JMS\SerializedName("PerformingCarrierParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPerformingCarrierParty", setter="setPerformingCarrierParty")
     */
    private $performingCarrierParty;

    /**
     * @var SubstituteCarrierParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\SubstituteCarrierParty")
     * @JMS\Expose
     * @JMS\SerializedName("SubstituteCarrierParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getSubstituteCarrierParty", setter="setSubstituteCarrierParty")
     */
    private $substituteCarrierParty;

    /**
     * @var LogisticsOperatorParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\LogisticsOperatorParty")
     * @JMS\Expose
     * @JMS\SerializedName("LogisticsOperatorParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLogisticsOperatorParty", setter="setLogisticsOperatorParty")
     */
    private $logisticsOperatorParty;

    /**
     * @var TransportAdvisorParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\TransportAdvisorParty")
     * @JMS\Expose
     * @JMS\SerializedName("TransportAdvisorParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTransportAdvisorParty", setter="setTransportAdvisorParty")
     */
    private $transportAdvisorParty;

    /**
     * @var HazardousItemNotificationParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\HazardousItemNotificationParty")
     * @JMS\Expose
     * @JMS\SerializedName("HazardousItemNotificationParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getHazardousItemNotificationParty", setter="setHazardousItemNotificationParty")
     */
    private $hazardousItemNotificationParty;

    /**
     * @var InsuranceParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\InsuranceParty")
     * @JMS\Expose
     * @JMS\SerializedName("InsuranceParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getInsuranceParty", setter="setInsuranceParty")
     */
    private $insuranceParty;

    /**
     * @var MortgageHolderParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\MortgageHolderParty")
     * @JMS\Expose
     * @JMS\SerializedName("MortgageHolderParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMortgageHolderParty", setter="setMortgageHolderParty")
     */
    private $mortgageHolderParty;

    /**
     * @var BillOfLadingHolderParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\BillOfLadingHolderParty")
     * @JMS\Expose
     * @JMS\SerializedName("BillOfLadingHolderParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getBillOfLadingHolderParty", setter="setBillOfLadingHolderParty")
     */
    private $billOfLadingHolderParty;

    /**
     * @var OriginalDepartureCountry|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\OriginalDepartureCountry")
     * @JMS\Expose
     * @JMS\SerializedName("OriginalDepartureCountry")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOriginalDepartureCountry", setter="setOriginalDepartureCountry")
     */
    private $originalDepartureCountry;

    /**
     * @var FinalDestinationCountry|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\FinalDestinationCountry")
     * @JMS\Expose
     * @JMS\SerializedName("FinalDestinationCountry")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFinalDestinationCountry", setter="setFinalDestinationCountry")
     */
    private $finalDestinationCountry;

    /**
     * @var array<TransitCountry>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\TransitCountry>")
     * @JMS\Expose
     * @JMS\SerializedName("TransitCountry")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TransitCountry", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getTransitCountry", setter="setTransitCountry")
     */
    private $transitCountry;

    /**
     * @var TransportContract|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\TransportContract")
     * @JMS\Expose
     * @JMS\SerializedName("TransportContract")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTransportContract", setter="setTransportContract")
     */
    private $transportContract;

    /**
     * @var array<TransportEvent>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\TransportEvent>")
     * @JMS\Expose
     * @JMS\SerializedName("TransportEvent")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TransportEvent", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getTransportEvent", setter="setTransportEvent")
     */
    private $transportEvent;

    /**
     * @var OriginalDespatchTransportationService|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\OriginalDespatchTransportationService")
     * @JMS\Expose
     * @JMS\SerializedName("OriginalDespatchTransportationService")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getOriginalDespatchTransportationService", setter="setOriginalDespatchTransportationService")
     */
    private $originalDespatchTransportationService;

    /**
     * @var FinalDeliveryTransportationService|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\FinalDeliveryTransportationService")
     * @JMS\Expose
     * @JMS\SerializedName("FinalDeliveryTransportationService")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFinalDeliveryTransportationService", setter="setFinalDeliveryTransportationService")
     */
    private $finalDeliveryTransportationService;

    /**
     * @var DeliveryTerms|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\DeliveryTerms")
     * @JMS\Expose
     * @JMS\SerializedName("DeliveryTerms")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDeliveryTerms", setter="setDeliveryTerms")
     */
    private $deliveryTerms;

    /**
     * @var PaymentTerms|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PaymentTerms")
     * @JMS\Expose
     * @JMS\SerializedName("PaymentTerms")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPaymentTerms", setter="setPaymentTerms")
     */
    private $paymentTerms;

    /**
     * @var CollectPaymentTerms|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\CollectPaymentTerms")
     * @JMS\Expose
     * @JMS\SerializedName("CollectPaymentTerms")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCollectPaymentTerms", setter="setCollectPaymentTerms")
     */
    private $collectPaymentTerms;

    /**
     * @var DisbursementPaymentTerms|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\DisbursementPaymentTerms")
     * @JMS\Expose
     * @JMS\SerializedName("DisbursementPaymentTerms")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getDisbursementPaymentTerms", setter="setDisbursementPaymentTerms")
     */
    private $disbursementPaymentTerms;

    /**
     * @var PrepaidPaymentTerms|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PrepaidPaymentTerms")
     * @JMS\Expose
     * @JMS\SerializedName("PrepaidPaymentTerms")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPrepaidPaymentTerms", setter="setPrepaidPaymentTerms")
     */
    private $prepaidPaymentTerms;

    /**
     * @var array<FreightAllowanceCharge>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\FreightAllowanceCharge>")
     * @JMS\Expose
     * @JMS\SerializedName("FreightAllowanceCharge")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="FreightAllowanceCharge", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getFreightAllowanceCharge", setter="setFreightAllowanceCharge")
     */
    private $freightAllowanceCharge;

    /**
     * @var array<ExtraAllowanceCharge>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ExtraAllowanceCharge>")
     * @JMS\Expose
     * @JMS\SerializedName("ExtraAllowanceCharge")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ExtraAllowanceCharge", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getExtraAllowanceCharge", setter="setExtraAllowanceCharge")
     */
    private $extraAllowanceCharge;

    /**
     * @var array<MainCarriageShipmentStage>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\MainCarriageShipmentStage>")
     * @JMS\Expose
     * @JMS\SerializedName("MainCarriageShipmentStage")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="MainCarriageShipmentStage", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getMainCarriageShipmentStage", setter="setMainCarriageShipmentStage")
     */
    private $mainCarriageShipmentStage;

    /**
     * @var array<PreCarriageShipmentStage>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\PreCarriageShipmentStage>")
     * @JMS\Expose
     * @JMS\SerializedName("PreCarriageShipmentStage")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="PreCarriageShipmentStage", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getPreCarriageShipmentStage", setter="setPreCarriageShipmentStage")
     */
    private $preCarriageShipmentStage;

    /**
     * @var array<OnCarriageShipmentStage>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\OnCarriageShipmentStage>")
     * @JMS\Expose
     * @JMS\SerializedName("OnCarriageShipmentStage")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="OnCarriageShipmentStage", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getOnCarriageShipmentStage", setter="setOnCarriageShipmentStage")
     */
    private $onCarriageShipmentStage;

    /**
     * @var array<TransportHandlingUnit>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\TransportHandlingUnit>")
     * @JMS\Expose
     * @JMS\SerializedName("TransportHandlingUnit")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="TransportHandlingUnit", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getTransportHandlingUnit", setter="setTransportHandlingUnit")
     */
    private $transportHandlingUnit;

    /**
     * @var FirstArrivalPortLocation|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\FirstArrivalPortLocation")
     * @JMS\Expose
     * @JMS\SerializedName("FirstArrivalPortLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFirstArrivalPortLocation", setter="setFirstArrivalPortLocation")
     */
    private $firstArrivalPortLocation;

    /**
     * @var LastExitPortLocation|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\LastExitPortLocation")
     * @JMS\Expose
     * @JMS\SerializedName("LastExitPortLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLastExitPortLocation", setter="setLastExitPortLocation")
     */
    private $lastExitPortLocation;

    /**
     * @return ID|null
     */
    public function getID(): ?ID
    {
        return $this->iD;
    }

    /**
     * @return ID
     */
    public function getIDWithCreate(): ID
    {
        $this->iD = is_null($this->iD) ? new ID() : $this->iD;

        return $this->iD;
    }

    /**
     * @param ID|null $iD
     * @return static
     */
    public function setID(?ID $iD = null): static
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetID(): static
    {
        $this->iD = null;

        return $this;
    }

    /**
     * @return CarrierAssignedID|null
     */
    public function getCarrierAssignedID(): ?CarrierAssignedID
    {
        return $this->carrierAssignedID;
    }

    /**
     * @return CarrierAssignedID
     */
    public function getCarrierAssignedIDWithCreate(): CarrierAssignedID
    {
        $this->carrierAssignedID = is_null($this->carrierAssignedID) ? new CarrierAssignedID() : $this->carrierAssignedID;

        return $this->carrierAssignedID;
    }

    /**
     * @param CarrierAssignedID|null $carrierAssignedID
     * @return static
     */
    public function setCarrierAssignedID(?CarrierAssignedID $carrierAssignedID = null): static
    {
        $this->carrierAssignedID = $carrierAssignedID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCarrierAssignedID(): static
    {
        $this->carrierAssignedID = null;

        return $this;
    }

    /**
     * @return ConsigneeAssignedID|null
     */
    public function getConsigneeAssignedID(): ?ConsigneeAssignedID
    {
        return $this->consigneeAssignedID;
    }

    /**
     * @return ConsigneeAssignedID
     */
    public function getConsigneeAssignedIDWithCreate(): ConsigneeAssignedID
    {
        $this->consigneeAssignedID = is_null($this->consigneeAssignedID) ? new ConsigneeAssignedID() : $this->consigneeAssignedID;

        return $this->consigneeAssignedID;
    }

    /**
     * @param ConsigneeAssignedID|null $consigneeAssignedID
     * @return static
     */
    public function setConsigneeAssignedID(?ConsigneeAssignedID $consigneeAssignedID = null): static
    {
        $this->consigneeAssignedID = $consigneeAssignedID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetConsigneeAssignedID(): static
    {
        $this->consigneeAssignedID = null;

        return $this;
    }

    /**
     * @return ConsignorAssignedID|null
     */
    public function getConsignorAssignedID(): ?ConsignorAssignedID
    {
        return $this->consignorAssignedID;
    }

    /**
     * @return ConsignorAssignedID
     */
    public function getConsignorAssignedIDWithCreate(): ConsignorAssignedID
    {
        $this->consignorAssignedID = is_null($this->consignorAssignedID) ? new ConsignorAssignedID() : $this->consignorAssignedID;

        return $this->consignorAssignedID;
    }

    /**
     * @param ConsignorAssignedID|null $consignorAssignedID
     * @return static
     */
    public function setConsignorAssignedID(?ConsignorAssignedID $consignorAssignedID = null): static
    {
        $this->consignorAssignedID = $consignorAssignedID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetConsignorAssignedID(): static
    {
        $this->consignorAssignedID = null;

        return $this;
    }

    /**
     * @return FreightForwarderAssignedID|null
     */
    public function getFreightForwarderAssignedID(): ?FreightForwarderAssignedID
    {
        return $this->freightForwarderAssignedID;
    }

    /**
     * @return FreightForwarderAssignedID
     */
    public function getFreightForwarderAssignedIDWithCreate(): FreightForwarderAssignedID
    {
        $this->freightForwarderAssignedID = is_null($this->freightForwarderAssignedID) ? new FreightForwarderAssignedID() : $this->freightForwarderAssignedID;

        return $this->freightForwarderAssignedID;
    }

    /**
     * @param FreightForwarderAssignedID|null $freightForwarderAssignedID
     * @return static
     */
    public function setFreightForwarderAssignedID(
        ?FreightForwarderAssignedID $freightForwarderAssignedID = null,
    ): static {
        $this->freightForwarderAssignedID = $freightForwarderAssignedID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFreightForwarderAssignedID(): static
    {
        $this->freightForwarderAssignedID = null;

        return $this;
    }

    /**
     * @return BrokerAssignedID|null
     */
    public function getBrokerAssignedID(): ?BrokerAssignedID
    {
        return $this->brokerAssignedID;
    }

    /**
     * @return BrokerAssignedID
     */
    public function getBrokerAssignedIDWithCreate(): BrokerAssignedID
    {
        $this->brokerAssignedID = is_null($this->brokerAssignedID) ? new BrokerAssignedID() : $this->brokerAssignedID;

        return $this->brokerAssignedID;
    }

    /**
     * @param BrokerAssignedID|null $brokerAssignedID
     * @return static
     */
    public function setBrokerAssignedID(?BrokerAssignedID $brokerAssignedID = null): static
    {
        $this->brokerAssignedID = $brokerAssignedID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBrokerAssignedID(): static
    {
        $this->brokerAssignedID = null;

        return $this;
    }

    /**
     * @return ContractedCarrierAssignedID|null
     */
    public function getContractedCarrierAssignedID(): ?ContractedCarrierAssignedID
    {
        return $this->contractedCarrierAssignedID;
    }

    /**
     * @return ContractedCarrierAssignedID
     */
    public function getContractedCarrierAssignedIDWithCreate(): ContractedCarrierAssignedID
    {
        $this->contractedCarrierAssignedID = is_null($this->contractedCarrierAssignedID) ? new ContractedCarrierAssignedID() : $this->contractedCarrierAssignedID;

        return $this->contractedCarrierAssignedID;
    }

    /**
     * @param ContractedCarrierAssignedID|null $contractedCarrierAssignedID
     * @return static
     */
    public function setContractedCarrierAssignedID(
        ?ContractedCarrierAssignedID $contractedCarrierAssignedID = null,
    ): static {
        $this->contractedCarrierAssignedID = $contractedCarrierAssignedID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetContractedCarrierAssignedID(): static
    {
        $this->contractedCarrierAssignedID = null;

        return $this;
    }

    /**
     * @return PerformingCarrierAssignedID|null
     */
    public function getPerformingCarrierAssignedID(): ?PerformingCarrierAssignedID
    {
        return $this->performingCarrierAssignedID;
    }

    /**
     * @return PerformingCarrierAssignedID
     */
    public function getPerformingCarrierAssignedIDWithCreate(): PerformingCarrierAssignedID
    {
        $this->performingCarrierAssignedID = is_null($this->performingCarrierAssignedID) ? new PerformingCarrierAssignedID() : $this->performingCarrierAssignedID;

        return $this->performingCarrierAssignedID;
    }

    /**
     * @param PerformingCarrierAssignedID|null $performingCarrierAssignedID
     * @return static
     */
    public function setPerformingCarrierAssignedID(
        ?PerformingCarrierAssignedID $performingCarrierAssignedID = null,
    ): static {
        $this->performingCarrierAssignedID = $performingCarrierAssignedID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPerformingCarrierAssignedID(): static
    {
        $this->performingCarrierAssignedID = null;

        return $this;
    }

    /**
     * @return array<SummaryDescription>|null
     */
    public function getSummaryDescription(): ?array
    {
        return $this->summaryDescription;
    }

    /**
     * @param array<SummaryDescription>|null $summaryDescription
     * @return static
     */
    public function setSummaryDescription(?array $summaryDescription = null): static
    {
        $this->summaryDescription = $summaryDescription;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSummaryDescription(): static
    {
        $this->summaryDescription = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearSummaryDescription(): static
    {
        $this->summaryDescription = [];

        return $this;
    }

    /**
     * @return SummaryDescription|null
     */
    public function firstSummaryDescription(): ?SummaryDescription
    {
        $summaryDescription = $this->summaryDescription ?? [];
        $summaryDescription = reset($summaryDescription);

        if ($summaryDescription === false) {
            return null;
        }

        return $summaryDescription;
    }

    /**
     * @return SummaryDescription|null
     */
    public function lastSummaryDescription(): ?SummaryDescription
    {
        $summaryDescription = $this->summaryDescription ?? [];
        $summaryDescription = end($summaryDescription);

        if ($summaryDescription === false) {
            return null;
        }

        return $summaryDescription;
    }

    /**
     * @param SummaryDescription $summaryDescription
     * @return static
     */
    public function addToSummaryDescription(SummaryDescription $summaryDescription): static
    {
        $this->summaryDescription[] = $summaryDescription;

        return $this;
    }

    /**
     * @return SummaryDescription
     */
    public function addToSummaryDescriptionWithCreate(): SummaryDescription
    {
        $this->addTosummaryDescription($summaryDescription = new SummaryDescription());

        return $summaryDescription;
    }

    /**
     * @param SummaryDescription $summaryDescription
     * @return static
     */
    public function addOnceToSummaryDescription(SummaryDescription $summaryDescription): static
    {
        if (!is_array($this->summaryDescription)) {
            $this->summaryDescription = [];
        }

        $this->summaryDescription[0] = $summaryDescription;

        return $this;
    }

    /**
     * @return SummaryDescription
     */
    public function addOnceToSummaryDescriptionWithCreate(): SummaryDescription
    {
        if (!is_array($this->summaryDescription)) {
            $this->summaryDescription = [];
        }

        if ($this->summaryDescription === []) {
            $this->addOnceTosummaryDescription(new SummaryDescription());
        }

        return $this->summaryDescription[0];
    }

    /**
     * @return TotalInvoiceAmount|null
     */
    public function getTotalInvoiceAmount(): ?TotalInvoiceAmount
    {
        return $this->totalInvoiceAmount;
    }

    /**
     * @return TotalInvoiceAmount
     */
    public function getTotalInvoiceAmountWithCreate(): TotalInvoiceAmount
    {
        $this->totalInvoiceAmount = is_null($this->totalInvoiceAmount) ? new TotalInvoiceAmount() : $this->totalInvoiceAmount;

        return $this->totalInvoiceAmount;
    }

    /**
     * @param TotalInvoiceAmount|null $totalInvoiceAmount
     * @return static
     */
    public function setTotalInvoiceAmount(?TotalInvoiceAmount $totalInvoiceAmount = null): static
    {
        $this->totalInvoiceAmount = $totalInvoiceAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTotalInvoiceAmount(): static
    {
        $this->totalInvoiceAmount = null;

        return $this;
    }

    /**
     * @return DeclaredCustomsValueAmount|null
     */
    public function getDeclaredCustomsValueAmount(): ?DeclaredCustomsValueAmount
    {
        return $this->declaredCustomsValueAmount;
    }

    /**
     * @return DeclaredCustomsValueAmount
     */
    public function getDeclaredCustomsValueAmountWithCreate(): DeclaredCustomsValueAmount
    {
        $this->declaredCustomsValueAmount = is_null($this->declaredCustomsValueAmount) ? new DeclaredCustomsValueAmount() : $this->declaredCustomsValueAmount;

        return $this->declaredCustomsValueAmount;
    }

    /**
     * @param DeclaredCustomsValueAmount|null $declaredCustomsValueAmount
     * @return static
     */
    public function setDeclaredCustomsValueAmount(
        ?DeclaredCustomsValueAmount $declaredCustomsValueAmount = null,
    ): static {
        $this->declaredCustomsValueAmount = $declaredCustomsValueAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDeclaredCustomsValueAmount(): static
    {
        $this->declaredCustomsValueAmount = null;

        return $this;
    }

    /**
     * @return array<TariffDescription>|null
     */
    public function getTariffDescription(): ?array
    {
        return $this->tariffDescription;
    }

    /**
     * @param array<TariffDescription>|null $tariffDescription
     * @return static
     */
    public function setTariffDescription(?array $tariffDescription = null): static
    {
        $this->tariffDescription = $tariffDescription;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTariffDescription(): static
    {
        $this->tariffDescription = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearTariffDescription(): static
    {
        $this->tariffDescription = [];

        return $this;
    }

    /**
     * @return TariffDescription|null
     */
    public function firstTariffDescription(): ?TariffDescription
    {
        $tariffDescription = $this->tariffDescription ?? [];
        $tariffDescription = reset($tariffDescription);

        if ($tariffDescription === false) {
            return null;
        }

        return $tariffDescription;
    }

    /**
     * @return TariffDescription|null
     */
    public function lastTariffDescription(): ?TariffDescription
    {
        $tariffDescription = $this->tariffDescription ?? [];
        $tariffDescription = end($tariffDescription);

        if ($tariffDescription === false) {
            return null;
        }

        return $tariffDescription;
    }

    /**
     * @param TariffDescription $tariffDescription
     * @return static
     */
    public function addToTariffDescription(TariffDescription $tariffDescription): static
    {
        $this->tariffDescription[] = $tariffDescription;

        return $this;
    }

    /**
     * @return TariffDescription
     */
    public function addToTariffDescriptionWithCreate(): TariffDescription
    {
        $this->addTotariffDescription($tariffDescription = new TariffDescription());

        return $tariffDescription;
    }

    /**
     * @param TariffDescription $tariffDescription
     * @return static
     */
    public function addOnceToTariffDescription(TariffDescription $tariffDescription): static
    {
        if (!is_array($this->tariffDescription)) {
            $this->tariffDescription = [];
        }

        $this->tariffDescription[0] = $tariffDescription;

        return $this;
    }

    /**
     * @return TariffDescription
     */
    public function addOnceToTariffDescriptionWithCreate(): TariffDescription
    {
        if (!is_array($this->tariffDescription)) {
            $this->tariffDescription = [];
        }

        if ($this->tariffDescription === []) {
            $this->addOnceTotariffDescription(new TariffDescription());
        }

        return $this->tariffDescription[0];
    }

    /**
     * @return TariffCode|null
     */
    public function getTariffCode(): ?TariffCode
    {
        return $this->tariffCode;
    }

    /**
     * @return TariffCode
     */
    public function getTariffCodeWithCreate(): TariffCode
    {
        $this->tariffCode = is_null($this->tariffCode) ? new TariffCode() : $this->tariffCode;

        return $this->tariffCode;
    }

    /**
     * @param TariffCode|null $tariffCode
     * @return static
     */
    public function setTariffCode(?TariffCode $tariffCode = null): static
    {
        $this->tariffCode = $tariffCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTariffCode(): static
    {
        $this->tariffCode = null;

        return $this;
    }

    /**
     * @return InsurancePremiumAmount|null
     */
    public function getInsurancePremiumAmount(): ?InsurancePremiumAmount
    {
        return $this->insurancePremiumAmount;
    }

    /**
     * @return InsurancePremiumAmount
     */
    public function getInsurancePremiumAmountWithCreate(): InsurancePremiumAmount
    {
        $this->insurancePremiumAmount = is_null($this->insurancePremiumAmount) ? new InsurancePremiumAmount() : $this->insurancePremiumAmount;

        return $this->insurancePremiumAmount;
    }

    /**
     * @param InsurancePremiumAmount|null $insurancePremiumAmount
     * @return static
     */
    public function setInsurancePremiumAmount(?InsurancePremiumAmount $insurancePremiumAmount = null): static
    {
        $this->insurancePremiumAmount = $insurancePremiumAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetInsurancePremiumAmount(): static
    {
        $this->insurancePremiumAmount = null;

        return $this;
    }

    /**
     * @return GrossWeightMeasure|null
     */
    public function getGrossWeightMeasure(): ?GrossWeightMeasure
    {
        return $this->grossWeightMeasure;
    }

    /**
     * @return GrossWeightMeasure
     */
    public function getGrossWeightMeasureWithCreate(): GrossWeightMeasure
    {
        $this->grossWeightMeasure = is_null($this->grossWeightMeasure) ? new GrossWeightMeasure() : $this->grossWeightMeasure;

        return $this->grossWeightMeasure;
    }

    /**
     * @param GrossWeightMeasure|null $grossWeightMeasure
     * @return static
     */
    public function setGrossWeightMeasure(?GrossWeightMeasure $grossWeightMeasure = null): static
    {
        $this->grossWeightMeasure = $grossWeightMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetGrossWeightMeasure(): static
    {
        $this->grossWeightMeasure = null;

        return $this;
    }

    /**
     * @return NetWeightMeasure|null
     */
    public function getNetWeightMeasure(): ?NetWeightMeasure
    {
        return $this->netWeightMeasure;
    }

    /**
     * @return NetWeightMeasure
     */
    public function getNetWeightMeasureWithCreate(): NetWeightMeasure
    {
        $this->netWeightMeasure = is_null($this->netWeightMeasure) ? new NetWeightMeasure() : $this->netWeightMeasure;

        return $this->netWeightMeasure;
    }

    /**
     * @param NetWeightMeasure|null $netWeightMeasure
     * @return static
     */
    public function setNetWeightMeasure(?NetWeightMeasure $netWeightMeasure = null): static
    {
        $this->netWeightMeasure = $netWeightMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetNetWeightMeasure(): static
    {
        $this->netWeightMeasure = null;

        return $this;
    }

    /**
     * @return NetNetWeightMeasure|null
     */
    public function getNetNetWeightMeasure(): ?NetNetWeightMeasure
    {
        return $this->netNetWeightMeasure;
    }

    /**
     * @return NetNetWeightMeasure
     */
    public function getNetNetWeightMeasureWithCreate(): NetNetWeightMeasure
    {
        $this->netNetWeightMeasure = is_null($this->netNetWeightMeasure) ? new NetNetWeightMeasure() : $this->netNetWeightMeasure;

        return $this->netNetWeightMeasure;
    }

    /**
     * @param NetNetWeightMeasure|null $netNetWeightMeasure
     * @return static
     */
    public function setNetNetWeightMeasure(?NetNetWeightMeasure $netNetWeightMeasure = null): static
    {
        $this->netNetWeightMeasure = $netNetWeightMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetNetNetWeightMeasure(): static
    {
        $this->netNetWeightMeasure = null;

        return $this;
    }

    /**
     * @return ChargeableWeightMeasure|null
     */
    public function getChargeableWeightMeasure(): ?ChargeableWeightMeasure
    {
        return $this->chargeableWeightMeasure;
    }

    /**
     * @return ChargeableWeightMeasure
     */
    public function getChargeableWeightMeasureWithCreate(): ChargeableWeightMeasure
    {
        $this->chargeableWeightMeasure = is_null($this->chargeableWeightMeasure) ? new ChargeableWeightMeasure() : $this->chargeableWeightMeasure;

        return $this->chargeableWeightMeasure;
    }

    /**
     * @param ChargeableWeightMeasure|null $chargeableWeightMeasure
     * @return static
     */
    public function setChargeableWeightMeasure(?ChargeableWeightMeasure $chargeableWeightMeasure = null): static
    {
        $this->chargeableWeightMeasure = $chargeableWeightMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetChargeableWeightMeasure(): static
    {
        $this->chargeableWeightMeasure = null;

        return $this;
    }

    /**
     * @return GrossVolumeMeasure|null
     */
    public function getGrossVolumeMeasure(): ?GrossVolumeMeasure
    {
        return $this->grossVolumeMeasure;
    }

    /**
     * @return GrossVolumeMeasure
     */
    public function getGrossVolumeMeasureWithCreate(): GrossVolumeMeasure
    {
        $this->grossVolumeMeasure = is_null($this->grossVolumeMeasure) ? new GrossVolumeMeasure() : $this->grossVolumeMeasure;

        return $this->grossVolumeMeasure;
    }

    /**
     * @param GrossVolumeMeasure|null $grossVolumeMeasure
     * @return static
     */
    public function setGrossVolumeMeasure(?GrossVolumeMeasure $grossVolumeMeasure = null): static
    {
        $this->grossVolumeMeasure = $grossVolumeMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetGrossVolumeMeasure(): static
    {
        $this->grossVolumeMeasure = null;

        return $this;
    }

    /**
     * @return NetVolumeMeasure|null
     */
    public function getNetVolumeMeasure(): ?NetVolumeMeasure
    {
        return $this->netVolumeMeasure;
    }

    /**
     * @return NetVolumeMeasure
     */
    public function getNetVolumeMeasureWithCreate(): NetVolumeMeasure
    {
        $this->netVolumeMeasure = is_null($this->netVolumeMeasure) ? new NetVolumeMeasure() : $this->netVolumeMeasure;

        return $this->netVolumeMeasure;
    }

    /**
     * @param NetVolumeMeasure|null $netVolumeMeasure
     * @return static
     */
    public function setNetVolumeMeasure(?NetVolumeMeasure $netVolumeMeasure = null): static
    {
        $this->netVolumeMeasure = $netVolumeMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetNetVolumeMeasure(): static
    {
        $this->netVolumeMeasure = null;

        return $this;
    }

    /**
     * @return LoadingLengthMeasure|null
     */
    public function getLoadingLengthMeasure(): ?LoadingLengthMeasure
    {
        return $this->loadingLengthMeasure;
    }

    /**
     * @return LoadingLengthMeasure
     */
    public function getLoadingLengthMeasureWithCreate(): LoadingLengthMeasure
    {
        $this->loadingLengthMeasure = is_null($this->loadingLengthMeasure) ? new LoadingLengthMeasure() : $this->loadingLengthMeasure;

        return $this->loadingLengthMeasure;
    }

    /**
     * @param LoadingLengthMeasure|null $loadingLengthMeasure
     * @return static
     */
    public function setLoadingLengthMeasure(?LoadingLengthMeasure $loadingLengthMeasure = null): static
    {
        $this->loadingLengthMeasure = $loadingLengthMeasure;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLoadingLengthMeasure(): static
    {
        $this->loadingLengthMeasure = null;

        return $this;
    }

    /**
     * @return array<Remarks>|null
     */
    public function getRemarks(): ?array
    {
        return $this->remarks;
    }

    /**
     * @param array<Remarks>|null $remarks
     * @return static
     */
    public function setRemarks(?array $remarks = null): static
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetRemarks(): static
    {
        $this->remarks = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearRemarks(): static
    {
        $this->remarks = [];

        return $this;
    }

    /**
     * @return Remarks|null
     */
    public function firstRemarks(): ?Remarks
    {
        $remarks = $this->remarks ?? [];
        $remarks = reset($remarks);

        if ($remarks === false) {
            return null;
        }

        return $remarks;
    }

    /**
     * @return Remarks|null
     */
    public function lastRemarks(): ?Remarks
    {
        $remarks = $this->remarks ?? [];
        $remarks = end($remarks);

        if ($remarks === false) {
            return null;
        }

        return $remarks;
    }

    /**
     * @param Remarks $remarks
     * @return static
     */
    public function addToRemarks(Remarks $remarks): static
    {
        $this->remarks[] = $remarks;

        return $this;
    }

    /**
     * @return Remarks
     */
    public function addToRemarksWithCreate(): Remarks
    {
        $this->addToremarks($remarks = new Remarks());

        return $remarks;
    }

    /**
     * @param Remarks $remarks
     * @return static
     */
    public function addOnceToRemarks(Remarks $remarks): static
    {
        if (!is_array($this->remarks)) {
            $this->remarks = [];
        }

        $this->remarks[0] = $remarks;

        return $this;
    }

    /**
     * @return Remarks
     */
    public function addOnceToRemarksWithCreate(): Remarks
    {
        if (!is_array($this->remarks)) {
            $this->remarks = [];
        }

        if ($this->remarks === []) {
            $this->addOnceToremarks(new Remarks());
        }

        return $this->remarks[0];
    }

    /**
     * @return bool|null
     */
    public function getHazardousRiskIndicator(): ?bool
    {
        return $this->hazardousRiskIndicator;
    }

    /**
     * @param bool|null $hazardousRiskIndicator
     * @return static
     */
    public function setHazardousRiskIndicator(?bool $hazardousRiskIndicator = null): static
    {
        $this->hazardousRiskIndicator = $hazardousRiskIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetHazardousRiskIndicator(): static
    {
        $this->hazardousRiskIndicator = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAnimalFoodIndicator(): ?bool
    {
        return $this->animalFoodIndicator;
    }

    /**
     * @param bool|null $animalFoodIndicator
     * @return static
     */
    public function setAnimalFoodIndicator(?bool $animalFoodIndicator = null): static
    {
        $this->animalFoodIndicator = $animalFoodIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAnimalFoodIndicator(): static
    {
        $this->animalFoodIndicator = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHumanFoodIndicator(): ?bool
    {
        return $this->humanFoodIndicator;
    }

    /**
     * @param bool|null $humanFoodIndicator
     * @return static
     */
    public function setHumanFoodIndicator(?bool $humanFoodIndicator = null): static
    {
        $this->humanFoodIndicator = $humanFoodIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetHumanFoodIndicator(): static
    {
        $this->humanFoodIndicator = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLivestockIndicator(): ?bool
    {
        return $this->livestockIndicator;
    }

    /**
     * @param bool|null $livestockIndicator
     * @return static
     */
    public function setLivestockIndicator(?bool $livestockIndicator = null): static
    {
        $this->livestockIndicator = $livestockIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLivestockIndicator(): static
    {
        $this->livestockIndicator = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getBulkCargoIndicator(): ?bool
    {
        return $this->bulkCargoIndicator;
    }

    /**
     * @param bool|null $bulkCargoIndicator
     * @return static
     */
    public function setBulkCargoIndicator(?bool $bulkCargoIndicator = null): static
    {
        $this->bulkCargoIndicator = $bulkCargoIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBulkCargoIndicator(): static
    {
        $this->bulkCargoIndicator = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getContainerizedIndicator(): ?bool
    {
        return $this->containerizedIndicator;
    }

    /**
     * @param bool|null $containerizedIndicator
     * @return static
     */
    public function setContainerizedIndicator(?bool $containerizedIndicator = null): static
    {
        $this->containerizedIndicator = $containerizedIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetContainerizedIndicator(): static
    {
        $this->containerizedIndicator = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getGeneralCargoIndicator(): ?bool
    {
        return $this->generalCargoIndicator;
    }

    /**
     * @param bool|null $generalCargoIndicator
     * @return static
     */
    public function setGeneralCargoIndicator(?bool $generalCargoIndicator = null): static
    {
        $this->generalCargoIndicator = $generalCargoIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetGeneralCargoIndicator(): static
    {
        $this->generalCargoIndicator = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSpecialSecurityIndicator(): ?bool
    {
        return $this->specialSecurityIndicator;
    }

    /**
     * @param bool|null $specialSecurityIndicator
     * @return static
     */
    public function setSpecialSecurityIndicator(?bool $specialSecurityIndicator = null): static
    {
        $this->specialSecurityIndicator = $specialSecurityIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSpecialSecurityIndicator(): static
    {
        $this->specialSecurityIndicator = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getThirdPartyPayerIndicator(): ?bool
    {
        return $this->thirdPartyPayerIndicator;
    }

    /**
     * @param bool|null $thirdPartyPayerIndicator
     * @return static
     */
    public function setThirdPartyPayerIndicator(?bool $thirdPartyPayerIndicator = null): static
    {
        $this->thirdPartyPayerIndicator = $thirdPartyPayerIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetThirdPartyPayerIndicator(): static
    {
        $this->thirdPartyPayerIndicator = null;

        return $this;
    }

    /**
     * @return array<CarrierServiceInstructions>|null
     */
    public function getCarrierServiceInstructions(): ?array
    {
        return $this->carrierServiceInstructions;
    }

    /**
     * @param array<CarrierServiceInstructions>|null $carrierServiceInstructions
     * @return static
     */
    public function setCarrierServiceInstructions(?array $carrierServiceInstructions = null): static
    {
        $this->carrierServiceInstructions = $carrierServiceInstructions;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCarrierServiceInstructions(): static
    {
        $this->carrierServiceInstructions = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearCarrierServiceInstructions(): static
    {
        $this->carrierServiceInstructions = [];

        return $this;
    }

    /**
     * @return CarrierServiceInstructions|null
     */
    public function firstCarrierServiceInstructions(): ?CarrierServiceInstructions
    {
        $carrierServiceInstructions = $this->carrierServiceInstructions ?? [];
        $carrierServiceInstructions = reset($carrierServiceInstructions);

        if ($carrierServiceInstructions === false) {
            return null;
        }

        return $carrierServiceInstructions;
    }

    /**
     * @return CarrierServiceInstructions|null
     */
    public function lastCarrierServiceInstructions(): ?CarrierServiceInstructions
    {
        $carrierServiceInstructions = $this->carrierServiceInstructions ?? [];
        $carrierServiceInstructions = end($carrierServiceInstructions);

        if ($carrierServiceInstructions === false) {
            return null;
        }

        return $carrierServiceInstructions;
    }

    /**
     * @param CarrierServiceInstructions $carrierServiceInstructions
     * @return static
     */
    public function addToCarrierServiceInstructions(CarrierServiceInstructions $carrierServiceInstructions): static
    {
        $this->carrierServiceInstructions[] = $carrierServiceInstructions;

        return $this;
    }

    /**
     * @return CarrierServiceInstructions
     */
    public function addToCarrierServiceInstructionsWithCreate(): CarrierServiceInstructions
    {
        $this->addTocarrierServiceInstructions($carrierServiceInstructions = new CarrierServiceInstructions());

        return $carrierServiceInstructions;
    }

    /**
     * @param CarrierServiceInstructions $carrierServiceInstructions
     * @return static
     */
    public function addOnceToCarrierServiceInstructions(CarrierServiceInstructions $carrierServiceInstructions): static
    {
        if (!is_array($this->carrierServiceInstructions)) {
            $this->carrierServiceInstructions = [];
        }

        $this->carrierServiceInstructions[0] = $carrierServiceInstructions;

        return $this;
    }

    /**
     * @return CarrierServiceInstructions
     */
    public function addOnceToCarrierServiceInstructionsWithCreate(): CarrierServiceInstructions
    {
        if (!is_array($this->carrierServiceInstructions)) {
            $this->carrierServiceInstructions = [];
        }

        if ($this->carrierServiceInstructions === []) {
            $this->addOnceTocarrierServiceInstructions(new CarrierServiceInstructions());
        }

        return $this->carrierServiceInstructions[0];
    }

    /**
     * @return array<CustomsClearanceServiceInstructions>|null
     */
    public function getCustomsClearanceServiceInstructions(): ?array
    {
        return $this->customsClearanceServiceInstructions;
    }

    /**
     * @param array<CustomsClearanceServiceInstructions>|null $customsClearanceServiceInstructions
     * @return static
     */
    public function setCustomsClearanceServiceInstructions(?array $customsClearanceServiceInstructions = null): static
    {
        $this->customsClearanceServiceInstructions = $customsClearanceServiceInstructions;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCustomsClearanceServiceInstructions(): static
    {
        $this->customsClearanceServiceInstructions = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearCustomsClearanceServiceInstructions(): static
    {
        $this->customsClearanceServiceInstructions = [];

        return $this;
    }

    /**
     * @return CustomsClearanceServiceInstructions|null
     */
    public function firstCustomsClearanceServiceInstructions(): ?CustomsClearanceServiceInstructions
    {
        $customsClearanceServiceInstructions = $this->customsClearanceServiceInstructions ?? [];
        $customsClearanceServiceInstructions = reset($customsClearanceServiceInstructions);

        if ($customsClearanceServiceInstructions === false) {
            return null;
        }

        return $customsClearanceServiceInstructions;
    }

    /**
     * @return CustomsClearanceServiceInstructions|null
     */
    public function lastCustomsClearanceServiceInstructions(): ?CustomsClearanceServiceInstructions
    {
        $customsClearanceServiceInstructions = $this->customsClearanceServiceInstructions ?? [];
        $customsClearanceServiceInstructions = end($customsClearanceServiceInstructions);

        if ($customsClearanceServiceInstructions === false) {
            return null;
        }

        return $customsClearanceServiceInstructions;
    }

    /**
     * @param CustomsClearanceServiceInstructions $customsClearanceServiceInstructions
     * @return static
     */
    public function addToCustomsClearanceServiceInstructions(
        CustomsClearanceServiceInstructions $customsClearanceServiceInstructions,
    ): static {
        $this->customsClearanceServiceInstructions[] = $customsClearanceServiceInstructions;

        return $this;
    }

    /**
     * @return CustomsClearanceServiceInstructions
     */
    public function addToCustomsClearanceServiceInstructionsWithCreate(): CustomsClearanceServiceInstructions
    {
        $this->addTocustomsClearanceServiceInstructions($customsClearanceServiceInstructions = new CustomsClearanceServiceInstructions());

        return $customsClearanceServiceInstructions;
    }

    /**
     * @param CustomsClearanceServiceInstructions $customsClearanceServiceInstructions
     * @return static
     */
    public function addOnceToCustomsClearanceServiceInstructions(
        CustomsClearanceServiceInstructions $customsClearanceServiceInstructions,
    ): static {
        if (!is_array($this->customsClearanceServiceInstructions)) {
            $this->customsClearanceServiceInstructions = [];
        }

        $this->customsClearanceServiceInstructions[0] = $customsClearanceServiceInstructions;

        return $this;
    }

    /**
     * @return CustomsClearanceServiceInstructions
     */
    public function addOnceToCustomsClearanceServiceInstructionsWithCreate(): CustomsClearanceServiceInstructions
    {
        if (!is_array($this->customsClearanceServiceInstructions)) {
            $this->customsClearanceServiceInstructions = [];
        }

        if ($this->customsClearanceServiceInstructions === []) {
            $this->addOnceTocustomsClearanceServiceInstructions(new CustomsClearanceServiceInstructions());
        }

        return $this->customsClearanceServiceInstructions[0];
    }

    /**
     * @return array<ForwarderServiceInstructions>|null
     */
    public function getForwarderServiceInstructions(): ?array
    {
        return $this->forwarderServiceInstructions;
    }

    /**
     * @param array<ForwarderServiceInstructions>|null $forwarderServiceInstructions
     * @return static
     */
    public function setForwarderServiceInstructions(?array $forwarderServiceInstructions = null): static
    {
        $this->forwarderServiceInstructions = $forwarderServiceInstructions;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetForwarderServiceInstructions(): static
    {
        $this->forwarderServiceInstructions = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearForwarderServiceInstructions(): static
    {
        $this->forwarderServiceInstructions = [];

        return $this;
    }

    /**
     * @return ForwarderServiceInstructions|null
     */
    public function firstForwarderServiceInstructions(): ?ForwarderServiceInstructions
    {
        $forwarderServiceInstructions = $this->forwarderServiceInstructions ?? [];
        $forwarderServiceInstructions = reset($forwarderServiceInstructions);

        if ($forwarderServiceInstructions === false) {
            return null;
        }

        return $forwarderServiceInstructions;
    }

    /**
     * @return ForwarderServiceInstructions|null
     */
    public function lastForwarderServiceInstructions(): ?ForwarderServiceInstructions
    {
        $forwarderServiceInstructions = $this->forwarderServiceInstructions ?? [];
        $forwarderServiceInstructions = end($forwarderServiceInstructions);

        if ($forwarderServiceInstructions === false) {
            return null;
        }

        return $forwarderServiceInstructions;
    }

    /**
     * @param ForwarderServiceInstructions $forwarderServiceInstructions
     * @return static
     */
    public function addToForwarderServiceInstructions(
        ForwarderServiceInstructions $forwarderServiceInstructions,
    ): static {
        $this->forwarderServiceInstructions[] = $forwarderServiceInstructions;

        return $this;
    }

    /**
     * @return ForwarderServiceInstructions
     */
    public function addToForwarderServiceInstructionsWithCreate(): ForwarderServiceInstructions
    {
        $this->addToforwarderServiceInstructions($forwarderServiceInstructions = new ForwarderServiceInstructions());

        return $forwarderServiceInstructions;
    }

    /**
     * @param ForwarderServiceInstructions $forwarderServiceInstructions
     * @return static
     */
    public function addOnceToForwarderServiceInstructions(
        ForwarderServiceInstructions $forwarderServiceInstructions,
    ): static {
        if (!is_array($this->forwarderServiceInstructions)) {
            $this->forwarderServiceInstructions = [];
        }

        $this->forwarderServiceInstructions[0] = $forwarderServiceInstructions;

        return $this;
    }

    /**
     * @return ForwarderServiceInstructions
     */
    public function addOnceToForwarderServiceInstructionsWithCreate(): ForwarderServiceInstructions
    {
        if (!is_array($this->forwarderServiceInstructions)) {
            $this->forwarderServiceInstructions = [];
        }

        if ($this->forwarderServiceInstructions === []) {
            $this->addOnceToforwarderServiceInstructions(new ForwarderServiceInstructions());
        }

        return $this->forwarderServiceInstructions[0];
    }

    /**
     * @return array<SpecialServiceInstructions>|null
     */
    public function getSpecialServiceInstructions(): ?array
    {
        return $this->specialServiceInstructions;
    }

    /**
     * @param array<SpecialServiceInstructions>|null $specialServiceInstructions
     * @return static
     */
    public function setSpecialServiceInstructions(?array $specialServiceInstructions = null): static
    {
        $this->specialServiceInstructions = $specialServiceInstructions;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSpecialServiceInstructions(): static
    {
        $this->specialServiceInstructions = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearSpecialServiceInstructions(): static
    {
        $this->specialServiceInstructions = [];

        return $this;
    }

    /**
     * @return SpecialServiceInstructions|null
     */
    public function firstSpecialServiceInstructions(): ?SpecialServiceInstructions
    {
        $specialServiceInstructions = $this->specialServiceInstructions ?? [];
        $specialServiceInstructions = reset($specialServiceInstructions);

        if ($specialServiceInstructions === false) {
            return null;
        }

        return $specialServiceInstructions;
    }

    /**
     * @return SpecialServiceInstructions|null
     */
    public function lastSpecialServiceInstructions(): ?SpecialServiceInstructions
    {
        $specialServiceInstructions = $this->specialServiceInstructions ?? [];
        $specialServiceInstructions = end($specialServiceInstructions);

        if ($specialServiceInstructions === false) {
            return null;
        }

        return $specialServiceInstructions;
    }

    /**
     * @param SpecialServiceInstructions $specialServiceInstructions
     * @return static
     */
    public function addToSpecialServiceInstructions(SpecialServiceInstructions $specialServiceInstructions): static
    {
        $this->specialServiceInstructions[] = $specialServiceInstructions;

        return $this;
    }

    /**
     * @return SpecialServiceInstructions
     */
    public function addToSpecialServiceInstructionsWithCreate(): SpecialServiceInstructions
    {
        $this->addTospecialServiceInstructions($specialServiceInstructions = new SpecialServiceInstructions());

        return $specialServiceInstructions;
    }

    /**
     * @param SpecialServiceInstructions $specialServiceInstructions
     * @return static
     */
    public function addOnceToSpecialServiceInstructions(SpecialServiceInstructions $specialServiceInstructions): static
    {
        if (!is_array($this->specialServiceInstructions)) {
            $this->specialServiceInstructions = [];
        }

        $this->specialServiceInstructions[0] = $specialServiceInstructions;

        return $this;
    }

    /**
     * @return SpecialServiceInstructions
     */
    public function addOnceToSpecialServiceInstructionsWithCreate(): SpecialServiceInstructions
    {
        if (!is_array($this->specialServiceInstructions)) {
            $this->specialServiceInstructions = [];
        }

        if ($this->specialServiceInstructions === []) {
            $this->addOnceTospecialServiceInstructions(new SpecialServiceInstructions());
        }

        return $this->specialServiceInstructions[0];
    }

    /**
     * @return SequenceID|null
     */
    public function getSequenceID(): ?SequenceID
    {
        return $this->sequenceID;
    }

    /**
     * @return SequenceID
     */
    public function getSequenceIDWithCreate(): SequenceID
    {
        $this->sequenceID = is_null($this->sequenceID) ? new SequenceID() : $this->sequenceID;

        return $this->sequenceID;
    }

    /**
     * @param SequenceID|null $sequenceID
     * @return static
     */
    public function setSequenceID(?SequenceID $sequenceID = null): static
    {
        $this->sequenceID = $sequenceID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSequenceID(): static
    {
        $this->sequenceID = null;

        return $this;
    }

    /**
     * @return ShippingPriorityLevelCode|null
     */
    public function getShippingPriorityLevelCode(): ?ShippingPriorityLevelCode
    {
        return $this->shippingPriorityLevelCode;
    }

    /**
     * @return ShippingPriorityLevelCode
     */
    public function getShippingPriorityLevelCodeWithCreate(): ShippingPriorityLevelCode
    {
        $this->shippingPriorityLevelCode = is_null($this->shippingPriorityLevelCode) ? new ShippingPriorityLevelCode() : $this->shippingPriorityLevelCode;

        return $this->shippingPriorityLevelCode;
    }

    /**
     * @param ShippingPriorityLevelCode|null $shippingPriorityLevelCode
     * @return static
     */
    public function setShippingPriorityLevelCode(?ShippingPriorityLevelCode $shippingPriorityLevelCode = null): static
    {
        $this->shippingPriorityLevelCode = $shippingPriorityLevelCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetShippingPriorityLevelCode(): static
    {
        $this->shippingPriorityLevelCode = null;

        return $this;
    }

    /**
     * @return HandlingCode|null
     */
    public function getHandlingCode(): ?HandlingCode
    {
        return $this->handlingCode;
    }

    /**
     * @return HandlingCode
     */
    public function getHandlingCodeWithCreate(): HandlingCode
    {
        $this->handlingCode = is_null($this->handlingCode) ? new HandlingCode() : $this->handlingCode;

        return $this->handlingCode;
    }

    /**
     * @param HandlingCode|null $handlingCode
     * @return static
     */
    public function setHandlingCode(?HandlingCode $handlingCode = null): static
    {
        $this->handlingCode = $handlingCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetHandlingCode(): static
    {
        $this->handlingCode = null;

        return $this;
    }

    /**
     * @return array<HandlingInstructions>|null
     */
    public function getHandlingInstructions(): ?array
    {
        return $this->handlingInstructions;
    }

    /**
     * @param array<HandlingInstructions>|null $handlingInstructions
     * @return static
     */
    public function setHandlingInstructions(?array $handlingInstructions = null): static
    {
        $this->handlingInstructions = $handlingInstructions;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetHandlingInstructions(): static
    {
        $this->handlingInstructions = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearHandlingInstructions(): static
    {
        $this->handlingInstructions = [];

        return $this;
    }

    /**
     * @return HandlingInstructions|null
     */
    public function firstHandlingInstructions(): ?HandlingInstructions
    {
        $handlingInstructions = $this->handlingInstructions ?? [];
        $handlingInstructions = reset($handlingInstructions);

        if ($handlingInstructions === false) {
            return null;
        }

        return $handlingInstructions;
    }

    /**
     * @return HandlingInstructions|null
     */
    public function lastHandlingInstructions(): ?HandlingInstructions
    {
        $handlingInstructions = $this->handlingInstructions ?? [];
        $handlingInstructions = end($handlingInstructions);

        if ($handlingInstructions === false) {
            return null;
        }

        return $handlingInstructions;
    }

    /**
     * @param HandlingInstructions $handlingInstructions
     * @return static
     */
    public function addToHandlingInstructions(HandlingInstructions $handlingInstructions): static
    {
        $this->handlingInstructions[] = $handlingInstructions;

        return $this;
    }

    /**
     * @return HandlingInstructions
     */
    public function addToHandlingInstructionsWithCreate(): HandlingInstructions
    {
        $this->addTohandlingInstructions($handlingInstructions = new HandlingInstructions());

        return $handlingInstructions;
    }

    /**
     * @param HandlingInstructions $handlingInstructions
     * @return static
     */
    public function addOnceToHandlingInstructions(HandlingInstructions $handlingInstructions): static
    {
        if (!is_array($this->handlingInstructions)) {
            $this->handlingInstructions = [];
        }

        $this->handlingInstructions[0] = $handlingInstructions;

        return $this;
    }

    /**
     * @return HandlingInstructions
     */
    public function addOnceToHandlingInstructionsWithCreate(): HandlingInstructions
    {
        if (!is_array($this->handlingInstructions)) {
            $this->handlingInstructions = [];
        }

        if ($this->handlingInstructions === []) {
            $this->addOnceTohandlingInstructions(new HandlingInstructions());
        }

        return $this->handlingInstructions[0];
    }

    /**
     * @return array<Information>|null
     */
    public function getInformation(): ?array
    {
        return $this->information;
    }

    /**
     * @param array<Information>|null $information
     * @return static
     */
    public function setInformation(?array $information = null): static
    {
        $this->information = $information;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetInformation(): static
    {
        $this->information = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearInformation(): static
    {
        $this->information = [];

        return $this;
    }

    /**
     * @return Information|null
     */
    public function firstInformation(): ?Information
    {
        $information = $this->information ?? [];
        $information = reset($information);

        if ($information === false) {
            return null;
        }

        return $information;
    }

    /**
     * @return Information|null
     */
    public function lastInformation(): ?Information
    {
        $information = $this->information ?? [];
        $information = end($information);

        if ($information === false) {
            return null;
        }

        return $information;
    }

    /**
     * @param Information $information
     * @return static
     */
    public function addToInformation(Information $information): static
    {
        $this->information[] = $information;

        return $this;
    }

    /**
     * @return Information
     */
    public function addToInformationWithCreate(): Information
    {
        $this->addToinformation($information = new Information());

        return $information;
    }

    /**
     * @param Information $information
     * @return static
     */
    public function addOnceToInformation(Information $information): static
    {
        if (!is_array($this->information)) {
            $this->information = [];
        }

        $this->information[0] = $information;

        return $this;
    }

    /**
     * @return Information
     */
    public function addOnceToInformationWithCreate(): Information
    {
        if (!is_array($this->information)) {
            $this->information = [];
        }

        if ($this->information === []) {
            $this->addOnceToinformation(new Information());
        }

        return $this->information[0];
    }

    /**
     * @return TotalGoodsItemQuantity|null
     */
    public function getTotalGoodsItemQuantity(): ?TotalGoodsItemQuantity
    {
        return $this->totalGoodsItemQuantity;
    }

    /**
     * @return TotalGoodsItemQuantity
     */
    public function getTotalGoodsItemQuantityWithCreate(): TotalGoodsItemQuantity
    {
        $this->totalGoodsItemQuantity = is_null($this->totalGoodsItemQuantity) ? new TotalGoodsItemQuantity() : $this->totalGoodsItemQuantity;

        return $this->totalGoodsItemQuantity;
    }

    /**
     * @param TotalGoodsItemQuantity|null $totalGoodsItemQuantity
     * @return static
     */
    public function setTotalGoodsItemQuantity(?TotalGoodsItemQuantity $totalGoodsItemQuantity = null): static
    {
        $this->totalGoodsItemQuantity = $totalGoodsItemQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTotalGoodsItemQuantity(): static
    {
        $this->totalGoodsItemQuantity = null;

        return $this;
    }

    /**
     * @return TotalTransportHandlingUnitQuantity|null
     */
    public function getTotalTransportHandlingUnitQuantity(): ?TotalTransportHandlingUnitQuantity
    {
        return $this->totalTransportHandlingUnitQuantity;
    }

    /**
     * @return TotalTransportHandlingUnitQuantity
     */
    public function getTotalTransportHandlingUnitQuantityWithCreate(): TotalTransportHandlingUnitQuantity
    {
        $this->totalTransportHandlingUnitQuantity = is_null($this->totalTransportHandlingUnitQuantity) ? new TotalTransportHandlingUnitQuantity() : $this->totalTransportHandlingUnitQuantity;

        return $this->totalTransportHandlingUnitQuantity;
    }

    /**
     * @param TotalTransportHandlingUnitQuantity|null $totalTransportHandlingUnitQuantity
     * @return static
     */
    public function setTotalTransportHandlingUnitQuantity(
        ?TotalTransportHandlingUnitQuantity $totalTransportHandlingUnitQuantity = null,
    ): static {
        $this->totalTransportHandlingUnitQuantity = $totalTransportHandlingUnitQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTotalTransportHandlingUnitQuantity(): static
    {
        $this->totalTransportHandlingUnitQuantity = null;

        return $this;
    }

    /**
     * @return InsuranceValueAmount|null
     */
    public function getInsuranceValueAmount(): ?InsuranceValueAmount
    {
        return $this->insuranceValueAmount;
    }

    /**
     * @return InsuranceValueAmount
     */
    public function getInsuranceValueAmountWithCreate(): InsuranceValueAmount
    {
        $this->insuranceValueAmount = is_null($this->insuranceValueAmount) ? new InsuranceValueAmount() : $this->insuranceValueAmount;

        return $this->insuranceValueAmount;
    }

    /**
     * @param InsuranceValueAmount|null $insuranceValueAmount
     * @return static
     */
    public function setInsuranceValueAmount(?InsuranceValueAmount $insuranceValueAmount = null): static
    {
        $this->insuranceValueAmount = $insuranceValueAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetInsuranceValueAmount(): static
    {
        $this->insuranceValueAmount = null;

        return $this;
    }

    /**
     * @return DeclaredForCarriageValueAmount|null
     */
    public function getDeclaredForCarriageValueAmount(): ?DeclaredForCarriageValueAmount
    {
        return $this->declaredForCarriageValueAmount;
    }

    /**
     * @return DeclaredForCarriageValueAmount
     */
    public function getDeclaredForCarriageValueAmountWithCreate(): DeclaredForCarriageValueAmount
    {
        $this->declaredForCarriageValueAmount = is_null($this->declaredForCarriageValueAmount) ? new DeclaredForCarriageValueAmount() : $this->declaredForCarriageValueAmount;

        return $this->declaredForCarriageValueAmount;
    }

    /**
     * @param DeclaredForCarriageValueAmount|null $declaredForCarriageValueAmount
     * @return static
     */
    public function setDeclaredForCarriageValueAmount(
        ?DeclaredForCarriageValueAmount $declaredForCarriageValueAmount = null,
    ): static {
        $this->declaredForCarriageValueAmount = $declaredForCarriageValueAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDeclaredForCarriageValueAmount(): static
    {
        $this->declaredForCarriageValueAmount = null;

        return $this;
    }

    /**
     * @return DeclaredStatisticsValueAmount|null
     */
    public function getDeclaredStatisticsValueAmount(): ?DeclaredStatisticsValueAmount
    {
        return $this->declaredStatisticsValueAmount;
    }

    /**
     * @return DeclaredStatisticsValueAmount
     */
    public function getDeclaredStatisticsValueAmountWithCreate(): DeclaredStatisticsValueAmount
    {
        $this->declaredStatisticsValueAmount = is_null($this->declaredStatisticsValueAmount) ? new DeclaredStatisticsValueAmount() : $this->declaredStatisticsValueAmount;

        return $this->declaredStatisticsValueAmount;
    }

    /**
     * @param DeclaredStatisticsValueAmount|null $declaredStatisticsValueAmount
     * @return static
     */
    public function setDeclaredStatisticsValueAmount(
        ?DeclaredStatisticsValueAmount $declaredStatisticsValueAmount = null,
    ): static {
        $this->declaredStatisticsValueAmount = $declaredStatisticsValueAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDeclaredStatisticsValueAmount(): static
    {
        $this->declaredStatisticsValueAmount = null;

        return $this;
    }

    /**
     * @return FreeOnBoardValueAmount|null
     */
    public function getFreeOnBoardValueAmount(): ?FreeOnBoardValueAmount
    {
        return $this->freeOnBoardValueAmount;
    }

    /**
     * @return FreeOnBoardValueAmount
     */
    public function getFreeOnBoardValueAmountWithCreate(): FreeOnBoardValueAmount
    {
        $this->freeOnBoardValueAmount = is_null($this->freeOnBoardValueAmount) ? new FreeOnBoardValueAmount() : $this->freeOnBoardValueAmount;

        return $this->freeOnBoardValueAmount;
    }

    /**
     * @param FreeOnBoardValueAmount|null $freeOnBoardValueAmount
     * @return static
     */
    public function setFreeOnBoardValueAmount(?FreeOnBoardValueAmount $freeOnBoardValueAmount = null): static
    {
        $this->freeOnBoardValueAmount = $freeOnBoardValueAmount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFreeOnBoardValueAmount(): static
    {
        $this->freeOnBoardValueAmount = null;

        return $this;
    }

    /**
     * @return array<SpecialInstructions>|null
     */
    public function getSpecialInstructions(): ?array
    {
        return $this->specialInstructions;
    }

    /**
     * @param array<SpecialInstructions>|null $specialInstructions
     * @return static
     */
    public function setSpecialInstructions(?array $specialInstructions = null): static
    {
        $this->specialInstructions = $specialInstructions;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSpecialInstructions(): static
    {
        $this->specialInstructions = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearSpecialInstructions(): static
    {
        $this->specialInstructions = [];

        return $this;
    }

    /**
     * @return SpecialInstructions|null
     */
    public function firstSpecialInstructions(): ?SpecialInstructions
    {
        $specialInstructions = $this->specialInstructions ?? [];
        $specialInstructions = reset($specialInstructions);

        if ($specialInstructions === false) {
            return null;
        }

        return $specialInstructions;
    }

    /**
     * @return SpecialInstructions|null
     */
    public function lastSpecialInstructions(): ?SpecialInstructions
    {
        $specialInstructions = $this->specialInstructions ?? [];
        $specialInstructions = end($specialInstructions);

        if ($specialInstructions === false) {
            return null;
        }

        return $specialInstructions;
    }

    /**
     * @param SpecialInstructions $specialInstructions
     * @return static
     */
    public function addToSpecialInstructions(SpecialInstructions $specialInstructions): static
    {
        $this->specialInstructions[] = $specialInstructions;

        return $this;
    }

    /**
     * @return SpecialInstructions
     */
    public function addToSpecialInstructionsWithCreate(): SpecialInstructions
    {
        $this->addTospecialInstructions($specialInstructions = new SpecialInstructions());

        return $specialInstructions;
    }

    /**
     * @param SpecialInstructions $specialInstructions
     * @return static
     */
    public function addOnceToSpecialInstructions(SpecialInstructions $specialInstructions): static
    {
        if (!is_array($this->specialInstructions)) {
            $this->specialInstructions = [];
        }

        $this->specialInstructions[0] = $specialInstructions;

        return $this;
    }

    /**
     * @return SpecialInstructions
     */
    public function addOnceToSpecialInstructionsWithCreate(): SpecialInstructions
    {
        if (!is_array($this->specialInstructions)) {
            $this->specialInstructions = [];
        }

        if ($this->specialInstructions === []) {
            $this->addOnceTospecialInstructions(new SpecialInstructions());
        }

        return $this->specialInstructions[0];
    }

    /**
     * @return bool|null
     */
    public function getSplitConsignmentIndicator(): ?bool
    {
        return $this->splitConsignmentIndicator;
    }

    /**
     * @param bool|null $splitConsignmentIndicator
     * @return static
     */
    public function setSplitConsignmentIndicator(?bool $splitConsignmentIndicator = null): static
    {
        $this->splitConsignmentIndicator = $splitConsignmentIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSplitConsignmentIndicator(): static
    {
        $this->splitConsignmentIndicator = null;

        return $this;
    }

    /**
     * @return array<DeliveryInstructions>|null
     */
    public function getDeliveryInstructions(): ?array
    {
        return $this->deliveryInstructions;
    }

    /**
     * @param array<DeliveryInstructions>|null $deliveryInstructions
     * @return static
     */
    public function setDeliveryInstructions(?array $deliveryInstructions = null): static
    {
        $this->deliveryInstructions = $deliveryInstructions;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDeliveryInstructions(): static
    {
        $this->deliveryInstructions = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearDeliveryInstructions(): static
    {
        $this->deliveryInstructions = [];

        return $this;
    }

    /**
     * @return DeliveryInstructions|null
     */
    public function firstDeliveryInstructions(): ?DeliveryInstructions
    {
        $deliveryInstructions = $this->deliveryInstructions ?? [];
        $deliveryInstructions = reset($deliveryInstructions);

        if ($deliveryInstructions === false) {
            return null;
        }

        return $deliveryInstructions;
    }

    /**
     * @return DeliveryInstructions|null
     */
    public function lastDeliveryInstructions(): ?DeliveryInstructions
    {
        $deliveryInstructions = $this->deliveryInstructions ?? [];
        $deliveryInstructions = end($deliveryInstructions);

        if ($deliveryInstructions === false) {
            return null;
        }

        return $deliveryInstructions;
    }

    /**
     * @param DeliveryInstructions $deliveryInstructions
     * @return static
     */
    public function addToDeliveryInstructions(DeliveryInstructions $deliveryInstructions): static
    {
        $this->deliveryInstructions[] = $deliveryInstructions;

        return $this;
    }

    /**
     * @return DeliveryInstructions
     */
    public function addToDeliveryInstructionsWithCreate(): DeliveryInstructions
    {
        $this->addTodeliveryInstructions($deliveryInstructions = new DeliveryInstructions());

        return $deliveryInstructions;
    }

    /**
     * @param DeliveryInstructions $deliveryInstructions
     * @return static
     */
    public function addOnceToDeliveryInstructions(DeliveryInstructions $deliveryInstructions): static
    {
        if (!is_array($this->deliveryInstructions)) {
            $this->deliveryInstructions = [];
        }

        $this->deliveryInstructions[0] = $deliveryInstructions;

        return $this;
    }

    /**
     * @return DeliveryInstructions
     */
    public function addOnceToDeliveryInstructionsWithCreate(): DeliveryInstructions
    {
        if (!is_array($this->deliveryInstructions)) {
            $this->deliveryInstructions = [];
        }

        if ($this->deliveryInstructions === []) {
            $this->addOnceTodeliveryInstructions(new DeliveryInstructions());
        }

        return $this->deliveryInstructions[0];
    }

    /**
     * @return ConsignmentQuantity|null
     */
    public function getConsignmentQuantity(): ?ConsignmentQuantity
    {
        return $this->consignmentQuantity;
    }

    /**
     * @return ConsignmentQuantity
     */
    public function getConsignmentQuantityWithCreate(): ConsignmentQuantity
    {
        $this->consignmentQuantity = is_null($this->consignmentQuantity) ? new ConsignmentQuantity() : $this->consignmentQuantity;

        return $this->consignmentQuantity;
    }

    /**
     * @param ConsignmentQuantity|null $consignmentQuantity
     * @return static
     */
    public function setConsignmentQuantity(?ConsignmentQuantity $consignmentQuantity = null): static
    {
        $this->consignmentQuantity = $consignmentQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetConsignmentQuantity(): static
    {
        $this->consignmentQuantity = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getConsolidatableIndicator(): ?bool
    {
        return $this->consolidatableIndicator;
    }

    /**
     * @param bool|null $consolidatableIndicator
     * @return static
     */
    public function setConsolidatableIndicator(?bool $consolidatableIndicator = null): static
    {
        $this->consolidatableIndicator = $consolidatableIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetConsolidatableIndicator(): static
    {
        $this->consolidatableIndicator = null;

        return $this;
    }

    /**
     * @return array<HaulageInstructions>|null
     */
    public function getHaulageInstructions(): ?array
    {
        return $this->haulageInstructions;
    }

    /**
     * @param array<HaulageInstructions>|null $haulageInstructions
     * @return static
     */
    public function setHaulageInstructions(?array $haulageInstructions = null): static
    {
        $this->haulageInstructions = $haulageInstructions;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetHaulageInstructions(): static
    {
        $this->haulageInstructions = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearHaulageInstructions(): static
    {
        $this->haulageInstructions = [];

        return $this;
    }

    /**
     * @return HaulageInstructions|null
     */
    public function firstHaulageInstructions(): ?HaulageInstructions
    {
        $haulageInstructions = $this->haulageInstructions ?? [];
        $haulageInstructions = reset($haulageInstructions);

        if ($haulageInstructions === false) {
            return null;
        }

        return $haulageInstructions;
    }

    /**
     * @return HaulageInstructions|null
     */
    public function lastHaulageInstructions(): ?HaulageInstructions
    {
        $haulageInstructions = $this->haulageInstructions ?? [];
        $haulageInstructions = end($haulageInstructions);

        if ($haulageInstructions === false) {
            return null;
        }

        return $haulageInstructions;
    }

    /**
     * @param HaulageInstructions $haulageInstructions
     * @return static
     */
    public function addToHaulageInstructions(HaulageInstructions $haulageInstructions): static
    {
        $this->haulageInstructions[] = $haulageInstructions;

        return $this;
    }

    /**
     * @return HaulageInstructions
     */
    public function addToHaulageInstructionsWithCreate(): HaulageInstructions
    {
        $this->addTohaulageInstructions($haulageInstructions = new HaulageInstructions());

        return $haulageInstructions;
    }

    /**
     * @param HaulageInstructions $haulageInstructions
     * @return static
     */
    public function addOnceToHaulageInstructions(HaulageInstructions $haulageInstructions): static
    {
        if (!is_array($this->haulageInstructions)) {
            $this->haulageInstructions = [];
        }

        $this->haulageInstructions[0] = $haulageInstructions;

        return $this;
    }

    /**
     * @return HaulageInstructions
     */
    public function addOnceToHaulageInstructionsWithCreate(): HaulageInstructions
    {
        if (!is_array($this->haulageInstructions)) {
            $this->haulageInstructions = [];
        }

        if ($this->haulageInstructions === []) {
            $this->addOnceTohaulageInstructions(new HaulageInstructions());
        }

        return $this->haulageInstructions[0];
    }

    /**
     * @return LoadingSequenceID|null
     */
    public function getLoadingSequenceID(): ?LoadingSequenceID
    {
        return $this->loadingSequenceID;
    }

    /**
     * @return LoadingSequenceID
     */
    public function getLoadingSequenceIDWithCreate(): LoadingSequenceID
    {
        $this->loadingSequenceID = is_null($this->loadingSequenceID) ? new LoadingSequenceID() : $this->loadingSequenceID;

        return $this->loadingSequenceID;
    }

    /**
     * @param LoadingSequenceID|null $loadingSequenceID
     * @return static
     */
    public function setLoadingSequenceID(?LoadingSequenceID $loadingSequenceID = null): static
    {
        $this->loadingSequenceID = $loadingSequenceID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLoadingSequenceID(): static
    {
        $this->loadingSequenceID = null;

        return $this;
    }

    /**
     * @return ChildConsignmentQuantity|null
     */
    public function getChildConsignmentQuantity(): ?ChildConsignmentQuantity
    {
        return $this->childConsignmentQuantity;
    }

    /**
     * @return ChildConsignmentQuantity
     */
    public function getChildConsignmentQuantityWithCreate(): ChildConsignmentQuantity
    {
        $this->childConsignmentQuantity = is_null($this->childConsignmentQuantity) ? new ChildConsignmentQuantity() : $this->childConsignmentQuantity;

        return $this->childConsignmentQuantity;
    }

    /**
     * @param ChildConsignmentQuantity|null $childConsignmentQuantity
     * @return static
     */
    public function setChildConsignmentQuantity(?ChildConsignmentQuantity $childConsignmentQuantity = null): static
    {
        $this->childConsignmentQuantity = $childConsignmentQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetChildConsignmentQuantity(): static
    {
        $this->childConsignmentQuantity = null;

        return $this;
    }

    /**
     * @return TotalPackagesQuantity|null
     */
    public function getTotalPackagesQuantity(): ?TotalPackagesQuantity
    {
        return $this->totalPackagesQuantity;
    }

    /**
     * @return TotalPackagesQuantity
     */
    public function getTotalPackagesQuantityWithCreate(): TotalPackagesQuantity
    {
        $this->totalPackagesQuantity = is_null($this->totalPackagesQuantity) ? new TotalPackagesQuantity() : $this->totalPackagesQuantity;

        return $this->totalPackagesQuantity;
    }

    /**
     * @param TotalPackagesQuantity|null $totalPackagesQuantity
     * @return static
     */
    public function setTotalPackagesQuantity(?TotalPackagesQuantity $totalPackagesQuantity = null): static
    {
        $this->totalPackagesQuantity = $totalPackagesQuantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTotalPackagesQuantity(): static
    {
        $this->totalPackagesQuantity = null;

        return $this;
    }

    /**
     * @return array<ConsolidatedShipment>|null
     */
    public function getConsolidatedShipment(): ?array
    {
        return $this->consolidatedShipment;
    }

    /**
     * @param array<ConsolidatedShipment>|null $consolidatedShipment
     * @return static
     */
    public function setConsolidatedShipment(?array $consolidatedShipment = null): static
    {
        $this->consolidatedShipment = $consolidatedShipment;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetConsolidatedShipment(): static
    {
        $this->consolidatedShipment = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearConsolidatedShipment(): static
    {
        $this->consolidatedShipment = [];

        return $this;
    }

    /**
     * @return ConsolidatedShipment|null
     */
    public function firstConsolidatedShipment(): ?ConsolidatedShipment
    {
        $consolidatedShipment = $this->consolidatedShipment ?? [];
        $consolidatedShipment = reset($consolidatedShipment);

        if ($consolidatedShipment === false) {
            return null;
        }

        return $consolidatedShipment;
    }

    /**
     * @return ConsolidatedShipment|null
     */
    public function lastConsolidatedShipment(): ?ConsolidatedShipment
    {
        $consolidatedShipment = $this->consolidatedShipment ?? [];
        $consolidatedShipment = end($consolidatedShipment);

        if ($consolidatedShipment === false) {
            return null;
        }

        return $consolidatedShipment;
    }

    /**
     * @param ConsolidatedShipment $consolidatedShipment
     * @return static
     */
    public function addToConsolidatedShipment(ConsolidatedShipment $consolidatedShipment): static
    {
        $this->consolidatedShipment[] = $consolidatedShipment;

        return $this;
    }

    /**
     * @return ConsolidatedShipment
     */
    public function addToConsolidatedShipmentWithCreate(): ConsolidatedShipment
    {
        $this->addToconsolidatedShipment($consolidatedShipment = new ConsolidatedShipment());

        return $consolidatedShipment;
    }

    /**
     * @param ConsolidatedShipment $consolidatedShipment
     * @return static
     */
    public function addOnceToConsolidatedShipment(ConsolidatedShipment $consolidatedShipment): static
    {
        if (!is_array($this->consolidatedShipment)) {
            $this->consolidatedShipment = [];
        }

        $this->consolidatedShipment[0] = $consolidatedShipment;

        return $this;
    }

    /**
     * @return ConsolidatedShipment
     */
    public function addOnceToConsolidatedShipmentWithCreate(): ConsolidatedShipment
    {
        if (!is_array($this->consolidatedShipment)) {
            $this->consolidatedShipment = [];
        }

        if ($this->consolidatedShipment === []) {
            $this->addOnceToconsolidatedShipment(new ConsolidatedShipment());
        }

        return $this->consolidatedShipment[0];
    }

    /**
     * @return array<CustomsDeclaration>|null
     */
    public function getCustomsDeclaration(): ?array
    {
        return $this->customsDeclaration;
    }

    /**
     * @param array<CustomsDeclaration>|null $customsDeclaration
     * @return static
     */
    public function setCustomsDeclaration(?array $customsDeclaration = null): static
    {
        $this->customsDeclaration = $customsDeclaration;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCustomsDeclaration(): static
    {
        $this->customsDeclaration = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearCustomsDeclaration(): static
    {
        $this->customsDeclaration = [];

        return $this;
    }

    /**
     * @return CustomsDeclaration|null
     */
    public function firstCustomsDeclaration(): ?CustomsDeclaration
    {
        $customsDeclaration = $this->customsDeclaration ?? [];
        $customsDeclaration = reset($customsDeclaration);

        if ($customsDeclaration === false) {
            return null;
        }

        return $customsDeclaration;
    }

    /**
     * @return CustomsDeclaration|null
     */
    public function lastCustomsDeclaration(): ?CustomsDeclaration
    {
        $customsDeclaration = $this->customsDeclaration ?? [];
        $customsDeclaration = end($customsDeclaration);

        if ($customsDeclaration === false) {
            return null;
        }

        return $customsDeclaration;
    }

    /**
     * @param CustomsDeclaration $customsDeclaration
     * @return static
     */
    public function addToCustomsDeclaration(CustomsDeclaration $customsDeclaration): static
    {
        $this->customsDeclaration[] = $customsDeclaration;

        return $this;
    }

    /**
     * @return CustomsDeclaration
     */
    public function addToCustomsDeclarationWithCreate(): CustomsDeclaration
    {
        $this->addTocustomsDeclaration($customsDeclaration = new CustomsDeclaration());

        return $customsDeclaration;
    }

    /**
     * @param CustomsDeclaration $customsDeclaration
     * @return static
     */
    public function addOnceToCustomsDeclaration(CustomsDeclaration $customsDeclaration): static
    {
        if (!is_array($this->customsDeclaration)) {
            $this->customsDeclaration = [];
        }

        $this->customsDeclaration[0] = $customsDeclaration;

        return $this;
    }

    /**
     * @return CustomsDeclaration
     */
    public function addOnceToCustomsDeclarationWithCreate(): CustomsDeclaration
    {
        if (!is_array($this->customsDeclaration)) {
            $this->customsDeclaration = [];
        }

        if ($this->customsDeclaration === []) {
            $this->addOnceTocustomsDeclaration(new CustomsDeclaration());
        }

        return $this->customsDeclaration[0];
    }

    /**
     * @return RequestedPickupTransportEvent|null
     */
    public function getRequestedPickupTransportEvent(): ?RequestedPickupTransportEvent
    {
        return $this->requestedPickupTransportEvent;
    }

    /**
     * @return RequestedPickupTransportEvent
     */
    public function getRequestedPickupTransportEventWithCreate(): RequestedPickupTransportEvent
    {
        $this->requestedPickupTransportEvent = is_null($this->requestedPickupTransportEvent) ? new RequestedPickupTransportEvent() : $this->requestedPickupTransportEvent;

        return $this->requestedPickupTransportEvent;
    }

    /**
     * @param RequestedPickupTransportEvent|null $requestedPickupTransportEvent
     * @return static
     */
    public function setRequestedPickupTransportEvent(
        ?RequestedPickupTransportEvent $requestedPickupTransportEvent = null,
    ): static {
        $this->requestedPickupTransportEvent = $requestedPickupTransportEvent;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetRequestedPickupTransportEvent(): static
    {
        $this->requestedPickupTransportEvent = null;

        return $this;
    }

    /**
     * @return RequestedDeliveryTransportEvent|null
     */
    public function getRequestedDeliveryTransportEvent(): ?RequestedDeliveryTransportEvent
    {
        return $this->requestedDeliveryTransportEvent;
    }

    /**
     * @return RequestedDeliveryTransportEvent
     */
    public function getRequestedDeliveryTransportEventWithCreate(): RequestedDeliveryTransportEvent
    {
        $this->requestedDeliveryTransportEvent = is_null($this->requestedDeliveryTransportEvent) ? new RequestedDeliveryTransportEvent() : $this->requestedDeliveryTransportEvent;

        return $this->requestedDeliveryTransportEvent;
    }

    /**
     * @param RequestedDeliveryTransportEvent|null $requestedDeliveryTransportEvent
     * @return static
     */
    public function setRequestedDeliveryTransportEvent(
        ?RequestedDeliveryTransportEvent $requestedDeliveryTransportEvent = null,
    ): static {
        $this->requestedDeliveryTransportEvent = $requestedDeliveryTransportEvent;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetRequestedDeliveryTransportEvent(): static
    {
        $this->requestedDeliveryTransportEvent = null;

        return $this;
    }

    /**
     * @return PlannedPickupTransportEvent|null
     */
    public function getPlannedPickupTransportEvent(): ?PlannedPickupTransportEvent
    {
        return $this->plannedPickupTransportEvent;
    }

    /**
     * @return PlannedPickupTransportEvent
     */
    public function getPlannedPickupTransportEventWithCreate(): PlannedPickupTransportEvent
    {
        $this->plannedPickupTransportEvent = is_null($this->plannedPickupTransportEvent) ? new PlannedPickupTransportEvent() : $this->plannedPickupTransportEvent;

        return $this->plannedPickupTransportEvent;
    }

    /**
     * @param PlannedPickupTransportEvent|null $plannedPickupTransportEvent
     * @return static
     */
    public function setPlannedPickupTransportEvent(
        ?PlannedPickupTransportEvent $plannedPickupTransportEvent = null,
    ): static {
        $this->plannedPickupTransportEvent = $plannedPickupTransportEvent;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPlannedPickupTransportEvent(): static
    {
        $this->plannedPickupTransportEvent = null;

        return $this;
    }

    /**
     * @return PlannedDeliveryTransportEvent|null
     */
    public function getPlannedDeliveryTransportEvent(): ?PlannedDeliveryTransportEvent
    {
        return $this->plannedDeliveryTransportEvent;
    }

    /**
     * @return PlannedDeliveryTransportEvent
     */
    public function getPlannedDeliveryTransportEventWithCreate(): PlannedDeliveryTransportEvent
    {
        $this->plannedDeliveryTransportEvent = is_null($this->plannedDeliveryTransportEvent) ? new PlannedDeliveryTransportEvent() : $this->plannedDeliveryTransportEvent;

        return $this->plannedDeliveryTransportEvent;
    }

    /**
     * @param PlannedDeliveryTransportEvent|null $plannedDeliveryTransportEvent
     * @return static
     */
    public function setPlannedDeliveryTransportEvent(
        ?PlannedDeliveryTransportEvent $plannedDeliveryTransportEvent = null,
    ): static {
        $this->plannedDeliveryTransportEvent = $plannedDeliveryTransportEvent;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPlannedDeliveryTransportEvent(): static
    {
        $this->plannedDeliveryTransportEvent = null;

        return $this;
    }

    /**
     * @return array<Status>|null
     */
    public function getStatus(): ?array
    {
        return $this->status;
    }

    /**
     * @param array<Status>|null $status
     * @return static
     */
    public function setStatus(?array $status = null): static
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetStatus(): static
    {
        $this->status = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearStatus(): static
    {
        $this->status = [];

        return $this;
    }

    /**
     * @return Status|null
     */
    public function firstStatus(): ?Status
    {
        $status = $this->status ?? [];
        $status = reset($status);

        if ($status === false) {
            return null;
        }

        return $status;
    }

    /**
     * @return Status|null
     */
    public function lastStatus(): ?Status
    {
        $status = $this->status ?? [];
        $status = end($status);

        if ($status === false) {
            return null;
        }

        return $status;
    }

    /**
     * @param Status $status
     * @return static
     */
    public function addToStatus(Status $status): static
    {
        $this->status[] = $status;

        return $this;
    }

    /**
     * @return Status
     */
    public function addToStatusWithCreate(): Status
    {
        $this->addTostatus($status = new Status());

        return $status;
    }

    /**
     * @param Status $status
     * @return static
     */
    public function addOnceToStatus(Status $status): static
    {
        if (!is_array($this->status)) {
            $this->status = [];
        }

        $this->status[0] = $status;

        return $this;
    }

    /**
     * @return Status
     */
    public function addOnceToStatusWithCreate(): Status
    {
        if (!is_array($this->status)) {
            $this->status = [];
        }

        if ($this->status === []) {
            $this->addOnceTostatus(new Status());
        }

        return $this->status[0];
    }

    /**
     * @return array<ChildConsignment>|null
     */
    public function getChildConsignment(): ?array
    {
        return $this->childConsignment;
    }

    /**
     * @param array<ChildConsignment>|null $childConsignment
     * @return static
     */
    public function setChildConsignment(?array $childConsignment = null): static
    {
        $this->childConsignment = $childConsignment;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetChildConsignment(): static
    {
        $this->childConsignment = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearChildConsignment(): static
    {
        $this->childConsignment = [];

        return $this;
    }

    /**
     * @return ChildConsignment|null
     */
    public function firstChildConsignment(): ?ChildConsignment
    {
        $childConsignment = $this->childConsignment ?? [];
        $childConsignment = reset($childConsignment);

        if ($childConsignment === false) {
            return null;
        }

        return $childConsignment;
    }

    /**
     * @return ChildConsignment|null
     */
    public function lastChildConsignment(): ?ChildConsignment
    {
        $childConsignment = $this->childConsignment ?? [];
        $childConsignment = end($childConsignment);

        if ($childConsignment === false) {
            return null;
        }

        return $childConsignment;
    }

    /**
     * @param ChildConsignment $childConsignment
     * @return static
     */
    public function addToChildConsignment(ChildConsignment $childConsignment): static
    {
        $this->childConsignment[] = $childConsignment;

        return $this;
    }

    /**
     * @return ChildConsignment
     */
    public function addToChildConsignmentWithCreate(): ChildConsignment
    {
        $this->addTochildConsignment($childConsignment = new ChildConsignment());

        return $childConsignment;
    }

    /**
     * @param ChildConsignment $childConsignment
     * @return static
     */
    public function addOnceToChildConsignment(ChildConsignment $childConsignment): static
    {
        if (!is_array($this->childConsignment)) {
            $this->childConsignment = [];
        }

        $this->childConsignment[0] = $childConsignment;

        return $this;
    }

    /**
     * @return ChildConsignment
     */
    public function addOnceToChildConsignmentWithCreate(): ChildConsignment
    {
        if (!is_array($this->childConsignment)) {
            $this->childConsignment = [];
        }

        if ($this->childConsignment === []) {
            $this->addOnceTochildConsignment(new ChildConsignment());
        }

        return $this->childConsignment[0];
    }

    /**
     * @return ConsigneeParty|null
     */
    public function getConsigneeParty(): ?ConsigneeParty
    {
        return $this->consigneeParty;
    }

    /**
     * @return ConsigneeParty
     */
    public function getConsigneePartyWithCreate(): ConsigneeParty
    {
        $this->consigneeParty = is_null($this->consigneeParty) ? new ConsigneeParty() : $this->consigneeParty;

        return $this->consigneeParty;
    }

    /**
     * @param ConsigneeParty|null $consigneeParty
     * @return static
     */
    public function setConsigneeParty(?ConsigneeParty $consigneeParty = null): static
    {
        $this->consigneeParty = $consigneeParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetConsigneeParty(): static
    {
        $this->consigneeParty = null;

        return $this;
    }

    /**
     * @return ExporterParty|null
     */
    public function getExporterParty(): ?ExporterParty
    {
        return $this->exporterParty;
    }

    /**
     * @return ExporterParty
     */
    public function getExporterPartyWithCreate(): ExporterParty
    {
        $this->exporterParty = is_null($this->exporterParty) ? new ExporterParty() : $this->exporterParty;

        return $this->exporterParty;
    }

    /**
     * @param ExporterParty|null $exporterParty
     * @return static
     */
    public function setExporterParty(?ExporterParty $exporterParty = null): static
    {
        $this->exporterParty = $exporterParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetExporterParty(): static
    {
        $this->exporterParty = null;

        return $this;
    }

    /**
     * @return ConsignorParty|null
     */
    public function getConsignorParty(): ?ConsignorParty
    {
        return $this->consignorParty;
    }

    /**
     * @return ConsignorParty
     */
    public function getConsignorPartyWithCreate(): ConsignorParty
    {
        $this->consignorParty = is_null($this->consignorParty) ? new ConsignorParty() : $this->consignorParty;

        return $this->consignorParty;
    }

    /**
     * @param ConsignorParty|null $consignorParty
     * @return static
     */
    public function setConsignorParty(?ConsignorParty $consignorParty = null): static
    {
        $this->consignorParty = $consignorParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetConsignorParty(): static
    {
        $this->consignorParty = null;

        return $this;
    }

    /**
     * @return ImporterParty|null
     */
    public function getImporterParty(): ?ImporterParty
    {
        return $this->importerParty;
    }

    /**
     * @return ImporterParty
     */
    public function getImporterPartyWithCreate(): ImporterParty
    {
        $this->importerParty = is_null($this->importerParty) ? new ImporterParty() : $this->importerParty;

        return $this->importerParty;
    }

    /**
     * @param ImporterParty|null $importerParty
     * @return static
     */
    public function setImporterParty(?ImporterParty $importerParty = null): static
    {
        $this->importerParty = $importerParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetImporterParty(): static
    {
        $this->importerParty = null;

        return $this;
    }

    /**
     * @return CarrierParty|null
     */
    public function getCarrierParty(): ?CarrierParty
    {
        return $this->carrierParty;
    }

    /**
     * @return CarrierParty
     */
    public function getCarrierPartyWithCreate(): CarrierParty
    {
        $this->carrierParty = is_null($this->carrierParty) ? new CarrierParty() : $this->carrierParty;

        return $this->carrierParty;
    }

    /**
     * @param CarrierParty|null $carrierParty
     * @return static
     */
    public function setCarrierParty(?CarrierParty $carrierParty = null): static
    {
        $this->carrierParty = $carrierParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCarrierParty(): static
    {
        $this->carrierParty = null;

        return $this;
    }

    /**
     * @return FreightForwarderParty|null
     */
    public function getFreightForwarderParty(): ?FreightForwarderParty
    {
        return $this->freightForwarderParty;
    }

    /**
     * @return FreightForwarderParty
     */
    public function getFreightForwarderPartyWithCreate(): FreightForwarderParty
    {
        $this->freightForwarderParty = is_null($this->freightForwarderParty) ? new FreightForwarderParty() : $this->freightForwarderParty;

        return $this->freightForwarderParty;
    }

    /**
     * @param FreightForwarderParty|null $freightForwarderParty
     * @return static
     */
    public function setFreightForwarderParty(?FreightForwarderParty $freightForwarderParty = null): static
    {
        $this->freightForwarderParty = $freightForwarderParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFreightForwarderParty(): static
    {
        $this->freightForwarderParty = null;

        return $this;
    }

    /**
     * @return NotifyParty|null
     */
    public function getNotifyParty(): ?NotifyParty
    {
        return $this->notifyParty;
    }

    /**
     * @return NotifyParty
     */
    public function getNotifyPartyWithCreate(): NotifyParty
    {
        $this->notifyParty = is_null($this->notifyParty) ? new NotifyParty() : $this->notifyParty;

        return $this->notifyParty;
    }

    /**
     * @param NotifyParty|null $notifyParty
     * @return static
     */
    public function setNotifyParty(?NotifyParty $notifyParty = null): static
    {
        $this->notifyParty = $notifyParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetNotifyParty(): static
    {
        $this->notifyParty = null;

        return $this;
    }

    /**
     * @return OriginalDespatchParty|null
     */
    public function getOriginalDespatchParty(): ?OriginalDespatchParty
    {
        return $this->originalDespatchParty;
    }

    /**
     * @return OriginalDespatchParty
     */
    public function getOriginalDespatchPartyWithCreate(): OriginalDespatchParty
    {
        $this->originalDespatchParty = is_null($this->originalDespatchParty) ? new OriginalDespatchParty() : $this->originalDespatchParty;

        return $this->originalDespatchParty;
    }

    /**
     * @param OriginalDespatchParty|null $originalDespatchParty
     * @return static
     */
    public function setOriginalDespatchParty(?OriginalDespatchParty $originalDespatchParty = null): static
    {
        $this->originalDespatchParty = $originalDespatchParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetOriginalDespatchParty(): static
    {
        $this->originalDespatchParty = null;

        return $this;
    }

    /**
     * @return FinalDeliveryParty|null
     */
    public function getFinalDeliveryParty(): ?FinalDeliveryParty
    {
        return $this->finalDeliveryParty;
    }

    /**
     * @return FinalDeliveryParty
     */
    public function getFinalDeliveryPartyWithCreate(): FinalDeliveryParty
    {
        $this->finalDeliveryParty = is_null($this->finalDeliveryParty) ? new FinalDeliveryParty() : $this->finalDeliveryParty;

        return $this->finalDeliveryParty;
    }

    /**
     * @param FinalDeliveryParty|null $finalDeliveryParty
     * @return static
     */
    public function setFinalDeliveryParty(?FinalDeliveryParty $finalDeliveryParty = null): static
    {
        $this->finalDeliveryParty = $finalDeliveryParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFinalDeliveryParty(): static
    {
        $this->finalDeliveryParty = null;

        return $this;
    }

    /**
     * @return PerformingCarrierParty|null
     */
    public function getPerformingCarrierParty(): ?PerformingCarrierParty
    {
        return $this->performingCarrierParty;
    }

    /**
     * @return PerformingCarrierParty
     */
    public function getPerformingCarrierPartyWithCreate(): PerformingCarrierParty
    {
        $this->performingCarrierParty = is_null($this->performingCarrierParty) ? new PerformingCarrierParty() : $this->performingCarrierParty;

        return $this->performingCarrierParty;
    }

    /**
     * @param PerformingCarrierParty|null $performingCarrierParty
     * @return static
     */
    public function setPerformingCarrierParty(?PerformingCarrierParty $performingCarrierParty = null): static
    {
        $this->performingCarrierParty = $performingCarrierParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPerformingCarrierParty(): static
    {
        $this->performingCarrierParty = null;

        return $this;
    }

    /**
     * @return SubstituteCarrierParty|null
     */
    public function getSubstituteCarrierParty(): ?SubstituteCarrierParty
    {
        return $this->substituteCarrierParty;
    }

    /**
     * @return SubstituteCarrierParty
     */
    public function getSubstituteCarrierPartyWithCreate(): SubstituteCarrierParty
    {
        $this->substituteCarrierParty = is_null($this->substituteCarrierParty) ? new SubstituteCarrierParty() : $this->substituteCarrierParty;

        return $this->substituteCarrierParty;
    }

    /**
     * @param SubstituteCarrierParty|null $substituteCarrierParty
     * @return static
     */
    public function setSubstituteCarrierParty(?SubstituteCarrierParty $substituteCarrierParty = null): static
    {
        $this->substituteCarrierParty = $substituteCarrierParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSubstituteCarrierParty(): static
    {
        $this->substituteCarrierParty = null;

        return $this;
    }

    /**
     * @return LogisticsOperatorParty|null
     */
    public function getLogisticsOperatorParty(): ?LogisticsOperatorParty
    {
        return $this->logisticsOperatorParty;
    }

    /**
     * @return LogisticsOperatorParty
     */
    public function getLogisticsOperatorPartyWithCreate(): LogisticsOperatorParty
    {
        $this->logisticsOperatorParty = is_null($this->logisticsOperatorParty) ? new LogisticsOperatorParty() : $this->logisticsOperatorParty;

        return $this->logisticsOperatorParty;
    }

    /**
     * @param LogisticsOperatorParty|null $logisticsOperatorParty
     * @return static
     */
    public function setLogisticsOperatorParty(?LogisticsOperatorParty $logisticsOperatorParty = null): static
    {
        $this->logisticsOperatorParty = $logisticsOperatorParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLogisticsOperatorParty(): static
    {
        $this->logisticsOperatorParty = null;

        return $this;
    }

    /**
     * @return TransportAdvisorParty|null
     */
    public function getTransportAdvisorParty(): ?TransportAdvisorParty
    {
        return $this->transportAdvisorParty;
    }

    /**
     * @return TransportAdvisorParty
     */
    public function getTransportAdvisorPartyWithCreate(): TransportAdvisorParty
    {
        $this->transportAdvisorParty = is_null($this->transportAdvisorParty) ? new TransportAdvisorParty() : $this->transportAdvisorParty;

        return $this->transportAdvisorParty;
    }

    /**
     * @param TransportAdvisorParty|null $transportAdvisorParty
     * @return static
     */
    public function setTransportAdvisorParty(?TransportAdvisorParty $transportAdvisorParty = null): static
    {
        $this->transportAdvisorParty = $transportAdvisorParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTransportAdvisorParty(): static
    {
        $this->transportAdvisorParty = null;

        return $this;
    }

    /**
     * @return HazardousItemNotificationParty|null
     */
    public function getHazardousItemNotificationParty(): ?HazardousItemNotificationParty
    {
        return $this->hazardousItemNotificationParty;
    }

    /**
     * @return HazardousItemNotificationParty
     */
    public function getHazardousItemNotificationPartyWithCreate(): HazardousItemNotificationParty
    {
        $this->hazardousItemNotificationParty = is_null($this->hazardousItemNotificationParty) ? new HazardousItemNotificationParty() : $this->hazardousItemNotificationParty;

        return $this->hazardousItemNotificationParty;
    }

    /**
     * @param HazardousItemNotificationParty|null $hazardousItemNotificationParty
     * @return static
     */
    public function setHazardousItemNotificationParty(
        ?HazardousItemNotificationParty $hazardousItemNotificationParty = null,
    ): static {
        $this->hazardousItemNotificationParty = $hazardousItemNotificationParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetHazardousItemNotificationParty(): static
    {
        $this->hazardousItemNotificationParty = null;

        return $this;
    }

    /**
     * @return InsuranceParty|null
     */
    public function getInsuranceParty(): ?InsuranceParty
    {
        return $this->insuranceParty;
    }

    /**
     * @return InsuranceParty
     */
    public function getInsurancePartyWithCreate(): InsuranceParty
    {
        $this->insuranceParty = is_null($this->insuranceParty) ? new InsuranceParty() : $this->insuranceParty;

        return $this->insuranceParty;
    }

    /**
     * @param InsuranceParty|null $insuranceParty
     * @return static
     */
    public function setInsuranceParty(?InsuranceParty $insuranceParty = null): static
    {
        $this->insuranceParty = $insuranceParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetInsuranceParty(): static
    {
        $this->insuranceParty = null;

        return $this;
    }

    /**
     * @return MortgageHolderParty|null
     */
    public function getMortgageHolderParty(): ?MortgageHolderParty
    {
        return $this->mortgageHolderParty;
    }

    /**
     * @return MortgageHolderParty
     */
    public function getMortgageHolderPartyWithCreate(): MortgageHolderParty
    {
        $this->mortgageHolderParty = is_null($this->mortgageHolderParty) ? new MortgageHolderParty() : $this->mortgageHolderParty;

        return $this->mortgageHolderParty;
    }

    /**
     * @param MortgageHolderParty|null $mortgageHolderParty
     * @return static
     */
    public function setMortgageHolderParty(?MortgageHolderParty $mortgageHolderParty = null): static
    {
        $this->mortgageHolderParty = $mortgageHolderParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMortgageHolderParty(): static
    {
        $this->mortgageHolderParty = null;

        return $this;
    }

    /**
     * @return BillOfLadingHolderParty|null
     */
    public function getBillOfLadingHolderParty(): ?BillOfLadingHolderParty
    {
        return $this->billOfLadingHolderParty;
    }

    /**
     * @return BillOfLadingHolderParty
     */
    public function getBillOfLadingHolderPartyWithCreate(): BillOfLadingHolderParty
    {
        $this->billOfLadingHolderParty = is_null($this->billOfLadingHolderParty) ? new BillOfLadingHolderParty() : $this->billOfLadingHolderParty;

        return $this->billOfLadingHolderParty;
    }

    /**
     * @param BillOfLadingHolderParty|null $billOfLadingHolderParty
     * @return static
     */
    public function setBillOfLadingHolderParty(?BillOfLadingHolderParty $billOfLadingHolderParty = null): static
    {
        $this->billOfLadingHolderParty = $billOfLadingHolderParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetBillOfLadingHolderParty(): static
    {
        $this->billOfLadingHolderParty = null;

        return $this;
    }

    /**
     * @return OriginalDepartureCountry|null
     */
    public function getOriginalDepartureCountry(): ?OriginalDepartureCountry
    {
        return $this->originalDepartureCountry;
    }

    /**
     * @return OriginalDepartureCountry
     */
    public function getOriginalDepartureCountryWithCreate(): OriginalDepartureCountry
    {
        $this->originalDepartureCountry = is_null($this->originalDepartureCountry) ? new OriginalDepartureCountry() : $this->originalDepartureCountry;

        return $this->originalDepartureCountry;
    }

    /**
     * @param OriginalDepartureCountry|null $originalDepartureCountry
     * @return static
     */
    public function setOriginalDepartureCountry(?OriginalDepartureCountry $originalDepartureCountry = null): static
    {
        $this->originalDepartureCountry = $originalDepartureCountry;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetOriginalDepartureCountry(): static
    {
        $this->originalDepartureCountry = null;

        return $this;
    }

    /**
     * @return FinalDestinationCountry|null
     */
    public function getFinalDestinationCountry(): ?FinalDestinationCountry
    {
        return $this->finalDestinationCountry;
    }

    /**
     * @return FinalDestinationCountry
     */
    public function getFinalDestinationCountryWithCreate(): FinalDestinationCountry
    {
        $this->finalDestinationCountry = is_null($this->finalDestinationCountry) ? new FinalDestinationCountry() : $this->finalDestinationCountry;

        return $this->finalDestinationCountry;
    }

    /**
     * @param FinalDestinationCountry|null $finalDestinationCountry
     * @return static
     */
    public function setFinalDestinationCountry(?FinalDestinationCountry $finalDestinationCountry = null): static
    {
        $this->finalDestinationCountry = $finalDestinationCountry;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFinalDestinationCountry(): static
    {
        $this->finalDestinationCountry = null;

        return $this;
    }

    /**
     * @return array<TransitCountry>|null
     */
    public function getTransitCountry(): ?array
    {
        return $this->transitCountry;
    }

    /**
     * @param array<TransitCountry>|null $transitCountry
     * @return static
     */
    public function setTransitCountry(?array $transitCountry = null): static
    {
        $this->transitCountry = $transitCountry;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTransitCountry(): static
    {
        $this->transitCountry = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearTransitCountry(): static
    {
        $this->transitCountry = [];

        return $this;
    }

    /**
     * @return TransitCountry|null
     */
    public function firstTransitCountry(): ?TransitCountry
    {
        $transitCountry = $this->transitCountry ?? [];
        $transitCountry = reset($transitCountry);

        if ($transitCountry === false) {
            return null;
        }

        return $transitCountry;
    }

    /**
     * @return TransitCountry|null
     */
    public function lastTransitCountry(): ?TransitCountry
    {
        $transitCountry = $this->transitCountry ?? [];
        $transitCountry = end($transitCountry);

        if ($transitCountry === false) {
            return null;
        }

        return $transitCountry;
    }

    /**
     * @param TransitCountry $transitCountry
     * @return static
     */
    public function addToTransitCountry(TransitCountry $transitCountry): static
    {
        $this->transitCountry[] = $transitCountry;

        return $this;
    }

    /**
     * @return TransitCountry
     */
    public function addToTransitCountryWithCreate(): TransitCountry
    {
        $this->addTotransitCountry($transitCountry = new TransitCountry());

        return $transitCountry;
    }

    /**
     * @param TransitCountry $transitCountry
     * @return static
     */
    public function addOnceToTransitCountry(TransitCountry $transitCountry): static
    {
        if (!is_array($this->transitCountry)) {
            $this->transitCountry = [];
        }

        $this->transitCountry[0] = $transitCountry;

        return $this;
    }

    /**
     * @return TransitCountry
     */
    public function addOnceToTransitCountryWithCreate(): TransitCountry
    {
        if (!is_array($this->transitCountry)) {
            $this->transitCountry = [];
        }

        if ($this->transitCountry === []) {
            $this->addOnceTotransitCountry(new TransitCountry());
        }

        return $this->transitCountry[0];
    }

    /**
     * @return TransportContract|null
     */
    public function getTransportContract(): ?TransportContract
    {
        return $this->transportContract;
    }

    /**
     * @return TransportContract
     */
    public function getTransportContractWithCreate(): TransportContract
    {
        $this->transportContract = is_null($this->transportContract) ? new TransportContract() : $this->transportContract;

        return $this->transportContract;
    }

    /**
     * @param TransportContract|null $transportContract
     * @return static
     */
    public function setTransportContract(?TransportContract $transportContract = null): static
    {
        $this->transportContract = $transportContract;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTransportContract(): static
    {
        $this->transportContract = null;

        return $this;
    }

    /**
     * @return array<TransportEvent>|null
     */
    public function getTransportEvent(): ?array
    {
        return $this->transportEvent;
    }

    /**
     * @param array<TransportEvent>|null $transportEvent
     * @return static
     */
    public function setTransportEvent(?array $transportEvent = null): static
    {
        $this->transportEvent = $transportEvent;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTransportEvent(): static
    {
        $this->transportEvent = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearTransportEvent(): static
    {
        $this->transportEvent = [];

        return $this;
    }

    /**
     * @return TransportEvent|null
     */
    public function firstTransportEvent(): ?TransportEvent
    {
        $transportEvent = $this->transportEvent ?? [];
        $transportEvent = reset($transportEvent);

        if ($transportEvent === false) {
            return null;
        }

        return $transportEvent;
    }

    /**
     * @return TransportEvent|null
     */
    public function lastTransportEvent(): ?TransportEvent
    {
        $transportEvent = $this->transportEvent ?? [];
        $transportEvent = end($transportEvent);

        if ($transportEvent === false) {
            return null;
        }

        return $transportEvent;
    }

    /**
     * @param TransportEvent $transportEvent
     * @return static
     */
    public function addToTransportEvent(TransportEvent $transportEvent): static
    {
        $this->transportEvent[] = $transportEvent;

        return $this;
    }

    /**
     * @return TransportEvent
     */
    public function addToTransportEventWithCreate(): TransportEvent
    {
        $this->addTotransportEvent($transportEvent = new TransportEvent());

        return $transportEvent;
    }

    /**
     * @param TransportEvent $transportEvent
     * @return static
     */
    public function addOnceToTransportEvent(TransportEvent $transportEvent): static
    {
        if (!is_array($this->transportEvent)) {
            $this->transportEvent = [];
        }

        $this->transportEvent[0] = $transportEvent;

        return $this;
    }

    /**
     * @return TransportEvent
     */
    public function addOnceToTransportEventWithCreate(): TransportEvent
    {
        if (!is_array($this->transportEvent)) {
            $this->transportEvent = [];
        }

        if ($this->transportEvent === []) {
            $this->addOnceTotransportEvent(new TransportEvent());
        }

        return $this->transportEvent[0];
    }

    /**
     * @return OriginalDespatchTransportationService|null
     */
    public function getOriginalDespatchTransportationService(): ?OriginalDespatchTransportationService
    {
        return $this->originalDespatchTransportationService;
    }

    /**
     * @return OriginalDespatchTransportationService
     */
    public function getOriginalDespatchTransportationServiceWithCreate(): OriginalDespatchTransportationService
    {
        $this->originalDespatchTransportationService = is_null($this->originalDespatchTransportationService) ? new OriginalDespatchTransportationService() : $this->originalDespatchTransportationService;

        return $this->originalDespatchTransportationService;
    }

    /**
     * @param OriginalDespatchTransportationService|null $originalDespatchTransportationService
     * @return static
     */
    public function setOriginalDespatchTransportationService(
        ?OriginalDespatchTransportationService $originalDespatchTransportationService = null,
    ): static {
        $this->originalDespatchTransportationService = $originalDespatchTransportationService;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetOriginalDespatchTransportationService(): static
    {
        $this->originalDespatchTransportationService = null;

        return $this;
    }

    /**
     * @return FinalDeliveryTransportationService|null
     */
    public function getFinalDeliveryTransportationService(): ?FinalDeliveryTransportationService
    {
        return $this->finalDeliveryTransportationService;
    }

    /**
     * @return FinalDeliveryTransportationService
     */
    public function getFinalDeliveryTransportationServiceWithCreate(): FinalDeliveryTransportationService
    {
        $this->finalDeliveryTransportationService = is_null($this->finalDeliveryTransportationService) ? new FinalDeliveryTransportationService() : $this->finalDeliveryTransportationService;

        return $this->finalDeliveryTransportationService;
    }

    /**
     * @param FinalDeliveryTransportationService|null $finalDeliveryTransportationService
     * @return static
     */
    public function setFinalDeliveryTransportationService(
        ?FinalDeliveryTransportationService $finalDeliveryTransportationService = null,
    ): static {
        $this->finalDeliveryTransportationService = $finalDeliveryTransportationService;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFinalDeliveryTransportationService(): static
    {
        $this->finalDeliveryTransportationService = null;

        return $this;
    }

    /**
     * @return DeliveryTerms|null
     */
    public function getDeliveryTerms(): ?DeliveryTerms
    {
        return $this->deliveryTerms;
    }

    /**
     * @return DeliveryTerms
     */
    public function getDeliveryTermsWithCreate(): DeliveryTerms
    {
        $this->deliveryTerms = is_null($this->deliveryTerms) ? new DeliveryTerms() : $this->deliveryTerms;

        return $this->deliveryTerms;
    }

    /**
     * @param DeliveryTerms|null $deliveryTerms
     * @return static
     */
    public function setDeliveryTerms(?DeliveryTerms $deliveryTerms = null): static
    {
        $this->deliveryTerms = $deliveryTerms;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDeliveryTerms(): static
    {
        $this->deliveryTerms = null;

        return $this;
    }

    /**
     * @return PaymentTerms|null
     */
    public function getPaymentTerms(): ?PaymentTerms
    {
        return $this->paymentTerms;
    }

    /**
     * @return PaymentTerms
     */
    public function getPaymentTermsWithCreate(): PaymentTerms
    {
        $this->paymentTerms = is_null($this->paymentTerms) ? new PaymentTerms() : $this->paymentTerms;

        return $this->paymentTerms;
    }

    /**
     * @param PaymentTerms|null $paymentTerms
     * @return static
     */
    public function setPaymentTerms(?PaymentTerms $paymentTerms = null): static
    {
        $this->paymentTerms = $paymentTerms;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPaymentTerms(): static
    {
        $this->paymentTerms = null;

        return $this;
    }

    /**
     * @return CollectPaymentTerms|null
     */
    public function getCollectPaymentTerms(): ?CollectPaymentTerms
    {
        return $this->collectPaymentTerms;
    }

    /**
     * @return CollectPaymentTerms
     */
    public function getCollectPaymentTermsWithCreate(): CollectPaymentTerms
    {
        $this->collectPaymentTerms = is_null($this->collectPaymentTerms) ? new CollectPaymentTerms() : $this->collectPaymentTerms;

        return $this->collectPaymentTerms;
    }

    /**
     * @param CollectPaymentTerms|null $collectPaymentTerms
     * @return static
     */
    public function setCollectPaymentTerms(?CollectPaymentTerms $collectPaymentTerms = null): static
    {
        $this->collectPaymentTerms = $collectPaymentTerms;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCollectPaymentTerms(): static
    {
        $this->collectPaymentTerms = null;

        return $this;
    }

    /**
     * @return DisbursementPaymentTerms|null
     */
    public function getDisbursementPaymentTerms(): ?DisbursementPaymentTerms
    {
        return $this->disbursementPaymentTerms;
    }

    /**
     * @return DisbursementPaymentTerms
     */
    public function getDisbursementPaymentTermsWithCreate(): DisbursementPaymentTerms
    {
        $this->disbursementPaymentTerms = is_null($this->disbursementPaymentTerms) ? new DisbursementPaymentTerms() : $this->disbursementPaymentTerms;

        return $this->disbursementPaymentTerms;
    }

    /**
     * @param DisbursementPaymentTerms|null $disbursementPaymentTerms
     * @return static
     */
    public function setDisbursementPaymentTerms(?DisbursementPaymentTerms $disbursementPaymentTerms = null): static
    {
        $this->disbursementPaymentTerms = $disbursementPaymentTerms;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetDisbursementPaymentTerms(): static
    {
        $this->disbursementPaymentTerms = null;

        return $this;
    }

    /**
     * @return PrepaidPaymentTerms|null
     */
    public function getPrepaidPaymentTerms(): ?PrepaidPaymentTerms
    {
        return $this->prepaidPaymentTerms;
    }

    /**
     * @return PrepaidPaymentTerms
     */
    public function getPrepaidPaymentTermsWithCreate(): PrepaidPaymentTerms
    {
        $this->prepaidPaymentTerms = is_null($this->prepaidPaymentTerms) ? new PrepaidPaymentTerms() : $this->prepaidPaymentTerms;

        return $this->prepaidPaymentTerms;
    }

    /**
     * @param PrepaidPaymentTerms|null $prepaidPaymentTerms
     * @return static
     */
    public function setPrepaidPaymentTerms(?PrepaidPaymentTerms $prepaidPaymentTerms = null): static
    {
        $this->prepaidPaymentTerms = $prepaidPaymentTerms;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPrepaidPaymentTerms(): static
    {
        $this->prepaidPaymentTerms = null;

        return $this;
    }

    /**
     * @return array<FreightAllowanceCharge>|null
     */
    public function getFreightAllowanceCharge(): ?array
    {
        return $this->freightAllowanceCharge;
    }

    /**
     * @param array<FreightAllowanceCharge>|null $freightAllowanceCharge
     * @return static
     */
    public function setFreightAllowanceCharge(?array $freightAllowanceCharge = null): static
    {
        $this->freightAllowanceCharge = $freightAllowanceCharge;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFreightAllowanceCharge(): static
    {
        $this->freightAllowanceCharge = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearFreightAllowanceCharge(): static
    {
        $this->freightAllowanceCharge = [];

        return $this;
    }

    /**
     * @return FreightAllowanceCharge|null
     */
    public function firstFreightAllowanceCharge(): ?FreightAllowanceCharge
    {
        $freightAllowanceCharge = $this->freightAllowanceCharge ?? [];
        $freightAllowanceCharge = reset($freightAllowanceCharge);

        if ($freightAllowanceCharge === false) {
            return null;
        }

        return $freightAllowanceCharge;
    }

    /**
     * @return FreightAllowanceCharge|null
     */
    public function lastFreightAllowanceCharge(): ?FreightAllowanceCharge
    {
        $freightAllowanceCharge = $this->freightAllowanceCharge ?? [];
        $freightAllowanceCharge = end($freightAllowanceCharge);

        if ($freightAllowanceCharge === false) {
            return null;
        }

        return $freightAllowanceCharge;
    }

    /**
     * @param FreightAllowanceCharge $freightAllowanceCharge
     * @return static
     */
    public function addToFreightAllowanceCharge(FreightAllowanceCharge $freightAllowanceCharge): static
    {
        $this->freightAllowanceCharge[] = $freightAllowanceCharge;

        return $this;
    }

    /**
     * @return FreightAllowanceCharge
     */
    public function addToFreightAllowanceChargeWithCreate(): FreightAllowanceCharge
    {
        $this->addTofreightAllowanceCharge($freightAllowanceCharge = new FreightAllowanceCharge());

        return $freightAllowanceCharge;
    }

    /**
     * @param FreightAllowanceCharge $freightAllowanceCharge
     * @return static
     */
    public function addOnceToFreightAllowanceCharge(FreightAllowanceCharge $freightAllowanceCharge): static
    {
        if (!is_array($this->freightAllowanceCharge)) {
            $this->freightAllowanceCharge = [];
        }

        $this->freightAllowanceCharge[0] = $freightAllowanceCharge;

        return $this;
    }

    /**
     * @return FreightAllowanceCharge
     */
    public function addOnceToFreightAllowanceChargeWithCreate(): FreightAllowanceCharge
    {
        if (!is_array($this->freightAllowanceCharge)) {
            $this->freightAllowanceCharge = [];
        }

        if ($this->freightAllowanceCharge === []) {
            $this->addOnceTofreightAllowanceCharge(new FreightAllowanceCharge());
        }

        return $this->freightAllowanceCharge[0];
    }

    /**
     * @return array<ExtraAllowanceCharge>|null
     */
    public function getExtraAllowanceCharge(): ?array
    {
        return $this->extraAllowanceCharge;
    }

    /**
     * @param array<ExtraAllowanceCharge>|null $extraAllowanceCharge
     * @return static
     */
    public function setExtraAllowanceCharge(?array $extraAllowanceCharge = null): static
    {
        $this->extraAllowanceCharge = $extraAllowanceCharge;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetExtraAllowanceCharge(): static
    {
        $this->extraAllowanceCharge = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearExtraAllowanceCharge(): static
    {
        $this->extraAllowanceCharge = [];

        return $this;
    }

    /**
     * @return ExtraAllowanceCharge|null
     */
    public function firstExtraAllowanceCharge(): ?ExtraAllowanceCharge
    {
        $extraAllowanceCharge = $this->extraAllowanceCharge ?? [];
        $extraAllowanceCharge = reset($extraAllowanceCharge);

        if ($extraAllowanceCharge === false) {
            return null;
        }

        return $extraAllowanceCharge;
    }

    /**
     * @return ExtraAllowanceCharge|null
     */
    public function lastExtraAllowanceCharge(): ?ExtraAllowanceCharge
    {
        $extraAllowanceCharge = $this->extraAllowanceCharge ?? [];
        $extraAllowanceCharge = end($extraAllowanceCharge);

        if ($extraAllowanceCharge === false) {
            return null;
        }

        return $extraAllowanceCharge;
    }

    /**
     * @param ExtraAllowanceCharge $extraAllowanceCharge
     * @return static
     */
    public function addToExtraAllowanceCharge(ExtraAllowanceCharge $extraAllowanceCharge): static
    {
        $this->extraAllowanceCharge[] = $extraAllowanceCharge;

        return $this;
    }

    /**
     * @return ExtraAllowanceCharge
     */
    public function addToExtraAllowanceChargeWithCreate(): ExtraAllowanceCharge
    {
        $this->addToextraAllowanceCharge($extraAllowanceCharge = new ExtraAllowanceCharge());

        return $extraAllowanceCharge;
    }

    /**
     * @param ExtraAllowanceCharge $extraAllowanceCharge
     * @return static
     */
    public function addOnceToExtraAllowanceCharge(ExtraAllowanceCharge $extraAllowanceCharge): static
    {
        if (!is_array($this->extraAllowanceCharge)) {
            $this->extraAllowanceCharge = [];
        }

        $this->extraAllowanceCharge[0] = $extraAllowanceCharge;

        return $this;
    }

    /**
     * @return ExtraAllowanceCharge
     */
    public function addOnceToExtraAllowanceChargeWithCreate(): ExtraAllowanceCharge
    {
        if (!is_array($this->extraAllowanceCharge)) {
            $this->extraAllowanceCharge = [];
        }

        if ($this->extraAllowanceCharge === []) {
            $this->addOnceToextraAllowanceCharge(new ExtraAllowanceCharge());
        }

        return $this->extraAllowanceCharge[0];
    }

    /**
     * @return array<MainCarriageShipmentStage>|null
     */
    public function getMainCarriageShipmentStage(): ?array
    {
        return $this->mainCarriageShipmentStage;
    }

    /**
     * @param array<MainCarriageShipmentStage>|null $mainCarriageShipmentStage
     * @return static
     */
    public function setMainCarriageShipmentStage(?array $mainCarriageShipmentStage = null): static
    {
        $this->mainCarriageShipmentStage = $mainCarriageShipmentStage;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMainCarriageShipmentStage(): static
    {
        $this->mainCarriageShipmentStage = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearMainCarriageShipmentStage(): static
    {
        $this->mainCarriageShipmentStage = [];

        return $this;
    }

    /**
     * @return MainCarriageShipmentStage|null
     */
    public function firstMainCarriageShipmentStage(): ?MainCarriageShipmentStage
    {
        $mainCarriageShipmentStage = $this->mainCarriageShipmentStage ?? [];
        $mainCarriageShipmentStage = reset($mainCarriageShipmentStage);

        if ($mainCarriageShipmentStage === false) {
            return null;
        }

        return $mainCarriageShipmentStage;
    }

    /**
     * @return MainCarriageShipmentStage|null
     */
    public function lastMainCarriageShipmentStage(): ?MainCarriageShipmentStage
    {
        $mainCarriageShipmentStage = $this->mainCarriageShipmentStage ?? [];
        $mainCarriageShipmentStage = end($mainCarriageShipmentStage);

        if ($mainCarriageShipmentStage === false) {
            return null;
        }

        return $mainCarriageShipmentStage;
    }

    /**
     * @param MainCarriageShipmentStage $mainCarriageShipmentStage
     * @return static
     */
    public function addToMainCarriageShipmentStage(MainCarriageShipmentStage $mainCarriageShipmentStage): static
    {
        $this->mainCarriageShipmentStage[] = $mainCarriageShipmentStage;

        return $this;
    }

    /**
     * @return MainCarriageShipmentStage
     */
    public function addToMainCarriageShipmentStageWithCreate(): MainCarriageShipmentStage
    {
        $this->addTomainCarriageShipmentStage($mainCarriageShipmentStage = new MainCarriageShipmentStage());

        return $mainCarriageShipmentStage;
    }

    /**
     * @param MainCarriageShipmentStage $mainCarriageShipmentStage
     * @return static
     */
    public function addOnceToMainCarriageShipmentStage(MainCarriageShipmentStage $mainCarriageShipmentStage): static
    {
        if (!is_array($this->mainCarriageShipmentStage)) {
            $this->mainCarriageShipmentStage = [];
        }

        $this->mainCarriageShipmentStage[0] = $mainCarriageShipmentStage;

        return $this;
    }

    /**
     * @return MainCarriageShipmentStage
     */
    public function addOnceToMainCarriageShipmentStageWithCreate(): MainCarriageShipmentStage
    {
        if (!is_array($this->mainCarriageShipmentStage)) {
            $this->mainCarriageShipmentStage = [];
        }

        if ($this->mainCarriageShipmentStage === []) {
            $this->addOnceTomainCarriageShipmentStage(new MainCarriageShipmentStage());
        }

        return $this->mainCarriageShipmentStage[0];
    }

    /**
     * @return array<PreCarriageShipmentStage>|null
     */
    public function getPreCarriageShipmentStage(): ?array
    {
        return $this->preCarriageShipmentStage;
    }

    /**
     * @param array<PreCarriageShipmentStage>|null $preCarriageShipmentStage
     * @return static
     */
    public function setPreCarriageShipmentStage(?array $preCarriageShipmentStage = null): static
    {
        $this->preCarriageShipmentStage = $preCarriageShipmentStage;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPreCarriageShipmentStage(): static
    {
        $this->preCarriageShipmentStage = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearPreCarriageShipmentStage(): static
    {
        $this->preCarriageShipmentStage = [];

        return $this;
    }

    /**
     * @return PreCarriageShipmentStage|null
     */
    public function firstPreCarriageShipmentStage(): ?PreCarriageShipmentStage
    {
        $preCarriageShipmentStage = $this->preCarriageShipmentStage ?? [];
        $preCarriageShipmentStage = reset($preCarriageShipmentStage);

        if ($preCarriageShipmentStage === false) {
            return null;
        }

        return $preCarriageShipmentStage;
    }

    /**
     * @return PreCarriageShipmentStage|null
     */
    public function lastPreCarriageShipmentStage(): ?PreCarriageShipmentStage
    {
        $preCarriageShipmentStage = $this->preCarriageShipmentStage ?? [];
        $preCarriageShipmentStage = end($preCarriageShipmentStage);

        if ($preCarriageShipmentStage === false) {
            return null;
        }

        return $preCarriageShipmentStage;
    }

    /**
     * @param PreCarriageShipmentStage $preCarriageShipmentStage
     * @return static
     */
    public function addToPreCarriageShipmentStage(PreCarriageShipmentStage $preCarriageShipmentStage): static
    {
        $this->preCarriageShipmentStage[] = $preCarriageShipmentStage;

        return $this;
    }

    /**
     * @return PreCarriageShipmentStage
     */
    public function addToPreCarriageShipmentStageWithCreate(): PreCarriageShipmentStage
    {
        $this->addTopreCarriageShipmentStage($preCarriageShipmentStage = new PreCarriageShipmentStage());

        return $preCarriageShipmentStage;
    }

    /**
     * @param PreCarriageShipmentStage $preCarriageShipmentStage
     * @return static
     */
    public function addOnceToPreCarriageShipmentStage(PreCarriageShipmentStage $preCarriageShipmentStage): static
    {
        if (!is_array($this->preCarriageShipmentStage)) {
            $this->preCarriageShipmentStage = [];
        }

        $this->preCarriageShipmentStage[0] = $preCarriageShipmentStage;

        return $this;
    }

    /**
     * @return PreCarriageShipmentStage
     */
    public function addOnceToPreCarriageShipmentStageWithCreate(): PreCarriageShipmentStage
    {
        if (!is_array($this->preCarriageShipmentStage)) {
            $this->preCarriageShipmentStage = [];
        }

        if ($this->preCarriageShipmentStage === []) {
            $this->addOnceTopreCarriageShipmentStage(new PreCarriageShipmentStage());
        }

        return $this->preCarriageShipmentStage[0];
    }

    /**
     * @return array<OnCarriageShipmentStage>|null
     */
    public function getOnCarriageShipmentStage(): ?array
    {
        return $this->onCarriageShipmentStage;
    }

    /**
     * @param array<OnCarriageShipmentStage>|null $onCarriageShipmentStage
     * @return static
     */
    public function setOnCarriageShipmentStage(?array $onCarriageShipmentStage = null): static
    {
        $this->onCarriageShipmentStage = $onCarriageShipmentStage;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetOnCarriageShipmentStage(): static
    {
        $this->onCarriageShipmentStage = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearOnCarriageShipmentStage(): static
    {
        $this->onCarriageShipmentStage = [];

        return $this;
    }

    /**
     * @return OnCarriageShipmentStage|null
     */
    public function firstOnCarriageShipmentStage(): ?OnCarriageShipmentStage
    {
        $onCarriageShipmentStage = $this->onCarriageShipmentStage ?? [];
        $onCarriageShipmentStage = reset($onCarriageShipmentStage);

        if ($onCarriageShipmentStage === false) {
            return null;
        }

        return $onCarriageShipmentStage;
    }

    /**
     * @return OnCarriageShipmentStage|null
     */
    public function lastOnCarriageShipmentStage(): ?OnCarriageShipmentStage
    {
        $onCarriageShipmentStage = $this->onCarriageShipmentStage ?? [];
        $onCarriageShipmentStage = end($onCarriageShipmentStage);

        if ($onCarriageShipmentStage === false) {
            return null;
        }

        return $onCarriageShipmentStage;
    }

    /**
     * @param OnCarriageShipmentStage $onCarriageShipmentStage
     * @return static
     */
    public function addToOnCarriageShipmentStage(OnCarriageShipmentStage $onCarriageShipmentStage): static
    {
        $this->onCarriageShipmentStage[] = $onCarriageShipmentStage;

        return $this;
    }

    /**
     * @return OnCarriageShipmentStage
     */
    public function addToOnCarriageShipmentStageWithCreate(): OnCarriageShipmentStage
    {
        $this->addToonCarriageShipmentStage($onCarriageShipmentStage = new OnCarriageShipmentStage());

        return $onCarriageShipmentStage;
    }

    /**
     * @param OnCarriageShipmentStage $onCarriageShipmentStage
     * @return static
     */
    public function addOnceToOnCarriageShipmentStage(OnCarriageShipmentStage $onCarriageShipmentStage): static
    {
        if (!is_array($this->onCarriageShipmentStage)) {
            $this->onCarriageShipmentStage = [];
        }

        $this->onCarriageShipmentStage[0] = $onCarriageShipmentStage;

        return $this;
    }

    /**
     * @return OnCarriageShipmentStage
     */
    public function addOnceToOnCarriageShipmentStageWithCreate(): OnCarriageShipmentStage
    {
        if (!is_array($this->onCarriageShipmentStage)) {
            $this->onCarriageShipmentStage = [];
        }

        if ($this->onCarriageShipmentStage === []) {
            $this->addOnceToonCarriageShipmentStage(new OnCarriageShipmentStage());
        }

        return $this->onCarriageShipmentStage[0];
    }

    /**
     * @return array<TransportHandlingUnit>|null
     */
    public function getTransportHandlingUnit(): ?array
    {
        return $this->transportHandlingUnit;
    }

    /**
     * @param array<TransportHandlingUnit>|null $transportHandlingUnit
     * @return static
     */
    public function setTransportHandlingUnit(?array $transportHandlingUnit = null): static
    {
        $this->transportHandlingUnit = $transportHandlingUnit;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTransportHandlingUnit(): static
    {
        $this->transportHandlingUnit = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearTransportHandlingUnit(): static
    {
        $this->transportHandlingUnit = [];

        return $this;
    }

    /**
     * @return TransportHandlingUnit|null
     */
    public function firstTransportHandlingUnit(): ?TransportHandlingUnit
    {
        $transportHandlingUnit = $this->transportHandlingUnit ?? [];
        $transportHandlingUnit = reset($transportHandlingUnit);

        if ($transportHandlingUnit === false) {
            return null;
        }

        return $transportHandlingUnit;
    }

    /**
     * @return TransportHandlingUnit|null
     */
    public function lastTransportHandlingUnit(): ?TransportHandlingUnit
    {
        $transportHandlingUnit = $this->transportHandlingUnit ?? [];
        $transportHandlingUnit = end($transportHandlingUnit);

        if ($transportHandlingUnit === false) {
            return null;
        }

        return $transportHandlingUnit;
    }

    /**
     * @param TransportHandlingUnit $transportHandlingUnit
     * @return static
     */
    public function addToTransportHandlingUnit(TransportHandlingUnit $transportHandlingUnit): static
    {
        $this->transportHandlingUnit[] = $transportHandlingUnit;

        return $this;
    }

    /**
     * @return TransportHandlingUnit
     */
    public function addToTransportHandlingUnitWithCreate(): TransportHandlingUnit
    {
        $this->addTotransportHandlingUnit($transportHandlingUnit = new TransportHandlingUnit());

        return $transportHandlingUnit;
    }

    /**
     * @param TransportHandlingUnit $transportHandlingUnit
     * @return static
     */
    public function addOnceToTransportHandlingUnit(TransportHandlingUnit $transportHandlingUnit): static
    {
        if (!is_array($this->transportHandlingUnit)) {
            $this->transportHandlingUnit = [];
        }

        $this->transportHandlingUnit[0] = $transportHandlingUnit;

        return $this;
    }

    /**
     * @return TransportHandlingUnit
     */
    public function addOnceToTransportHandlingUnitWithCreate(): TransportHandlingUnit
    {
        if (!is_array($this->transportHandlingUnit)) {
            $this->transportHandlingUnit = [];
        }

        if ($this->transportHandlingUnit === []) {
            $this->addOnceTotransportHandlingUnit(new TransportHandlingUnit());
        }

        return $this->transportHandlingUnit[0];
    }

    /**
     * @return FirstArrivalPortLocation|null
     */
    public function getFirstArrivalPortLocation(): ?FirstArrivalPortLocation
    {
        return $this->firstArrivalPortLocation;
    }

    /**
     * @return FirstArrivalPortLocation
     */
    public function getFirstArrivalPortLocationWithCreate(): FirstArrivalPortLocation
    {
        $this->firstArrivalPortLocation = is_null($this->firstArrivalPortLocation) ? new FirstArrivalPortLocation() : $this->firstArrivalPortLocation;

        return $this->firstArrivalPortLocation;
    }

    /**
     * @param FirstArrivalPortLocation|null $firstArrivalPortLocation
     * @return static
     */
    public function setFirstArrivalPortLocation(?FirstArrivalPortLocation $firstArrivalPortLocation = null): static
    {
        $this->firstArrivalPortLocation = $firstArrivalPortLocation;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFirstArrivalPortLocation(): static
    {
        $this->firstArrivalPortLocation = null;

        return $this;
    }

    /**
     * @return LastExitPortLocation|null
     */
    public function getLastExitPortLocation(): ?LastExitPortLocation
    {
        return $this->lastExitPortLocation;
    }

    /**
     * @return LastExitPortLocation
     */
    public function getLastExitPortLocationWithCreate(): LastExitPortLocation
    {
        $this->lastExitPortLocation = is_null($this->lastExitPortLocation) ? new LastExitPortLocation() : $this->lastExitPortLocation;

        return $this->lastExitPortLocation;
    }

    /**
     * @param LastExitPortLocation|null $lastExitPortLocation
     * @return static
     */
    public function setLastExitPortLocation(?LastExitPortLocation $lastExitPortLocation = null): static
    {
        $this->lastExitPortLocation = $lastExitPortLocation;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLastExitPortLocation(): static
    {
        $this->lastExitPortLocation = null;

        return $this;
    }
}
