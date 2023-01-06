<?php

namespace App\Http\Requests\Admin\Ubicacion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateUbicacion extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.ubicacion.edit', $this->ubicacion);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'ID_UBICACION' => ['sometimes', 'integer'],
            'DESIGNACION' => ['nullable', 'string'],
            'TIPO' => ['nullable', 'string'],
            'CAPACIDAD' => ['nullable', 'string'],
            'ID_PLANTA' => ['sometimes', 'string'],
            
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
