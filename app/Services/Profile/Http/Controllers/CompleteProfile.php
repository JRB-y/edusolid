<?php
namespace App\Services\Profile\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('profile::complete-profile')->with('user', $this->profile);
    }

    public function submitLevel(Request $request)
    {

        // Check the user role to know which one to update the level fields
        // $user = request()->user()->role_id == 2 ? request()->user()->student : request()->user()->tutor;

        $user = request()->user();
        $user->myRole()->update([
            'level_id' => $request->level,
            'section_id' => $request->section,
            'year_id' => $request->year,
            'type_id' => $request->type,
            'profile_completed' => 1
        ]);

        /*
            $level = $request->level;
            $section = $request->section;
            $year = $request->year;
            $type = $request->type;

            $user->level_id = $level;
            $user->year_id = $year;
            $user->section_id = $section;
            $user->type_id = $type;
        */

        return response()->json([
            'user' => $user,
            'success' => 'Votre niveau est enregistré avec success !'
        ], 201); // Status code here

    }
}