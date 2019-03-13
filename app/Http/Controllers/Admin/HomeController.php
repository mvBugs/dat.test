<?php

namespace App\Http\Controllers\Admin;

use App\Models\Form;
use App\Models\Shop\Order;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        //$this->authorize("dashboard.home.read");

        return view('admin.home');
    }
}
