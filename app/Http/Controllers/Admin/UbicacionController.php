<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Ubicacion\BulkDestroyUbicacion;
use App\Http\Requests\Admin\Ubicacion\DestroyUbicacion;
use App\Http\Requests\Admin\Ubicacion\IndexUbicacion;
use App\Http\Requests\Admin\Ubicacion\StoreUbicacion;
use App\Http\Requests\Admin\Ubicacion\UpdateUbicacion;
use App\Models\Ubicacion;
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

class UbicacionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexUbicacion $request
     * @return array|Factory|View
     */
    public function index(IndexUbicacion $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Ubicacion::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['ID_UBICACION', 'DESIGNACION', 'TIPO', 'CAPACIDAD', 'ID_PLANTA'],

            // set columns to searchIn
            ['DESIGNACION', 'TIPO', 'CAPACIDAD', 'ID_PLANTA']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.ubicacion.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.ubicacion.create');

        return view('admin.ubicacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreUbicacion $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreUbicacion $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Ubicacion
        $ubicacion = Ubicacion::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/ubicacions'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/ubicacions');
    }

    /**
     * Display the specified resource.
     *
     * @param Ubicacion $ubicacion
     * @throws AuthorizationException
     * @return void
     */
    public function show(Ubicacion $ubicacion)
    {
        $this->authorize('admin.ubicacion.show', $ubicacion);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Ubicacion $ubicacion
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Ubicacion $ubicacion)
    {
        $this->authorize('admin.ubicacion.edit', $ubicacion);


        return view('admin.ubicacion.edit', [
            'ubicacion' => $ubicacion,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUbicacion $request
     * @param Ubicacion $ubicacion
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateUbicacion $request, Ubicacion $ubicacion)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Ubicacion
        $ubicacion->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/ubicacions'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/ubicacions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyUbicacion $request
     * @param Ubicacion $ubicacion
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyUbicacion $request, Ubicacion $ubicacion)
    {
        $ubicacion->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyUbicacion $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyUbicacion $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Ubicacion::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
