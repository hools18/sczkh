<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\CategoryClaim;
use App\Models\City;
use App\Models\Claim;
use Illuminate\Http\Request;

class ClaimController extends Controller
{
    public function index()
    {
        $data = [
            'claims' => Claim::latest()->get()
        ];

        return view('admin.claim.index', $data);
    }

    public function showForm(Request $request)
    {
        $claim = Claim::find($request->claim_id);

        $data = [
            'route' => route('admin.claim.transferArea'),
            'claim' => $claim,
            'areas' => Area::orderBy('name')->where('isActive', true)->get(),
            'cityes' => City::orderBy('name')->where('isActive', true)->get(),
            'categoryes' => CategoryClaim::orderBy('name')->where('isActive', true)->get(),
        ];
        return response()->json([
            'form' => view('admin.claim.form', $data)->render(),
        ]);
    }

    public function transferArea(Request $request)
    {
        return;
    }
}
