<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class studentRequest extends FormRequest
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
            'email' => 'required'
            //'description'=> 'required|min:5',
            //'photo' => 'required'
        ];
        
    }

    public function messages()
    {
        return [

            'email.required' => "Name can not be empty..!!"
            //'username.min' => "Username must be greater than 3.."

        ];
    }
}
