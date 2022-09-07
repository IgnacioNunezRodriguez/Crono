<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
/*
https://laravel.com/docs/9.x/validation#rule-date-format
*/
class StoreCronoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name"=>"required",
            "date"=>"date|date_format:H:i:s:v",
            "FK_user_id"=>"required|exists:users,id"
        ];

    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            "name.required"=>"is required",
            "date.time_format"=>"invalid format",
            "FK_user_id.required"=>"User is required",
            "FK_user_id.exists"=>"User must exists"
        ];

    }
}
