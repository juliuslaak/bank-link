<?php

namespace BitWeb\BankLink;


class IbanConverterTest extends \PHPUnit_Framework_TestCase
{
    public function testConverting()
    {
        $this->assertEquals('EE023300335751330008', IbanConverter::bban2iban('335751330008'));
        $this->assertEquals('EE063300336426590004', IbanConverter::bban2iban('336426590004'));
        $this->assertEquals('EE174204278606364305', IbanConverter::bban2iban('4278606364305'));
        $this->assertEquals('EE481010010480337014', IbanConverter::bban2iban('10010480337014'));
        $this->assertEquals('EE581700017002947345', IbanConverter::bban2iban('17002947345'));
        $this->assertEquals('EE642200221023890775', IbanConverter::bban2iban('221023890775'));
        $this->assertEquals('EE912200001107481602', IbanConverter::bban2iban('1107481602'));
        $this->assertEquals('EE951010010106474015', IbanConverter::bban2iban('10010106474015'));
        $this->assertEquals('EE962200221024670855', IbanConverter::bban2iban('221024670855'));
    }
} 