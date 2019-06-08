<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class WorkerController extends Controller
{
    public function index()
    {
        return view('admin.worker.index');
    }
}