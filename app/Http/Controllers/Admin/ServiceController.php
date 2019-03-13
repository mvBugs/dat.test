<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function cache()
    {
        \Artisan::call('cache:clear');

        return redirect()->back()
            ->with('success', trans('notifications.operation.success'));
    }
}
