<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Company;

class ManyToManyController extends Controller
{
    public function ManyToMany()
    {
        $city = City::find(1)->get()->first();
        echo "<b>$city->name</b>";
        echo "<br><br>";
        $companies = $city->companies;
        foreach($companies as $company)
        {
            echo " {$company->name}, ";
        }
    }

    public function ManyToManyInverse()
    {
        $company = Company::where('name', 'C&A')->get()->first();

        echo "<b>$company->name</b>";
        echo "<br><br>";
        $cities = $company->cities;
        foreach($cities as $city)
        {
            echo " {$city->name}, ";
        }
    }

    public function ManyToManyInsert()
    {
        $dataForm = [3, 4];

        $company = Company::find(1)->get()->first();

        //$company->cities()->attach($dataForm); //incremental
        $company->cities()->sync($dataForm); //sicronizar dados
        //$company->cities()->detach(2); //remover vinculo

        $cities = $company->cities;
        foreach($cities as $city)
        {
            echo " {$city->name}, ";
        }
    }
}