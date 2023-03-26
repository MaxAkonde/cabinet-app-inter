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

    public function licenciement() {
        return view('licenciement');
    }

    public function indemnite() {
        return view('indemnite');
    }

    public function inaptitude() {
        return view('inaptitude');
    }

    public function disciplinaire() {
        return view('disciplinaire');
    }

    public function economique() {
        return view('economique');
    }

    public function personnel() {
        return view('personnel');
    }

    public function harcelement() {
        return view('harcelement');
    }

    public function reparation() {
        return view('reparation');
    }

    public function plainte() {
        return view('plainte');
    }

    public function juridique() {
        return view('juridique');
    }

    public function legislation() {
        return view('legislation');
    }

    public function definition() {
        return view('definition');
    }
}
