<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newslter extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "mail"=>"required|min:3|email"
        ];
    }
    public function messages(){
        return [
            "mail.required"=>"Veillez entrer votre adresse mail",
            "mail.min"=>"veillez indiquer une adresse ayant au minimum 3 cacatères",
            "mail.email"=>"veillez indiquer une adresse mail valide"
        ];
    }
}
