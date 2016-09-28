<?php
namespace src\Classes;
/**
 * Description of Animal
 *
 * @author ablansett
 */
use src\Interfaces\Speak;

abstract class Animal implements Speak
{
    public function speak ( $words )
    {
        return $words;
    }
}
