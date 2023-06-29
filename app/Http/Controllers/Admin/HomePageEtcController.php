<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePageEtc;
use Illuminate\Http\Request;

class HomePageEtcController extends Controller
{
    public function selectVideo()
    {
        $result = HomePageEtc::select('video_description', 'video_url')->get();
        return $result;
    }

    public function selectTotalHome()
    {
        $result = HomePageEtc::select('total_student', 'total_course', 'total_review')->get();
        return $result;
    }

    public function selectTechHome()
    {
        $result = HomePageEtc::select('tech_description')->get();
        return $result;
    }

    public function selectHomeTitle()
    {
        $result = HomePageEtc::select('home_title', 'home_subtitle')->get();
        return $result;
    }
}
