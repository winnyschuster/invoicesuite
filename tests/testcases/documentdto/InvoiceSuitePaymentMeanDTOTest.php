<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\tests\testcases\documentdto;

use horstoeko\invoicesuite\documentdto\InvoiceSuitePaymentMeanDTO;
use horstoeko\invoicesuite\tests\TestCase;

final class InvoiceSuitePaymentMeanDTOTest extends TestCase
{
    #region DataProviders

    public function stringValues(): array
    {
        return [[null], [''], ['X']];
    }

    #endregion

    #region Tests

    public function testConstructorDefaults(): void
    {
        $dto = new InvoiceSuitePaymentMeanDTO();

        $this->assertNull($dto->getTypeCode());
        $this->assertNull($dto->getName());
        $this->assertNull($dto->getFinancialCardId());
        $this->assertNull($dto->getFinancialCardHolder());
        $this->assertNull($dto->getBuyerIban());
        $this->assertNull($dto->getPayeeIban());
        $this->assertNull($dto->getPayeeAccountName());
        $this->assertNull($dto->getPayeeProprietaryId());
        $this->assertNull($dto->getPayeeBic());
        $this->assertNull($dto->getPaymentReference());
        $this->assertNull($dto->getMandate());

        $this->assertInstanceOf(
            InvoiceSuitePaymentMeanDTO::class,
            $dto
        );
    }

    public function testFluentSettersReturnSelf(): void
    {
        $dto = new InvoiceSuitePaymentMeanDTO();

        $this->assertSame($dto, $dto->setTypeCode('58'));
        $this->assertSame($dto, $dto->setName('Überweisung'));
        $this->assertSame($dto, $dto->setFinancialCardId('411111******1111'));
        $this->assertSame($dto, $dto->setFinancialCardHolder('Max Mustermann'));
        $this->assertSame($dto, $dto->setBuyerIban('DE00123456780000000001'));
        $this->assertSame($dto, $dto->setPayeeIban('DE00987654320000000002'));
        $this->assertSame($dto, $dto->setPayeeAccountName('ACME GmbH'));
        $this->assertSame($dto, $dto->setPayeeProprietaryId('1234567'));
        $this->assertSame($dto, $dto->setPayeeBic('BANKDEFFXXX'));
        $this->assertSame($dto, $dto->setPaymentReference('Rechnung 4711'));
        $this->assertSame($dto, $dto->setMandate('MAND-123'));
    }

    /**
     * @dataProvider stringValues
     */
    public function testStringSetters(?string $value): void
    {
        $dto = new InvoiceSuitePaymentMeanDTO();

        $dto->setTypeCode($value);
        $this->assertSame($value, $dto->getTypeCode());

        $dto->setName($value);
        $this->assertSame($value, $dto->getName());

        $dto->setFinancialCardId($value);
        $this->assertSame($value, $dto->getFinancialCardId());

        $dto->setFinancialCardHolder($value);
        $this->assertSame($value, $dto->getFinancialCardHolder());

        $dto->setBuyerIban($value);
        $this->assertSame($value, $dto->getBuyerIban());

        $dto->setPayeeIban($value);
        $this->assertSame($value, $dto->getPayeeIban());

        $dto->setPayeeAccountName($value);
        $this->assertSame($value, $dto->getPayeeAccountName());

        $dto->setPayeeProprietaryId($value);
        $this->assertSame($value, $dto->getPayeeProprietaryId());

        $dto->setPayeeBic($value);
        $this->assertSame($value, $dto->getPayeeBic());

        $dto->setPaymentReference($value);
        $this->assertSame($value, $dto->getPaymentReference());

        $dto->setMandate($value);
        $this->assertSame($value, $dto->getMandate());
    }

    public function testConstructorWithValuesUsesSetterChain(): void
    {
        $dto = new InvoiceSuitePaymentMeanDTO(
            '58',
            'Überweisung',
            '411111******1111',
            'Max Mustermann',
            'DE00123456780000000001',
            'DE00987654320000000002',
            'ACME GmbH',
            '1234567',
            'BANKDEFFXXX',
            'Rechnung 4711',
            'MAND-123'
        );

        $this->assertSame('58', $dto->getTypeCode());
        $this->assertSame('Überweisung', $dto->getName());
        $this->assertSame('411111******1111', $dto->getFinancialCardId());
        $this->assertSame('Max Mustermann', $dto->getFinancialCardHolder());
        $this->assertSame('DE00123456780000000001', $dto->getBuyerIban());
        $this->assertSame('DE00987654320000000002', $dto->getPayeeIban());
        $this->assertSame('ACME GmbH', $dto->getPayeeAccountName());
        $this->assertSame('1234567', $dto->getPayeeProprietaryId());
        $this->assertSame('BANKDEFFXXX', $dto->getPayeeBic());
        $this->assertSame('Rechnung 4711', $dto->getPaymentReference());
        $this->assertSame('MAND-123', $dto->getMandate());
    }

    #endregion
}
