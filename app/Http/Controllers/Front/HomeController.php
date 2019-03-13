<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        $locale = \UrlAliasLocalization::getCurrentLocale();

        return view()->first(['front.pages.home-'.$locale, 'front.pages.home']);
    }
}
