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
            'regions' => Region::all(),
            'countryes' => Country::orderBy('name')->where('isActive', true)->get()
        ];

        return view('admin.kladder.region.index', $data);
    }

    public function create(Request $request)
    {
        Region::create([

        ]);
        return redirect()->back();
    }
}