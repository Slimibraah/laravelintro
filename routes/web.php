<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/", function(){
    $personne = new stdClass();
    $personne->prenom = "Elias";
    $personne->nom = "Aboutaharan"; 
    return view("index", compact("personne"));
});
Route::get("/{chiffre}", function($chiffre){
    return " Le chiffre que j'ai ajouté est $chiffre";
});