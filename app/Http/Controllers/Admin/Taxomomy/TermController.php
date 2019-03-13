<?php

namespace App\Http\Controllers\Admin\Taxonomy;

use App\Http\Requests\Admin\TermRequest;
use App\Http\Traits\MediaLibraryManageTrait;
use App\Models\Shop\Attribute;
use App\Models\Taxonomy\Term;
use App\Models\Taxonomy\Vocabulary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TermController extends Controller
{
    use MediaLibraryManageTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize("term.read");

        $vocabulary = Vocabulary::where('system_name', $request->vocabulary)->firstOrFail();
        $terms = Term::byVocabulary($request->vocabulary)->get();

        return view('admin.taxonomy.terms.index', [
            'vocabulary' => $vocabulary,
            'terms' => $terms,
            'tree' => $terms->toTree(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize("term.create");

        $vocabulary = Vocabulary::where('system_name', $request->vocabulary)->firstOrFail();

        $attributes = Attribute::all();

        return view('admin.taxonomy.terms.create', compact('vocabulary', 'attributes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TermRequest $request)
    {
        $this->authorize("term.create");

        // Do'nt forget, it use Observers/TermObserver.php!!!
        $term = Term::create($request->only('name', 'description', 'vocabulary', 'publish', 'options'));

        if ($request->has('attributes')) {
            $term->attrs()->attach($request->get('attributes'));
        }

        $this->manageMedia($term, $request);

        $destination = $request->session()->pull('destination', route('admin.terms.edit', $term));
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
        $this->authorize("term.update");

        $term = Term::findOrFail($id);
        $vocabulary = $term->txVocabulary;

        $attributes = Attribute::all();

        return view('admin.taxonomy.terms.edit', compact('term', 'vocabulary', 'attributes'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TermRequest $request, $id)
    {
        $this->authorize("term.update");

        /** @var Term $term */
        $term = Term::findOrFail($id);

        $term->update($request->only('name', 'description', 'vocabulary', 'publish', 'options'));

        if ($request->has('attributes')) {
            $term->attrs()->sync($request->get('attributes'));
        }

        $this->manageMedia($term, $request);

        $destination = $request->session()->pull('destination', route('admin.terms.edit', $term));
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
        $this->authorize("term.delete");

        $term = Term::findOrFail($id);

        if ($term->children->count()) {
            return redirect()->route('admin.terms.index', ['vocabulary' => $term->vocabulary])
                ->with('error', trans('notifications.destroy.error_children'));
        }

        $term->delete();

        $destination = $request->session()->pull('destination', route('admin.terms.index', ['vocabulary' => $term->vocabulary]));
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
        $this->authorize("term.update");

        $this->validate($request, ['data' => 'required|array']);

        $entities = build_linear_array_sort($request->data);

        foreach ($entities as $entity) {
            optional(Term::find($entity['id']))->update($entity);
        }

        return response()->json(['message' => trans('notifications.store.success')])
            ->setStatusCode(\Illuminate\Http\Response::HTTP_OK);
    }

    /**
     * Data search for select autocomplete.
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function autocomplete(Request $request)
    {
        if ($request->has('q') && strlen($request->get('q'))) {
            $terms = Term::byVocabulary($request->vocabulary)
                ->select('name', 'id')->where('name', 'LIKE', "%$request->q%")->get();

            $result = $terms->map(function ($item) {
                return [
                    'text' => $item->name,  // 'label' => $item->name,
                    'id' => $item->id,      // 'value' => $item->id,
                ];
            })->toArray();

            return ['results' => $result];
        }

        return ['results' => []];
    }

    /**
     * Получить иерархическое дерево для select2.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function treeselect(Request $request)
    {
        $treeTerms = Term::byVocabulary($request->vocabulary)->get()->toTree();

        $selected = is_array($request->selected) ? $request->selected : [$request->selected];
        $old = is_array($request->old) ? $request->old : [$request->old];

        return [
            'data' => $treeTerms,
            'default' => array_merge($old, $selected),
        ];
    }

    /**
     * Получить иерархическое дерево для treeview с checkbox-амы.
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function treeview(Request $request)
    {
        $treeTerms = Term::byVocabulary($request->vocabulary)->get()->toTree();

        $selected = is_array($request->selected) ? $request->selected : [$request->selected];
        $old = is_array($request->old) ? $request->old : [$request->old];

        return treeview($treeTerms->toArray(), array_merge($selected, $old));
    }
}
