<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'email' => "required|email",
            'message' => "required|min:15"
        ];
    }

    protected function getValidatorInstance()
    {
        $data = $this->all();
        $this->getInputSource()->replace($data);
        return parent::getValidatorInstance();
    }

    public function all()
    {
        $data = parent::all();
        return $data;
    }
    public function messages()
    {
        return [
            'email.required' => 'Email адрес не указан!',
            'email.email' => 'Указан неправильный email!',
            'message.required' => 'Текстовое поле не заполнено!',
            'message.min' => 'Минимальное количество символов в текстовом поле 15!',
        ];
    }
}
