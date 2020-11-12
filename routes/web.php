<?php
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {
    $name = 'Hussein ALimawi';
    $age = 27;
    // return view('about')->with('name',$name)->with('age',$age);
    return view('about', compact('name','age'));
});
Route::post('send', function (Request $request) {
    $name = $request ->myname;
    return view('about',compact('name'));
});


Route::get('tasks', function () {
    $tasks = [
        '1' => 'Task 1',
        '2' => 'Task 2',
        '3' => 'Task 3'
    ];

    return view('tasks',compact('tasks'));
});
Route::get('task/show/{id}', function ($id) {
    $tasks = [
        '1' => 'Task 1',
        '2' => 'Task 2',
        '3' => 'Task 3'
    ];

    $task = $tasks[$id];

//    dd($task);

    return view('show',compact('task'));
});
