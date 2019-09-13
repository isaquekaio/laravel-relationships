<?php

//One to One

$this->get('countries', 'OneToOneController@index');
$this->get('one-to-one', 'OneToOneController@oneToOne');
$this->get('one-to-one-inverse', 'OneToOneController@oneToOneInverse');
$this->get('one-to-one-insert', 'OneToOneController@oneToOneInsert');

//One to Many

$this->get('one-to-many', 'OneToManyController@OneToMany');
$this->get('many-to-one', 'OneToManyController@ManyToOne');

Route::get('/', function () {
    return view('welcome');
});
