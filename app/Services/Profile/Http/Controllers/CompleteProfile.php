<?php
namespace App\Services\Profile\Http\Controllers;

use App\Services\Profile\Profile;
use App\Http\Controllers\Controller;

class CompleteProfile extends Controller{

    protected $profile;

    /**
     * completeProfile
     * return the view to complete a profile: it's a Vue js component inside a blade template
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function completeProfile()
    {
        $this->profile = request()->user();
        $profile = new Profile($this->profile);
        return view($profile->completeProfilePath)->with('profile', $this->profile);
    }
}