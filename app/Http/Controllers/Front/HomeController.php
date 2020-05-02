<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Fomvasss\UrlAliases\Models\UrlAlias;
use Fomvasss\Variable\Models\Variable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return view()->first(['fronts.pages.home']);
    }

    public function callCounter()
    {
        $callCounter = Variable::where('key', 'call_counter')->first();
        $callCounter->value++;
        $callCounter->save();
    }
}
