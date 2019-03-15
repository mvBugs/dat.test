<?php

namespace App\Http\Controllers\Admin;

use App\Models\Block;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class BlockController extends Controller
{
    /**
     * BlockController constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blocks = Block::paginate();

        return view('admin.blocks.index', compact('blocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blocks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $block = Block::create($request->only('name', 'body', 'blade', 'locale', 'system_name', 'alias'));

        $destination = $request->get('destination', route('admin.blocks.edit', $block));
        return redirect()->to($destination)
            ->with('success', trans('notifications.update.success'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $block = Block::findOrFail($id);

        return view('admin.blocks.edit', compact('block'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $block = Block::findOrFail($id);
        $block->update($request->only('name', 'body', 'blade'));

        $destination = $request->get('destination', route('admin.blocks.edit', $block));
        return redirect()->to($destination)
            ->with('success', trans('notifications.update.success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //...
        Block::findOrFail($id)->delete();
        return redirect()->route('admin.blocks.index');
    }

    public function visualSave(Request $request)
    {
        $locale = $request->get('locale', \UrlAliasLocalization::getCurrentLocale());

        foreach ($request->get('blocks', []) as $alias => $body) {

            $block = Block::updateOrCreate([
                'alias' => $alias,
                'locale' => $locale,
            ], [
                'system_name' => $alias.'_'.$locale,
                'name' => Str::studly($alias),
                'body' => $body,
            ]);
            if (! $block->localable) {
                if ($relationLocaleBlock = Block::where('alias', $alias)->where('locale', '<>', $locale)->whereHas('localable')->first()) {
                    $relationLocaleBlock->localable()->update([$locale => $block->id]);
                } else {
                    $block->localable()->create([]);
                }
            }
            Cache::forget("get-model-block-$alias-$locale");
        }

        return response()->json(['status' => 'success']);
    }
}
