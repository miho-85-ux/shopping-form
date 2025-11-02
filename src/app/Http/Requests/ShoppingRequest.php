<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShoppingRequest extends FormRequest
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
            'content' => ['required','string','max:30'],
            'quantity' => ['required'],
            'price' => ['integer','min:0','nullable']
        ];
    }

    public function messages()
    {
        return[

            'content.required'=>'買うものを入力してください',
            'content.string'=>'買うものを文字列で入力してください',
            'content.max'=>'買うものを30文字以内で入力してください',
            'quantity.required'=>'個数を入力してください',
            'price.integer'=>'数字で入力してください',
            'price.min'=>'0以上の数値を入力してください',
        ];
        
    }
}
