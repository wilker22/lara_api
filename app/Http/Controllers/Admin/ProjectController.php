<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectController extends Controller
{
    public function onSelectThree()
    {
        $result = Projects::limit(3)->get();
        return $result;
    }

    public function onSelectAll ()
    {
        $result = Projects::all();
        return $result;
    }
}
