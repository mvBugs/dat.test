<?php

namespace App\Http\Controllers\Admin;

use App\Models\EntityType;
use App\Models\Node;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $eType = EntityType::where('system_name', $request->type)->firstOrFail();
        $nodes = Node::whereType($request->type)->paginate();


        return view('admin.nodes.index', compact('nodes', 'eType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $eType = EntityType::where('system_name', $request->type)->firstOrFail();

        return view('admin.nodes.create', compact('eType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $node = Node::create($request->only('name', 'publish'));
        $node->setAttribute('data', $request->get('data', []));

        $destination = $request->session()->pull('destination', route('admin.nodes.edit', $node));
        return redirect()->to($destination)
            ->with('success', trans('notifications.store.success'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $node = Node::findOrFail($id);
        $eType = $node->eType;

        return view('admin.nodes.edit', compact('node', 'eType'));
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
        $node = Node::findOrFail($id);
        $node->update($request->only('name', 'publish'));
        $node->setAttribute('data', $request->get('data', []));
        $node->save();

        $destination = $request->session()->pull('destination', route('admin.nodes.edit', $node));
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
        //
    }
}
