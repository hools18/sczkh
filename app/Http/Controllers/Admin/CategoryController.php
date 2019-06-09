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

    public function showForm()
    {
        $data = [
            'route' => route('admin.category.create'),
        ];
        return response()->json([
            'form' => view('admin.category_claim.form', $data)->render()
        ]);
    }

    public function create(Request $request)
    {
        CategoryClaim::create([
            'name' => $request->name_category,
            'isActive' => filter_var($request->active_category, FILTER_VALIDATE_BOOLEAN),
        ]);
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $category = CategoryClaim::find($request->category_id);
        $data = [
            'category' => $category,
            'route' => route('admin.category.update'),
        ];
        return response()->json([
            'form' => view('admin.category_claim.form', $data)->render()
        ]);
    }

    public function update(Request $request)
    {
        $category = CategoryClaim::find($request->category_id);

        $category->name = $request->name_category;
        $category->isActive = filter_var($request->active_category, FILTER_VALIDATE_BOOLEAN);
        $category->save();

        return redirect()->back();
    }

    public function delete(Request $request)
    {
        $category = CategoryClaim::find($request->category_id);
        $category->delete();
        return response()->json([
            'message' => 'Категория успешно удалена'
        ]);
    }
}
