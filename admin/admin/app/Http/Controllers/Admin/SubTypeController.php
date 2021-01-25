<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubType\BulkDestroySubType;
use App\Http\Requests\Admin\SubType\DestroySubType;
use App\Http\Requests\Admin\SubType\IndexSubType;
use App\Http\Requests\Admin\SubType\StoreSubType;
use App\Http\Requests\Admin\SubType\UpdateSubType;
use App\Models\SubType;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SubTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexSubType $request
     * @return array|Factory|View
     */
    public function index(IndexSubType $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(SubType::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'type_id', 'name'],

            // set columns to searchIn
            ['id', 'name']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.sub-type.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.sub-type.create');

        return view('admin.sub-type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSubType $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreSubType $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the SubType
        $subType = SubType::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/sub-types'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/sub-types');
    }

    /**
     * Display the specified resource.
     *
     * @param SubType $subType
     * @throws AuthorizationException
     * @return void
     */
    public function show(SubType $subType)
    {
        $this->authorize('admin.sub-type.show', $subType);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param SubType $subType
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(SubType $subType)
    {
        $this->authorize('admin.sub-type.edit', $subType);


        return view('admin.sub-type.edit', [
            'subType' => $subType,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSubType $request
     * @param SubType $subType
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateSubType $request, SubType $subType)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values SubType
        $subType->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/sub-types'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/sub-types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroySubType $request
     * @param SubType $subType
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroySubType $request, SubType $subType)
    {
        $subType->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroySubType $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroySubType $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    SubType::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
