<?php namespace App\Http\Controllers;

use App;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class StaticController extends Controller {

	public function index() {
        return view('static.index');
    }

    public function projects() {
        return view('static.projects');
    }

    public function checkLang() {
        return LaravelLocalization::getSupportedLocales();
    }
}
