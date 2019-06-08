<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index()
    {
        $data = [
            'regions' => Region::orderBy('name')->get(),
            'countryes' => Country::orderBy('name')->where('isActive', true)->get(),
        ];

        return view('admin.kladder.region.index', $data);
    }

    public function showForm()
    {
        $data = [
            'route' => route('admin.region.create'),
        ];
        return response()->json([
            'form' => view('admin.kladder.region.form', $data)->render()
        ]);
    }

    public function create(Request $request)
    {
        Region::create([
            'name' => $request->name_region,
            'country_id' => 1,
            'isActive' => filter_var($request->active_region, FILTER_VALIDATE_BOOLEAN),
        ]);
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $region = Region::find($request->region_id);
        $data = [
            'region' => $region,
            'route' => route('admin.region.update'),
        ];
        return response()->json([
            'form' => view('admin.kladder.region.form', $data)->render()
        ]);
    }

    public function update(Request $request)
    {
        $region = Region::find($request->region_id);
        $region->country_id = 1;
        $region->isActive = filter_var($request->active_area, FILTER_VALIDATE_BOOLEAN);
        $region->save();

        return redirect()->back();
    }
}
