<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CategoryClaim;
use App\Models\City;
use App\Models\Claim;
use Illuminate\Http\Request;

class ClaimController extends Controller
{
    public function index()
    {
        $data = [
            'categoryes' => CategoryClaim::where('isActive', true)->orderBy('name')->get(),
            'claims' => Claim::latest()->get(),
        ];
        return view('front.claim.index', $data);
    }

    public function showFormClaim()
    {
        $data = [
            'cityes' => City::where('isActive', true)->get(),
            'categoryes' => CategoryClaim::where('isActive', true)->orderBy('name')->get(),
        ];
        return view('front.claim.form', $data);
    }
}