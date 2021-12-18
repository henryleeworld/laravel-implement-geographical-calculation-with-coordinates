<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use KMLaravel\GeographicalCalculator\Facade\GeoFacade;

class GeographyController extends Controller
{
    public function calculate() 
    {
        $distance = GeoFacade::setPoint([25.047836840458658, 121.5174705708949])
                    ->setPoint([22.688007863237587, 120.309479149447])
                    ->setOptions(['units' => [$unit = 'km']])
                    // you can set unlimited lat/long points.
                    // get the calculated distance between each point
                    ->getDistance();
        // dd($distance);
        echo '從台北車站到高鐵左營站距離 ' . Arr::get($distance, '1-2.' . $unit) . ' 公里' . PHP_EOL;
    }
}
