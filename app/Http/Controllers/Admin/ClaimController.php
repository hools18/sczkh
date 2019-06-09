<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\CategoryClaim;
use App\Models\City;
use App\Models\Claim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ClaimController extends Controller
{
    public function index()
    {
        $data = [
            'claims' => Claim::latest()->where('system_status', 0)->get()
        ];

        return view('admin.claim.index', $data);
    }


    public function showArea()
    {
        $data = [
            'claims' => Claim::latest()->where('system_status', 1)->get()
        ];

        return view('admin.claim_area.index', $data);
    }

    public function showWorker()
    {
        $data = [
            'claims' => Claim::latest()->where('system_status', 2)->get()
        ];

        return view('admin.claim_worker.index', $data);
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
        $city = City::find($request->city_id);
        $claim = Claim::find($request->claim_id);
        $claim->region_id = $city->region->id;
        $claim->city_id = $city->id;
        $claim->area_id = $request->area_id;
        $claim->street = $request->street;
        $claim->house = $request->house;
        $claim->entrance = $request->entrance;
        $claim->floor = $request->floor;
        $claim->apartment = $request->apartment;
        $claim->place_description = $request->place_description;
        $claim->category_claim_id = $request->category_claim_id;
        $claim->title = $request->title;
        $claim->text_claim = $request->text_claim;
        $claim->status = $request->status;
        $claim->city_operator = Auth::user()->id ?? 11;
        $claim->date_expired = Carbon::now()->addDay(3);
        $claim->system_status = 1;
        $claim->save();

        return;
    }
}
