<?php

/**
 * This file is a part of horstoeko/invoicesuite.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\invoicesuite\dto;

use horstoeko\invoicesuite\dto\InvoiceSuiteIdDTO;
use horstoeko\invoicesuite\dto\InvoiceSuiteAddressDTO;
use horstoeko\invoicesuite\dto\InvoiceSuiteOrganisationDTO;
use horstoeko\invoicesuite\dto\InvoiceSuiteCommunicationDTO;
use horstoeko\invoicesuite\utils\InvoiceSuiteStringUtils;

/**
 * Class representing a DTO for a party (e.g. seller or customer)
 *
 * @category InvoiceSuite
 * @package  InvoiceSuite
 * @author   horstoeko <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/invoicesuite
 */
class InvoiceSuitePartyDTO
{
    /**
     * Party name
     *
     * @var array<string>
     */
    protected array $name = [];

    /**
     * Party IDs
     *
     * @var array<InvoiceSuiteIdDTO>
     */
    protected array $id = [];

    /**
     * Party Global IDs
     *
     * @var array<InvoiceSuiteIdDTO>
     */
    protected array $globalId = [];

    /**
     * Party Tax Registration
     *
     * @var array<InvoiceSuiteIdDTO>
     */
    protected array $taxRegistration = [];

    /**
     * Party Address
     *
     * @var array<InvoiceSuiteAddressDTO>
     */
    protected array $address = [];

    /**
     * Party Legal Organisation
     *
     * @var array<InvoiceSuiteOrganisationDTO>
     */
    protected array $organisation = [];

    /**
     * Party contacts
     *
     * @var array<InvoiceSuiteContactDTO>
     */
    protected array $contact = [];

    /**
     * Party communication details
     *
     * @var array<InvoiceSuiteCommunicationDTO>
     */
    protected array $communication = [];

    /**
     * @return array<string>
     */
    public function getNames(): array
    {
        return $this->name;
    }

    /**
     * @param array<string> $newNames
     * @return self
     */
    public function setNames(array $newNames): self
    {
        $this->name = array_filter($newNames, function ($name) {
            return !InvoiceSuiteStringUtils::stringIsNullOrEmpty($name);
        });

        return $this;
    }

    /**
     * @param string $newName
     * @return self
     */
    public function addName(string $newName): self
    {
        if (InvoiceSuiteStringUtils::stringIsNullOrEmpty($newName)) {
            return $this;
        }

        $this->name[] = $newName;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasNames(): bool
    {
        return $this->name !== [];
    }

    /**
     * @param callable $callback
     * @return self
     */
    public function forEachName(callable $callback): self
    {
        foreach ($this->name as $item) {
            $callback($item);
        }

        return $this;
    }

    /**
     * @return array<InvoiceSuiteIdDTO>
     */
    public function getIds(): array
    {
        return $this->id;
    }

    /**
     * @param array<InvoiceSuiteIdDTO> $newIds
     * @return self
     */
    public function setIds(array $newIds): self
    {
        $this->id = $newIds;
        return $this;
    }

    /**
     * @param InvoiceSuiteIdDTO $newId
     * @return self
     */
    public function addId(InvoiceSuiteIdDTO $newId): self
    {
        $this->id[] = $newId;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasIds(): bool
    {
        return $this->id !== [];
    }

    /**
     * @param callable $callback
     * @return self
     */
    public function forEachId(callable $callback): self
    {
        foreach ($this->id as $item) {
            $callback($item);
        }

        return $this;
    }

    /**
     * @return array<InvoiceSuiteIdDTO>
     */
    public function getGlobalIds(): array
    {
        return $this->globalId;
    }

    /**
     * @param array<InvoiceSuiteIdDTO> $newGlobalIds
     * @return self
     */
    public function setGlobalIds(array $newGlobalIds): self
    {
        $this->globalId = $newGlobalIds;
        return $this;
    }

    /**
     * @param InvoiceSuiteIdDTO $newGlobalId
     * @return self
     */
    public function addGlobalId(InvoiceSuiteIdDTO $newGlobalId): self
    {
        $this->globalId[] = $newGlobalId;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasGlobalIds(): bool
    {
        return $this->globalId !== [];
    }

    /**
     * @param callable $callback
     * @return self
     */
    public function forEachGlobalId(callable $callback): self
    {
        foreach ($this->globalId as $item) {
            $callback($item);
        }

        return $this;
    }

    /**
     * @return array<InvoiceSuiteIdDTO>
     */
    public function getTaxRegistrations(): array
    {
        return $this->taxRegistration;
    }

    /**
     * @param array<InvoiceSuiteIdDTO> $newTaxRegistrations
     * @return self
     */
    public function setTaxRegistrations(array $newTaxRegistrations): self
    {
        $this->taxRegistration = $newTaxRegistrations;
        return $this;
    }

    /**
     * @param InvoiceSuiteIdDTO $newTaxRegistration
     * @return self
     */
    public function addTaxRegistration(InvoiceSuiteIdDTO $newTaxRegistration): self
    {
        $this->taxRegistration[] = $newTaxRegistration;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasTaxRegistrations(): bool
    {
        return $this->taxRegistration !== [];
    }

    /**
     * @param callable $callback
     * @return self
     */
    public function forEachTaxRegistration(callable $callback): self
    {
        foreach ($this->taxRegistration as $item) {
            $callback($item);
        }

        return $this;
    }

    /**
     * @return array<InvoiceSuiteAddressDTO>
     */
    public function getAddresses(): array
    {
        return $this->address;
    }

    /**
     * @param array<InvoiceSuiteAddressDTO> $newAddresses
     * @return self
     */
    public function setAddresses(array $newAddresses): self
    {
        $this->address = $newAddresses;
        return $this;
    }

    /**
     * @param InvoiceSuiteAddressDTO $newAddress
     * @return self
     */
    public function addAddress(InvoiceSuiteAddressDTO $newAddress): self
    {
        $this->address[] = $newAddress;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasAddresses(): bool
    {
        return $this->address !== [];
    }

    /**
     * @param callable $callback
     * @return self
     */
    public function forEachAddress(callable $callback): self
    {
        foreach ($this->address as $item) {
            $callback($item);
        }

        return $this;
    }

    /**
     * @return array<InvoiceSuiteOrganisationDTO>
     */
    public function getLogalOrganisations(): array
    {
        return $this->organisation;
    }

    /**
     * @param array<InvoiceSuiteOrganisationDTO> $newLegalOrganisations
     * @return self
     */
    public function setLegalOrganisations(array $newLegalOrganisations): self
    {
        $this->organisation = $newLegalOrganisations;
        return $this;
    }

    /**
     * @param InvoiceSuiteOrganisationDTO $newLegalOrganisation
     * @return self
     */
    public function addLegalOrganisation(InvoiceSuiteOrganisationDTO $newLegalOrganisation): self
    {
        $this->organisation[] = $newLegalOrganisation;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasLegalOrganisations(): bool
    {
        return $this->organisation !== [];
    }

    /**
     * @param callable $callback
     * @return self
     */
    public function forEachLegalOrganisation(callable $callback): self
    {
        foreach ($this->organisation as $item) {
            $callback($item);
        }

        return $this;
    }

    /**
     * @return array<InvoiceSuiteContactDTO>
     */
    public function getContact(): array
    {
        return $this->contact;
    }

    /**
     * @param array<InvoiceSuiteContactDTO> $contact
     * @return self
     */
    public function setContact(array $contact): self
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @param InvoiceSuiteContactDTO $contact
     * @return self
     */
    public function addContact(InvoiceSuiteContactDTO $contact): self
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasContact(): bool
    {
        return $this->contact !== [];
    }

    /**
     * @param callable $callback
     * @return self
     */
    public function forEachContact(callable $callback): self
    {
        foreach ($this->contact as $item) {
            $callback($item);
        }

        return $this;
    }

    /**
     * @return array<InvoiceSuiteCommunicationDTO>
     */
    public function getCommunication(): array
    {
        return $this->communication;
    }

    /**
     * @param array<InvoiceSuiteCommunicationDTO> $communication
     * @return self
     */
    public function setCommunication(array $communication): self
    {
        $this->communication = $communication;
        return $this;
    }

    /**
     * @param InvoiceSuiteCommunicationDTO $communication
     * @return self
     */
    public function addCommunication(InvoiceSuiteCommunicationDTO $communication): self
    {
        $this->communication[] = $communication;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasCommunication(): bool
    {
        return $this->communication !== [];
    }

    /**
     * @param callable $callback
     * @return self
     */
    public function forEachCommunication(callable $callback): self
    {
        foreach ($this->communication as $item) {
            $callback($item);
        }

        return $this;
    }
}
