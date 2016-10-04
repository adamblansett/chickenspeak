<?php

use PHPUnit\Framework\TestCase;
use src\Classes\Rooster;
/**
 * Description of ChickenTest
 *
 * @author ablansett
 */
class RoosterTest extends TestCase
{
    
    private $rooster = null;

    public function setUp ()
    {
        parent::setUp();

        $this->rooster = new Rooster();
    }

    public function testSpeak ()
    {

        $this->assertEquals( "Bwwaaaaaaaaaaaakkkkk!\n", $this->rooster->speak() );
    }

    public function testSleep ()
    {

        $this->assertEquals( "Zzzzzzzz!", $this->rooster->sleep() );
    }

    public function testWakeUp ()
    {

        $this->assertEquals( "The chicken is now awake", $this->rooster->wakeUp( 'chicken' ) );
    }

    public function testCrow()
    {

        $this->assertEquals( "Cock-A-Doo·Dle-Doo!\n", $this->rooster->crow() );
    }

}
