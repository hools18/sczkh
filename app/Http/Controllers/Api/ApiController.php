<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\CategoryClaim;
use App\Models\City;
use App\Models\Claim;
use App\Models\Country;
use App\Models\News;
use App\Models\Region;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{
    public function getCity()
    {
        $cityes = City::orderBy('name')->where('isActive', true)->get();
        $json_city = [];
        foreach ($cityes as $city) {
            $item['name'] = $city->name;
            $item['id'] = $city->id;
            $json_city[] = $item;
        }

        return response()->json([
            'city' => $json_city,
        ]);
    }

    public function getCategory()
    {
        $categoryes = CategoryClaim::orderBy('name')->where('isActive', true)->get();
        $json_category = [];
        foreach ($categoryes as $category) {
            $item['name'] = $category->name;
            $item['id'] = $category->id;
            $json_category[] = $item;
        }

        return response()->json([
            'category' => $json_category,
        ]);
    }

    public function getArea(Request $request)
    {

        $city_id = $request->city_id;
        if (empty($city_id)) {
            return response()->json([
                'message' => 'Не полные данные',
            ], '400');
        }
        $areas = Area::orderBy('name')->where('city_id', $city_id)->get();
        $json_areas = [];
        foreach ($areas as $category) {
            $item['name'] = $category->name;
            $item['id'] = $category->id;
            $json_areas[] = $item;
        }

        return response()->json([
            'areas' => $json_areas,
        ]);
    }

    public function getClaim()
    {
        $claims = Claim::orderBy('created_at', 'desc')->get();
        $json_claims = [];
        foreach ($claims as $claim) {
            $item['title'] = $claim->name;
            $item['status'] = $claim->status;
            $item['id'] = $claim->id;
            $json_claims[] = $item;
        }

        return response()->json([
            'claim' => $json_claims,
        ]);
    }

    public function getNews()
    {
        $news = News::orderBy('created_at', 'desc')->where('isActive', true)->get();
        $json_news = [];
        foreach ($news as $new) {
            $item['title'] = $new->title;
            $item['text'] = $new->text;
            $item['date'] = $new->created_at;
            $json_news[] = $item;
        }

        return response()->json([
            'claim' => $json_news,
        ]);
    }

    public function sendClaim(Request $request)
    {
        $files = $request->file('claim_image');   // file is name of input field
        Log::info($files->getClientOriginalName() . '<br>' . $files->getRealPath());

//        \Log::info('файл с прилоги'.$request.'<br>'.implode($_FILES));

        return response()->json('ok');
//        $claims = Claim::orderBy('created_at', 'desc')->get();
//        $json_claims = [];
//        foreach ($claims as $claim) {
//            $item['title'] = $claim->name;
//            $item['status'] = $claim->status;
//            $item['id'] = $claim->id;
//            $json_claims[] = $item;
//        }
//        return response()->json([
//            'claim' => $json_claims,
//        ]);
    }

    public function sendClaimJson(Request $request)
    {
        Log::info($request);
        $city = City::where('id', $request->city_id)->first();
        $area = Area::where('id', $request->area_id)->first();
        $claim = Claim::create([
            'country_id' => $city->country->id ?? null,
            'region_id' => $city->region->id ?? null,
            'city_id' => $city->id ?? null,
            'area_id' => $area->id ?? null,
            'street' => $request->street,
            'house' => $request->house,
            'entrance' => $request->entrance,
            'floor' => $request->floor,
            'apartment' => $request->apartment,
            'place_description' => $request->place_description,
            'category_claim_id' => $request->catergory_id,
            'title' => $request->title,
            'text_claim' => $request->text_claim,
            'sender_id' => $request->user_id,
            'device_id' => $request->device_id,
            'browser_hash' => $request->browser_hash,
            'status' => 'Принято в обработку',
        ]);

        if ($request->claim_image) {
            $claim->addMedia($request->claim_image)->usingName(md5_file($request->claim_image->getRealPath()))
                ->usingFileName('original_photo.jpeg')->toMediaCollection('main_photo');
        }

        return response()->json([
            'claim_id' => $claim->id,
        ]);
    }

    public function updateJson(Request $request)
    {
        $claim = Claim::find($request->claim);

        $claim->user_phone = $request->sms;
        $claim->user_email = $request->email;
        $claim->save();

        return response()->json('ok');
    }
}
