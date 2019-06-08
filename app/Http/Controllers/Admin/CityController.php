<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Region;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $data = [
            'cityes' => City::orderBy('name')->get(),
            'regions' => Region::orderBy('name')->where('isActive', true)->get(),
        ];

        return view('admin.kladder.city.index', $data);
    }

    public function create(Request $request)
    {
        $region = Region::find($request->region_id);

        City::create([
            'name' => $request->name_city,
            'region_id' => $region->id,
            'country_id' => $region->country->id,
            'isActive' => filter_var($request->active_city, FILTER_VALIDATE_BOOLEAN),
        ]);

        return redirect()->back();
    }
}