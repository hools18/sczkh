<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Region;

class RegionController extends Controller
{
    public function index()
    {
        $data = [
            'regions' => Region::all(),
        ];

        return view('admin.kladder.region.index', $data);
    }
}