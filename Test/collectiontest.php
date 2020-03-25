<?php

require_once('../functions.php');

use PHPUnit\Framework\TestCase;

class collectiontest extends TestCase {
    public function testReturnsCharacterData() {
        $expected = "<div class=\"character test house\"><h3>Test Name</h3><p>Test Blood-Type</p><p>Test House</p></div>";
        $actual = displayCharacters([["name" => "Test Name", "blood-type" => "Test Blood-Type", "house" => "Test House"]]);

        $this->assertSame($expected, $actual);
    }

    public function testErrorWhenGivenString() {
        $this->expectException(TypeError::class);

        displayCharacters("Test!");
    }

    public function testErrorWhenGivenNoArgument() {
        $this->expectException(ArgumentCountError::class);

        displayCharacters();
    }
}