<?php
require './src/ValidatePassword.php';

class ValidatePasswordTest extends \PHPUnit\Framework\TestCase
{
    public function testValidLength(){
       $validPass = new ValidatePassword();
       $this->assertFalse($validPass->validLength('1234')); 
    }
}


?>