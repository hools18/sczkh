<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryClaim;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'categoryes' => CategoryClaim::orderBy('name')->get(),
        ];

        return view('admin.category_claim.index', $data);
    }

    public function create(Request $request)
    {
        CategoryClaim::create([
           'name' => $request->name_category,
           'isActive' => filter_var($request->active_category, FILTER_VALIDATE_BOOLEAN),
        ]);

        return redirect()->back();
    }
}
