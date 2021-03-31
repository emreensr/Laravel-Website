<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetNeedRequest extends FormRequest
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
            'product' => 'required',
            'contact' => 'required',
            'message' => 'required',
            'howcontact' => 'required',
        ];
    }
        public function attributes()
        {
            return [
                'name' => 'Adınız',
                'product' => 'Ürün',
                'contact' => 'İletişim',
                'message' => 'Mesaj',
                'howcontact' => 'Nasıl ulaştığınız',
            ];

    }
}
