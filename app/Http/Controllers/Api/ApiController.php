<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CategoryClaim;
use App\Models\City;
use App\Models\Country;
use App\Models\Region;

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

    public function test()
    {
//        $counry = Country::create([
//            'name' => 'Россия'
//        ]);
//        $region = Region::create([
//           'name' => 'Воронежская область',
//           'country_id' =>  $counry->id,
//        ]);
//        $city = City::create([
//            'name' => 'Бобров',
//            'region_id' => 1,
//            'country_id' => 1,
//        ]);
//        $city2 = City::create([
//            'name' => 'Павловск',
//            'region_id' => 1,
//            'country_id' => 1,
//        ]);
//        $city3 = City::create([
//            'name' => 'Богучар',
//            'region_id' => 1,
//            'country_id' => 1,
//        ]);
//        $city4 = City::create([
//            'name' => 'Борисоглебск',
//            'region_id' => 1,
//            'country_id' => 1,
//        ]);
        return 'Все ок';
    }
}
