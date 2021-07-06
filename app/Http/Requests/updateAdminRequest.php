<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateAdminRequest extends FormRequest
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
            //
             'name' => 'required',
             'nik' => 'required|numeric',
             'position' => 'required',
             'unit' => 'required',
            //  'no_telp' => 'required|numeric',
            //  'address' => 'required',
             'golongan' => 'required',
        ];
    }
}
