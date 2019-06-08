<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;

class AreaController extends Controller
{
    public function index()
    {
        $data = [
            'areas' => Area::all(),
        ];

        return view('admin.kladder.area.index', $data);
    }
}