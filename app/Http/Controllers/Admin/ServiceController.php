<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;


class ServiceController extends Controller
{
    public function serviceView()
    {
        $services = Services::latest()->get();
        return $services;
    }
}
