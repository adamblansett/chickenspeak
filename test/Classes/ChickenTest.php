<?php

use PHPUnit\Framework\TestCase;
use src\Classes\Chicken;
/**
 * Description of ChickenTest
 *
 * @author ablansett
 */
class ChickenTest extends TestCase
{
    
    public function testSpeak()
    {
        $chicken = new Chicken();

        $this->assertEquals("Bwwaaaaaaaaaaaakkkkk!", $chicken->speak());
    }

}
