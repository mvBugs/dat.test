<?php

namespace App\Http\Controllers\Front;

use App\Events\SendEmail;
use App\Http\Requests\Front\FormsRequest;
use App\Http\Traits\MediaLibraryManageTrait;
use App\Models\Form;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class FormController extends Controller
{
    use MediaLibraryManageTrait;

    /**
     * @param \App\Http\Requests\Front\FormsRequest $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function store(FormsRequest $request)
    {
        $form = Form::create([
            'type' => 'write',
            'locale' => $request->get('locale') ?? 'uk', // TODO,
            'data' => $request->validated(),
        ]);

        return redirect()->route('write.end');
    }

    /**
     * @param $request
     * @return array
     */
    protected function getVisitorInfo($request)
    {
        return [
            'user_id' => optional($request->user())->id,
            'ip' => $request->ip(),
            'referer' => trim($request->headers->get('referer'), '/'),
            'url' => trim($request->fullUrl(), '/'),
        ];
    }
}
