<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09.06.2019
 * Time: 12:24
 */

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use App\Models\Area;

class FeedbackController extends Controller
{

    public function index()
    {
        $data = [
            'areas' => Area::orderBy('name')->where('isActive', true)->get()
        ];
        return view('front.feedback.index', $data);
    }
}