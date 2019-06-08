<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function index()
    {
        $data = [
            'countryes' => Country::orderBy('name')->get(),
        ];

        return view('admin.kladder.country.index', $data);
    }

    public function create(Request $request)
    {
        Country::create([
            'name' => $request->name_country,
            'isActive' => filter_var($request->active_country, FILTER_VALIDATE_BOOLEAN),
        ]);

        return redirect()->back();
    }
}