<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SpeakerRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:70',
            'slug' => 'unique:speakers,slug,'.\Request::get('id'),
            'descr' => 'required|min:1|max:60',
            'content' => 'required|min:1|max:500',
            'position' => 'required|min:1|max:100',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Поле Ф. И. О. требуется.',
            'descr.required' => 'Поле краткое описание требуется.',
            'content.required' => 'Поле полное описание требуется.',
            'position.required' => 'Поле должность требуется.',
        ];
    }
}
