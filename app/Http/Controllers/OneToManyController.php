<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;

class OneToManyController extends Controller
{
    public function OneToMany()
    {
        /*
        $country = Country::where('name', 'Brasil')->get()->first();
        echo $country->name;

        $states = $country->states;
        //$states = $country->states()->where('initials', 'RN')->get();

        foreach ($states as $state)
        {
            echo "<hr>{$state->initials} - {$state->name}";
        }
        */

        //$keySearch = 'a';
        //$countries = Country::where('name', 'LIKE', "%{$keySearch}%")->get();
        //$countries = Country::where('name', 'LIKE', "%{$keySearch}%")->with('states')->get();

        $countries = Country::all();

        foreach($countries as $country)
        {
            echo "<b>{$country->name}</b>";

            $states = $country->states()->get();

            foreach($states as $state)
            {
                echo "<br>{$state->initials} - {$state->name}";
            }

            echo '<hr>';
        }
    }

    public function ManyToOne()
    {
        $stateName = 'Paraná';

        $state = State::where('name', $stateName)->first();

        echo "<b>{$state->name}</b>";
        echo "<hr>";
        $country = $state->country;
        echo "<b>País: {$country->name}</b>";
    }

    public function OneToManyTwo()
    {
        //$keySearch = 'a';
        //$countries = Country::where('name', 'LIKE', "%{$keySearch}%")->get();
        //$countries = Country::where('name', 'LIKE', "%{$keySearch}%")->with('states')->get();

        $countries = Country::all();

        foreach($countries as $country)
        {
            echo "<b>{$country->name}</b>";

            $states = $country->states()->get();

            foreach($states as $state)
            {
                echo "<br>{$state->initials} - {$state->name}: ";

                foreach($state->cities as $city)
                {
                    echo "{$city->name} -> ";
                }
            }

            echo '<hr>';
        }
    }

    public function OneToManyInsert()
    {
        $dataForm = [
            'name' => 'Mato Grosso do Sul',
            'initials' => 'MS',
        ];

        $country = Country::find(1);
        $insertState = $country->states()->create($dataForm);

        dd($insertState);
    }

    public function OneToManyInsertTwo()
    {
        $dataForm = [
            'name' => 'Mato Grosso do Sul',
            'initials' => 'MS',
            'country_id' => '1',
        ];

        $insertState = State::create($dataForm);

        dd($insertState);
    }  
    
    public function HasManyThrough()
    {
        $country = Country::find(1);
        echo "<b>{$country->name}</b> <br>";

        $cities = $country->cities;

        foreach($cities as $city)
        {
            echo "{$city->name}<br>";
        }

        echo "<br><br>Quantidade de cidades: {$cities->count()}";
    }
}
