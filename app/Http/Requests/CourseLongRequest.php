<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseLongRequest extends FormRequest
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
            'courseName' => 'required|string',
            'typeCourse' => 'required|string',
            'information' => 'required|string',
            'duration' => 'required|string',
            'campuses' => 'required|string',
            'keyDate' => 'required|string',
            'deakinStudent' => 'required|string',
            'gradeAA' => 'required|integer',
            'sksAA' => 'required|integer',
            'bppAA' => 'required|integer',
            'gradA' => 'required|integer',
            'sksA' => 'required|integer',
            'bppA' => 'required|integer',
            'gradB' => 'required|integer',
            'sksB' => 'required|integer',
            'bppB' => 'required|integer',
        ];
    }
}
