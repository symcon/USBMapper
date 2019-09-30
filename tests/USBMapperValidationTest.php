<?php

declare(strict_types=1);
include_once __DIR__ . '/stubs/Validator.php';
class USBMapperValidationTest extends TestCaseSymconValidation
{
    public function testValidateUSBMapepr(): void
    {
        $this->validateLibrary(__DIR__ . '/..');
    }
    public function testValidateUSBMapperModule(): void
    {
        $this->validateModule(__DIR__ . '/../USBMapper');
    }
}