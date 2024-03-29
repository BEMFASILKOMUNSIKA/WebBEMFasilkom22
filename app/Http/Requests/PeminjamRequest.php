<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Actions\Fortify\PasswordValidationRules;

use App\Models\Peminjam;

class PeminjamRequest extends FormRequest
{
    use PasswordValidationRules;
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
            'nama' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:50',
                'min:2',
                Rule::unique(Peminjam::class)->ignore($this->id),
            ],
            'prodi' => ['required', 'string', 'max:255'],
            'password' => ($this->password) ? $this->passwordRules() : [],
            'permissions' => [
                'array',
            ],
            'permissions.*' => [
                'string'
            ],
            'role_id' => ['string'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.unique' => 'Email telah digunakan.',
            'password.confirmed' => 'Konfirmasi password tidak sesuai.'
        ];
    }
}
