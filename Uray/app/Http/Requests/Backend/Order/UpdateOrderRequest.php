<?php

namespace App\Http\Requests\Backend\Order;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
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
            'user_id' => 'min:1|max:200',
            'user_name' => 'min:1|max:1000',
            'address' => 'min:2|max:1000',
            'phone' => 'min:2|max:1000',
            'totalMoney' => 'min:2|max:1000',
            'Date' => 'min:2|max:1000',
            'status' => 'min:2|max:1000'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên',
            'name.max' => 'Tên chỉ tối đa 200 kí tự',
            'name.min' => 'Tên tối thiểu 5 kí tự',
            'name.unique' => 'Tên đã tồn tại',
            'description.required' => 'Không được để trống',
            'description.min' => 'Tối thiểu 5 kí tự',
            'description.max' => 'Tối đa 1000 kí tự',
            'keywords.required' => 'Không được để trống',
            'keywords.min' => 'Tối thiểu 2 kí tự',
            'keywords.max' => 'Tối đa chỉ 10 kí tự'
        ];
    }
}
