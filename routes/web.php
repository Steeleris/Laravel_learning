<?php

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

use App\Painting;

Route::get('/', 'HomeController@showWelcome');

Route::get('/direction', array('uses' => 'HomeController@showDirection', 'as' => 'direction'));

Route::get('/subject/{sub}', 'HomeController@showSubject');

Route::get('/main', array('as' => 'main_page', function(){
    return "Main page";
}))->middleware(['bday:2016-06-11,21','cbday:2016-01-02,23']);

Route::get('/bday/{age?}', array('as' => 'bday', function($age = null){
    return "Happy $age birthday!";
}));

Route::get('/cbday/{age?}', array('as' => 'cbday', function($age = null){
    return "Happy $age birthday colleague!";
}));

Route::get('/programs', 'HomeController@showPrograms');
Route::get('/designs', 'HomeController@showDesigns');
Route::get('/signup', function(){
    return View::make('signup');
});

Route::post('/thanks', 'HomeController@showThanks');

Route::get('/data/all', function(){
    $paintings = Painting::where('year', '=', 1996)->get();

    echo "<pre>";
    var_dump($paintings->toArray());
    echo "</pre>";
});

Route::get('/data/{id?}', function($id = 1){
    $painting = Painting::find($id);

    return $painting->title;
});
