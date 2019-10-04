<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\Comment;

class PolymorphicController extends Controller
{
    public function polymorphic()
    {

    }

    public function polymorphicInsert()
    {
        /*
        $city = City::where('name', 'Natal')->get()->first();
        echo "<b>$city->name</b>";
        echo "<br>";
        $comment = $city->comments()->create([
            'description' => "New Comment {$city->name} ".date('YmdH'),

        ]);
        dd($comment->description);
        */

        /*
        $state = State::find(1)->get()->first();
        echo "<b>$state->name</b>";
        echo "<br>";
        $comment = $state->comments()->create([
            'description' => "New Comment State {$state->name} ".date('YmdHis'),

        ]);
        dd($comment->description);
        */

        $country = Country::find(1)->get()->first();
        echo "<b>$country->name</b>";
        echo "<br>";
        $comment = $country->comments()->create([
            'description' => "New Comment Country {$country->name} ".date('YmdHis'),

        ]);
        dd($comment->description);
    }
}
