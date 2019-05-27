<?php
namespace App\Services\Profile\Http\Controllers;

use App\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompleteProfile extends Controller{

    public function completeProfileFormStep1()
    {
        $this->profile = request()->user();
        return view('profile::completeProfile-step1')->with('profile', $this->profile);
    }

    public function validateStep1(Request $request)
    {
        $user = $request->user();
        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->student->level_id = $request->level_id;
        $user->student->profile_completed = true;
        $user->student->save();
        $user->save();

        return redirect('/dashboard');
    }
}