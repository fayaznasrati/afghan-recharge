<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class localizationController extends Controller
{
    public function setLang($lang){
        // return $lang;
        App::setLocale($lang);
        Session::put('lang', $lang);
        return redirect()->back();
    }
}
