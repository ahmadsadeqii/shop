<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewCategoryRequest extends FormRequest
{


    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [


                'title' => ['required', 'unique:categories,title'],
                'category_id' => ['nullable', 'exists:categories,id']
         
        ];
    }


}
