<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Claim;

class ClaimController extends Controller
{
    public function index()
    {
        $data = [
            'claims' => Claim::latest()->get()
        ];

        return view('admin.claim.index', $data);
    }

    public function show_form()
    {
        return;
    }
}
