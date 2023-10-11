<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteInfoRequest extends FormRequest {


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
            //'part_number'   => 'required',
            //'serial_number' => 'required',
            'site_id'       => 'required',
            'site_name'     => 'required',
            'site_address'  => 'required',
        ];
    }


    /**
     * @return string[]
     */
    public function messages()
    {
        return [
            //'part_number.required'   => 'PART NUMBER field is required',
            //'serial_number.required' => 'SERIAL NUMBER field is required',
            'site_id.required'       => 'SITE ID field is required',
            'site_name.required'     => 'SITE NAME field is required',
            'site_address.required'  => 'SITE ADDRESS field is required',
        ];
    }
}
