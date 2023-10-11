<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NetworkRequest extends FormRequest
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
            'ipaddress'   => 'required|ip',
            'netmask'     => 'required|ip',
            'gateway'     => 'required|ip',
            //'repeat_time' => 'required',
            //'snmp_trap1'  => 'required|ip',
            //'snmp_trap2'  => 'required|ip',
        ];
    }
}
