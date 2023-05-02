<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        $name = 'Miguel A Alvarez';
        return view('welcome')->with([
            'name' => $name,
        ]);
    }

    public function addCountry() {
        $countries = ['Alemania', 'Italia', 'Irlanda', 'Portugal'];
        foreach($countries as $country) {
            $newCountry = new Country();
            $newCountry->name = $country;
            $newCountry->currency = "Euro";
            $newCountry->save();
        }
        echo "ya!";
    }

    public function listCountry() {
        $countries = Country::where('name', 'like', 'I%')->orderBy('currency', 'asc')->get();

        return view('country.country-list')->with([
            'countries' => $countries,
        ]);
    }

    public function EditCountry($id) {
        $country = Country::find($id);
        if($country) {
            $country->currency = "Dólar";
            $country->save();
        }
        echo "ya!";
    }
}
