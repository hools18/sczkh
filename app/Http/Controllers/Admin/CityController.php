<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        $data = [
            'cityes' => City::all(),
        ];

        return view('admin.kladder.city.index', $data);
    }
}