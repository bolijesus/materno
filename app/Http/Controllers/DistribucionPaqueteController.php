<?php

namespace App\Http\Controllers;

use App\Paquete;
use Illuminate\Http\Request;

class DistribucionPaqueteController extends Controller
{
    public function control($semanas_embarazo,$seguimiento)
    {
        $semanas_embarazo = $this->parsear_valor($semanas_embarazo);
        
        
    }

    public function parsear_valor($valorStr)
    {
        $valorStr = \str_replace(",",".",$valorStr);
        $valorStr = \floatval($valorStr) ;

        return $valorStr;
    }

    public function paquete_ingreso($semanas_embarazo, $primera_vez)
    {
        if ($primera_vez) {
            if (($semanas_embarazo >= 1 && $semanas_embarazo <= 13.6)) {
                return Paquete::find(2);
            }elseif (($semanas_embarazo >= 13.6 && $semanas_embarazo <= 23.5)) {
                return Paquete::find(3);
            }else{
                return Paquete::find(4);
            }
        }
        
    }

    public function control_1($semanas_embarazo, $primera_vez)
    {   
        if (!$primera_vez) {
            if (($semanas_embarazo >= 5 && $semanas_embarazo <= 9)) {
                return Paquete::find(5);
            }elseif (($semanas_embarazo >= 9.1 && $semanas_embarazo <= 13.1)) {
                return Paquete::find(11);
            }elseif (($semanas_embarazo >= 13.2 && $semanas_embarazo <= 13.6)) {
                return Paquete::find(16);
            }elseif (($semanas_embarazo >= 13.7 && $semanas_embarazo <= 17.2)) {
                return Paquete::find(16);
            }elseif (($semanas_embarazo >= 17.3 && $semanas_embarazo <= 21)) {
                return Paquete::find(21);
            }elseif (($semanas_embarazo >= 21.1 && $semanas_embarazo <= 23.5)) {
                return Paquete::find(26);
            }elseif (($semanas_embarazo >= 23.6 && $semanas_embarazo <= 25)) {
                return Paquete::find(26);
            }elseif (($semanas_embarazo >= 25.1 && $semanas_embarazo <= 29.1)) {
                return Paquete::find(29);
            }elseif (($semanas_embarazo >= 29.2 && $semanas_embarazo <= 33)) {
                return Paquete::find(33);
            }elseif (($semanas_embarazo >= 33.1)) {
                return Paquete::find(26);
            }
        }
    }
    public function control_2($semanas_embarazo, $primera_vez)
    {   
        if (!$primera_vez) {
            if (($semanas_embarazo >= 5 && $semanas_embarazo <= 9)) {
                return Paquete::find(6);
            }elseif (($semanas_embarazo >= 9.1 && $semanas_embarazo <= 13.1)) {
                return Paquete::find(12);
            }elseif (($semanas_embarazo >= 13.2 && $semanas_embarazo <= 13.6)) {
                return Paquete::find(17);
            }elseif (($semanas_embarazo >= 13.7 && $semanas_embarazo <= 17.2)) {
                return Paquete::find(17);
            }elseif (($semanas_embarazo >= 17.3 && $semanas_embarazo <= 21)) {
                return Paquete::find(21);
            }elseif (($semanas_embarazo >= 21.1 && $semanas_embarazo <= 23.5)) {
                return Paquete::find(26);
            }elseif (($semanas_embarazo >= 23.6 && $semanas_embarazo <= 25)) {
                return Paquete::find(26);
            }elseif (($semanas_embarazo >= 25.1 && $semanas_embarazo <= 29.1)) {
                return Paquete::find(30);
            }elseif (($semanas_embarazo >= 29.2 && $semanas_embarazo <= 33)) {
                return Paquete::find(34);
            }elseif (($semanas_embarazo >= 33.1)) {
                return Paquete::find(37);
            }
        }
    }
    public function control_3($semanas_embarazo, $primera_vez)
    {   
        if (!$primera_vez) {
            if (($semanas_embarazo >= 5 && $semanas_embarazo <= 9)) {
                return Paquete::find(5);
            }elseif (($semanas_embarazo >= 9.1 && $semanas_embarazo <= 13.1)) {
                return Paquete::find(13);
            }elseif (($semanas_embarazo >= 13.2 && $semanas_embarazo <= 13.6)) {
                return Paquete::find(18);
            }elseif (($semanas_embarazo >= 13.7 && $semanas_embarazo <= 17.2)) {
                return Paquete::find(18);
            }elseif (($semanas_embarazo >= 17.3 && $semanas_embarazo <= 21)) {
                return Paquete::find(22);
            }elseif (($semanas_embarazo >= 21.1 && $semanas_embarazo <= 23.5)) {
                return Paquete::find(27);
            }elseif (($semanas_embarazo >= 23.6 && $semanas_embarazo <= 25)) {
                return Paquete::find(27);
            }elseif (($semanas_embarazo >= 25.1 && $semanas_embarazo <= 29.1)) {
                return Paquete::find(31);
            }elseif (($semanas_embarazo >= 29.2 && $semanas_embarazo <= 33)) {
                return Paquete::find(35);
            }elseif (($semanas_embarazo >= 33.1)) {
                return Paquete::find(10);
            }
        }
    }
    public function control_4($semanas_embarazo, $primera_vez)
    {   
        if (!$primera_vez) {
            if (($semanas_embarazo >= 5 && $semanas_embarazo <= 9)) {
                return Paquete::find(8);
            }elseif (($semanas_embarazo >= 9.1 && $semanas_embarazo <= 13.1)) {
                return Paquete::find(12);
            }elseif (($semanas_embarazo >= 13.2 && $semanas_embarazo <= 13.6)) {
                return Paquete::find(17);
            }elseif (($semanas_embarazo >= 13.7 && $semanas_embarazo <= 17.2)) {
                return Paquete::find(17);
            }elseif (($semanas_embarazo >= 17.3 && $semanas_embarazo <= 21)) {
                return Paquete::find(23);
            }elseif (($semanas_embarazo >= 21.1 && $semanas_embarazo <= 23.5)) {
                return Paquete::find(28);
            }elseif (($semanas_embarazo >= 23.6 && $semanas_embarazo <= 25)) {
                return Paquete::find(28);
            }elseif (($semanas_embarazo >= 25.1 && $semanas_embarazo <= 29.1)) {
                return Paquete::find(32);
            }elseif (($semanas_embarazo >= 29.2 && $semanas_embarazo <= 33)) {
                return Paquete::find(10);
            }
        }
    }
    public function control_5($semanas_embarazo, $primera_vez)
    {   
        if (!$primera_vez) {
            if (($semanas_embarazo >= 5 && $semanas_embarazo <= 9)) {
                return Paquete::find(5);
            }elseif (($semanas_embarazo >= 9.1 && $semanas_embarazo <= 13.1)) {
                return Paquete::find(11);
            }elseif (($semanas_embarazo >= 13.2 && $semanas_embarazo <= 13.6)) {
                return Paquete::find(19);
            }elseif (($semanas_embarazo >= 13.7 && $semanas_embarazo <= 17.2)) {
                return Paquete::find(19);
            }elseif (($semanas_embarazo >= 17.3 && $semanas_embarazo <= 21)) {
                return Paquete::find(24);
            }elseif (($semanas_embarazo >= 21.1 && $semanas_embarazo <= 23.5)) {
                return Paquete::find(10);
            }elseif (($semanas_embarazo >= 23.6 && $semanas_embarazo <= 25)) {
                return Paquete::find(10);
            }elseif (($semanas_embarazo >= 25.1 && $semanas_embarazo <= 29.1)) {
                return Paquete::find(10);
            }
        }
    }
    public function control_6($semanas_embarazo, $primera_vez)
    {   
        if (!$primera_vez) {
            if (($semanas_embarazo >= 5 && $semanas_embarazo <= 9)) {
                return Paquete::find(6);
            }elseif (($semanas_embarazo >= 9.1 && $semanas_embarazo <= 13.1)) {
                return Paquete::find(14);
            }elseif (($semanas_embarazo >= 13.2 && $semanas_embarazo <= 13.6)) {
                return Paquete::find(18);
            }elseif (($semanas_embarazo >= 13.7 && $semanas_embarazo <= 17.2)) {
                return Paquete::find(18);
            }elseif (($semanas_embarazo >= 17.3 && $semanas_embarazo <= 21)) {
                return Paquete::find(25);
            }
        }
    }
    public function control_7($semanas_embarazo, $primera_vez)
    {   
        if (!$primera_vez) {
            if (($semanas_embarazo >= 5 && $semanas_embarazo <= 9)) {
                return Paquete::find(5);
            }elseif (($semanas_embarazo >= 9.1 && $semanas_embarazo <= 13.1)) {
                return Paquete::find(15);
            }elseif (($semanas_embarazo >= 13.2 && $semanas_embarazo <= 13.6)) {
                return Paquete::find(20);
            }elseif (($semanas_embarazo >= 13.7 && $semanas_embarazo <= 17.2)) {
                return Paquete::find(20);
            }elseif (($semanas_embarazo >= 17.3 && $semanas_embarazo <= 21)) {
                return Paquete::find(10);
            }
        }
    }
    public function control_8($semanas_embarazo, $primera_vez)
    {   
        if (!$primera_vez) {
            if (($semanas_embarazo >= 5 && $semanas_embarazo <= 9)) {
                return Paquete::find(8);
            }elseif (($semanas_embarazo >= 9.1 && $semanas_embarazo <= 13.1)) {
                return Paquete::find(15);
            }elseif (($semanas_embarazo >= 13.2 && $semanas_embarazo <= 13.6)) {
                return Paquete::find(10);
            }elseif (($semanas_embarazo >= 13.7 && $semanas_embarazo <= 17.2)) {
                return Paquete::find(10);
            }
        }
    }
    public function control_9($semanas_embarazo, $primera_vez)
    {   
        if (!$primera_vez) {
            if (($semanas_embarazo >= 5 && $semanas_embarazo <= 9)) {
                return Paquete::find(9);
            }elseif (($semanas_embarazo >= 9.1 && $semanas_embarazo <= 13.1)) {
                return Paquete::find(10);
            }
        }
    }
    public function control_10($semanas_embarazo, $primera_vez)
    {   
        if (!$primera_vez) {
            if (($semanas_embarazo >= 5 && $semanas_embarazo <= 9)) {
                return Paquete::find(9);
            }
        }
    }
    public function puerperio($semanas_embarazo, $primera_vez)
    {   
        if (!$primera_vez) {
            if (($semanas_embarazo >= 5 && $semanas_embarazo <= 9)) {
                return Paquete::find(10);
            }
        }
    }
}



