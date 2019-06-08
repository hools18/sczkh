<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\City;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $data = [
            'workers'  => Worker::orderBy('name')->get()
        ];
        return view('admin.worker.index', $data);
    }

    public function showForm()
    {
        $data = [
            'route' => route('admin.worker.create'),
            'cityes' => City::orderBy('name')->where('isActive', true)->get(),
            'areas' => Area::orderBy('name')->where('isActive', true)->get(),
        ];
        return response()->json([
            'form' => view('admin.worker.form', $data)->render()
        ]);
    }

    public function create(Request $request)
    {

        Worker::create([
            'name' => $request->name_worker,
            'description' => $request->desc_worker,
            'phone' => $request->phone_worker,
            'isActive' => filter_var($request->active_worker, FILTER_VALIDATE_BOOLEAN),
            'city_id' => $request->city_id,
            'area_id' => $request->area_id,

        ]);
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $worker = Worker::find($request->worker_id);
        $data = [
            'worker' => $worker,
            'cityes' => City::orderBy('name')->where('isActive', true)->get(),
            'areas' => Area::orderBy('name')->where('isActive', true)->get(),
            'route' => route('admin.worker.update'),
        ];
        return response()->json([
            'form' => view('admin.worker.form', $data)->render()
        ]);
    }

    public function update(Request $request)
    {
        $worker = Worker::find($request->worker_id);

        $worker->name = $request->name_worker;
        $worker->description = $request->desc_worker;
        $worker->phone = $request->phone_worker;
        $worker->city_id = $request->city_id;
        $worker->area_id = $request->area_id;
        $worker->isActive = filter_var($request->active_worker, FILTER_VALIDATE_BOOLEAN);

        $worker->save();

        return redirect()->back();
    }

}