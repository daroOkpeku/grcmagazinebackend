<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class commentlist extends FormRequest
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
            'name'=> 'regex:/^[a-zA-Z  ]*$/',
            'email'=>'email',
            'message'=>'required|regex:/^[a-zA-Z0-9  ]*$/',
            'articles_id'=>'required|regex:/^[0-9 ]*$/'
        ];
    }



}
