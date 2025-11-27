<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\EndpointID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\IndustryClassificationCode;
use horstoeko\invoicesuite\documents\models\ubl\cbc\LogoReferenceID;
use horstoeko\invoicesuite\documents\models\ubl\cbc\WebsiteURI;

class PartyType
{
    use HandlesObjectFlags;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("MarkCareIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMarkCareIndicator", setter="setMarkCareIndicator")
     */
    private $markCareIndicator;

    /**
     * @var bool|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("bool")
     * @JMS\Expose
     * @JMS\SerializedName("MarkAttentionIndicator")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getMarkAttentionIndicator", setter="setMarkAttentionIndicator")
     */
    private $markAttentionIndicator;

    /**
     * @var WebsiteURI|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\WebsiteURI")
     * @JMS\Expose
     * @JMS\SerializedName("WebsiteURI")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getWebsiteURI", setter="setWebsiteURI")
     */
    private $websiteURI;

    /**
     * @var LogoReferenceID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\LogoReferenceID")
     * @JMS\Expose
     * @JMS\SerializedName("LogoReferenceID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLogoReferenceID", setter="setLogoReferenceID")
     */
    private $logoReferenceID;

    /**
     * @var EndpointID|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\EndpointID")
     * @JMS\Expose
     * @JMS\SerializedName("EndpointID")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getEndpointID", setter="setEndpointID")
     */
    private $endpointID;

    /**
     * @var IndustryClassificationCode|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\IndustryClassificationCode")
     * @JMS\Expose
     * @JMS\SerializedName("IndustryClassificationCode")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getIndustryClassificationCode", setter="setIndustryClassificationCode")
     */
    private $industryClassificationCode;

    /**
     * @var array<PartyIdentification>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\PartyIdentification>")
     * @JMS\Expose
     * @JMS\SerializedName("PartyIdentification")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="PartyIdentification", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getPartyIdentification", setter="setPartyIdentification")
     */
    private $partyIdentification;

    /**
     * @var array<PartyName>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\PartyName>")
     * @JMS\Expose
     * @JMS\SerializedName("PartyName")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="PartyName", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getPartyName", setter="setPartyName")
     */
    private $partyName;

    /**
     * @var Language|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Language")
     * @JMS\Expose
     * @JMS\SerializedName("Language")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLanguage", setter="setLanguage")
     */
    private $language;

    /**
     * @var PostalAddress|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PostalAddress")
     * @JMS\Expose
     * @JMS\SerializedName("PostalAddress")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPostalAddress", setter="setPostalAddress")
     */
    private $postalAddress;

    /**
     * @var PhysicalLocation|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\PhysicalLocation")
     * @JMS\Expose
     * @JMS\SerializedName("PhysicalLocation")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPhysicalLocation", setter="setPhysicalLocation")
     */
    private $physicalLocation;

    /**
     * @var array<PartyTaxScheme>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\PartyTaxScheme>")
     * @JMS\Expose
     * @JMS\SerializedName("PartyTaxScheme")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="PartyTaxScheme", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getPartyTaxScheme", setter="setPartyTaxScheme")
     */
    private $partyTaxScheme;

    /**
     * @var array<PartyLegalEntity>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\PartyLegalEntity>")
     * @JMS\Expose
     * @JMS\SerializedName("PartyLegalEntity")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="PartyLegalEntity", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getPartyLegalEntity", setter="setPartyLegalEntity")
     */
    private $partyLegalEntity;

    /**
     * @var Contact|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\Contact")
     * @JMS\Expose
     * @JMS\SerializedName("Contact")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getContact", setter="setContact")
     */
    private $contact;

    /**
     * @var array<Person>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\Person>")
     * @JMS\Expose
     * @JMS\SerializedName("Person")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="Person", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getPerson", setter="setPerson")
     */
    private $person;

    /**
     * @var AgentParty|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\AgentParty")
     * @JMS\Expose
     * @JMS\SerializedName("AgentParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getAgentParty", setter="setAgentParty")
     */
    private $agentParty;

    /**
     * @var array<ServiceProviderParty>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\ServiceProviderParty>")
     * @JMS\Expose
     * @JMS\SerializedName("ServiceProviderParty")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="ServiceProviderParty", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getServiceProviderParty", setter="setServiceProviderParty")
     */
    private $serviceProviderParty;

    /**
     * @var array<PowerOfAttorney>|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("array<horstoeko\invoicesuite\documents\models\ubl\cac\PowerOfAttorney>")
     * @JMS\Expose
     * @JMS\SerializedName("PowerOfAttorney")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\XmlList(inline=true, entry="PowerOfAttorney", namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2")
     * @JMS\Accessor(getter="getPowerOfAttorney", setter="setPowerOfAttorney")
     */
    private $powerOfAttorney;

    /**
     * @var FinancialAccount|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cac\FinancialAccount")
     * @JMS\Expose
     * @JMS\SerializedName("FinancialAccount")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2", cdata=false)
     * @JMS\Accessor(getter="getFinancialAccount", setter="setFinancialAccount")
     */
    private $financialAccount;

    /**
     * @return bool|null
     */
    public function getMarkCareIndicator(): ?bool
    {
        return $this->markCareIndicator;
    }

    /**
     * @param bool|null $markCareIndicator
     * @return static
     */
    public function setMarkCareIndicator(?bool $markCareIndicator = null): static
    {
        $this->markCareIndicator = $markCareIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMarkCareIndicator(): static
    {
        $this->markCareIndicator = null;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getMarkAttentionIndicator(): ?bool
    {
        return $this->markAttentionIndicator;
    }

    /**
     * @param bool|null $markAttentionIndicator
     * @return static
     */
    public function setMarkAttentionIndicator(?bool $markAttentionIndicator = null): static
    {
        $this->markAttentionIndicator = $markAttentionIndicator;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetMarkAttentionIndicator(): static
    {
        $this->markAttentionIndicator = null;

        return $this;
    }

    /**
     * @return WebsiteURI|null
     */
    public function getWebsiteURI(): ?WebsiteURI
    {
        return $this->websiteURI;
    }

    /**
     * @return WebsiteURI
     */
    public function getWebsiteURIWithCreate(): WebsiteURI
    {
        $this->websiteURI = is_null($this->websiteURI) ? new WebsiteURI() : $this->websiteURI;

        return $this->websiteURI;
    }

    /**
     * @param WebsiteURI|null $websiteURI
     * @return static
     */
    public function setWebsiteURI(?WebsiteURI $websiteURI = null): static
    {
        $this->websiteURI = $websiteURI;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetWebsiteURI(): static
    {
        $this->websiteURI = null;

        return $this;
    }

    /**
     * @return LogoReferenceID|null
     */
    public function getLogoReferenceID(): ?LogoReferenceID
    {
        return $this->logoReferenceID;
    }

    /**
     * @return LogoReferenceID
     */
    public function getLogoReferenceIDWithCreate(): LogoReferenceID
    {
        $this->logoReferenceID = is_null($this->logoReferenceID) ? new LogoReferenceID() : $this->logoReferenceID;

        return $this->logoReferenceID;
    }

    /**
     * @param LogoReferenceID|null $logoReferenceID
     * @return static
     */
    public function setLogoReferenceID(?LogoReferenceID $logoReferenceID = null): static
    {
        $this->logoReferenceID = $logoReferenceID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLogoReferenceID(): static
    {
        $this->logoReferenceID = null;

        return $this;
    }

    /**
     * @return EndpointID|null
     */
    public function getEndpointID(): ?EndpointID
    {
        return $this->endpointID;
    }

    /**
     * @return EndpointID
     */
    public function getEndpointIDWithCreate(): EndpointID
    {
        $this->endpointID = is_null($this->endpointID) ? new EndpointID() : $this->endpointID;

        return $this->endpointID;
    }

    /**
     * @param EndpointID|null $endpointID
     * @return static
     */
    public function setEndpointID(?EndpointID $endpointID = null): static
    {
        $this->endpointID = $endpointID;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetEndpointID(): static
    {
        $this->endpointID = null;

        return $this;
    }

    /**
     * @return IndustryClassificationCode|null
     */
    public function getIndustryClassificationCode(): ?IndustryClassificationCode
    {
        return $this->industryClassificationCode;
    }

    /**
     * @return IndustryClassificationCode
     */
    public function getIndustryClassificationCodeWithCreate(): IndustryClassificationCode
    {
        $this->industryClassificationCode = is_null($this->industryClassificationCode) ? new IndustryClassificationCode() : $this->industryClassificationCode;

        return $this->industryClassificationCode;
    }

    /**
     * @param IndustryClassificationCode|null $industryClassificationCode
     * @return static
     */
    public function setIndustryClassificationCode(
        ?IndustryClassificationCode $industryClassificationCode = null,
    ): static {
        $this->industryClassificationCode = $industryClassificationCode;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetIndustryClassificationCode(): static
    {
        $this->industryClassificationCode = null;

        return $this;
    }

    /**
     * @return array<PartyIdentification>|null
     */
    public function getPartyIdentification(): ?array
    {
        return $this->partyIdentification;
    }

    /**
     * @param array<PartyIdentification>|null $partyIdentification
     * @return static
     */
    public function setPartyIdentification(?array $partyIdentification = null): static
    {
        $this->partyIdentification = $partyIdentification;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPartyIdentification(): static
    {
        $this->partyIdentification = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearPartyIdentification(): static
    {
        $this->partyIdentification = [];

        return $this;
    }

    /**
     * @return PartyIdentification|null
     */
    public function firstPartyIdentification(): ?PartyIdentification
    {
        $partyIdentification = $this->partyIdentification ?? [];
        $partyIdentification = reset($partyIdentification);

        if ($partyIdentification === false) {
            return null;
        }

        return $partyIdentification;
    }

    /**
     * @return PartyIdentification|null
     */
    public function lastPartyIdentification(): ?PartyIdentification
    {
        $partyIdentification = $this->partyIdentification ?? [];
        $partyIdentification = end($partyIdentification);

        if ($partyIdentification === false) {
            return null;
        }

        return $partyIdentification;
    }

    /**
     * @param PartyIdentification $partyIdentification
     * @return static
     */
    public function addToPartyIdentification(PartyIdentification $partyIdentification): static
    {
        $this->partyIdentification[] = $partyIdentification;

        return $this;
    }

    /**
     * @return PartyIdentification
     */
    public function addToPartyIdentificationWithCreate(): PartyIdentification
    {
        $this->addTopartyIdentification($partyIdentification = new PartyIdentification());

        return $partyIdentification;
    }

    /**
     * @param PartyIdentification $partyIdentification
     * @return static
     */
    public function addOnceToPartyIdentification(PartyIdentification $partyIdentification): static
    {
        if (!is_array($this->partyIdentification)) {
            $this->partyIdentification = [];
        }

        $this->partyIdentification[0] = $partyIdentification;

        return $this;
    }

    /**
     * @return PartyIdentification
     */
    public function addOnceToPartyIdentificationWithCreate(): PartyIdentification
    {
        if (!is_array($this->partyIdentification)) {
            $this->partyIdentification = [];
        }

        if ($this->partyIdentification === []) {
            $this->addOnceTopartyIdentification(new PartyIdentification());
        }

        return $this->partyIdentification[0];
    }

    /**
     * @return array<PartyName>|null
     */
    public function getPartyName(): ?array
    {
        return $this->partyName;
    }

    /**
     * @param array<PartyName>|null $partyName
     * @return static
     */
    public function setPartyName(?array $partyName = null): static
    {
        $this->partyName = $partyName;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPartyName(): static
    {
        $this->partyName = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearPartyName(): static
    {
        $this->partyName = [];

        return $this;
    }

    /**
     * @return PartyName|null
     */
    public function firstPartyName(): ?PartyName
    {
        $partyName = $this->partyName ?? [];
        $partyName = reset($partyName);

        if ($partyName === false) {
            return null;
        }

        return $partyName;
    }

    /**
     * @return PartyName|null
     */
    public function lastPartyName(): ?PartyName
    {
        $partyName = $this->partyName ?? [];
        $partyName = end($partyName);

        if ($partyName === false) {
            return null;
        }

        return $partyName;
    }

    /**
     * @param PartyName $partyName
     * @return static
     */
    public function addToPartyName(PartyName $partyName): static
    {
        $this->partyName[] = $partyName;

        return $this;
    }

    /**
     * @return PartyName
     */
    public function addToPartyNameWithCreate(): PartyName
    {
        $this->addTopartyName($partyName = new PartyName());

        return $partyName;
    }

    /**
     * @param PartyName $partyName
     * @return static
     */
    public function addOnceToPartyName(PartyName $partyName): static
    {
        if (!is_array($this->partyName)) {
            $this->partyName = [];
        }

        $this->partyName[0] = $partyName;

        return $this;
    }

    /**
     * @return PartyName
     */
    public function addOnceToPartyNameWithCreate(): PartyName
    {
        if (!is_array($this->partyName)) {
            $this->partyName = [];
        }

        if ($this->partyName === []) {
            $this->addOnceTopartyName(new PartyName());
        }

        return $this->partyName[0];
    }

    /**
     * @return Language|null
     */
    public function getLanguage(): ?Language
    {
        return $this->language;
    }

    /**
     * @return Language
     */
    public function getLanguageWithCreate(): Language
    {
        $this->language = is_null($this->language) ? new Language() : $this->language;

        return $this->language;
    }

    /**
     * @param Language|null $language
     * @return static
     */
    public function setLanguage(?Language $language = null): static
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLanguage(): static
    {
        $this->language = null;

        return $this;
    }

    /**
     * @return PostalAddress|null
     */
    public function getPostalAddress(): ?PostalAddress
    {
        return $this->postalAddress;
    }

    /**
     * @return PostalAddress
     */
    public function getPostalAddressWithCreate(): PostalAddress
    {
        $this->postalAddress = is_null($this->postalAddress) ? new PostalAddress() : $this->postalAddress;

        return $this->postalAddress;
    }

    /**
     * @param PostalAddress|null $postalAddress
     * @return static
     */
    public function setPostalAddress(?PostalAddress $postalAddress = null): static
    {
        $this->postalAddress = $postalAddress;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPostalAddress(): static
    {
        $this->postalAddress = null;

        return $this;
    }

    /**
     * @return PhysicalLocation|null
     */
    public function getPhysicalLocation(): ?PhysicalLocation
    {
        return $this->physicalLocation;
    }

    /**
     * @return PhysicalLocation
     */
    public function getPhysicalLocationWithCreate(): PhysicalLocation
    {
        $this->physicalLocation = is_null($this->physicalLocation) ? new PhysicalLocation() : $this->physicalLocation;

        return $this->physicalLocation;
    }

    /**
     * @param PhysicalLocation|null $physicalLocation
     * @return static
     */
    public function setPhysicalLocation(?PhysicalLocation $physicalLocation = null): static
    {
        $this->physicalLocation = $physicalLocation;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPhysicalLocation(): static
    {
        $this->physicalLocation = null;

        return $this;
    }

    /**
     * @return array<PartyTaxScheme>|null
     */
    public function getPartyTaxScheme(): ?array
    {
        return $this->partyTaxScheme;
    }

    /**
     * @param array<PartyTaxScheme>|null $partyTaxScheme
     * @return static
     */
    public function setPartyTaxScheme(?array $partyTaxScheme = null): static
    {
        $this->partyTaxScheme = $partyTaxScheme;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPartyTaxScheme(): static
    {
        $this->partyTaxScheme = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearPartyTaxScheme(): static
    {
        $this->partyTaxScheme = [];

        return $this;
    }

    /**
     * @return PartyTaxScheme|null
     */
    public function firstPartyTaxScheme(): ?PartyTaxScheme
    {
        $partyTaxScheme = $this->partyTaxScheme ?? [];
        $partyTaxScheme = reset($partyTaxScheme);

        if ($partyTaxScheme === false) {
            return null;
        }

        return $partyTaxScheme;
    }

    /**
     * @return PartyTaxScheme|null
     */
    public function lastPartyTaxScheme(): ?PartyTaxScheme
    {
        $partyTaxScheme = $this->partyTaxScheme ?? [];
        $partyTaxScheme = end($partyTaxScheme);

        if ($partyTaxScheme === false) {
            return null;
        }

        return $partyTaxScheme;
    }

    /**
     * @param PartyTaxScheme $partyTaxScheme
     * @return static
     */
    public function addToPartyTaxScheme(PartyTaxScheme $partyTaxScheme): static
    {
        $this->partyTaxScheme[] = $partyTaxScheme;

        return $this;
    }

    /**
     * @return PartyTaxScheme
     */
    public function addToPartyTaxSchemeWithCreate(): PartyTaxScheme
    {
        $this->addTopartyTaxScheme($partyTaxScheme = new PartyTaxScheme());

        return $partyTaxScheme;
    }

    /**
     * @param PartyTaxScheme $partyTaxScheme
     * @return static
     */
    public function addOnceToPartyTaxScheme(PartyTaxScheme $partyTaxScheme): static
    {
        if (!is_array($this->partyTaxScheme)) {
            $this->partyTaxScheme = [];
        }

        $this->partyTaxScheme[0] = $partyTaxScheme;

        return $this;
    }

    /**
     * @return PartyTaxScheme
     */
    public function addOnceToPartyTaxSchemeWithCreate(): PartyTaxScheme
    {
        if (!is_array($this->partyTaxScheme)) {
            $this->partyTaxScheme = [];
        }

        if ($this->partyTaxScheme === []) {
            $this->addOnceTopartyTaxScheme(new PartyTaxScheme());
        }

        return $this->partyTaxScheme[0];
    }

    /**
     * @return array<PartyLegalEntity>|null
     */
    public function getPartyLegalEntity(): ?array
    {
        return $this->partyLegalEntity;
    }

    /**
     * @param array<PartyLegalEntity>|null $partyLegalEntity
     * @return static
     */
    public function setPartyLegalEntity(?array $partyLegalEntity = null): static
    {
        $this->partyLegalEntity = $partyLegalEntity;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPartyLegalEntity(): static
    {
        $this->partyLegalEntity = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearPartyLegalEntity(): static
    {
        $this->partyLegalEntity = [];

        return $this;
    }

    /**
     * @return PartyLegalEntity|null
     */
    public function firstPartyLegalEntity(): ?PartyLegalEntity
    {
        $partyLegalEntity = $this->partyLegalEntity ?? [];
        $partyLegalEntity = reset($partyLegalEntity);

        if ($partyLegalEntity === false) {
            return null;
        }

        return $partyLegalEntity;
    }

    /**
     * @return PartyLegalEntity|null
     */
    public function lastPartyLegalEntity(): ?PartyLegalEntity
    {
        $partyLegalEntity = $this->partyLegalEntity ?? [];
        $partyLegalEntity = end($partyLegalEntity);

        if ($partyLegalEntity === false) {
            return null;
        }

        return $partyLegalEntity;
    }

    /**
     * @param PartyLegalEntity $partyLegalEntity
     * @return static
     */
    public function addToPartyLegalEntity(PartyLegalEntity $partyLegalEntity): static
    {
        $this->partyLegalEntity[] = $partyLegalEntity;

        return $this;
    }

    /**
     * @return PartyLegalEntity
     */
    public function addToPartyLegalEntityWithCreate(): PartyLegalEntity
    {
        $this->addTopartyLegalEntity($partyLegalEntity = new PartyLegalEntity());

        return $partyLegalEntity;
    }

    /**
     * @param PartyLegalEntity $partyLegalEntity
     * @return static
     */
    public function addOnceToPartyLegalEntity(PartyLegalEntity $partyLegalEntity): static
    {
        if (!is_array($this->partyLegalEntity)) {
            $this->partyLegalEntity = [];
        }

        $this->partyLegalEntity[0] = $partyLegalEntity;

        return $this;
    }

    /**
     * @return PartyLegalEntity
     */
    public function addOnceToPartyLegalEntityWithCreate(): PartyLegalEntity
    {
        if (!is_array($this->partyLegalEntity)) {
            $this->partyLegalEntity = [];
        }

        if ($this->partyLegalEntity === []) {
            $this->addOnceTopartyLegalEntity(new PartyLegalEntity());
        }

        return $this->partyLegalEntity[0];
    }

    /**
     * @return Contact|null
     */
    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    /**
     * @return Contact
     */
    public function getContactWithCreate(): Contact
    {
        $this->contact = is_null($this->contact) ? new Contact() : $this->contact;

        return $this->contact;
    }

    /**
     * @param Contact|null $contact
     * @return static
     */
    public function setContact(?Contact $contact = null): static
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetContact(): static
    {
        $this->contact = null;

        return $this;
    }

    /**
     * @return array<Person>|null
     */
    public function getPerson(): ?array
    {
        return $this->person;
    }

    /**
     * @param array<Person>|null $person
     * @return static
     */
    public function setPerson(?array $person = null): static
    {
        $this->person = $person;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPerson(): static
    {
        $this->person = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearPerson(): static
    {
        $this->person = [];

        return $this;
    }

    /**
     * @return Person|null
     */
    public function firstPerson(): ?Person
    {
        $person = $this->person ?? [];
        $person = reset($person);

        if ($person === false) {
            return null;
        }

        return $person;
    }

    /**
     * @return Person|null
     */
    public function lastPerson(): ?Person
    {
        $person = $this->person ?? [];
        $person = end($person);

        if ($person === false) {
            return null;
        }

        return $person;
    }

    /**
     * @param Person $person
     * @return static
     */
    public function addToPerson(Person $person): static
    {
        $this->person[] = $person;

        return $this;
    }

    /**
     * @return Person
     */
    public function addToPersonWithCreate(): Person
    {
        $this->addToperson($person = new Person());

        return $person;
    }

    /**
     * @param Person $person
     * @return static
     */
    public function addOnceToPerson(Person $person): static
    {
        if (!is_array($this->person)) {
            $this->person = [];
        }

        $this->person[0] = $person;

        return $this;
    }

    /**
     * @return Person
     */
    public function addOnceToPersonWithCreate(): Person
    {
        if (!is_array($this->person)) {
            $this->person = [];
        }

        if ($this->person === []) {
            $this->addOnceToperson(new Person());
        }

        return $this->person[0];
    }

    /**
     * @return AgentParty|null
     */
    public function getAgentParty(): ?AgentParty
    {
        return $this->agentParty;
    }

    /**
     * @return AgentParty
     */
    public function getAgentPartyWithCreate(): AgentParty
    {
        $this->agentParty = is_null($this->agentParty) ? new AgentParty() : $this->agentParty;

        return $this->agentParty;
    }

    /**
     * @param AgentParty|null $agentParty
     * @return static
     */
    public function setAgentParty(?AgentParty $agentParty = null): static
    {
        $this->agentParty = $agentParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetAgentParty(): static
    {
        $this->agentParty = null;

        return $this;
    }

    /**
     * @return array<ServiceProviderParty>|null
     */
    public function getServiceProviderParty(): ?array
    {
        return $this->serviceProviderParty;
    }

    /**
     * @param array<ServiceProviderParty>|null $serviceProviderParty
     * @return static
     */
    public function setServiceProviderParty(?array $serviceProviderParty = null): static
    {
        $this->serviceProviderParty = $serviceProviderParty;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetServiceProviderParty(): static
    {
        $this->serviceProviderParty = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearServiceProviderParty(): static
    {
        $this->serviceProviderParty = [];

        return $this;
    }

    /**
     * @return ServiceProviderParty|null
     */
    public function firstServiceProviderParty(): ?ServiceProviderParty
    {
        $serviceProviderParty = $this->serviceProviderParty ?? [];
        $serviceProviderParty = reset($serviceProviderParty);

        if ($serviceProviderParty === false) {
            return null;
        }

        return $serviceProviderParty;
    }

    /**
     * @return ServiceProviderParty|null
     */
    public function lastServiceProviderParty(): ?ServiceProviderParty
    {
        $serviceProviderParty = $this->serviceProviderParty ?? [];
        $serviceProviderParty = end($serviceProviderParty);

        if ($serviceProviderParty === false) {
            return null;
        }

        return $serviceProviderParty;
    }

    /**
     * @param ServiceProviderParty $serviceProviderParty
     * @return static
     */
    public function addToServiceProviderParty(ServiceProviderParty $serviceProviderParty): static
    {
        $this->serviceProviderParty[] = $serviceProviderParty;

        return $this;
    }

    /**
     * @return ServiceProviderParty
     */
    public function addToServiceProviderPartyWithCreate(): ServiceProviderParty
    {
        $this->addToserviceProviderParty($serviceProviderParty = new ServiceProviderParty());

        return $serviceProviderParty;
    }

    /**
     * @param ServiceProviderParty $serviceProviderParty
     * @return static
     */
    public function addOnceToServiceProviderParty(ServiceProviderParty $serviceProviderParty): static
    {
        if (!is_array($this->serviceProviderParty)) {
            $this->serviceProviderParty = [];
        }

        $this->serviceProviderParty[0] = $serviceProviderParty;

        return $this;
    }

    /**
     * @return ServiceProviderParty
     */
    public function addOnceToServiceProviderPartyWithCreate(): ServiceProviderParty
    {
        if (!is_array($this->serviceProviderParty)) {
            $this->serviceProviderParty = [];
        }

        if ($this->serviceProviderParty === []) {
            $this->addOnceToserviceProviderParty(new ServiceProviderParty());
        }

        return $this->serviceProviderParty[0];
    }

    /**
     * @return array<PowerOfAttorney>|null
     */
    public function getPowerOfAttorney(): ?array
    {
        return $this->powerOfAttorney;
    }

    /**
     * @param array<PowerOfAttorney>|null $powerOfAttorney
     * @return static
     */
    public function setPowerOfAttorney(?array $powerOfAttorney = null): static
    {
        $this->powerOfAttorney = $powerOfAttorney;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPowerOfAttorney(): static
    {
        $this->powerOfAttorney = null;

        return $this;
    }

    /**
     * @return static
     */
    public function clearPowerOfAttorney(): static
    {
        $this->powerOfAttorney = [];

        return $this;
    }

    /**
     * @return PowerOfAttorney|null
     */
    public function firstPowerOfAttorney(): ?PowerOfAttorney
    {
        $powerOfAttorney = $this->powerOfAttorney ?? [];
        $powerOfAttorney = reset($powerOfAttorney);

        if ($powerOfAttorney === false) {
            return null;
        }

        return $powerOfAttorney;
    }

    /**
     * @return PowerOfAttorney|null
     */
    public function lastPowerOfAttorney(): ?PowerOfAttorney
    {
        $powerOfAttorney = $this->powerOfAttorney ?? [];
        $powerOfAttorney = end($powerOfAttorney);

        if ($powerOfAttorney === false) {
            return null;
        }

        return $powerOfAttorney;
    }

    /**
     * @param PowerOfAttorney $powerOfAttorney
     * @return static
     */
    public function addToPowerOfAttorney(PowerOfAttorney $powerOfAttorney): static
    {
        $this->powerOfAttorney[] = $powerOfAttorney;

        return $this;
    }

    /**
     * @return PowerOfAttorney
     */
    public function addToPowerOfAttorneyWithCreate(): PowerOfAttorney
    {
        $this->addTopowerOfAttorney($powerOfAttorney = new PowerOfAttorney());

        return $powerOfAttorney;
    }

    /**
     * @param PowerOfAttorney $powerOfAttorney
     * @return static
     */
    public function addOnceToPowerOfAttorney(PowerOfAttorney $powerOfAttorney): static
    {
        if (!is_array($this->powerOfAttorney)) {
            $this->powerOfAttorney = [];
        }

        $this->powerOfAttorney[0] = $powerOfAttorney;

        return $this;
    }

    /**
     * @return PowerOfAttorney
     */
    public function addOnceToPowerOfAttorneyWithCreate(): PowerOfAttorney
    {
        if (!is_array($this->powerOfAttorney)) {
            $this->powerOfAttorney = [];
        }

        if ($this->powerOfAttorney === []) {
            $this->addOnceTopowerOfAttorney(new PowerOfAttorney());
        }

        return $this->powerOfAttorney[0];
    }

    /**
     * @return FinancialAccount|null
     */
    public function getFinancialAccount(): ?FinancialAccount
    {
        return $this->financialAccount;
    }

    /**
     * @return FinancialAccount
     */
    public function getFinancialAccountWithCreate(): FinancialAccount
    {
        $this->financialAccount = is_null($this->financialAccount) ? new FinancialAccount() : $this->financialAccount;

        return $this->financialAccount;
    }

    /**
     * @param FinancialAccount|null $financialAccount
     * @return static
     */
    public function setFinancialAccount(?FinancialAccount $financialAccount = null): static
    {
        $this->financialAccount = $financialAccount;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetFinancialAccount(): static
    {
        $this->financialAccount = null;

        return $this;
    }
}
