<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Repostreq extends FormRequest
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
            'user_id'=>'required|regex:/^[0-9  ]*$/',
            'message'=>'required|regex:/^[a-zA-Z0-9,.%  ]*$/',
            'comment_id'=>'required|regex:/^[0-9  ]*$/',
        ];
    }
}
