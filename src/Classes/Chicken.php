<?php
namespace src\Classes;
/**
 * Description of Chicken
 *
 * @author ablansett
 */
use src\Classes\Animal;

class Chicken extends Animal
{
    public function speak ($words = "Bwwaaaaaaaaaaaakkkkk!\n" )
    {
        return parent::speak( $words );
    }
}
