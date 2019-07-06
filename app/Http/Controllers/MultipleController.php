<?php

namespace App\Http\Controllers;

use App\Http\Core\DiscoveryMultiples;

class MultipleController extends Controller
{

    public function numberMultiple()
    {
        $discovery = new DiscoveryMultiples();
        for ($i = 1; $i <= 100; $i++) {
            $discovery->dynamicMultiples($i);
            echo sprintf("%s <br />", $discovery->getResult());
        }

    }
}
