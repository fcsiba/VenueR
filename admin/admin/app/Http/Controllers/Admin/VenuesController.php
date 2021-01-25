<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Venue\BulkDestroyVenue;
use App\Http\Requests\Admin\Venue\DestroyVenue;
use App\Http\Requests\Admin\Venue\IndexVenue;
use App\Http\Requests\Admin\Venue\StoreVenue;
use App\Http\Requests\Admin\Venue\UpdateVenue;
use App\Models\SubType;
use App\Models\Type;
use App\Models\Venue;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class VenuesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexVenue $request
     * @return array|Factory|View
     */
    public function index(IndexVenue $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Venue::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'type', 'sub_type', 'size', 'accomodation', 'price', 'availiblity', 'image', 'admin_id'],

            // set columns to searchIn
            ['id', 'name', 'address', 'availiblity', 'info', 'about', 'image'],
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
        //$data=Venue::where('id',Auth::user()->id)->get();

        return view('admin.venue.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.venue.create');
        $types=Type::all();
        $type = [];
        foreach ($types as $item) {
            $type[$item->id] = $item->name;
        }
        $subtypes=SubType::all();
        $subtype = [];
        foreach ($subtypes as $item) {
            $subtype[$item->id] = $item->name;
        }
        return view('admin.venue.create', [
            'type' => $type, 'subtype' => $subtype
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreVenue $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        // Sanitize input
        //$sanitized = $request->getSanitized();

        $fl_store = "";
        //$general = General::create($sanitized);
        if ($request->hasFile('image')) {
            $nmwithex = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($nmwithex, PATHINFO_FILENAME);
            $ext = $request->file('image')->getClientOriginalExtension();
            $fl_store = $filename . time() . '.' . $ext;
            $path = $request->file('image')->storeAs('public/img', $fl_store);
        }
        // Store the Venue
        //$venue = Venue::create($sanitized);
        $venue=new Venue();
        
        $venue->name=$request->input('name');
        $venue->type=$request->input('type');
        $venue->sub_type=$request->input('sub_type');
        $venue->address=$request->input('address');
        $venue->size=$request->input('size');
        $venue->accomodation=$request->input('accomodation');
        $venue->price=$request->input('price');
        $venue->availiblity=$request->input('availiblity');
        $venue->info=$request->input('info');
        $venue->about=$request->input('about');
        $venue->admin_id=$request->input('admin_id');
        $venue->save();
        DB::table('venues')
        ->where('id', $venue->id)
        ->update([
            'image' => $fl_store
        ]);
        if ($request->ajax()) {
            return ['redirect' => url('admin/venues'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/venues');
    }

    /**
     * Display the specified resource.
     *
     * @param Venue $venue
     * @throws AuthorizationException
     * @return void
     */
    public function show(Venue $venue)
    {
        $this->authorize('admin.venue.show', $venue);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Venue $venue
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Venue $venue)
    {
        $this->authorize('admin.venue.edit', $venue);


        return view('admin.venue.edit', [
            'venue' => $venue,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateVenue $request
     * @param Venue $venue
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateVenue $request, Venue $venue)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Venue
        $venue->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/venues'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/venues');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyVenue $request
     * @param Venue $venue
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyVenue $request, Venue $venue)
    {
        $venue->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyVenue $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyVenue $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Venue::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
