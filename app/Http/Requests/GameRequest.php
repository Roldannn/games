<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'url_image' => 'required|max:255',
            'description' => 'max:255',
            'url' => 'required|max:255',
            'status' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre',
            'url_image' => 'url de imagen',
            'description' => 'descripción',
            'url' => 'url del juego',
            'status' => 'estado',
        ];
    }
}
