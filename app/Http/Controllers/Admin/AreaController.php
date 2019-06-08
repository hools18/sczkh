<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\City;
use App\Models\Region;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $data = [
            'areas' => Area::all(),
            'cityes' => City::orderBy('name')->where('isActive', true)->get(),
            'regions' => Region::orderBy('name')->where('isActive', true)->get(),
        ];

        return view('admin.kladder.area.index', $data);
    }

    public function create(Request $request)
    {
        dd($request);
        Area::create([
            'name',
            'city_id',
            'region_id',
            'country_id',
            'isActive',
        ]);
        return redirect()->back();
    }
}