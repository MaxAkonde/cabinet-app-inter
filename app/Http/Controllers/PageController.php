<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function expatriation() {
        return view('expatriation');
    }

    public function protection_social() {
        return view('protection_social');
    }

    public function regime_social() {
        return view('regime_social');
    }

    public function regime_fiscal() {
        return view('regime_fiscal');
    }

    public function detachement() {
        return view('detachement');
    }

    public function rupture() {
        return view('rupture');
    }

    public function rupture_conventionnelle() {
        return view('rupture_conventionnelle');
    }

    public function resiliation_judiciaire() {
        return view('resiliation_judiciaire');
    }
}
