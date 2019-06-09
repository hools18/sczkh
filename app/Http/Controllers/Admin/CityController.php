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

    public function showForm()
    {
        $data = [
            'route' => route('admin.city.create'),
            'regions' => Region::orderBy('name')->where('isActive', true)->get(),
        ];
        return response()->json([
            'form' => view('admin.kladder.city.form', $data)->render()
        ]);
    }

    public function create(Request $request)
    {
        $region = Region::find($request->region_id);
        City::create([
            'name' => $request->name_city,
            'region_id' => $region->id,
            'country_id' => $region->country->id,
            'isActive' => filter_var($request->active_area, FILTER_VALIDATE_BOOLEAN),
        ]);
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $city = City::find($request->city_id);
        $data = [
            'city' => $city,
            'route' => route('admin.city.update'),
            'regions' => Region::orderBy('name')->where('isActive', true)->get(),
        ];
        return response()->json([
            'form' => view('admin.kladder.city.form', $data)->render()
        ]);
    }

    public function update(Request $request)
    {
        $city = Area::find($request->city_id);
        $region = Region::find($request->region_id);
        $city->region_id = $region->id;
        $city->country_id = $region->country->id;
        $city->isActive = filter_var($request->active_area, FILTER_VALIDATE_BOOLEAN);
        $city->save();

        return redirect()->back();
    }
}
