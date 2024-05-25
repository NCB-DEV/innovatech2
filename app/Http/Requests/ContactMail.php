<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactMail extends FormRequest
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
            'nom'=>"required|string|min:3|max:255",
            'postnom'=>"required|string|min:3|max:255",
            'email'=>"required|email|min:4|max:255",
            'phone'=>"required|numeric|min:9|max:13",
            'message'=>"required|string|min:1|max:5000",
        ];
    }
    public function messages(){
           return [
            'nom.required'=>"Le champ nom est obligatoire",
            'nom.string'=>"Le champ nom doit contenir que de caractères",
            'nom.min'=>"Le champ nom doi avoir au minimum 3 caractères",
            'nom.max'=>"Le champ nom doit avoir au maximum 255 caractères",

            'message.required'=>"Le champ message est obligatoire",
            'message.string'=>"Le champ message doit contenir que de caractères",
            'message.min'=>"Le champ message doi avoir au minimum 1 caractère",
            'message.max'=>"Le champmessagem doit avoir au maximum 5000 caractères",

            'postnom.required'=>"Le champ postnom est obligatoire",
            'postnom.string'=>"Le champ postnom doit contenir que de caractères",
            'postnom.min'=>"Le champ postnom doi avoir au minimum 3 caractères",
            'postnom.max'=>"Le champ postnom doit avoir au maximum 255 caractères",

            'email.required'=>"Le champ email est obligatoire",
            'email.email'=>"veillez entrer un email valide",
            'email.min'=>"Le champ email doi avoir au minimum 4 caractères",
            'email.max'=>"Le champ email doit avoir au maximum 255 caractères",

            'phone.required'=>"Le champ phone est obligatoire",
            'phone.string'=>"Le champ phone doit contenir que des chiffres",
            'phone.min'=>"Le champ phone doi avoir au minimum 9 chiffres",
            'phone.max'=>"Le champ phone doit avoir au maximum 13 caractères",
           ];
    }
}
