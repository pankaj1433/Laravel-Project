<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorksiteRequest extends FormRequest
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
            'worksite_name' => 'required',
            'address_line_1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'supervisory_district'=> 'required',
            'contact_person'=> 'required',
            'phone'=> 'required',
            'email'=> 'required',
            'worksite_sector'=> 'required',
            'industry'=> 'required',
            'ada_complied'=> 'required',
        ];
    }
}
