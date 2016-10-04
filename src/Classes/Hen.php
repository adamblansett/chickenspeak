<?php

namespace src\Classes;

/**
 * Description of Hen
 *
 * @author ablansett
 */
class Hen extends Chicken
{

    public function layEgg ( $count = 0 )
    {
        return "The Hen layed $count eggs";
    }

}
