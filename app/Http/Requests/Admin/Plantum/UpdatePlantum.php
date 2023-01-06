<?php

namespace App\Http\Requests\Admin\Plantum;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdatePlantum extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.plantum.edit', $this->plantum);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'ID_PLANTA' => ['sometimes', 'string'],
            'NOMBRE_PL' => ['nullable', 'string'],
            'DESCIPCION' => ['nullable', 'string'],
            'ENCARGADO' => ['nullable', 'string'],
            'APELLIDO_ENC' => ['nullable', 'string'],
            
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
