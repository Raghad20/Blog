<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Service;

class UserServiceController extends Controller
{

    public function index()
    {
        $services = Service::all();
        return view('pages.user.service.index', compact('services'));
    }
}
