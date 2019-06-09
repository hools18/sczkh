<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09.06.2019
 * Time: 12:16
 */

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use App\Models\Area;

class NewsController extends Controller
{
    public function index()
    {
        $data = [
            'areas' => Area::orderBy('name')->where('isActive', true)->get()
        ];
        return view('front.news.index',$data);
    }
    public function show()
    {
        $data = [
            'areas' => Area::orderBy('name')->where('isActive', true)->get()
        ];
        return view('front.news.show',$data);
    }


}