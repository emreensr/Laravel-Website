<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetLessonRequest extends FormRequest
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
            'lesson' => 'required',
            'time' => 'required',
            'contact' => 'required',
            'message' => 'required',
            'howcontact' => 'required',
        ];
    }
        public function attributes()
        {
            return [
                'name' => 'Adınız',
                'lesson' => 'Ders',
                'time' => 'Müsaitlik Durumu',
                'contact' => 'İletişim',
                'message' => 'Mesaj',
                'howcontact' => 'Nasıl ulaştığınız',
            ];

    }
}
