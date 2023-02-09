<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function testSuccessCallPlant()
    {
        $expected = '<article><img class="collection-image" src="silly.jpg" alt="Picture of a Plant"><div class="plant"><p>Colloquial name: yucca</p><p>Latin name: fancy pants</p><p>Size: 100cm</p></div></article>';
        $input = [
            [
                'colloquial_name' => 'yucca',
                'latin_name' => 'fancy pants',
                'size_cm' => '100',
                'image_url' => 'silly.jpg',
            ]
        ];
        $case = callPlant($input);
        $this->assertEquals($expected, $case);
    }
    public function testFailureCallPlant()
    {
        $expected = '<article><img class="collection-image" src="silly.jpg" alt="Picture of a Plant"><div class="plant"><p>Colloquial name: yucca</p><p>Latin name: fancy pants</p><p>Size: 100cm</p></div></article>';
        $input = [
            ['colloquial_name' => 'yucca', 'latin_name' => 'fancy pants', 'size_cm' => '100', 'image_url' => 'silly.jpg'],
            ['latin_name' => 'fancy pants', 'size_cm' => '100', 'image_url' => 'silly.jpg'],
            ['latin_name' => 'fancy pants', 'size_cm' => '100', 'image_url' => 'silly.jpg', 'blarg' => 'flizmerds']
                ];
        $case = callPlant($input);
        $this->assertEquals($expected, $case);
    }
    public function testMalformedCallPlant()
    {
        $this->expectException(TypeError::class);
        $input = 'silly';
        $case = callPlant($input);
    }

    public function testSuccessValidateNewPlant()
    {
        $expected = true;
        $case = validateNewPlant('Plant', 'Plantus', '50', 'https://www.google.com/');
        $this->assertEquals($expected, $case);
    }

    public function testFailureValidateNewPlant()
    {
        $expected = false;
        $case = validateNewPlant('3857@plant', 'plantus', '34', 'https://www.google.com/');
        $this->assertEquals($expected, $case);
    }
    public function testMalformedValidateNewItem()
    {
        $this->expectException(TypeError::class);
        $input = ['plant', '56', 'https://www.google.com/'];
        $case = validateNewPlant($input);
    }
}
