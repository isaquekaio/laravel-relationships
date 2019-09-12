<?php

$this->get('countries', 'OneToOneController@index');
$this->get('one-to-one', 'OneToOneController@oneToOne');
$this->get('one-to-one-inverse', 'OneToOneController@oneToOneInverse');
$this->get('one-to-one-insert', 'OneToOneController@oneToOneInsert');

Route::get('/', function () {
    return view('welcome');
});
