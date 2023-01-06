<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Plantum\BulkDestroyPlantum;
use App\Http\Requests\Admin\Plantum\DestroyPlantum;
use App\Http\Requests\Admin\Plantum\IndexPlantum;
use App\Http\Requests\Admin\Plantum\StorePlantum;
use App\Http\Requests\Admin\Plantum\UpdatePlantum;
use App\Models\Plantum;
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

class PlantaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPlantum $request
     * @return array|Factory|View
     */
    public function index(IndexPlantum $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Plantum::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['ID_PLANTA', 'NOMBRE_PL', 'DESCIPCION', 'ENCARGADO', 'APELLIDO_ENC'],

            // set columns to searchIn
            ['ID_PLANTA', 'NOMBRE_PL', 'DESCIPCION', 'ENCARGADO', 'APELLIDO_ENC']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.plantum.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.plantum.create');

        return view('admin.plantum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePlantum $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StorePlantum $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Plantum
        $plantum = Plantum::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/planta'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/planta');
    }

    /**
     * Display the specified resource.
     *
     * @param Plantum $plantum
     * @throws AuthorizationException
     * @return void
     */
    public function show(Plantum $plantum)
    {
        $this->authorize('admin.plantum.show', $plantum);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Plantum $plantum
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Plantum $plantum)
    {
        $this->authorize('admin.plantum.edit', $plantum);


        return view('admin.plantum.edit', [
            'plantum' => $plantum,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePlantum $request
     * @param Plantum $plantum
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdatePlantum $request, Plantum $plantum)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Plantum
        $plantum->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/planta'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/planta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPlantum $request
     * @param Plantum $plantum
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyPlantum $request, Plantum $plantum)
    {
        $plantum->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyPlantum $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyPlantum $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Plantum::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
