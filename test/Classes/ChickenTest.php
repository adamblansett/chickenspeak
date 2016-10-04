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

    private $chicken = null;

    public function setUp ()
    {
        parent::setUp();

        $this->chicken = new Chicken();
    }

    public function testSpeak ()
    {

        $this->assertEquals( "Bwwaaaaaaaaaaaakkkkk!\n", $this->chicken->speak() );
    }

    public function testSleep ()
    {

        $this->assertEquals( "Zzzzzzzz!", $this->chicken->sleep() );
    }

    public function testWakeUp ()
    {

        $this->assertEquals( "The chicken is now awake", $this->chicken->wakeUp( 'chicken' ) );
    }

}
