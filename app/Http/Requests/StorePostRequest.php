<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'الاسم'=>'required',
            'الرقم'=>'required|numeric',
            'اوقات الدوام'=>'required|numeric',

            'لونكتيوم'=>'required',
            'لوتيتيود'=>'required',
            'اختصاص'=>'required'
        ];
    }
}
