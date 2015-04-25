<?php namespace App\Http\Controllers;

use App;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StaticController extends Controller {

	public function index() {
        return view('static.index');
    }

    public function projects() {
        return view('static.projects');
    }

    public function setLocale() {
        $locale = 'en';
        App::setLocale($locale);
    }

}
