<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;

class OneToOneController extends Controller
{
    public function index()
    {
        $countries = Country::all();

        //$location = Country->location;
        
        foreach($countries as $country){
            echo "{$country->name}<br>";
        }
        /*
            echo "{ $country->latitude } - ";
            echo "{ $country->longitude } <br>";
         */
    }
    public function oneToOne()
    {
        $country = Country::find(1);
        //$country = Country::where('name', 'Argentina')->first();
        echo $country->name;

        $location = $country->location;
        //$location = $country->location()->get()->first();
        echo "<hr>Latitude: {$location->latitude}<br>";
        echo "Longitude: {$location->longitude}<br>";
    }

    public function oneToOneInverse()
    {
        $latitude = 121212.0;
        $longitude = 212121.0;

        $location = Location::where('latitude', $latitude)
            ->where('longitude', $longitude)
            ->first();

        $country = $location->country;
        //$country = $location->country()->first();
        echo $country->name;
    }

    public function oneToOneInsert()
    {
        $dataForm = [
            'name' => 'Alemanha',
            'latitude' => 890,
            'longitude' => 980,
        ];

        $country = Country::create($dataForm);

        $location = $country->location()->create($dataForm);
        dd($location);
        //$dataForm['country_id'] = $country->id;
        //$location = Location::create($dataForm);
        
        /*
        $location = new Location;
        $location->latitude = $dataForm['latitude'];
        $location->longitude = $dataForm['longitude'];
        $location->country_id = $country->id;
        $saveLocation = $location->save();

        if($saveLocation)
        {
            echo "País cadastrado com sucesso!";
        }
        else
        {
            echo "Falah ao cadastra o País :(";
        }
        */

    }
}
