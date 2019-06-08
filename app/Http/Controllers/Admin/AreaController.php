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
            'areas' => Area::orderBy('name')->get(),
        ];

        return view('admin.kladder.area.index', $data);
    }

    public function showForm()
    {
        $data = [
            'route' => route('admin.area.create'),
            'cityes' => City::orderBy('name')->where('isActive', true)->get(),
            'regions' => Region::orderBy('name')->where('isActive', true)->get(),
        ];
        return response()->json([
            'form' => view('admin.kladder.area.form', $data)->render()
        ]);
    }

    public function create(Request $request)
    {
        $region = Region::find($request->region_id);
        Area::create([
            'name' => $request->name_area,
            'city_id' => $request->city_id,
            'region_id' => $region->id,
            'country_id' => $region->country->id,
            'isActive' => filter_var($request->active_area, FILTER_VALIDATE_BOOLEAN),
        ]);
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $area = Area::find($request->area_id);
        $data = [
            'area' => $area,
            'route' => route('admin.area.update'),
            'cityes' => City::orderBy('name')->where('isActive', true)->get(),
            'regions' => Region::orderBy('name')->where('isActive', true)->get(),
        ];
        return response()->json([
            'form' => view('admin.kladder.area.form', $data)->render()
        ]);
    }

    public function update(Request $request)
    {
        $area = Area::find($request->area_id);
        $region = Region::find($request->region_id);
        $area->city_id = $request->city_id;
        $area->region_id = $region->id;
        $area->country_id = $region->country->id;
        $area->isActive = filter_var($request->active_area, FILTER_VALIDATE_BOOLEAN);
        $area->save();

        return redirect()->back();
    }
}