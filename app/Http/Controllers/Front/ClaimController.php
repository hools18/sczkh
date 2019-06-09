<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CategoryClaim;
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

    public function form(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('front.claim.form');
        }

        return 1;
    }

    public function create(Request $request)
    {
        $claim = Claim::create([
            'city_id' => $request->city_id,
            'area_id' => $request->area_id,
            'street' => $request->street,
            'house' => $request->house,
            'entrance' => $request->entrance,
            'floor' => $request->floor,
            'apartment' => $request->apartment,
            'place_description' => $request->place_description,
            'category_claim_id' => $request->category_claim_id,
            'title' => $request->title,
            'text_claim' => $request->text_claim,
            'sender_id' => $request->sender_id,
        ]);
        return response()->json([
            'message' => 'Заявка принята',
            'claim_id' => $claim->id,
        ]);
    }
}