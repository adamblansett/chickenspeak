<?php

use PHPUnit\Framework\TestCase;
use src\Classes\Hen;

/**
 * Description of ChickenTest
 *
 * @author ablansett
 */
class HenTest extends TestCase
{

    private $hen = null;

    public function setUp ()
    {
        parent::setUp();

        $this->hen = new Hen();
    }

    public function testSpeak ()
    {

        $this->assertEquals( "Bwwaaaaaaaaaaaakkkkk!\n", $this->hen->speak() );
    }

    public function testSleep ()
    {

        $this->assertEquals( "Zzzzzzzz!", $this->hen->sleep() );
    }

    public function testWakeUp ()
    {

        $this->assertEquals( "The chicken is now awake", $this->hen->wakeUp( 'chicken' ) );
    }

    public function testLayEgg ()
    {

        $this->assertEquals( "The Hen layed 10 eggs", $this->hen->layEgg( 10 ) );
    }

}
