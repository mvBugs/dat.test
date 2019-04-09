<?php

namespace App\Http\Controllers\Front;

use App\Events\SendEmail;
use App\Http\Requests\Front\FormsRequest;
use App\Http\Traits\MediaLibraryManageTrait;
use App\Models\Form;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
            'locale' => $request->get('locale') ?? 'en', // TODO,
            'data' => $request->validated(),
        ]);

        event(new SendEmail($request->validated()));

        /*if ($request->has('terms')) {
            $form->terms()->sync(array_values_recursive($request->terms));
        }

        $this->manageMedia($form, $request);

        $destination = $request->session()->pull('destination', \URL::previous());
        if ($request->ajax()) {
            return response()->json([
                'message' => 'Ваша заявка успешно принята и будет обработана!',
                'action' => 'reset',
                'status' => 'success', //warning
                //'action' => 'redirect', //reset
                //'destination' => $destination,
                //'message' => trans('notifications.store.success'),
                //'html' => '<p>example</p>',
            ]);
        }*/

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
