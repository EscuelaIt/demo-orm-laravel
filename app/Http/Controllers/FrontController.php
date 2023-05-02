<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Customer;
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
        //$countries = Country::where('name', 'like', 'I%')->orderBy('currency', 'asc')->get();
        $countries = Country::with('customers')->get();
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

    public function addCustomer($name) {
        $country = Country::inRandomOrder()->limit(1)->first();
        $customer = new Customer();
        $customer->name = $name;
        $customer->email = 'x@example.com';
        $customer->address = 'C/ Lo que sea';
        $customer->country_id = $country->id;
        $customer->save();
        echo "ya!";
    }

    public function listCustomer() {
        //$customers = Customer::with(['country'])->where('name', 'Maria')->get();
        $customers = Customer::with(['country'])->get();
        return view('customers-list')->with([
            'customers' => $customers,
        ]);
    }

    public function removeCustomer($id) {
        $customer = Customer::find($id);
        if($customer) {
            $customer->delete();
        }
        return redirect('/customers');
    }
}
