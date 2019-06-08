<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClaimController extends Controller
{
    public function index()
    {
        return view('front.claim.index');
    }

    public function form(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('front.claim.form');
        }

        return 1;
    }
}