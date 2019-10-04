<?php

//One to One

$this->get('countries', 'OneToOneController@index');
$this->get('one-to-one', 'OneToOneController@oneToOne');
$this->get('one-to-one-inverse', 'OneToOneController@oneToOneInverse');
$this->get('one-to-one-insert', 'OneToOneController@oneToOneInsert');

//One to Many

$this->get('one-to-many', 'OneToManyController@OneToMany');
$this->get('many-to-one', 'OneToManyController@ManyToOne');
$this->get('one-to-many-two', 'OneToManyController@OneToManyTwo');
$this->get('one-to-many-insert', 'OneToManyController@OneToManyInsert');
$this->get('one-to-many-insert-2', 'OneToManyController@OneToManyInsertTwo');

//Has Many Through

$this->get('has-many-through', 'OneToManyController@HasManyThrough');

//Many To Many

$this->get('many-to-many', 'ManyToManyController@ManyToMany');
$this->get('many-to-many-inverse', 'ManyToManyController@ManyToManyInverse');
$this->get('many-to-many-insert', 'ManyToManyController@ManyToManyInsert');

//Relation Polymorphic

$this->get('polymorphic', 'PolymorphicController@polymorphic');
$this->get('polymorphic-insert', 'PolymorphicController@polymorphicInsert');

Route::get('/', function () {
    return view('welcome');
});
