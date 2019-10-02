<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class ManyToManyController extends Controller
{
    public function ManyToMany()
    {
        $city = City::find(1)->get()->first();
        echo "<b>$city->name</b><br>";

        $companies = $city->companies;
        foreach($companies as $company)
        {
            echo " {$company->name}, ";
        }
    }
}