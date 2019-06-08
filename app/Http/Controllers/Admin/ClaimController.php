<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ClaimController extends Controller
{
    public function index()
    {
        return view('admin.claim.index');
    }
}