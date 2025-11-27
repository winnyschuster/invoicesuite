<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\AdditionalInformation;
use horstoeko\invoicesuite\documents\models\ubl\cbc\CategoryName;
use horstoeko\invoicesuite\documents\models\ubl\cbc\EmergencyProceduresCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\HazardClassID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\HazardousCategoryCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\ID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LowerOrangeHazardPlacardID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MarkingID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\MedicalFirstAidGuideCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\NetVolumeMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\NetWeightMeasure;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PlacardEndorsement;
use horstoeko\invoicesuite\documents\models\ubl\cbc\PlacardNotation;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity;
use horstoeko\invoicesuite\documents\models\ubl\cbc\TechnicalName;
use horstoeko\invoicesuite\documents\models\ubl\cbc\UNDGCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\UpperOrangeHazardPlacardID;

class HazardousItemType
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
     * @var PlacardNotation|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PlacardNotation")
     * @JMS\Expose
     * @JMS\SerializedName("PlacardNotation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPlacardNotation", setter="setPlacardNotation")
     */
    private $placardNotation;

    /**
     * @var PlacardEndorsement|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\PlacardEndorsement")
     * @JMS\Expose
     * @JMS\SerializedName("PlacardEndorsement")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPlacardEndorsement", setter="setPlacardEndorsement")
     */
    private $placardEndorsement;

    /**
     * @var array<AdditionalInformation>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cbc\AdditionalInformation>")
     * @JMS\Expose
     * @JMS\SerializedName("AdditionalInformation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="AdditionalInformation", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2")
     * @JMS\Accessor(getter="getAdditionalInformation", setter="setAdditionalInformation")
     */
    private $additionalInformation;

    /**
     * @var UNDGCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\UNDGCode")
     * @JMS\Expose
     * @JMS\SerializedName("UNDGCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getUNDGCode", setter="setUNDGCode")
     */
    private $uNDGCode;

    /**
     * @var EmergencyProceduresCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\EmergencyProceduresCode")
     * @JMS\Expose
     * @JMS\SerializedName("EmergencyProceduresCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEmergencyProceduresCode", setter="setEmergencyProceduresCode")
     */
    private $emergencyProceduresCode;

    /**
     * @var MedicalFirstAidGuideCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MedicalFirstAidGuideCode")
     * @JMS\Expose
     * @JMS\SerializedName("MedicalFirstAidGuideCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMedicalFirstAidGuideCode", setter="setMedicalFirstAidGuideCode")
     */
    private $medicalFirstAidGuideCode;

    /**
     * @var TechnicalName|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\TechnicalName")
     * @JMS\Expose
     * @JMS\SerializedName("TechnicalName")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getTechnicalName", setter="setTechnicalName")
     */
    private $technicalName;

    /**
     * @var CategoryName|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\CategoryName")
     * @JMS\Expose
     * @JMS\SerializedName("CategoryName")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getCategoryName", setter="setCategoryName")
     */
    private $categoryName;

    /**
     * @var HazardousCategoryCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\HazardousCategoryCode")
     * @JMS\Expose
     * @JMS\SerializedName("HazardousCategoryCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getHazardousCategoryCode", setter="setHazardousCategoryCode")
     */
    private $hazardousCategoryCode;

    /**
     * @var UpperOrangeHazardPlacardID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\UpperOrangeHazardPlacardID")
     * @JMS\Expose
     * @JMS\SerializedName("UpperOrangeHazardPlacardID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getUpperOrangeHazardPlacardID", setter="setUpperOrangeHazardPlacardID")
     */
    private $upperOrangeHazardPlacardID;

    /**
     * @var LowerOrangeHazardPlacardID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LowerOrangeHazardPlacardID")
     * @JMS\Expose
     * @JMS\SerializedName("LowerOrangeHazardPlacardID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLowerOrangeHazardPlacardID", setter="setLowerOrangeHazardPlacardID")
     */
    private $lowerOrangeHazardPlacardID;

    /**
     * @var MarkingID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\MarkingID")
     * @JMS\Expose
     * @JMS\SerializedName("MarkingID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMarkingID", setter="setMarkingID")
     */
    private $markingID;

    /**
     * @var HazardClassID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\HazardClassID")
     * @JMS\Expose
     * @JMS\SerializedName("HazardClassID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getHazardClassID", setter="setHazardClassID")
     */
    private $hazardClassID;

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
     * @var Quantity|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Quantity")
     * @JMS\Expose
     * @JMS\SerializedName("Quantity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getQuantity", setter="setQuantity")
     */
    private $quantity;

    /**
     * @var ContactParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\ContactParty")
     * @JMS\Expose
     * @JMS\SerializedName("ContactParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContactParty", setter="setContactParty")
     */
    private $contactParty;

    /**
     * @var array<SecondaryHazard>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\SecondaryHazard>")
     * @JMS\Expose
     * @JMS\SerializedName("SecondaryHazard")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="SecondaryHazard", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getSecondaryHazard", setter="setSecondaryHazard")
     */
    private $secondaryHazard;

    /**
     * @var array<HazardousGoodsTransit>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\HazardousGoodsTransit>")
     * @JMS\Expose
     * @JMS\SerializedName("HazardousGoodsTransit")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="HazardousGoodsTransit", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getHazardousGoodsTransit", setter="setHazardousGoodsTransit")
     */
    private $hazardousGoodsTransit;

    /**
     * @var EmergencyTemperature|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\EmergencyTemperature")
     * @JMS\Expose
     * @JMS\SerializedName("EmergencyTemperature")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEmergencyTemperature", setter="setEmergencyTemperature")
     */
    private $emergencyTemperature;

    /**
     * @var FlashpointTemperature|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\FlashpointTemperature")
     * @JMS\Expose
     * @JMS\SerializedName("FlashpointTemperature")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFlashpointTemperature", setter="setFlashpointTemperature")
     */
    private $flashpointTemperature;

    /**
     * @var array<AdditionalTemperature>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\AdditionalTemperature>")
     * @JMS\Expose
     * @JMS\SerializedName("AdditionalTemperature")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="AdditionalTemperature", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getAdditionalTemperature", setter="setAdditionalTemperature")
     */
    private $additionalTemperature;

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
     * @return PlacardNotation|null
     */
    public function getPlacardNotation(): ?PlacardNotation
    {
        return $this->placardNotation;
    }

    /**
     * @return PlacardNotation
     */
    public function getPlacardNotationWithCreate(): PlacardNotation
    {
        $this->placardNotation = is_null($this->placardNotation) ? new PlacardNotation() : $this->placardNotation;

        return $this->placardNotation;
    }

    /**
     * @param PlacardNotation|null $placardNotation
     * @return static
     */
    public function setPlacardNotation(?PlacardNotation $placardNotation = null): static
    {
        $this->placardNotation = $placardNotation;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPlacardNotation(): static
    {
        $this->placardNotation = null;

        return $this;
    }

    /**
     * @return PlacardEndorsement|null
     */
    public function getPlacardEndorsement(): ?PlacardEndorsement
    {
        return $this->placardEndorsement;
    }

    /**
     * @return PlacardEndorsement
     */
    public function getPlacardEndorsementWithCreate(): PlacardEndorsement
    {
        $this->placardEndorsement = is_null($this->placardEndorsement) ? new PlacardEndorsement() : $this->placardEndorsement;

        return $this->placardEndorsement;
    }

    /**
     * @param PlacardEndorsement|null $placardEndorsement
     * @return static
     */
    public function setPlacardEndorsement(?PlacardEndorsement $placardEndorsement = null): static
    {
        $this->placardEndorsement = $placardEndorsement;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPlacardEndorsement(): static
    {
        $this->placardEndorsement = null;

        return $this;
    }

    /**
     * @return array<AdditionalInformation>|null
     */
    public function getAdditionalInformation(): ?array
    {
        return $this->additionalInformation;
    }

    /**
     * @param array<AdditionalInformation>|null $additionalInformation
     * @return static
     */
    public function setAdditionalInformation(?array $additionalInformation = null): static
    {
        $this->additionalInformation = $additionalInformation;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAdditionalInformation(): static
    {
        $this->additionalInformation = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearAdditionalInformation(): static
    {
        $this->additionalInformation = [];

        return $this;
    }

    /**
     * @return AdditionalInformation|null
     */
    public function firstAdditionalInformation(): ?AdditionalInformation
    {
        $additionalInformation = $this->additionalInformation ?? [];
        $additionalInformation = reset($additionalInformation);

        if ($additionalInformation === false) {
            return null;
        }

        return $additionalInformation;
    }

    /**
     * @return AdditionalInformation|null
     */
    public function lastAdditionalInformation(): ?AdditionalInformation
    {
        $additionalInformation = $this->additionalInformation ?? [];
        $additionalInformation = end($additionalInformation);

        if ($additionalInformation === false) {
            return null;
        }

        return $additionalInformation;
    }

    /**
     * @param AdditionalInformation $additionalInformation
     * @return static
     */
    public function addToAdditionalInformation(AdditionalInformation $additionalInformation): static
    {
        $this->additionalInformation[] = $additionalInformation;

        return $this;
    }

    /**
     * @return AdditionalInformation
     */
    public function addToAdditionalInformationWithCreate(): AdditionalInformation
    {
        $this->addToadditionalInformation($additionalInformation = new AdditionalInformation());

        return $additionalInformation;
    }

    /**
     * @param AdditionalInformation $additionalInformation
     * @return static
     */
    public function addOnceToAdditionalInformation(AdditionalInformation $additionalInformation): static
    {
        if (!is_array($this->additionalInformation)) {
            $this->additionalInformation = [];
        }

        $this->additionalInformation[0] = $additionalInformation;

        return $this;
    }

    /**
     * @return AdditionalInformation
     */
    public function addOnceToAdditionalInformationWithCreate(): AdditionalInformation
    {
        if (!is_array($this->additionalInformation)) {
            $this->additionalInformation = [];
        }

        if ($this->additionalInformation === []) {
            $this->addOnceToadditionalInformation(new AdditionalInformation());
        }

        return $this->additionalInformation[0];
    }

    /**
     * @return UNDGCode|null
     */
    public function getUNDGCode(): ?UNDGCode
    {
        return $this->uNDGCode;
    }

    /**
     * @return UNDGCode
     */
    public function getUNDGCodeWithCreate(): UNDGCode
    {
        $this->uNDGCode = is_null($this->uNDGCode) ? new UNDGCode() : $this->uNDGCode;

        return $this->uNDGCode;
    }

    /**
     * @param UNDGCode|null $uNDGCode
     * @return static
     */
    public function setUNDGCode(?UNDGCode $uNDGCode = null): static
    {
        $this->uNDGCode = $uNDGCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetUNDGCode(): static
    {
        $this->uNDGCode = null;

        return $this;
    }

    /**
     * @return EmergencyProceduresCode|null
     */
    public function getEmergencyProceduresCode(): ?EmergencyProceduresCode
    {
        return $this->emergencyProceduresCode;
    }

    /**
     * @return EmergencyProceduresCode
     */
    public function getEmergencyProceduresCodeWithCreate(): EmergencyProceduresCode
    {
        $this->emergencyProceduresCode = is_null($this->emergencyProceduresCode) ? new EmergencyProceduresCode() : $this->emergencyProceduresCode;

        return $this->emergencyProceduresCode;
    }

    /**
     * @param EmergencyProceduresCode|null $emergencyProceduresCode
     * @return static
     */
    public function setEmergencyProceduresCode(?EmergencyProceduresCode $emergencyProceduresCode = null): static
    {
        $this->emergencyProceduresCode = $emergencyProceduresCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetEmergencyProceduresCode(): static
    {
        $this->emergencyProceduresCode = null;

        return $this;
    }

    /**
     * @return MedicalFirstAidGuideCode|null
     */
    public function getMedicalFirstAidGuideCode(): ?MedicalFirstAidGuideCode
    {
        return $this->medicalFirstAidGuideCode;
    }

    /**
     * @return MedicalFirstAidGuideCode
     */
    public function getMedicalFirstAidGuideCodeWithCreate(): MedicalFirstAidGuideCode
    {
        $this->medicalFirstAidGuideCode = is_null($this->medicalFirstAidGuideCode) ? new MedicalFirstAidGuideCode() : $this->medicalFirstAidGuideCode;

        return $this->medicalFirstAidGuideCode;
    }

    /**
     * @param MedicalFirstAidGuideCode|null $medicalFirstAidGuideCode
     * @return static
     */
    public function setMedicalFirstAidGuideCode(?MedicalFirstAidGuideCode $medicalFirstAidGuideCode = null): static
    {
        $this->medicalFirstAidGuideCode = $medicalFirstAidGuideCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMedicalFirstAidGuideCode(): static
    {
        $this->medicalFirstAidGuideCode = null;

        return $this;
    }

    /**
     * @return TechnicalName|null
     */
    public function getTechnicalName(): ?TechnicalName
    {
        return $this->technicalName;
    }

    /**
     * @return TechnicalName
     */
    public function getTechnicalNameWithCreate(): TechnicalName
    {
        $this->technicalName = is_null($this->technicalName) ? new TechnicalName() : $this->technicalName;

        return $this->technicalName;
    }

    /**
     * @param TechnicalName|null $technicalName
     * @return static
     */
    public function setTechnicalName(?TechnicalName $technicalName = null): static
    {
        $this->technicalName = $technicalName;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetTechnicalName(): static
    {
        $this->technicalName = null;

        return $this;
    }

    /**
     * @return CategoryName|null
     */
    public function getCategoryName(): ?CategoryName
    {
        return $this->categoryName;
    }

    /**
     * @return CategoryName
     */
    public function getCategoryNameWithCreate(): CategoryName
    {
        $this->categoryName = is_null($this->categoryName) ? new CategoryName() : $this->categoryName;

        return $this->categoryName;
    }

    /**
     * @param CategoryName|null $categoryName
     * @return static
     */
    public function setCategoryName(?CategoryName $categoryName = null): static
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetCategoryName(): static
    {
        $this->categoryName = null;

        return $this;
    }

    /**
     * @return HazardousCategoryCode|null
     */
    public function getHazardousCategoryCode(): ?HazardousCategoryCode
    {
        return $this->hazardousCategoryCode;
    }

    /**
     * @return HazardousCategoryCode
     */
    public function getHazardousCategoryCodeWithCreate(): HazardousCategoryCode
    {
        $this->hazardousCategoryCode = is_null($this->hazardousCategoryCode) ? new HazardousCategoryCode() : $this->hazardousCategoryCode;

        return $this->hazardousCategoryCode;
    }

    /**
     * @param HazardousCategoryCode|null $hazardousCategoryCode
     * @return static
     */
    public function setHazardousCategoryCode(?HazardousCategoryCode $hazardousCategoryCode = null): static
    {
        $this->hazardousCategoryCode = $hazardousCategoryCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetHazardousCategoryCode(): static
    {
        $this->hazardousCategoryCode = null;

        return $this;
    }

    /**
     * @return UpperOrangeHazardPlacardID|null
     */
    public function getUpperOrangeHazardPlacardID(): ?UpperOrangeHazardPlacardID
    {
        return $this->upperOrangeHazardPlacardID;
    }

    /**
     * @return UpperOrangeHazardPlacardID
     */
    public function getUpperOrangeHazardPlacardIDWithCreate(): UpperOrangeHazardPlacardID
    {
        $this->upperOrangeHazardPlacardID = is_null($this->upperOrangeHazardPlacardID) ? new UpperOrangeHazardPlacardID() : $this->upperOrangeHazardPlacardID;

        return $this->upperOrangeHazardPlacardID;
    }

    /**
     * @param UpperOrangeHazardPlacardID|null $upperOrangeHazardPlacardID
     * @return static
     */
    public function setUpperOrangeHazardPlacardID(
        ?UpperOrangeHazardPlacardID $upperOrangeHazardPlacardID = null,
    ): static {
        $this->upperOrangeHazardPlacardID = $upperOrangeHazardPlacardID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetUpperOrangeHazardPlacardID(): static
    {
        $this->upperOrangeHazardPlacardID = null;

        return $this;
    }

    /**
     * @return LowerOrangeHazardPlacardID|null
     */
    public function getLowerOrangeHazardPlacardID(): ?LowerOrangeHazardPlacardID
    {
        return $this->lowerOrangeHazardPlacardID;
    }

    /**
     * @return LowerOrangeHazardPlacardID
     */
    public function getLowerOrangeHazardPlacardIDWithCreate(): LowerOrangeHazardPlacardID
    {
        $this->lowerOrangeHazardPlacardID = is_null($this->lowerOrangeHazardPlacardID) ? new LowerOrangeHazardPlacardID() : $this->lowerOrangeHazardPlacardID;

        return $this->lowerOrangeHazardPlacardID;
    }

    /**
     * @param LowerOrangeHazardPlacardID|null $lowerOrangeHazardPlacardID
     * @return static
     */
    public function setLowerOrangeHazardPlacardID(
        ?LowerOrangeHazardPlacardID $lowerOrangeHazardPlacardID = null,
    ): static {
        $this->lowerOrangeHazardPlacardID = $lowerOrangeHazardPlacardID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLowerOrangeHazardPlacardID(): static
    {
        $this->lowerOrangeHazardPlacardID = null;

        return $this;
    }

    /**
     * @return MarkingID|null
     */
    public function getMarkingID(): ?MarkingID
    {
        return $this->markingID;
    }

    /**
     * @return MarkingID
     */
    public function getMarkingIDWithCreate(): MarkingID
    {
        $this->markingID = is_null($this->markingID) ? new MarkingID() : $this->markingID;

        return $this->markingID;
    }

    /**
     * @param MarkingID|null $markingID
     * @return static
     */
    public function setMarkingID(?MarkingID $markingID = null): static
    {
        $this->markingID = $markingID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMarkingID(): static
    {
        $this->markingID = null;

        return $this;
    }

    /**
     * @return HazardClassID|null
     */
    public function getHazardClassID(): ?HazardClassID
    {
        return $this->hazardClassID;
    }

    /**
     * @return HazardClassID
     */
    public function getHazardClassIDWithCreate(): HazardClassID
    {
        $this->hazardClassID = is_null($this->hazardClassID) ? new HazardClassID() : $this->hazardClassID;

        return $this->hazardClassID;
    }

    /**
     * @param HazardClassID|null $hazardClassID
     * @return static
     */
    public function setHazardClassID(?HazardClassID $hazardClassID = null): static
    {
        $this->hazardClassID = $hazardClassID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetHazardClassID(): static
    {
        $this->hazardClassID = null;

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
     * @return Quantity|null
     */
    public function getQuantity(): ?Quantity
    {
        return $this->quantity;
    }

    /**
     * @return Quantity
     */
    public function getQuantityWithCreate(): Quantity
    {
        $this->quantity = is_null($this->quantity) ? new Quantity() : $this->quantity;

        return $this->quantity;
    }

    /**
     * @param Quantity|null $quantity
     * @return static
     */
    public function setQuantity(?Quantity $quantity = null): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetQuantity(): static
    {
        $this->quantity = null;

        return $this;
    }

    /**
     * @return ContactParty|null
     */
    public function getContactParty(): ?ContactParty
    {
        return $this->contactParty;
    }

    /**
     * @return ContactParty
     */
    public function getContactPartyWithCreate(): ContactParty
    {
        $this->contactParty = is_null($this->contactParty) ? new ContactParty() : $this->contactParty;

        return $this->contactParty;
    }

    /**
     * @param ContactParty|null $contactParty
     * @return static
     */
    public function setContactParty(?ContactParty $contactParty = null): static
    {
        $this->contactParty = $contactParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetContactParty(): static
    {
        $this->contactParty = null;

        return $this;
    }

    /**
     * @return array<SecondaryHazard>|null
     */
    public function getSecondaryHazard(): ?array
    {
        return $this->secondaryHazard;
    }

    /**
     * @param array<SecondaryHazard>|null $secondaryHazard
     * @return static
     */
    public function setSecondaryHazard(?array $secondaryHazard = null): static
    {
        $this->secondaryHazard = $secondaryHazard;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetSecondaryHazard(): static
    {
        $this->secondaryHazard = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearSecondaryHazard(): static
    {
        $this->secondaryHazard = [];

        return $this;
    }

    /**
     * @return SecondaryHazard|null
     */
    public function firstSecondaryHazard(): ?SecondaryHazard
    {
        $secondaryHazard = $this->secondaryHazard ?? [];
        $secondaryHazard = reset($secondaryHazard);

        if ($secondaryHazard === false) {
            return null;
        }

        return $secondaryHazard;
    }

    /**
     * @return SecondaryHazard|null
     */
    public function lastSecondaryHazard(): ?SecondaryHazard
    {
        $secondaryHazard = $this->secondaryHazard ?? [];
        $secondaryHazard = end($secondaryHazard);

        if ($secondaryHazard === false) {
            return null;
        }

        return $secondaryHazard;
    }

    /**
     * @param SecondaryHazard $secondaryHazard
     * @return static
     */
    public function addToSecondaryHazard(SecondaryHazard $secondaryHazard): static
    {
        $this->secondaryHazard[] = $secondaryHazard;

        return $this;
    }

    /**
     * @return SecondaryHazard
     */
    public function addToSecondaryHazardWithCreate(): SecondaryHazard
    {
        $this->addTosecondaryHazard($secondaryHazard = new SecondaryHazard());

        return $secondaryHazard;
    }

    /**
     * @param SecondaryHazard $secondaryHazard
     * @return static
     */
    public function addOnceToSecondaryHazard(SecondaryHazard $secondaryHazard): static
    {
        if (!is_array($this->secondaryHazard)) {
            $this->secondaryHazard = [];
        }

        $this->secondaryHazard[0] = $secondaryHazard;

        return $this;
    }

    /**
     * @return SecondaryHazard
     */
    public function addOnceToSecondaryHazardWithCreate(): SecondaryHazard
    {
        if (!is_array($this->secondaryHazard)) {
            $this->secondaryHazard = [];
        }

        if ($this->secondaryHazard === []) {
            $this->addOnceTosecondaryHazard(new SecondaryHazard());
        }

        return $this->secondaryHazard[0];
    }

    /**
     * @return array<HazardousGoodsTransit>|null
     */
    public function getHazardousGoodsTransit(): ?array
    {
        return $this->hazardousGoodsTransit;
    }

    /**
     * @param array<HazardousGoodsTransit>|null $hazardousGoodsTransit
     * @return static
     */
    public function setHazardousGoodsTransit(?array $hazardousGoodsTransit = null): static
    {
        $this->hazardousGoodsTransit = $hazardousGoodsTransit;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetHazardousGoodsTransit(): static
    {
        $this->hazardousGoodsTransit = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearHazardousGoodsTransit(): static
    {
        $this->hazardousGoodsTransit = [];

        return $this;
    }

    /**
     * @return HazardousGoodsTransit|null
     */
    public function firstHazardousGoodsTransit(): ?HazardousGoodsTransit
    {
        $hazardousGoodsTransit = $this->hazardousGoodsTransit ?? [];
        $hazardousGoodsTransit = reset($hazardousGoodsTransit);

        if ($hazardousGoodsTransit === false) {
            return null;
        }

        return $hazardousGoodsTransit;
    }

    /**
     * @return HazardousGoodsTransit|null
     */
    public function lastHazardousGoodsTransit(): ?HazardousGoodsTransit
    {
        $hazardousGoodsTransit = $this->hazardousGoodsTransit ?? [];
        $hazardousGoodsTransit = end($hazardousGoodsTransit);

        if ($hazardousGoodsTransit === false) {
            return null;
        }

        return $hazardousGoodsTransit;
    }

    /**
     * @param HazardousGoodsTransit $hazardousGoodsTransit
     * @return static
     */
    public function addToHazardousGoodsTransit(HazardousGoodsTransit $hazardousGoodsTransit): static
    {
        $this->hazardousGoodsTransit[] = $hazardousGoodsTransit;

        return $this;
    }

    /**
     * @return HazardousGoodsTransit
     */
    public function addToHazardousGoodsTransitWithCreate(): HazardousGoodsTransit
    {
        $this->addTohazardousGoodsTransit($hazardousGoodsTransit = new HazardousGoodsTransit());

        return $hazardousGoodsTransit;
    }

    /**
     * @param HazardousGoodsTransit $hazardousGoodsTransit
     * @return static
     */
    public function addOnceToHazardousGoodsTransit(HazardousGoodsTransit $hazardousGoodsTransit): static
    {
        if (!is_array($this->hazardousGoodsTransit)) {
            $this->hazardousGoodsTransit = [];
        }

        $this->hazardousGoodsTransit[0] = $hazardousGoodsTransit;

        return $this;
    }

    /**
     * @return HazardousGoodsTransit
     */
    public function addOnceToHazardousGoodsTransitWithCreate(): HazardousGoodsTransit
    {
        if (!is_array($this->hazardousGoodsTransit)) {
            $this->hazardousGoodsTransit = [];
        }

        if ($this->hazardousGoodsTransit === []) {
            $this->addOnceTohazardousGoodsTransit(new HazardousGoodsTransit());
        }

        return $this->hazardousGoodsTransit[0];
    }

    /**
     * @return EmergencyTemperature|null
     */
    public function getEmergencyTemperature(): ?EmergencyTemperature
    {
        return $this->emergencyTemperature;
    }

    /**
     * @return EmergencyTemperature
     */
    public function getEmergencyTemperatureWithCreate(): EmergencyTemperature
    {
        $this->emergencyTemperature = is_null($this->emergencyTemperature) ? new EmergencyTemperature() : $this->emergencyTemperature;

        return $this->emergencyTemperature;
    }

    /**
     * @param EmergencyTemperature|null $emergencyTemperature
     * @return static
     */
    public function setEmergencyTemperature(?EmergencyTemperature $emergencyTemperature = null): static
    {
        $this->emergencyTemperature = $emergencyTemperature;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetEmergencyTemperature(): static
    {
        $this->emergencyTemperature = null;

        return $this;
    }

    /**
     * @return FlashpointTemperature|null
     */
    public function getFlashpointTemperature(): ?FlashpointTemperature
    {
        return $this->flashpointTemperature;
    }

    /**
     * @return FlashpointTemperature
     */
    public function getFlashpointTemperatureWithCreate(): FlashpointTemperature
    {
        $this->flashpointTemperature = is_null($this->flashpointTemperature) ? new FlashpointTemperature() : $this->flashpointTemperature;

        return $this->flashpointTemperature;
    }

    /**
     * @param FlashpointTemperature|null $flashpointTemperature
     * @return static
     */
    public function setFlashpointTemperature(?FlashpointTemperature $flashpointTemperature = null): static
    {
        $this->flashpointTemperature = $flashpointTemperature;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFlashpointTemperature(): static
    {
        $this->flashpointTemperature = null;

        return $this;
    }

    /**
     * @return array<AdditionalTemperature>|null
     */
    public function getAdditionalTemperature(): ?array
    {
        return $this->additionalTemperature;
    }

    /**
     * @param array<AdditionalTemperature>|null $additionalTemperature
     * @return static
     */
    public function setAdditionalTemperature(?array $additionalTemperature = null): static
    {
        $this->additionalTemperature = $additionalTemperature;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAdditionalTemperature(): static
    {
        $this->additionalTemperature = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearAdditionalTemperature(): static
    {
        $this->additionalTemperature = [];

        return $this;
    }

    /**
     * @return AdditionalTemperature|null
     */
    public function firstAdditionalTemperature(): ?AdditionalTemperature
    {
        $additionalTemperature = $this->additionalTemperature ?? [];
        $additionalTemperature = reset($additionalTemperature);

        if ($additionalTemperature === false) {
            return null;
        }

        return $additionalTemperature;
    }

    /**
     * @return AdditionalTemperature|null
     */
    public function lastAdditionalTemperature(): ?AdditionalTemperature
    {
        $additionalTemperature = $this->additionalTemperature ?? [];
        $additionalTemperature = end($additionalTemperature);

        if ($additionalTemperature === false) {
            return null;
        }

        return $additionalTemperature;
    }

    /**
     * @param AdditionalTemperature $additionalTemperature
     * @return static
     */
    public function addToAdditionalTemperature(AdditionalTemperature $additionalTemperature): static
    {
        $this->additionalTemperature[] = $additionalTemperature;

        return $this;
    }

    /**
     * @return AdditionalTemperature
     */
    public function addToAdditionalTemperatureWithCreate(): AdditionalTemperature
    {
        $this->addToadditionalTemperature($additionalTemperature = new AdditionalTemperature());

        return $additionalTemperature;
    }

    /**
     * @param AdditionalTemperature $additionalTemperature
     * @return static
     */
    public function addOnceToAdditionalTemperature(AdditionalTemperature $additionalTemperature): static
    {
        if (!is_array($this->additionalTemperature)) {
            $this->additionalTemperature = [];
        }

        $this->additionalTemperature[0] = $additionalTemperature;

        return $this;
    }

    /**
     * @return AdditionalTemperature
     */
    public function addOnceToAdditionalTemperatureWithCreate(): AdditionalTemperature
    {
        if (!is_array($this->additionalTemperature)) {
            $this->additionalTemperature = [];
        }

        if ($this->additionalTemperature === []) {
            $this->addOnceToadditionalTemperature(new AdditionalTemperature());
        }

        return $this->additionalTemperature[0];
    }
}
