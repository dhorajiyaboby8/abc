<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DateController;
use App\Http\Controllers\pickerController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\musicController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\Imagecontroller;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TdController;
use App\Http\Controllers\DetailController;
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

Route::view("date",'/date' );
Route::post('date',[DateController::class, 'adduser']);
Route::get('showdate', [DateController::class, 'showdate']);


Route::view("select",'/select' );
Route::get('showpicer', [pickerController::class, 'showdata']);
Route::post('select',[pickerController::class, 'selectpicker']);
Route::get('editselect/{id}',[pickerController::class,'editselectpicker']);
Route::post('editselect',[pickerController::class,'update']);

Route::get('/showdata', [MemberController::class, 'index']);
Route::get('/show', [MemberController::class, 'getMembers']);
Route::post('/save', [MemberController::class, 'save']);
Route::post('/delete', [MemberController::class, 'delete']);
Route::post('/update', [MemberController::class, 'update']);

Route::get('/fetch_music',[musicController::class,'fetchmusic']);
Route::get('/index_music',[musicController::class,'indexmusic']);
Route::post('/insert_music',[musicController::class,'insertmusic'])->name('insert.file');
Route::get('deletemusic/{id}',[musicController::class,'deletemusic']);

Route::get('/fetch_video',[VideoController::class,'fetch']);
Route::get('/index_u',[VideoController::class,'index']);
Route::post('/insert_video',[VideoController::class,'insert'])->name('insert.file');

Route::view("new2",'/new2');
Route::post('new2', [Imagecontroller::class, 'insert']);
Route::get('showimage', [Imagecontroller::class, 'showimage']);
Route::get('deleteimage/{id}',[Imagecontroller::class,'deleteimage']);

Route::any('editimage/{id}',[Imagecontroller::class,'showeditimage']);
Route::post('editphoto',[Imagecontroller::class,'update']);

Route::resource('todos', TodoController::class);
Route::get('todos/{todo}', [TodoController::class,'destroy'])->name('todos.destory');

Route::view("addtodo",'/addtodo');

// Route::view("todo",'/todo');
// Route::post('todo',[TdController::class,'insert']);


Route::view("addtodo2",'/addtodo2');

Route::view("detail",'/detail');
Route::post('detail',[DetailController::class,'data']);
Route::get('showdetail',[DetailController::class,'showdata']);
Route::get('editdetail/{id}',[DetailController::class,'editshowdata']);
Route::post('editdetail',[DetailController::class,'updatedetail']);

Route::get('deletedetail/{id}',[DetailController::class,'delete']);

Route::view("a",'/a');
Route::view("aa",'/aa');
Route::view("aaa",'/aaa');
Route::view("aaaa",'/aaaa');

Route::view("ab",'/ab');
Route::view("abb",'/abb');
Route::view("abc",'/abc');

Route::view("ac",'/ac');
Route::view("acc",'/acc');

Route::view("ad",'/ad');
Route::view("add",'/add');
