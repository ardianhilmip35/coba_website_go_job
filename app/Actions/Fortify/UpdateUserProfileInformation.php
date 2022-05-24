<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'nama_admin' => ['required', 'string', 'max:50'],
            'nama_perusahaan' => ['required', 'string', 'max:50'],
            'telp_perusahaan' => ['required', 'string', 'max:15'],
            'alamat_perusahaan' => ['required', 'string', 'max:255'],
            'deskripsi_perusahaan' => ['required', 'string', 'max:255'],
            'website_perusahaan' => ['required', 'string', 'max:255'],
            'logo' => ['required', 'image', 'max:5120', 'file'],
            'gedung' => ['required', 'image', 'max:5120', 'file'],

            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
        ])->validateWithBag('updateProfileInformation');

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'nama_admin' => $input['nama_admin'],
                'nama_perusahaan' => $input['nama_perusahaan'],
                'telp_perusahaan' => $input['telp_perusahaan'],
                'alamat_perusahaan' => $input['alamat_perusahaan'],
                'deskripsi_perusahaan' => $input['deskripsi_perusahaan'],
                'website_perusahaan' => $input['website_perusahaan'],
                'logo' => $input['logo']->move('img/lowongan/', $input['logo']->getClientOriginalName()),
                'gedung' => $input['gedung']->move('img/lowongan/', $input['gedung']->getClientOriginalName()),
                'email' => $input['email'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'nama_admin' => $input['nama_admin'],
            'nama_perusahaan' => $input['nama_perusahaan'],
            'telp_perusahaan' => $input['telp_perusahaan'],
            'alamat_perusahaan' => $input['alamat_perusahaan'],
            'deskripsi_perusahaan' => $input['deskripsi_perusahaan'],
            'website_perusahaan' => $input['website_perusahaan'],
            'logo' => $input['logo']->move('img/lowongan/', $input['logo']->getClientOriginalName()),
            'gedung' => $input['gedung']->move('img/lowongan/', $input['gedung']->getClientOriginalName()),
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
