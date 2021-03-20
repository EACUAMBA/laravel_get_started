<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
            'name' => 'required',
            'bi'=>'size:13',
            'salary'=> 'numeric',
            'born_date' =>'date',
            'email'=> 'required|email',
            'password'=>'required|same:password_confirm|min:8',
            'password_confirm'=>'required|same:password'
        ];
    }
}
