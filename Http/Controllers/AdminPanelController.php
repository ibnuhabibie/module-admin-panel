<?php

namespace Modules\AdminPanel\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminPanelController extends Controller
{
    public function dashboard()
    {
        return view('adminpanel::index');
    }

    public function login()
    {
        return view('adminpanel::pages.login');
    }
}
