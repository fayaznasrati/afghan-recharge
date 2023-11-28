<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller {
   public function LocalLang( $lang) {

    // return $request->lang;
    App::setLocale($lang);
    Session::put('lang', $lang);
    return redirect()->back();

   }
}
