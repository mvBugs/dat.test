<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * @return mixed
     */
    public function show($id)
    {
        $locale = \UrlAliasLocalization::getCurrentLocale();

        return view('front.pages.'.$id);
    }
}
