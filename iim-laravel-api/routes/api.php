<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Task;
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
Route::middleware('api_token')->group(function (){

    //nous retourne toute les taches
    Route::get('/tasks', function (){
        return Task::all();
    });

    //nous retourne  une taches
    Route::get('/tasks/{taskid}', function ($taskid){
        return Task::findOrFail($taskid);
    });


    // pour update
    Route::put('/tasks/{taskid}', function ($taskid, Request $request){
        $task = Task::findOrFail($taskid);
        $task->update($request -> all());
        return $task;
    });

    // pour delete task
    Route::delete('/tasks/{taskid}', function ($taskid){
        return Task::findOrFail($taskid) -> delete();

    });

    // créer une taches
    Route::post('/tasks', function (request $request){
        return Task::create($request -> all());
    });

});
