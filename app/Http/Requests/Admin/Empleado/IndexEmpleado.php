<?php

namespace App\Http\Requests\Admin\Empleado;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class IndexEmpleado extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.empleado.index');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'orderBy' => 'in:CI_EMPLEADO,NOMBRE_EMPLEADO,APELLIDO_P,APELLIDO_M,FECHA_NAC,FECHA_INICIO,TELEFONO,DIRECCION,SALARIO,SEXO,ID_PLANTA|nullable',
            'orderDirection' => 'in:asc,desc|nullable',
            'search' => 'string|nullable',
            'page' => 'integer|nullable',
            'per_page' => 'integer|nullable',

        ];
    }
}
