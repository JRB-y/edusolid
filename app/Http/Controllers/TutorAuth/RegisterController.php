<?php

namespace App\Http\Controllers\TutorAuth;

use App\User;

use App\Http\Controllers\Controller;
use App\Services\Tutor\Models\Tutor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        
        $user = User::create([
            'name' => $data['name'],
            'prenom' => $data['prenom'],
            'role_id' => 1,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Tutor::create([
            'user_id' => $user->id,
        ]);

        return $user;
    }

}
