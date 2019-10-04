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
        /*
        $city = City::where('name', 'Natal')->get()->first();
        echo "Cidade: <b>$city->name:</b>";
        echo "<br><br>";

        $comments = $city->comments()->get();
        foreach($comments as $comment)
        {
            echo "{$comment->description}<hr>";
        }
        */

        /*
        $country = Country::find(1)->get()->first();
        echo "Pais: <b>$country->name:</b>";
        echo "<br><br>";

        $comments = $country->comments()->get();
        foreach($comments as $comment)
        {
            echo "{$comment->description}<hr>";
        }
        */

        $state = State::find(1)->get()->first();
        echo "Estado: <b>$state->name:</b>";
        echo "<br><br>";

        $comments = $state->comments()->get();
        foreach($comments as $comment)
        {
            echo "{$comment->description}<hr>";
        }
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
