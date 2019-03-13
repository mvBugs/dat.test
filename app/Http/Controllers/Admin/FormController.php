<?php

namespace App\Http\Controllers\Admin;

use App\Managers\DataEditableManager;
use App\Models\Form;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize("form.read");

        $forms = Form::byType($request->type)->orderBy('created_at', 'desc')->paginate();

        return view()->first(['admin.forms.'.$request->type, 'admin.forms.index'], compact('forms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function edit($id)
    //{
    //    $this->authorize("form.update");
    //
    //    $form = Form::findOrFail($id);
    //
    //    return view('admin.forms.edit', compact('form'));
    //}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
    //{
    //    $this->authorize("form.update");
    //
    //    $form = Form::findOrFail($id);
    //
    //    $destination = $request->get('destination', route('admin.pages.edit', $form));
    //    return redirect()->to($destination)
    //        ->with('success', trans('notifications.update.success'));
    //}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $this->authorize("form.delete");

        $form = Form::findOrFail($id);
        $form->delete();

        $form->terms()->attach();
        $form->media()->each(function ($m) {
            $m->delete();
        });

        $destination = $request->session()->pull('destination', route('admin.forms.index'));
        return redirect()->route($destination)
            ->with('success', trans('notifications.destroy.success'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function status(Request $request, $id)
    {
        $this->authorize("form.update");

        $form = Form::findOrFail($id);
        $form->setAttribute('status', $request->value);
        $form->save();

        return response()->json(['message' => trans('notifications.update.success')]);
    }

    /**
     * @param \App\Managers\DataEditableManager $dataEditableMng
     * @param \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function editable(DataEditableManager $dataEditableMng, Request $request, $id)
    {
        $this->authorize("form.update");

        $form = Form::findOrFail($id);

        $request->validate([
            'name' => 'required|string',    // field name: email, data[answer],...
            'value' => 'nullable|string',   // field value: Hello world!!!
        ]);

        $dataEditableMng->save($form, $request->name, $request->value);

        return response()->json(['message' => trans('notifications.update.success')]);
    }
}
