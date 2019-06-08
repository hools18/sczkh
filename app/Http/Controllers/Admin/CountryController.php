<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;

class CountryController extends Controller
{

    public function index()
    {
        $data = [
            'countryes' => Country::all(),
        ];

        return view('admin.kladder.country.index', $data);
    }
}