<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace src\Traits;

/**
 *
 * @author ablansett
 */
trait SleepWake
{

    public function sleep ()
    {
        return 'Zzzzzzzz!';
    }

    public function wakeUp ( $animalType )
    {
        return "The $animalType is now awake";
    }

}
