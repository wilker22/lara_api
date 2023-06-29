<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function onSelectFour()
    {
        $result = Courses::limit(4)->get();
        return $result;
    }

    public function onSelectAll()
    {
        $result = Courses::all();
        return $result;
    }

    public function onSelectDetails()
    {
        $id = $request->input('id');
        $result = Courses::where
    }
}
