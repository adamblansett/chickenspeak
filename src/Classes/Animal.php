<?php
namespace src\Classes;
/**
 * Description of Animal
 *
 * @author ablansett
 */
use src\Interfaces\Speak;
use src\Traits\SleepWake;

abstract class Animal implements Speak
{
    use SleepWake;
    
    public function speak ( $words )
    {
        return $words;
    }
}
