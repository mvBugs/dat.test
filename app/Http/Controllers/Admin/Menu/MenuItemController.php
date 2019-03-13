<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Requests\Admin\MenuItemRequest;
use App\Http\Traits\MediaLibraryManageTrait;
use App\Models\Menu\Menu;
use App\Models\Menu\MenuItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuItemController extends Controller
{
    use MediaLibraryManageTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize("menu-item.index");

        $menu = Menu::findOrFail($request->menu_id);
        $menuItems = MenuItem::where('menu_id', $request->menu_id)->get();

        return view('admin.menu.menu-items', [
            'menu' => $menu,
            'menuLinks' => $menuItems,
            'tree' => $menuItems->toTree(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $menu = Menu::findOrFail($request->menu_id);

        $menuItems = MenuItem::all();

        return view('admin.menu.create', compact('menu', 'menuItems'));
    }

    /**
     * @param \App\Http\Requests\Admin\MenuItemRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(MenuItemRequest $request)
    {
        $this->authorize("menu-item.create");

        $menuItem = MenuItem::create($request->only('name', 'path', 'url_alias_id', 'target', 'publish', 'weight', 'data', 'parent_id', 'menu_id', 'path_type'));

        $this->manageMedia($menuItem, $request);

        $destination = $request->session()->pull('destination', route('admin.menu-items.edit', $menuItem));
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
        $menuItem = MenuItem::findOrFail($id);
        $menu = $menuItem->menu;

        return view('admin.menu.edit', compact('menuItem', 'menu'));

    }

    /**
     * @param \App\Http\Requests\Admin\MenuItemRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(MenuItemRequest $request, $id)
    {
        $this->authorize("menu-item.update");

        /** @var  MenuItem $menuItem */
        $menuItem = MenuItem::findOrFail($id);

        $menuItem->update($request->only('name', 'path', 'url_alias_id', 'target', 'publish', 'weight', 'data', 'parent_id', 'path_type'));

        $this->manageMedia($menuItem, $request);

        $destination = $request->session()->pull('destination', route('admin.menu-items.edit', $menuItem));
        return redirect()->to($destination)
            ->with('success', trans('notifications.update.success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $this->authorize("menu-item.delete");

        $menuItem = MenuItem::findOrFail($id);

        $destination = $request->session()->pull('destination', route('admin.menu-items.index', ['menu_id' => $menuItem->menu_id]));
        if ($menuItem->children->count()) {
            return redirect()->to($destination)
                ->with('error', trans('notifications.destroy.error_children'));
        }

        $menuItem->delete();

        $destination = $request->session()->pull('destination', route('admin.menu-items.index', ['menu_id' => $menuItem->menu_id]));
        return redirect()->to($destination)
            ->with('success', trans('notifications.destroy.success'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function order(Request $request)
    {
        $this->validate($request, ['data' => 'required|array']);

        $entities = build_linear_array_sort($request->data);

        foreach ($entities as $entity) {
            optional(MenuItem::find($entity['id']))->update($entity);
        }

        return response()->json(['message' => trans('notifications.store.success1')])
            ->setStatusCode(\Illuminate\Http\Response::HTTP_OK);
    }
}
