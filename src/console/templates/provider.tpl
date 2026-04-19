<?php

declare(strict_types=1);

namespace {{NAMESPACE}};

use Closure;
use horstoeko\invoicesuite\documents\abstracts\InvoiceSuiteAbstractDocumentFormatProvider;
use horstoeko\invoicesuite\pdfs\abstracts\InvoiceSuiteAbstractPdfConstructor;
use horstoeko\invoicesuite\utils\InvoiceSuiteContentType;
use z4kn4fein\SemVer\SemverException;
use z4kn4fein\SemVer\Version;

/**
 * Class representing a document format provider
 */
class {{PROVIDER_CLASS_NAME}} extends InvoiceSuiteAbstractDocumentFormatProvider
{
    /**
     * Get the unique identificator for this provider
     *
     * @return string
     */
    public function getUniqueId(): string
    {
        // TODO: Implement method.

        return '{{PROVIDER_UNIQUE_ID}}';
    }

    /**
     * Returns the content type of the (invoice) document
     *
     * @return InvoiceSuiteContentType
     */
    public function getContentType(): InvoiceSuiteContentType
    {
        // TODO: Implement method.

        return InvoiceSuiteContentType::Xml;
    }

    /**
     * Get a short description for the provider
     *
     * @return string
     */
    public function getDescription(): string
    {
        // TODO: Implement method.

        return '{{PROVIDER_DESCRIPTION}}';
    }

    /**
     * Get the version of this provider
     *
     * @return Version
     *
     * @throws SemverException
     */
    public function getVersion(): Version
    {
        // TODO: Implement method.

        return Version::parse('0.0.0');
    }

    /**
     * Get parameters
     *
     * @return array<string,mixed>
     */
    public function getParameters(): array
    {
        // TODO: Implement method.

        return [];
    }

    /**
     * Get meta data directories
     *
     * @return array<string,string>
     */
    public function getSerializerMetadataDirectories(): array
    {
        // TODO: Implement method.

        return [];
    }

    /**
     * Get custom handlers
     *
     * @return array<int,string>
     */
    public function getSerializerHandlers(): array
    {
        // TODO: Implement method.

        return [];
    }

    /**
     * Get custom listeners
     *
     * @return array<string,Closure>
     */
    public function getSerializerListeners(): array
    {
        // TODO: Implement method.

        return [];
    }

    /**
     * Get event subscribers
     *
     * @return array<int,string>
     */
    public function getSerializerSubscribers(): array
    {
        // TODO: Implement method.

        return [];
    }

    /**
     * Get context groups
     *
     * @return array<string>
     */
    public function getSerializerGroups(): array
    {
        // TODO: Implement method.

        return [];
    }

    /**
     * Returns true if the content matches the requirements for this format provider, otherwise false
     *
     * @param  string $serializedContent
     * @return bool
     */
    public function getSerializedContentMatchesScheme(
        string $serializedContent
    ): bool
    {
        // TODO: Implement method.
    }

    /**
     * Returns the classname of the root invoice-object
     *
     * @return string
     */
    public function getRootClassName(): string
    {
        // TODO: Implement method.

        return '';
    }

    /**
     * Returns the reader classname for this format provider
     *
     * @return string
     */
    public function getReaderClassName(): string
    {
        return {{READER_CLASS_NAME}}::class;
    }

    /**
     * Returns the builder classname for this format provider
     *
     * @return string
     */
    public function getBuilderClassName(): string
    {
        return {{BUILDER_CLASS_NAME}}::class;
    }

    /**
     * Returns a list of valid PDF attachment filenames
     *
     * @return array<string>
     */
    public function getPdfAllowedAttachmentFilenames(): array
    {
        // TODO: Implement method.

        return [];
    }

    /**
     * Get the default PDF attachment filename
     *
     * @return string
     */
    public function getPdfDefaultAttachmentFilename(): string
    {
        // TODO: Implement method.

        return '';
    }

    /**
     * Returns the PDF constructor classname for this format provider
     *
     * @return string
     */
    public function getPdfConstructorClassName(): string
    {
        // TODO: Implement method.

        return '';
    }

    /**
     * Returns the full file name (including path) for the XSD schema that matches this provider.
     *
     * @return string
     */
    public function getValidationXsdFilename(): string
    {
        // TODO: Implement method.

        return '';
    }
}
