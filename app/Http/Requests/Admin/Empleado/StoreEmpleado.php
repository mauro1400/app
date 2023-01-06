<?php

namespace App\Http\Requests\Admin\Empleado;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreEmpleado extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.empleado.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'CI_EMPLEADO' => ['required', 'integer'],
            'NOMBRE_EMPLEADO' => ['nullable', 'string'],
            'APELLIDO_P' => ['nullable', 'string'],
            'APELLIDO_M' => ['nullable', 'string'],
            'FECHA_NAC' => ['nullable', 'date'],
            'FECHA_INICIO' => ['nullable', 'date'],
            'TELEFONO' => ['nullable', 'integer'],
            'DIRECCION' => ['nullable', 'string'],
            'SALARIO' => ['nullable', 'numeric'],
            'SEXO' => ['nullable', 'boolean'],
            'ID_PLANTA' => ['required', 'string'],
            
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
