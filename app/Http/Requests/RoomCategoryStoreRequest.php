<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomCategoryStoreRequest extends FormRequest
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
            'name' => 'required|unique:room_categories|max:30',
            'description' => 'required|max:200',
            'amount_of_persons' => 'required|integer',
            'price' => 'required|integer',
            'cover_image' => 'required',
        ];
    }
}
