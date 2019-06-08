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

    public function create(Request $request)
    {
        Region::create([
            'name' => $request->name_region,
            'country_id' => $request->country_id,
            'isActive' => filter_var($request->active_region, FILTER_VALIDATE_BOOLEAN),
        ]);
        return redirect()->back();
    }
}