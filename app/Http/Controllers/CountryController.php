<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'iso' => 'required|string',
        ]);

        $country = new Country();
        $country->name = $request->name;
        $country->iso = $request->iso;
        $country->user_id = auth()->user()->id;
        $country->save();

        return redirect()->route('dashboard')->with('success', 'Country created successfully.');
    }

    public function update(Request $request, Country $country)
    {
        $request->validate([
            'name' => 'required|string',
            'iso' => 'required|string',
        ]);

        $country->name = $request->name;
        $country->iso = $request->iso;
        $country->save();

        return redirect()->route('dashboard')->with('success', 'Country updated successfully.');
    }

    public function edit(Country $country)
    {
        return view('countries.edit')->with('country', $country);
    }
}
