<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Location\Coordinate;
use Location\Distance\Vincenty;

class GeographyController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        protected Vincenty $vincenty
    ) {}

    public function calculate() 
    {
        $coordinate1 = new Coordinate(25.047836840458658, 121.5174705708949);
        $coordinate2 = new Coordinate(22.688007863237587, 120.309479149447);
        echo __('Distance from Taipei Main Station to Taiwan High-Speed Rail Zuoying Station is :kilometers kilometers.', ['kilometers' => ($coordinate1->getDistance($coordinate2, $this->vincenty)) / 1000]) . PHP_EOL;
    }
}
