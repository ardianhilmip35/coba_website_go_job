<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'nama_admin' => ['required', 'string', 'max:50'],
            'nama_perusahaan' => ['required', 'string', 'max:50'],
            'telp_perusahaan' => ['required', 'string', 'max:15'],
            'alamat_perusahaan' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'nama_admin' => $input['nama_admin'],
            'nama_perusahaan' => $input['nama_perusahaan'],
            'telp_perusahaan' => $input['telp_perusahaan'],
            'alamat_perusahaan' => $input['alamat_perusahaan'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
