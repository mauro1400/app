<?php

namespace App\Http\Requests\Admin\Detalle;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreDetalle extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.detalle.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'ID_DETALLE' => ['required', 'integer'],
            'PRECIO_ALMACEN' => ['nullable', 'numeric'],
            'PRECIO_VENTA' => ['nullable', 'numeric'],
            'COD_P' => ['required', 'integer'],
            'ID_PLANTA' => ['required', 'string'],
            'CI_EMPLEADO' => ['required', 'integer'],
            
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
