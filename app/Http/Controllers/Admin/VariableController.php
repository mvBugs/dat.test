<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Fomvasss\Variable\Models\Variable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class VariableController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function forms()
    {
        $this->authorize("variable.read");

        return view('admin.variables.forms');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function save(Request $request)
    {
        $this->authorize("variable.update");

        $this->validate($request, [
            'vars' => 'array',
            'vars.*' => 'string',
            'vars_json' => 'array',
        ]);

        foreach ($request->get('vars', []) as $key => $value) {
            if ($request->group == 'prices') {
                $this->updateOrCreate($key, $value * 100);
            } else {
                $this->updateOrCreate($key, $value);
            }
        }

        foreach ($request->get('vars_json', []) as $key => $value) {
            $this->updateOrCreate($key, json_encode($value));
        }

        Cache::forget('laravel.variables.cache');

        $destination = $request->session()->pull('destination', route('admin.variable.forms'));
        return redirect()->to($destination)
            ->with('success', trans('notifications.update.success'));
    }

    protected function updateOrCreate($key, $value)
    {
        Variable::updateOrCreate(['key' => $key], ['value' => $value]);
    }
}
