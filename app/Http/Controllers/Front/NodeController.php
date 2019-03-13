<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Node;
use Illuminate\Http\Request;

class NodeController extends Controller
{
    /**
     * @return mixed
     */
    public function show($id)
    {
        $node = Node::findOrFail($id);

        return view()->first([$node->blade, 'front.pages.default'], compact('node'));
    }
}
