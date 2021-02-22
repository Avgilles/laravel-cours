<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//nous retourne toute les taches
Route::get('tasks', function (){
    return 'listes des taches';
});

//nous retourne  une taches
Route::get('tasks/{taskid}', function ($taskid){
    return 'tache n° '. $taskid;
});

// créer une taches
Route::post('tasks', function (request $request){
    return 'ajout d\'une taches';
});


Route::put('tasks/{taskid}', function ($taskid){
    return 'on modifie la tâche n° '. $taskid;
});
Route::delete('tasks/{taskid}', function ($taskid){
    return 'on modifie la tâche n° '. $taskid;
});
