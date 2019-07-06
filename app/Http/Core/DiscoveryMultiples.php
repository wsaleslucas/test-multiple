<?php
namespace App\Http\Core;

class DiscoveryMultiples
{
    private $result;

    public function dynamicMultiples($number)
    {
        $multiples[] = ['3', 'Linio', '5'];
        $multiples[] = ['5', 'IT', '3'];
        $multiples[] = ['3,5', 'Linians'];

        $positionReturn[$number] = $number;
        foreach ($multiples as $multiple) {
            $ex = explode(',' ,$multiple[0]);
            if (
                (count($ex) == 1 && (($number % $multiple[0]) == 0 && ($number % $multiple[2]) != 0)) ||
                (count($ex) > 1 && ($number % $ex[0]) == 0 && ($number % $ex[1]) == 0)
            ) {
                $positionReturn[$number] = $multiple[1];
                continue;
            }
        }

        $this->result = $positionReturn[$number];
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }
}
