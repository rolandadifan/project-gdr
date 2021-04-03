<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminReqeust extends FormRequest
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
        'name' => [ 'min:3', 'max:255'],
        'email' => [ 'string', 'email', 'max:255', 'unique:users'],
        'password' => [ 'string', 'min:8'],
        'address' => ['string', 'min:3', 'max:255'],
        'telephone' => ['integer'],
        ];
    }
}
