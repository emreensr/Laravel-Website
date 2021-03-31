<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NeedShareRequest extends FormRequest
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
            'donate' => 'required',
            'contact' => 'required',
            'model' => 'required',
            'image' => 'required',
            'message' => 'required',
            'howcontact' => 'required',
        ];
    }
        public function attributes()
        {
            return [
                'name' => 'Adınız',
                'donate' => 'Bağışınız',
                'contact' => 'İletişim',
                'model' => 'Ürün Modeli',
                'image' => 'Ürün Görseli',
                'message' => 'Mesaj',
                'howcontact' => 'Nasıl ulaştığınız',
            ];

    }
}
