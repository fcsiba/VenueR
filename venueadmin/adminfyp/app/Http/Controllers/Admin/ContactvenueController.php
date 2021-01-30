<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Contactvenue\BulkDestroyContactvenue;
use App\Http\Requests\Admin\Contactvenue\DestroyContactvenue;
use App\Http\Requests\Admin\Contactvenue\IndexContactvenue;
use App\Http\Requests\Admin\Contactvenue\StoreContactvenue;
use App\Http\Requests\Admin\Contactvenue\UpdateContactvenue;
use App\Models\Contactvenue;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ContactvenueController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexContactvenue $request
     * @return array|Factory|View
     */
    public function index(IndexContactvenue $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Contactvenue::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'category', 'venue_name', 'name', 'email', 'phone', 'admin_id'],

            // set columns to searchIn
            ['id', 'category', 'venue_name', 'name', 'email', 'phone'],
            function ($query) use ($request) {
                $query->where('admin_id', Auth::user()->id);
            }
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.contactvenue.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.contactvenue.create');

        return view('admin.contactvenue.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreContactvenue $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreContactvenue $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Contactvenue
        $contactvenue = Contactvenue::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/contactvenues'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/contactvenues');
    }

    /**
     * Display the specified resource.
     *
     * @param Contactvenue $contactvenue
     * @throws AuthorizationException
     * @return void
     */
    public function show(Contactvenue $contactvenue)
    {
        $this->authorize('admin.contactvenue.show', $contactvenue);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Contactvenue $contactvenue
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Contactvenue $contactvenue)
    {
        $this->authorize('admin.contactvenue.edit', $contactvenue);


        return view('admin.contactvenue.edit', [
            'contactvenue' => $contactvenue,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateContactvenue $request
     * @param Contactvenue $contactvenue
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateContactvenue $request, Contactvenue $contactvenue)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Contactvenue
        $contactvenue->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/contactvenues'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/contactvenues');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyContactvenue $request
     * @param Contactvenue $contactvenue
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyContactvenue $request, Contactvenue $contactvenue)
    {
        $contactvenue->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyContactvenue $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyContactvenue $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Contactvenue::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
