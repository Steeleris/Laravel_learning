<?php

namespace App\Http\Controllers;

use App\Painting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
    public function showWelcome()
    {

        /*

        Schema::createIfNotExists('art', function($table){
            $table->increments('id');
            $table->string('author');
            $table->string('title', 500);
            $table->text('description');
            $table->date('created');
            $table->date('exibition_date');
            $table->timestamps();
        });

        Schema::table('art', function($table){
            $table->boolean('alumni');
            $table->dropColumn('exibition_date');
        });

        Schema::dropIfExists('art');

        $painting = new Painting();
        $painting->title = 'Mona Lisa';
        $painting->description = 'Mona Liza – žymiausias Leonardo da Vinčio paveikslas.';
        $painting->year = 1503;
        $painting->save();

        */

        return view('welcome', array('name' => 'Jack', 'weather' => false, 'cities' => array('Vilnius', 'Kaunas', 'Klaipėda')));
    }

    public function showSubject($sub)
    {
        return "The subject is $sub";
    }

    public function showDirection()
    {
        $url = URL::route('direction');

        return "The direction is $url";
    }

    public function showPrograms()
    {
        return view('programs');
    }

    public function showDesigns()
    {
        return view('designs');
    }

    public function showThanks()
    {
        $email = Input::get('email');
        return view('thanks', array('email' => $email));
    }
}